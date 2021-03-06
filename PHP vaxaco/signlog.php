<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login/SignUp</title>
    <link rel="stylesheet" type="text/css" href="./../static/css/styles1.css">
</head>
<body>
<div class="sign">
    <div class="container" id="container">
    <div class="form-container sign-up-container">
        <form method="post" action="">
            <h1 style="font-family:'Montserrat',sans-serif">Create Account</h1>
            <br>
            <input type="text" name="username" required="" placeholder="Username" oninvalid="this.setCustomValidity('Username is required')"
                   oninput="setCustomValidity('')" value="<?php echo $username; ?>">
            <input type="email" name="email" required="" placeholder="Email" oninvalid="this.setCustomValidity('Email is required')"
                   oninput="setCustomValidity('')" value="<?php echo $email; ?>">
            <input type="password" id ="password" name="password_1" required="" placeholder="Password" oninvalid="this.setCustomValidity('Password is required')"
                   oninput="setCustomValidity('')">
            <input type="password" id ="confirm_password" name="password_2" required="" placeholder="Confirm Password" oninvalid="this.setCustomValidity('Confirm Password is required')">
            <br> <br>
            <?php include('errors.php'); ?>
            <button type="submit" class="btn" name="reg_user">Register</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form method="post" action="">
            <h1 style="font-family:'Montserrat',sans-serif">Log In</h1>
            <br>
            <input type="text" name="username" required="" placeholder="Username" oninvalid="this.setCustomValidity('Username is required')"
                   oninput="setCustomValidity('')">
            <input type="password" name="password" required="" placeholder="Password" oninvalid="this.setCustomValidity('Password is required')"
                   oninput="setCustomValidity('')">
            <br> <br>
            <?php include('errors.php'); ?>
            <button type="submit" class="btn" name="login_user">Log In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <img src="./../static/images/user/welcome_back.svg" height="300" width="300" style="margin-top:-50px;">
                <h1 style="font-family:'Montserrat',sans-serif">Welcome Back!</h1>
                <p style="font-family:'Montserrat',sans-serif">Log in to continue to your account.</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <img src="./../static/images/user/sign_in.svg" height="300" width="300" style="margin-top:-50px;">
                <h1 style="font-family:'Montserrat',sans-serif">Hello, Friend!</h1>
                <p style="font-family:'Montserrat',sans-serif">Are you new? Create your account here!</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });
    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
</body>
</html>