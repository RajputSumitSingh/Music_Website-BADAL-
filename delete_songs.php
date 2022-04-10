<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$page_title = "Delete song";

require_once ('include/header.php');
require_once('include/database.php');


$song_id = $_GET['id'];

//the delete statement
$query_str = "DELETE FROM songs WHERE id = '" . $song_id . "'";



$result = $conn->query($query_str);


if (!$result) {
  $errno = $conn->errno;
  $errmsg = $conn->error;
  echo "Selection failed with: ($errno) $errmsg<br/>\n";
  $conn->close();
  exit;
}
?>
 

<div class="container wrapper">
  <div class="h1 text-danger text-center">Song has been deleted.</div>
</div>

<?php
// close the connection.
$conn->close();
header( "Refresh:3; url=logindashboard.php", true, 303);
include ('include/footer.php');
?>