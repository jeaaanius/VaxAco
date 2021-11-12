<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
        body{
            font-family:Montserrat,sans-serif;
        }
    </style>
</head>
<body>
<?php
session_start();

$username = "";
$email    = "";
$errors = array();
/*          INSERT THIS IN SQL QUERY WHEN CREATING TABLES FOR DATABASE(swars)

CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` date NOT NULL,
 `email` varchar(255) NOT NULL,
 `password` VARCHAR(255) NOT NULL,
 `membership` varchar(255) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8

*/

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    if ($password_1 != $password_2) {
        array_push($errors, "");
        echo '<script type="text/javascript">swal("ERROR", "Passwords do not match", "error");</script>';
    }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email

    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);


    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "");
            echo '<script type="text/javascript">swal("ERROR", "Username already exists!", "error");</script>';
        }

        if ($user['email'] === $email) {
            array_push($errors, "");
            echo '<script type="text/javascript">swal("ERROR", "Email already exists!", "error");</script>';
        }
        if ($user['username'] === $username && $user['email'] === $email) {
            array_push($errors, "");
            echo '<script type="text/javascript">swal("ERROR", "Username and Email already exists!", "error");</script>';
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database

        // Type of Membership: basic, member, admin

        $query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['register'] = "";
        echo '<script type="text/javascript">swal("Success!", "You have successfully registered!", "success");</script>';
    }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "";
            header('location: Navigation.php');
        }else {
            array_push($errors, "");
            echo '<script type="text/javascript">swal("ERROR", "Wrong username/password combination!", "error");</script>';
        }
    }
}

?>
</body>
</html>
