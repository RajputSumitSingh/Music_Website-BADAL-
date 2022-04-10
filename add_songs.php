<?php
$page_title = "Add songs";
include 'include/header.php';


if(isset( $_GET['ls'] ) ) {
  $status = $_GET['ls'];
  if($status==1){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Upload!</strong> You Successfully uploaded song.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  if($status==2){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Alert!</strong>you having connection problem.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }


}

?>

<div class="container ">
	<ul class="breadcrumb">
			<li><a href="logindashboard.php">Dashboard</a></li>
      <li>&nbsp; / &nbsp;</li>
			<li class="active">Add songs</li>
		</ul>
</div>


<!-- audio upload -->

<div class="col-xs-8 col-xs-offset-2">
  <h1 class="text-center">Upload</h1>
<form method='post' action='process_song.php' enctype='multipart/form-data'>

<div class="form-group">
    <label for="exampleInputName">Enter name of song</label>
    <input type="text" class="form-control" id="exampleInputName" aria-describedby="name" name="song_name" required placeholder="Song name">
    <small id="name" class="form-text text-muted">Songs name should be smaller in length.</small>
  </div>

<div class="form-group">
<label for="exampleFormControlFile1">upload image for music</label>
 <input type="file" id="file exampleFormControlFile1" multiple class="form-control-file" required name="song_image">
 <small><i>Don't leave it blank</i></small>
</div>

<div class="form-group">
<label for="exampleFormControlFile2">upload the music</label>
 <input type="file"  id="file exampleFormControlFile2" multiple class="form-control-file" required name="song" >
 <!-- name="file[]" -->
</div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">About song</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required placeholder="Enter some line about the song" name="about_song"></textarea>
  </div>

<div class="form-group mt-3">
 <input type='submit' class="btn btn-success" name='submit' value='Upload'>
<input class="btn btn-primary" type="reset" value="Reset">
</div>
</form>
</div>

<?php
include 'include/footer.php';
?>