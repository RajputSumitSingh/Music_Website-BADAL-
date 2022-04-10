<?php
$page_title = "Login";

include 'include/header.php';

if( isset( $_GET['ls'] ) ) {
  $status = $_GET['ls'];

  if ($status == 1) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
           <strong>Alert ! </strong> Your Username or Password is incorrect.
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>';

  }
  if($status==2){
    echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Alert ! </strong> Please enter Username and Password
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
  }
}

?>



<div class="container ">
	<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
      <li>&nbsp; / &nbsp;</li>
			<li class="active">Login</li>
		</ul>
</div>

<div class="container p-3" >
<div class=" container d-flex justify-content-center sign-up-heading">
  <strong>User Authentication</strong>
</div>


<div class="login p-3">

<form name="loginform" class="form-horizontal" role="form" action="login.php" method="POST" enctype="multipart/form-data">
  <div class="form-group mt-3">
    <label for="exampleInputlogin">User name</label>
    <input type="text" class="form-control" id="exampleInputloign" aria-describedby="loginHelp" name="login" required>
    <small id="loginHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
  </div>
  <div class="form-group mt-3">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="loginpassword" required>
  </div>
  <div class="form-group form-check mt-2">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="form-group mt-3 mb-3">

  <button type="submit" class="btn btn-success btn-md btn-block">Login</button>
  </div>
</form>
</div>
</div>

<!-- <script>
function validateForm() {
  var x = document.forms["loginform"]["login"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script> -->

<?php
include 'include/footer.php';
?>