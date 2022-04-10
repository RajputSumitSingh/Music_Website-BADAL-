<?php
$page_title = "User Dashboard";
include 'include/header.php';
include 'include/database.php'
?>
<div class="container ">

<ul class="breadcrumb">
			<!--<li><a href="index.php">Home</a></li>-->
			<li class="active">Dashboard</li>
      <li>&nbsp;/&nbsp;</li>
		</ul>

    <!-- search bar -->
    <div class="row">
  <div class="col-sm-4 col-sm-offset-8">
    <form action="searchsong.php" method="get" class="form-inline search-form" role="form">
      <!-- <div class="input-group-prepend">
        <label class="sr-only" for="songSearch">Search Songs</label>
        <div class="input-group-addon"><i class="fa fa-search fa-lg"></i></div>
        <input type="text" name="song" placeholder="Search" id="songSearch button-addon2" class="form-control"/>
      </div>
      <div class="input-group-append">
      <button type="submit" class="btn btn-primary">Go!</button>
      </div> -->

      <div class="input-group mb-3">
  <input type="text" name="song" class="form-control" placeholder="Search songs" id="songSearch" aria-label="Searchsongs" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-success btn-dark" type="submit" id="button-addon2">Search</button>
  </div>
</div>
    </form>
  </div>
</div>
 
  
<div id="carouselExampleControls" class="carousel slide inner-carousel" data-ride="carousel">
  <div class="carousel-inner ">
    <div class="carousel-item active ">
      <img src="assets\img\pexels-mark-angelo-1587927.jpg" class="d-block w-100 tales" alt="music">
    </div>
    <div class="carousel-item">
      <img src="assets\img\pexels-wendy-wei-1190298.jpg" class="d-block w-100 tales" alt="music">
    </div>
    <div class="carousel-item">
      <img src="assets\img\pexels-pixabay-164829.jpg" class="d-block w-100 tales" alt="music">
    </div>
    <div class="carousel-item ">
      <img src="assets\img\pexels-stephen-niemeier-63703.jpg" class="d-block w-100 tales" alt="music">
    </div>
    <div class="carousel-item">
      <img src="assets\img\pexels-vishnu-r-nair-1105666.jpg" class="d-block w-100 tales" alt="music">
    </div>
    <div class="carousel-item">
      <img src="assets\img\pexels-everson-mayer-1481309.jpg" class="d-block w-100 tales" alt="music">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<?php

  $query_str="SELECT * FROM songs";
  $result = $conn->query($query_str);
  //Handle selection errors
if (!$result) {
	$errno = $conn->errno;
	$errmsg = $conn->error;
	echo "Selection failed with: ($errno) $errmsg<br/>\n";
	$conn->close();
	exit;
}else { //display results in a table  
?>

 <div class="container">
   


<h1 class="text-center">BADAL-Music</h1>
<hr>


  <?php
  $i = 0;
  while ( $result_row = $result->fetch_assoc() ) :
    $i++;
    if ($i == 1) :
      ?>
    <div class="row">
    <?php endif; ?>
    <div class="col-sm-6 col-md-6 col-xl-3 mt-3 flex ">
        <div class="container glow p-0">
          <div class="text-center card-body p-0">
            <a href="play_song.php?id=<?php echo $result_row['id']?>">
              <img class="round-corner" src="<?php echo $result_row['song_image'] ?> " no-repeat width="100%" height="160" />
            </a>
          </div>
          <div class="container music-linkcolor">
          <h5 class="text-center ">
            <?php
            echo "<a href='play_song.php?id=" . $result_row['id'] . "'>", $result_row['song_name'], "</a>";
            ?>
          </h5>
          
          
        </div>
    </div>

    <?php
          if($role==1)
          echo "<a href='delete_songs.php?id=" . $result_row['id'] . "'><button class='btn btn-danger' type='submit' >delete song</button></a>";
    ?>

    </div>
    <?php if ($i == 4) : ?>
    </div>
    <?php $i=0; endif; endwhile; ?>
</div>
<?php
// clean up result sets when we're done with them!
$result->close();
}
echo '</div>';

// close the connection.
$conn->close();

include ('include/footer.php');
?>