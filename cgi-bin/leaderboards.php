<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <title>Adytum | Leaderboards</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../src/playerdata.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <link rel="stylesheet" type="text/css" href="../css/room.css">
    <link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="../css/dropdown.css">

</head>
<body >

<nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="navbar-brand" href="#">
                    <img src="../images/logo.png" height="30" class="d-inline-block align-top" alt="">
                </a>
            </li>
            <li class="nav-item">
                <a href="../views/index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="play()">Room</a>
            </li>
            <li class="nav-item">
                <a href="../cgi-bin/leaderboards.php" class="nav-link">Leaderboard</a>
            </li>
            <li class="nav-item">
                <a href="../views/FAQ.html" class="nav-link">FAQ</a>
            </li>
            <li class="nav-item">
                <a href="../views/about.html" class="nav-link">About</a>
            </li>
        </ul>

        <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php
                        if($_SESSION['username'] != NULL){
                            echo $_SESSION["username"];
                        }
                        else{
                            echo "Anonymous";
                        } ?>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <form action = "../cgi-bin/linout.php" method = "POST">
                        <input type="submit" id = "login-logout-button" class ="no-button" name = "login-logout-btn" value = "<?php if($_SESSION['username'] == NULL){
    echo 'Login';
}
else{
    echo 'Logout';
} ?> ">
                    </form>                  
                </div>
        </div>
</nav>
    <br><br>
    <div class = "leaderboards">
    <?php 
        include_once('connect/mysqli_connect.php');
        $query = "SELECT * from leaderboards ORDER BY time_taken ASC LIMIT 10;";
        
        $result  = mysqli_query($dbc,$query); // First parameter is just return of "mysqli_connect()" function
        echo "<br>";
        echo "<table class = 'leaderboards-table'>";
        echo "<th>Username</th>";
        echo "<th>Time_taken</th>";
        
        while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
            echo "<tr>";
            foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
                echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
            }
            echo "</tr>";
        }
        echo "</table>";

        
    ?>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="../src/home.js"></script>
</body>
</html>
