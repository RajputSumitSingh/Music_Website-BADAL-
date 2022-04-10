<?php

//session_start();
$showAlert=false;
$showError=false;

$page_title = "Signup New Account";

require_once 'include/header.php';
require_once 'include/database.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){

$user_name = $_POST['username'];
$full_name = $_POST['fullname'];
$user_gender=$_POST['gender'];
$user_email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$role = 2;

//check whether this username exists;
$existSql= "SELECT * FROM user WHERE user_name='$user_name'";



// //execute the query
$result = $conn->query($existSql);//$conn->query


if(!$result) {
  $errno = $conn->errno;
  $errmsg = $conn->error;
  echo "Insertion failed with: ($errno) $errmsg<br/>\n";
  $conn->close();
  exit;
}


// checking is it present in the rows of sql.
if($result->num_rows != 0) {

echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Error ! </strong> This Username is already exist.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
}else{


  //$exists=false;
  if($password1==$password2){

   $query_insert=" INSERT INTO `user` (`user_id`, `user_name`, `user_full_name`, `user_email`, `user_gender`, `user_password`, `user_role`) VALUES (NULL,'$user_name','$full_name','$user_email','$user_gender','$password1','$role')";

    $insert_result = $conn->query($query_insert);
    if($insert_result){
      echo '<div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Well done!</h4>
      <p>Aww yeah, you successfully Signup. Now you can enjoy our music.</p>
      <hr>
      <a href="index.php"><button type="button">&times;</button></a>
    </div>  ';
      
    }
 
  }
  else{
    echo '
    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
  <strong>ERROR ! </strong> Your entered password is not matching with confirm password.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
}
}else{
 echo mysqli_error($conn);
}
?>
