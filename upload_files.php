<?php
include 'include/header.php';
?>

<div class="container ">
	<ul class="breadcrumb">
			<li><a href="logindashboard.php">Dashboard</a></li>
      <li>&nbsp; / &nbsp;</li>
			<li class="active">Add songs</li>
		</ul>
</div>

<div class="col-xs-8 col-xs-offset-2">
<form method='post' action='upload_php_file.php' enctype='multipart/form-data'>
<div class="form-group">
<label for="exampleFormControlFile">upload image to user carousel</label>
 <input type="file" name="file[]" id="file exampleFormControlFile1" multiple class="form-control-file">
 <small class="form-text text-muted"><i>max 5 images should be upload </i></small>
 
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