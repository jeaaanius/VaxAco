<?php

$db = mysqli_connect('localhost', 'root', '', 'bookingcalendar');

$bookings = mysqli_query($db, 'SELECT * FROM bookings');
$count = mysqli_num_rows($bookings);

$g = 0;
$customers = 0;

$names = array();
$date_time = array();
$guest = array();
$numbers = array();
$ids = array();

while ($row = $bookings->fetch_assoc()) {
    array_push($names, $row['name']);

    $date = $row['date'];
    $time = $row['timeslot'];
    $num = $row['contact'];


    array_push($ids, $row['id']);
    $num = ($num == NULL) ? "091234567890" : $num;
    array_push($numbers, $num);

    $dt = $date . ' - ' . $time;

    array_push($date_time, $dt);

    $ge = $row['guest'];
    $ge = ($ge == NULL) ? 5 : $ge;
    array_push($guest, $ge);

    $customers += $ge;
}


function deleteBookings($qId) {
    $conn = new mysqli('localhost', 'root', '', 'bookingcalendar');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $q_params = "DELETE FROM bookings WHERE id=$qId";
    
    if($conn->query($q_params) === TRUE) {
        echo '<script type="text/javascript">if(!swal("Success!", "Record Successfully Deleted!", "success"));{
            window.location.href("admin.php") 
        }</script>';
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    // palagyan ng modal 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> S-WARS Admin Page </title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="admin_styles.css">
</head>
<body>
    <input type="checkbox" id="nav-toggle">

    <div class="sidebar">
        <div class="sidebar-brand">
            <h2> <span class="las la-utensils"></span> <span>S-WARS</span> </h2>
        </div>      <!-- sidebar-brand -->

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"> <span class="las la-home"></span>
                        <span>Dashboard </span></a>
                </li>
                <li>
                    <a style="margin-top:300px;" href="notification.php?logout='1'" onclick="return confirm('Are you sure you want to logout?')"><span class="las la-arrow-circle-left"></span>
                        <span>Log Out</span></a>
                </li>
            </ul>
        </div>      <!-- sidebar-menu -->
    </div>      <!-- sidebar -->

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span style="cursor:pointer" class="las la-bars"></span>
                </label>      <!-- header-title -->

                Dashboard
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search bookings here...">
            </div>      <!-- search-wrapper -->

            <div class="user-wrapper">
                <img src="pics/admin.png" width="40px" height="40px">
                <div>
                    <h4> Jean Limbo </h4>
                    <small> Admin </small>
                </div>
            </div>      <!-- user-wrapper -->
        </header>

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1> <?php echo $count; ?> </h1>
                        <span> Active Bookings </span>
                    </div>      <!-- Active Booking -->
                    <div>
                        <span class="las la-book"></span>
                    </div>
                </div>      <!-- card-single -->

                <div class="card-single">
                    <div>
                        <h1> <?php echo $customers; ?> </h1>
                        <span> Customers </span>
                    </div>      <!-- Customers -->
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>      <!-- card-single -->
            </div>      <!-- cards -->

            <div class="recent-grid">
                <div class="bookings">
                    <div class="card">
                        <div class="card-header">
                            <h3> Bookings </h3>

                            <button> See all <span class="las la-arrow-right"></span></button>
                        </div>      <!-- card-header -->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="myTable">
                                    <thead>
                                        <tr>
                                            <td> Name </td>
                                            <td> Date / Time </td>
                                            <td> Number of Guests </td>
                                            <td> Status </td>
                                            <td> Action </td>
                                        </tr>
                                    </thead>       <!-- headings for table -->

                                    <tbody>
                                
                                        <?php
                                           for ($i = 0; $i < $count; $i++) {
                                        ?>
                                                <tr>
                                                    <td> <?php echo $names[$i]; ?> </td>
                                                    <td> <?php echo  $date_time[$i] ?> </td>
                                                    <td> <?php echo  $guest[$i] ?> Guest/s </td>
                                                    <td>
                                                        <span class='status green'></span>Ongoing
                                                    </td>
                                                    <td>
                                                            <form action="admin.php" method="get">
                                                            <?php

                                                                echo "
                                                                    <button style='cursor:pointer;padding:8px;font-size:12px;border-radius:4px;background-color:#f15f2a;color:white;border:none
                                                                        'name='del_button' onclick='return confirm(`Are you sure you want to delete?`)' value='$ids[$i]'>DELETE
                                                                    </button>
                                                                ";
                                                            ?>
                                                               
                                                            </form>

                                                     </td>
                                                    </tr>


                                        <?php
                                            }

                                            if(isset($_GET['del_button'])) {
                                                deleteBookings($_GET['del_button']);                                            
                                            }


                                            

                                           
                                        ?>
                                    </tbody>       <!-- booking summary for the day -->
                                </table>
                            </div>      <!-- table-responsive -->
                        </div>      <!-- card-header -->
                    </div>      <!-- card -->
                </div>      <!-- bookings -->

                <div class="contacts">
                    <div class="card">
                        <div class="card-header">
                            <h3> Contacts </h3>
                            <button> See all <span class="las la-arrow-right"></span></button>
                        </div>      <!-- card-header -->
                        
                        <?php
                             for ($i = 0; $i < $count; $i++) { 
                                $contact = $numbers[$i];

                                if ($contact != NULL || $contact != '') {

                                ?>
                                    
                                        <div class='customer'>
                                            <div class='info'>
                                                <div>
                                                    <h4> <?php echo $names[$i] ?> </h4>
                                                    <small> <?php echo $contact ?> </small>
                                                </div>
                                            </div>
                                            <div class='contact'>
                                                <span class='las la-comment'></span>
                                                <span class='las la-phone'></span>
                                            </div>
                                        </div>

                        <?php 
                                }
                                
                             }

                             $current = "2021-03-31 12:00 - 15:00";
                             $future = "2021-02-31 12:00 - 15:00";

                             $temp = strtotime($current);
                             $temp2 = strtotime($future);

                             if ($temp < $temp2) {
                                echo "Yes";
                             } else {
                                echo "No";
                             }
                        ?>
                        <!-- contact person booking -->

                        
                    </div>      <!-- card -->
                </div>      <!-- contacts-card -->
            </div>      <!-- recent-grid-->
        </main>
    </div>      <!-- main-content -->
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>
</html>