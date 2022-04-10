<?php
$host="localhost";
$database="music_project";
$login="root";
$password="";
$tblusers="user";
$tblsongs="songs";
$port;

// I am connecting to mysql server
$conn= mysqli_connect($host,$login,$password,$database);

if (!$conn){
  $errno = mysqli_connect_errno();
  $errmsg = mysqli_connect_error();
  die("Connect Failed with: ($errno) $errmsg<br/>\n");
}
?>