<?php
session_start();

//destroy the session data on disk
session_destroy();

//delete the session cookie
//setcookie(session_name(), '', time()-3600);

//destroy the $_SESSION array
$_SESSION = array();

$page_title = "Log Out";

include('include/header.php');

?>
<div class="container">
    <ul class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li>&nbsp; / &nbsp;</li>
        <li class="active">Log Out</li>
    </ul>
    <h1 class="text-center">Logged Out</h1>
    <div class="container m-5 p-3">
    <p class="lead text-center text-danger"> Thank you for your visit. You are now logged out.</p>
</div>
</div>

<?php
header( "Refresh:3; url=index.php");
include('include/footer.php');
 ?>