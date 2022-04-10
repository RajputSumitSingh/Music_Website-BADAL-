<?php
$page_title ='update your profile';
require_once ('include/header.php');
require_once ('include/database.php');


//retrieve user id
$user_id = $id;

//define the select statement
$query_str = "SELECT * FROM user WHERE user_id=" . $user_id;
// $review_str = "select review_content, review_id, review_rating, movie_name, movie_id from reviews join movies on reviews.review_movie_id=movies.movie_id where reviews.review_user_id=" . $user_id;

//execute the query
$result = $conn->query($query_str);
// $review_result = $conn->query($review_str);



//retrieve the results
$result_row = $result->fetch_assoc();



//Handle selection errors
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
			<li>&nbsp;/&nbsp;</li>
			<li class="active"><?php echo $name.' profile'?></li>
		</ul>
		<div class="row">
			<div class="col-sm-12 col-sm-offset-2">
				<h1 class="text-center text-success">Hi <?php echo $name; ?>!</h1>
				<p class="lead text-center">Welcome to your Profile! Here you can edit your information.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-sm-offset-2">
				<form name="edituser" class="form-horizontal" role="form" action="updateprofile.php" method="get" enctype="text/plain">
					<input type="hidden" name="id" value="<?php echo $result_row['user_id']; ?>"/>
					<div class="form-group">
						<label for="newUserName" class="col-sm-2 control-label">Username</label>
						<div class="col-sm-12">
							<input type="text" class="form-control" id="newUserName" name="username" value="<?php echo $result_row['user_name']; ?>" required>
						</div>
					</div>
					<div class="form-group">
						<label for="newName" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-12">
							<input type="text" class="form-control" id="newName" name="name" value="<?php echo $result_row['user_full_name']; ?>" required>
						</div>

            <div class="form-group mb-3 col-sm-12 mt-2">
    <label for="Radios" >Enter Your Gender</label>
    <div class="row" id="Radios">
      <div class="form-check ml-3 ">
  <input class="form-check-input " type="radio" name="gender" id="exampleRadios1" value="Male" <?php if($result_row['user_gender']=='Male'){?> checked <?php }?>>
  <label class="form-check-label" for="exampleRadios1" required>
    Male
  </label>
      </div>
    <div class="form-check ml-3">
  
  <input class="form-check-input " type="radio" name="gender" id="exampleRadios2" value="Female" <?php if($result_row['user_gender']=='Female'){?> checked <?php }?>>
  <label class="form-check-label" for="exampleRadios2">
    Female
  </label>
    </div>
    <div class="form-check ml-3">
<input class="form-check-input" type="radio" name="gender" id="exampleRadios3" value="Others" <?php if($result_row['user_gender']=='Others'){?> checked <?php }?>>
<label class="form-check-label" for="exampleRadios3">
    Others
  </label>
    </div>
    </div>
  </div>

					</div>
					<div class="form-group">
						<label for="newEmail" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-12">
							<input type="email" class="form-control" id="newEmail" name="email" value="<?php echo $result_row['user_email']; ?>" required>
						</div>
					</div>
					<div class="form-group">
						<label for="newPassword" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-12">
							<input type="password" class="form-control" id="newPassword" name="password" value="<?php echo $result_row['user_password']; ?>" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10 mt-4">
							<a href="javascript:document.edituser.submit()" class="btn btn-success">UPDATE</a>
							<a class="btn btn-danger" href="deleteuser.php?id=<?php echo $result_row['user_id'] ?>">DELETE ACCOUNT</a>
						</div>
					</div>
				</form>
			</div>
		</div>
    <?php
}
echo '</div>';
include ('include/footer.php');
?>