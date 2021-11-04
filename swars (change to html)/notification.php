<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: signlog.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: signlog.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
        .swal-title{
            font-family:Montserrat,sans-serif;
        }
    </style>
</head>
<body>
<!-- notification message login successful -->
<?php if (isset($_SESSION['success'])) : ?>
           <script type="text/javascript">if(!swal("Login Success!", "You have successfully logged in.", "success"));{
            window.location.href("Navigation.php")
        }</script>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <p style="color:#fff">WELCOME&nbsp;&nbsp; <strong><?php echo $_SESSION['username']; ?>!</strong></p>
    <?php endif ?>
</body>
</html>