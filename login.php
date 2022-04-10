<?php

//including page from database
$role=2;
require_once 'include/database.php';
//include 'include/header.php';


$login='';
$loginpassword='';
$incorrect_pass=1;
$enterusername=2;
if ( isset($_POST['login']) )
    $login = trim($_POST['login']);
if ( isset($_POST['loginpassword']) )
    $loginpassword= trim($_POST['loginpassword']);

if (!empty($login)) {
    //The SQL select statement
    $query_login= "SELECT * FROM user WHERE user_name='$login' AND user_password='$loginpassword'";

    //Execute the query
    $result = @$conn->query($query_login);
    if($result -> num_rows){
        //It is a valid user. Need to store the user in Session Variables
        @session_start();
        $_SESSION['login'] = $login;
        $result_row = $result->fetch_assoc();
        $_SESSION['role'] = $result_row['user_role'];
        $_SESSION['name'] = $result_row['user_full_name'];
        $_SESSION['id'] = $result_row['user_id'];
        $_SESSION['gender']=$result_row['user_gender'];
        $_SESSION['email']=$result_row['user_email'];

        //update the login status
        $_SESSION['login_status'] = 1;

        // echo 'you are valid user<br>';

        // echo  $_SESSION['role'].'<br>'.
        // $_SESSION['name'].'<br>'.
        // $_SESSION['id'] .'<br>'.
        // $_SESSION['gender'].'<br>'.
        // $_SESSION['email'];
        header( "Location:logindashboard.php");

    }else{
      header( "Location:loginform.php?ls=$incorrect_pass");
        
//         echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
//         <strong>Alert ! </strong> Your Username or Password is incorrect.
//         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//           <span aria-hidden="true">&times;</span>
//         </button>
//       </div>';
        
    }
    

}else{
  header( "Location:loginform.php?ls=$enterusername");

//     echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
//     <strong>Alert ! </strong> Please enter Username and Password
//     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//       <span aria-hidden="true">&times;</span>
//     </button>
//   </div>';
}

    $conn->close();
    ?>