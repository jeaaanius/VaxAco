<?php session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Payment </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="payment_styles.css"
</head>
<body>
<a href="Navigation.php"><i style="color:black;font-size:30px;margin-left:-500px;padding-top:20px;" class="fa fa-arrow-left"></i></a>
<h2 style="text-align:center;margin-top:-25px;">S-WARS Membership Checkout Form</h2>
<p style="text-align:center;margin-top:0"><?php echo $_SESSION['note'] ?></p><br><br>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="post" action="payment.php">
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label class="custom-field one" for="fname">
            <input type="text" id="fname" name="firstname" required value="John M. Doe">
                <span class="placeholder"> Full Name</span></label>
            <label class="custom-field one" for="email">
            <input type="text" id="email" name="email" required value="john@example.com">
                <span class="placeholder"> Email </span></label>
            <label class="custom-field one" for="adr">
            <input type="text" id="adr" name="address" required value="542 W. 15th Street">
              <span class="placeholder"> Address </span></label>
            <label class="custom-field one" for="city">
            <input type="text" id="city" name="city" required value="New York">
              <span class="placeholder"> City </span></label>

            <div class="row">
              <div class="col-50">
                <label class="custom-field one" for="state">
                <input type="text" id="state" name="state" required value="NY">
                  <span class="placeholder"> State</span></label>
              </div>
              <div class="col-50">
                <label class="custom-field one" for="zip">
                <input type="text" id="zip" name="zip" required value="10001">
                  <span class="placeholder"> Zip </span></label>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:#29272e;"></i>
              <i class="fa fa-cc-amex" style="color:#15aabf;"></i>
              <i class="fa fa-cc-mastercard" style="color:#ff6666;"></i>
              <i class="fa fa-cc-discover" style="color:#ffcc66;"></i>
            </div>
            <label class="custom-field one" for="cname">
            <input type="text" id="cname" name="cardname" required value="John More Doe">
              <span class="placeholder"> Name on Card </span></label>
            <label class="custom-field one" for="ccnum">
            <input type="text" id="ccnum" name="cardnumber" required value="1111-2222-3333-4444">
              <span class="placeholder"> Credit card number </span></label>
            <label class="custom-field one" for="expmonth">
            <input type="text" id="expmonth" name="expmonth" required value="September">
              <span class="placeholder"> Exp Month </span></label>
            <div class="row">
              <div class="col-50">
                <label class="custom-field one" for="expyear">
                <input type="text" id="expyear" name="expyear" required value="2018">
                  <span class="placeholder"> Exp Year </span></label>
              </div>
              <div class="col-50">
                <label class="custom-field one" for="cvv">
                <input type="text" id="cvv" name="cvv" required value="352">
                  <span class="placeholder"> CVV </span></label>
              </div>
            </div>
          </div>
        </div>
        <input type="submit" value="<?php echo $_SESSION['button'] ?>" class="btn" name='update'>
      </form>
      <?php
        if(isset($_POST['update'])){
          $db = mysqli_connect('localhost', 'root', '', 'registration');
          $res_username = $_SESSION['username']; ;
          $memberhsip_query = "SELECT membership FROM users WHERE username='$res_username'";
          $result = mysqli_query($db, $memberhsip_query);
          $member = mysqli_fetch_assoc($result);
          if($member['membership']=='basic'){
            $plan = 'member';
          }
          if($member['membership']=='member'){
            $plan = 'basic';
          }
          $update_query = "UPDATE users SET membership='$plan' WHERE username='$res_username'";
          if (mysqli_query($db, $update_query)) {
            echo "<script type='text/javascript'>alert('Membership Plan updated successfully');</script>";
          } else {
            echo "<script type='text/javascript'>alert('Error updating record: '". mysqli_error($db).");</script>";
          }mysqli_close($db);
          echo '<script> location.replace("Navigation.php"); </script>';
        }
      ?>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>1</b></span></h4>
      <p><a style="font-size:15px" href="#"><?php echo $_SESSION['product'] ?></a> <span style="font-size:15px" class="price"><?php echo $_SESSION['price']?></span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b><?php echo substr($_SESSION['price'],0,3) ?></b></span></p>
    </div>
  </div>
</div>

</body>
</html>
