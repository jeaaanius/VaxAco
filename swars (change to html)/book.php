<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'registration');
$res_username =$_SESSION['username'];
$memberhsip_query = "SELECT membership FROM users WHERE username='$res_username'";
$result = mysqli_query($db, $memberhsip_query);


$mysqli = new mysqli('localhost','root','','bookingcalendar');
if(isset($_GET['date'])){
    $date = $_GET['date'];
    $stmt = $mysqli->prepare("select * from bookings where date=?");
    $stmt->bind_param('s',$date);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['timeslot'];
            }
            $stmt->close();
        }
    }
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $guest = $_POST['guest'];
    $contact = $_POST['contact'];
    $timeslot = $_POST['timeslot'];
    $stmt = $mysqli->prepare("select * from bookings where date = ? AND timeslot=?");
    $stmt->bind_param('ss', $date, $timeslot);

    // need naten naka link to sa may acount in order para ma display naten yung 
    // nireserve nya even if ibang email gamit nya or name.

    $account = $_SESSION['username']; 
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            $msg = "<div class='alert alert-danger'>Already Booked</div>";
        }else{
            $stmt = $mysqli->prepare("INSERT INTO bookings (date, name, timeslot, email, guest, contact, account) VALUES (?,?,?,?,?,?,?)");
            $stmt->bind_param('sssssss', $date, $name, $timeslot, $email, $guest, $contact, $account);
            $stmt->execute();
            $msg = "<div class='alert alert-success'>Booking Successful</div>";
            $bookings[] = $timeslot;
            $stmt->close();
            $mysqli->close();
        }
    }
}

$duration = 180;
$cleanup = 0;
$start = "09:00";
$end =  "21:00";

function timeslots($duration, $cleanup, $start, $end){
    $start = new DateTime($start);
    $end = new DateTime($end);
    $interval = new DateInterval("PT".$duration."M");
    $cleanupInterval = new DateInterval("PT".$cleanup."M");
    $slots = array();
    
    for($intStart = $start; $intStart<$end; $intStart->add($interval)->add($cleanupInterval)){
        $endPeriod = clone $intStart;
        $endPeriod->add($interval);
        if($endPeriod>$end){
            break;
        }
        
        $slots[] = $intStart->format("H:iA")." - ". $endPeriod->format("H:iA");
        
    }
    
    return $slots;
}
function checkSlots($mysqli, $date){
    $stmt = $mysqli->prepare("select * from bookings where date = ?");
    $stmt->bind_param('s',$date);
    $totalbookings = 0;
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $totalbookings++;
            }
            $stmt->close();
        }
    }
    return $totalbookings;
}

?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeslot</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
  </head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
    body {
        font-family:Montserrat,sans-serif;
    }
</style>
  <body>
    <div class="container">
        <a href="calendar.php"><i style="color:black;font-size:30px;margin-left:-50px;padding-top:40px;" class="fa fa-arrow-left"></i></a>
        <h1 class="text-center" style="margin-top:-30px;">Book for Date: <?php echo date('M/d/Y', strtotime($date)); ?></h1><hr>
        <div class="row">
            <div class="col-md-12">
            <?php echo(isset($msg))?$msg:""; ?>
            </div>
            <?php $timeslots = timeslots($duration, $cleanup, $start, $end); 
                foreach($timeslots as $ts){
            ?>
            <div class="col-md-2">
                <div class="form-group">
                <?php if(in_array($ts, $bookings)){ ?>
                <button class="btn btn-danger"><?php echo $ts; ?></button>
                <?php }else{ ?>
                <button class="btn btn-success book" data-timeslot="<?php echo $ts; ?>"><?php echo $ts; ?></button>
                <?php }  ?>
                </div>
            </div>
            <?php } ?>
            </div>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Booking for: <span id="slot"></span></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post">
                               <div class="form-group">
                                    <label for="">Time Slot</label>
                                    <input readonly type="text" class="form-control" id="timeslot" name="timeslot">
                                </div>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input readonly required type="text" class="form-control" name="name" value=<?php echo $_SESSION['username']?>>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input required type="email" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="">No. of Guest</label>
                                    <input required type="number" class="form-control" name="guest" min="1" max="5">
                                </div>
                                <div class="form-group">
                                    <label for="">Contact no.</label>
                                    <input required="" type="tel" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" class="form-control" name="contact"  oninvalid="setCustomValidity('Must contain 11-digit number')"
                                           oninput="setCustomValidity('')"">
                                </div>
                                <div class="form-group pull-right">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
    $(".book").click(function(){
        var timeslot = $(this).attr('data-timeslot');
        $("#slot").html(timeslot);
        $("#timeslot").val(timeslot);
        $("#myModal").modal("show");
    });
    </script>
  </body>

</html>