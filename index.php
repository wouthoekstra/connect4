
<!doctype html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link type="text/css" rel="stylesheet" href="style.css" />

<title>Connect 4 - The Game</title>

</head>

<body>
<h2>Connect 4 <img src="./Images/connect4logo.png"></h2>
Player 1 - Red <br/>
Player 2 - Blue <br/>
<?php
//Load our file
require 'ConnectFour.php';
//Instantiate our game
$new_game = new ConnectFour(); 
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>
