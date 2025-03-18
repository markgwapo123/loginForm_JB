<?php

session_start();

$username = $_SESSION['username'];

echo "Welcome, $username!";
include 'list.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="registration.css">
    <title>Document</title>
</head>
<body>
    <br>
<button><a href="registercon.php">Back</a></button>
</body>
</html>