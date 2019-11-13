<?php
include_once('addUser.php');
// include('connect/mysqli_connect.php');
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="../css/login.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <!-- <script src="../src/login.js"></script> -->
</head>

<body>

    <div id="navbar">
        <a href="home.html">Home</a>
        <a href="leaderboard.html">Leaderboard</a>
        <a href="FAQ.html">FAQ</a>
        <a href="about.html">About</a>
        <img src="../images/logo.png" height="45" style="float: right" />
    </div>

    <!-- //username, password, confirm password, email -->
    <form method="POST" action="../cgi-bin/register.php">
        <?php
        include('errors.php');
        ?>

        <div id="reg-screen" class="form-layout">
            <h1>
                <label class="txt-white">Sign up</label>
            </h1>
            <br>
            <label class="txt-white">Username</label>
            <br>
            <input type="text" id="reg-username" name="username" placeholder="Enter a username" class="general-text" value="<?php echo $username; ?>">
            <br><br>

            <label class="txt-white">Email address</label>
            <br>
            <input type="email" id="reg-email" name="email" placeholder="Enter your email address" class="general-text" value="<?php echo $email; ?>">
            <br><br>

            <label class="txt-white">Password</label>
            <br>
            <input type="password" id="reg-password" name="password" placeholder="Create a password" class="general-text">
            <br><br>

            <label class="txt-white">Re-enter Password</label>
            <br>
            <input type="password" id="reg-password-confirm" name="password_confirm" placeholder="Re-enter password" class="general-text">
            <br><br>

            <input type="submit" value="Sign Up" name="submit" class="general-button">
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>