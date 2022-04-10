<?php
require_once 'include/database.php';
//retrieve movie id
$id = $_GET['id'];

//select statement
$query_str = "SELECT * FROM `songs` WHERE id = '" . $id . "'";
//$review_str = "SELECT review_rating, review_content FROM `songs` WHERE reviews.review_movie_id=" . $id . "";


//execute the query
$result = $conn->query($query_str);
//$review_result = $conn->query($review_str);

//Handle selection errors
if (!$result) {
	$errno = $conn->errno;
	$errmsg = $conn->error;
	echo "Selection failed with: ($errno) $errmsg<br/>\n";
	$conn->close();
	exit;
} else { //display results in a table
	//insert a row into the table for each row of data
	$result_row = $result->fetch_assoc();
  $page_title = "Jayrolex: " . $result_row['song_name'];

	require_once ('include/header.php');

 // require ('mysqli_connect.php'); //contains database connection


// $sql="SELECT  sound FROM english WHERE eWord LIKE '%" . $name .  "%' OR kWord LIKE '%" . $name ."%'";

// while($row=mysql_fetch_array($result)){

//    $sound=$row['sound'];
$name=$result_row['song_name'];
$song=$result_row['songs'];
$image=$result_row['song_image'];
$about=$result_row['song_about'];

// echo '<pre>';
// print_r($result_row);

// echo $image;
// echo '</pre>';

//    echo '<audio controls style="background-color:black; color:red">';
//       //echo    '<source src="'.$song.'">';
//       echo    '<source src="'.$song.'">';
//    echo '</audio>';
   ?>
   <div class="container" id="play-container">

   
   <div class="container ">
	<ul class="breadcrumb">
			<li><a href="logindashboard.php">Dashboard</a></li>
      <li>&nbsp; / &nbsp;</li>
			<li class="active">Music-Player</li>
		</ul>
</div>


      <div class="container-flex">
         <h1 class="play-heading"><?php echo $name ?></h1>
   </div>
   <article class="container play-border">
   <img src="<?php echo $image?>" alt="song image" width="100%" height="380">
   </article>
   <div class="container audio-container">
   <audio controls autoplay loop preload>
  <source src="<?php echo $song ?>" type="audio/ogg">
  <source src="<?php echo $song ?>" type="audio/mpeg">
  <source src="<?php echo $song ?>" type="audio/mp3">
</audio>
   </div>


   <div class="container-fluid play-about">
      <h1 class="play-discription">Discription</h1>
   <pre class="play-praragraph"><font size="5"><?php echo $about ?></font></pre>
   </div>
  
   </div>
   <?php
}
require_once 'include/footer.php';
?>