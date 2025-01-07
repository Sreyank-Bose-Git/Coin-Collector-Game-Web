<!DOCTYPE html>

<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Game.css">
    <link rel="icon" href="../../resources/images/favicon.png">
    <title>Game Screen</title>
</head>
<body>
    <button onclick="exitWithSave()" id="exitWithSave" class="button">Exit With Save</button>
    <button onclick="exitWithoutSave()" id="exitWithoutSave" class="button">Exit Without Save</button>
    <button onclick="reset()" id="reset" class="button">RESET</button>
    <div id="counter">
        <h1>Coins Collected: <span id="score">0</span></h1>
    </div>

    <img id="coin" onclick="increaseScore(); changePositionOfCoin();" src="../../resources/images/coin.png" alt="Coin">

    <script src="Game.js"></script>
</body>
</html>