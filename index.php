<?php
$page_title='WELCOME TO BADAL';

include_once 'include/header.php';

?>
<div class="container-fluid p-0">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img src="assets\img\pexels-kaboompics-com-6320.jpg" class="d-block w-100  index-css" alt="music">
      <div class="carousel-caption d-none d-md-block">
        <h5 >BADAL forever</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
      </div>
    <div class="carousel-item">
      <img src="assets\img\pexels-everson-mayer-1481309.jpg" class="d-block w-100 " alt="music">
      <div class="carousel-caption d-none d-md-block">
        <h5 >world's best songs</h5>
        <p>Lorem ipsum dolor sit amit, consectetur adipiscing elit.</p>
      </div>
      </div>
    <div class="carousel-item">
      <img src="assets\img\pexels-wendy-wei-1190298.jpg" class="d-block w-100 " alt="music">
      <div class="carousel-caption d-none d-md-block">
        <h5 >Hip Hop hit</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
      </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
</div>

<div class="container mt-4">
  <div class="row">
    
      <?php
      $music_pic= array(
        "assets\img\pexels-burst-373945.jpg"=>"listen the best sontg",
        "assets\img\pexels-elviss-railijs-bitāns-1389429.jpg"=>"there is the best songs",
        "assets\img\pexels-josh-sorenson-995301.jpg"=>"In a badal you can listen the powerful songs",
        "assets\img\pexels-marcelo-chagas-1876279.jpg"=>"ther is the ocean of the sangeet"
      );
      foreach($music_pic as $link=>$name){
        
        ?>
        
        <div class="col-lg-3  col-md-6 col-sm-6 justify-content-center d-flex">
  <div class="card mt-4" style="width: 18rem;">
  <img src="<?php  echo "$link" ?> " class="card-img-top" alt="MUSIC">
  <div class="card-body">
    <p class="card-text text-center"><?php echo" $name" ?></p>
  </div>
  </div>
</div>
  <?php 
  }
      ?>
        </div>
        </div>

<div class="container mt-5">
<div class="templates container border p-5">

<h1 style="text-align:center">It's free to use</h1>
<br>
<h1 style="text-align:center">No Money required.</h1>
</div>
</div>


<?php
include_once("include/footer.php");
?>