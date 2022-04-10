<?php
//start a new session
session_start();

$page_title = "Add songs";

require_once 'include/header.php';
require_once 'include/database.php';
$success=1;
$conprblm=2;

if(isset($_POST['submit'])){

$song_name= $_POST['song_name'];
$song_image= $_FILES['song_image']['name'];
$songs=$_FILES['song']['name'];
$about=$_POST['about_song'];

echo '<pre>';
 print_r($song_image);
 echo '</pre>';



move_uploaded_file($_FILES['song_image']['tmp_name'],'songs/img/'.$song_image);
$song_image='songs/img/'.$song_image;
move_uploaded_file($_FILES['song']['tmp_name'],'songs/music/'.$songs);
$songs='songs/music/'.$songs;

//define sql statement
$query_str = "INSERT INTO `songs` (`id`, `song_name`, `song_image`, `song_about`, `songs`) VALUES (NULL, '$song_name', '$song_image', '$about', '$songs')";

//execute the query
$result = @$conn->query($query_str);

//handle error
if(!$result) {
  if($role==1){
  $errno = $conn->errno;
  $errmsg = $conn->error;
  echo "Insertion failed with: ($errno) $errmsg<br/>";
  $conn->close();
  exit;
  }else{
    echo '<div class="alert alert-warning" role="alert">
    Something is wrong Please check there is semicolon or inverted comma`s mistake!
  </div>';
  }
}else{
  header("Location:add_songs.php?ls=$success");
}
}else{
  header("Location:add_songs.php?ls=$conprblm");
}
?>