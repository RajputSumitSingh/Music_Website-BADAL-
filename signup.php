<?php

$page_title = "signup new user";

include 'include/header.php';
include 'signupregister.php';

?>
<div class="container ">
	<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
      <li>&nbsp; / &nbsp;</li>
			<li class="active">Sign-up</li>
		</ul>
</div>
<div class="container form-group mt-4">
  <div class="container mb-3 d-flex justify-content-center p-3">
  <span class="sign-up-heading">Signup for free to start listening the BADAL Music</span>
  </div>
<form  class="form-horizontal" role="form" action="signup.php" method="POST" enctype="multipart/form-data">
  
    <!-- <div class="container border padding-signup"> -->
   
<div class="form-group mb-3">
 <label for="exampleInputusername">Username</label></td>
   <input type="text" class="form-control required" id="exampleInputusername" name="username" aria-describedby="userHelp" placeholder="Enter Username" required>
  
  </div>
  <div class="form-group mb-3">
  <label for="exampleInputfullname">What Should We Call You</label>
  <input type="text" class="form-control required" id="exampleInputfullname" name="fullname" aria-describedby="fullnameHelp" placeholder="Enter Full Name" required>
  </div>
  <div class="form-group mb-3">
    <label for="Radios">Enter Your Gender</label>
    <div class="row" id="Radios">
      <div class="form-check ml-3">
  <input class="form-check-input " type="radio" name="gender" id="exampleRadios1" value="Male">
  <label class="form-check-label" for="exampleRadios1" required>
    Male
  </label>
      </div>
    <div class="form-check ml-3">
  
  <input class="form-check-input " type="radio" name="gender" id="exampleRadios2" value="Female">
  <label class="form-check-label" for="exampleRadios2">
    Female
  </label>
    </div>
    <div class="form-check ml-3">
<input class="form-check-input" type="radio" name="gender" id="exampleRadios3" value="Others">
<label class="form-check-label" for="exampleRadios3">
    Others
  </label>
    </div>
    </div>
  </div>
  <div class="form-group mb-3">
  <label for="exampleInputEmail">Email address</label>
   <input type="email" class="form-control required" id="exampleInputEmail" placeholder="abc@gmail.com" name="email" aria-describedby="emailHelp" required>
    
  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    
  </div>
  <div class="form-group mb-3">
 <label for="Password1">Password</label>
    <input type="password" class="form-control required" placeholder="Password" name="password1" id="Password1" required>
  </div>

  <div class="form-group mb-3">
    <label for="Password2" class="sr-only">Password</label>
    <input type="password" class="form-control required " id="Password2" name="password2" placeholder="Confirm Password" required>
  </div>


  <div class="form-group form-check mb-3">
 <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <small><label class="form-check-label" for="exampleCheck1">Share my registration data with BADAL content providers for marketing purposes.</label></small>
  </div>
  <div class="col-sm-offset-2 col-sm-10">
  <button type="submit" class="btn btn-success">Sign up</button> 
  </div>
</form>

</div>

<?php
include 'include/footer.php';
?>