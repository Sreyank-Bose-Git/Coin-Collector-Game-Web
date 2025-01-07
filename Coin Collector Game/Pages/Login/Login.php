<!DOCTYPE html>

<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <link rel="icon" href="../../resources/images/favicon.png">
    <title>Login Page</title>
</head>
<body>
    <header>
        <div id="HeaderText">
            <h1>This is the Login Page</h1>
        </div>
        <a href="../Home/Home.php">Home</a>
        <a href="../About/About.html">About</a>
    </header>
    <br>
    <main>
        <div>
            <form action="Login.php" method="post" class="large">
                <label for="username">Username:</label>
                <input class="large" type="username" id="username" name="username" 
                       minlength="3" maxlength="10" required placeholder="Sreyank,etc...">
                <br>       
                <label for="password">Password:</label>
                <input class="large" type="password" id="password" name="password"
                       minlength="4" maxlength="15" placeholder="Use A,a,#,%..,1,2.." required>
                <br>
                <input class="large" type="submit" name="login" value="Log In">
            </form>
        </div>
    </main>
    <br>
    <footer>
        <div id="FooterText">
            <h2>Made by Sreyank Bose</h2>
            <h4>&copy; all rights reserved</h4>
        </div>
    </footer>
</body>
</html>

<?php
    if(isset($_POST["login"])) {

        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        header("Location: ../Game/Game.php");
        exit;
    }
?>