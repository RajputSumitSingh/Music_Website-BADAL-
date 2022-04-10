<?php

$page_title = "Search Songs";

require_once ('include/header.php');

require_once('include/database.php');

$name = $_GET['song'];

//select statement
$query_str = "SELECT * FROM $tblsongs WHERE song_name LIKE '%" .$name. "%' OR song_about LIKE '%" .$name. "%'";

//execut the query
$result = $conn->query($query_str);


if (!$result) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    exit;
} else { //display results in a table
    ?>
	<div class="container">
		
		<ul class="breadcrumb">
			<li><a href="logindashboard.php">Dashboard</a></li>
			<!-- <li><a href=".php">Songs</a></li> -->
      <li>&nbsp;/&nbsp;</li>
			<li class="active">Search Result</li>
		</ul>
		
	    <h1 class="text-center">Search Results</h1>
	    
	    <div class="row">
			<div class="col-xs-4 col-sm-offset-10">
				<form action="<?=$_SERVER['PHP_SELF']?>" class="form-inline search-form" method="get" role="form">
					<div class="input-group">
						<label class="sr-only" for="songSearch">Search songs</label>
						<div class="input-group-addon"><i class="fa fa-search fa-lg"></i></div>
						<input type="text" name="song" placeholder="Search" id="songSearch" class="form-control"/>
					</div>
					<button type="submit" class="btn btn-success">Search!</button>
				</form>
			</div>
		</div>
    
    <?php 
    	$num_rows = mysqli_num_rows($result);
    	if ($num_rows == 0) {
    		echo "<div class='container m-5'><p class='lead text-center'>No results found for <strong>". $name . "</strong>. Please search again.</p></div>";
    	} else {
        //insert a row into the table for each row of data
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
    </div>
		<?php if ($i == 4) : ?>
			</div>
		<?php $i=0; endif; endwhile; ?>
		</div>
  <?php
		}
		// clean up resultsets when we're done with them!
    echo '</div>';
	    $result->close();
	}
	
	// close the connection.
	$conn->close();
	
	include ('include/footer.php');