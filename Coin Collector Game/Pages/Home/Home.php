<!DOCTYPE html>

<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Home.css">
    <link rel="icon" href="../../resources/images/favicon.png">
    <title>Home Page</title>
</head>
<body>
    <header>
        <h2>Previous Score: <span id="PS"></span></h2>
        <div id="HeaderText">
            <h1>Welcome to my "Web Game" Website</h1>
        </div>
        <a href="../Login/Login.php">Log In</a>
        <a href="../About/About.html">About</a>
    </header>
    <br>
    <main>
        <div>
            <pre class="large">This is the home page of the game I made.
Hope you enjoy this game.
This is one of my first game websites!</pre>
        </div>
    </main>
    <br>
    <footer>
        <div id="FooterText">
            <h2>Made by Sreyank Bose</h2>
            <h4>&copy; all rights reserved</h4>
        </div>
    </footer>
    <script src="Home.js"></script>
</body>
</html>

<?php
    if(isset($_SESSION["username"])) {
        echo"<header>
        <div id=\"HeaderText\"><h1>Hello {$_SESSION["username"]}</h1></div></header>";
    }
?>