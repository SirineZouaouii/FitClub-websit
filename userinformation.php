<?php

$connection = mysqli_connect('localhost:3306','ZOUAOUI SIRINE','sirinezouaoui01@gmail.com','sirine_phpwebsite');

mysqli_select_db($connection,"youtubedata");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata`(`user`,`email`,`message`) VALUES ('$user','$email','$message') ";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>