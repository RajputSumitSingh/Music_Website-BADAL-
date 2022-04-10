<?php
@session_start();

//number of items in the shopping cart
$count=0;
//include 'database.php';
// retrieve the cart content
// if ( isset ( $_SESSION['cart'] ) ){
// 	$cart = $_SESSION['cart'];

// 	if  ( $cart ) {
// 		$items = explode(',', $cart);
// 		$count = count($items);
// 	}
// }
//checking if the user is login or not
$login='';
$name='';
$email='';
$role=0;
$id=0;
$gender='';
$login_status =0;

if(isset($_SESSION['login'])){
  $login=$_SESSION['login'];
 }
if(isset($_SESSION['name'])){
  $name=$_SESSION['name'];
}
if(isset($_SESSION['email'])){
  $email=$_SESSION['email'];
}
if(isset($_SESSION['role'])){
  $role=$_SESSION['role'];
}
if(isset($_SESSION['id'])){
  $id=$_SESSION['id'];
}
if(isset($_SESSION['gender'])){
  $gender=$_SESSION['gender'];
}
if(isset($_SESSION['login_status'])){
  $login_status=$_SESSION['login_status'];
}

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- icon  -->
    <link rel="icon" type="image/jpg" href="assets\logo\logo_badal.png" sizes="16*16">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- local css  -->
    
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
  

    <title> <?php echo $page_title;?> </title>
  </head>
  <body style='overflow:unset'>

    <nav  class=" navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <div class="container">

  <a class="navbar-brand" href="index.php"><img class="nav-logo" src="assets\logo\BADAL.png" alt="BADAL Music"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item pl-3">
        <a class="nav-link" href="#about">About us</a>
      </li>
      <li class="nav-item pl-3">
        <a class="nav-link" href="#contact">Contact us</a>
      </li>
      <li class="nav-item pl-3">
      <h3>|</h3>
      </li>

      <?php
if($login_status===1)
      {?>
      
      <li class="nav-item pl-3">
        <a class="nav-link" href="useraccount.php"><?php echo 'Welcome '.$name.'!'?></a>
      </li>
      <?php
    }?>

      <?php
      if($login_status!==1){
        ?>
      <li class="nav-item pl-3 active">
        <a class="nav-link" href="signup.php">Sign up<span class="sr-only">(current)</span></a>
      </li>
      <?php
      }
      
      if($login_status!==1)
      {?>
      
      <li class="nav-item pl-3">
        <a class="nav-link" href="loginform.php">Log in</a>
      </li>
      <?php
    }?>
<?php
if($login_status===1)
      {?>
      
      <li class="nav-item pl-3">
        <a class="nav-link" href="logout.php">Log out</a>
      </li>
      <?php
    }?>

<?php
if($role==1 && $login_status===1)
      {?>
      
      <li class="nav-item pl-3">
        <a class="nav-link" href="add_songs.php">Add songs</a>
      </li>
      <?php
    }?>
    

    </ul>
  </div>
</div>

</nav>  
