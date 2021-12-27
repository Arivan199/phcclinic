<?php
$servername = 'us-cdbr-east-05.cleardb.net';
$username = 'b0853c579d7b5d';
$password = '3551bcb1';
$db = 'heroku_04551752c2bc552';
// Create connection
$conn =new mysqli($servername,$username,$password,$db);
if(!$conn)
echo 'Connection failed';
?>
