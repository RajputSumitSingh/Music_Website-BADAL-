<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets\css\fontawsome\fontawsome.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>music dashboard!</title>
  </head>
  <body>
  <div class="main">
  	<p id="logo"><i class="fa fa-music"></i>Music</p>
    
    <!--- left part --->
     <div class="left">

      <!--- song img --->
      <img id="track_image">
         <div class="volume">
            <p id="volume_show">90</p>
            <i class="fa fa-volume-up" aria-hidden="true" onclick="mute_sound()" id="volume_icon"></i>
            <input type="range" min="0" max="100" value="90" onchange="volume_change()" id="volume">  
         </div>

     </div>
 

     <!--- right part --->
  	 <div class="right">

        <div class="show_song_no">
          <p id="present">1</p>
          <p>/</p>
          <p id="total">5</p>
        </div>

       <!--- song title & artist name --->
      <p id="title">title.mp3</p>
      <p id="artist">Artist name</p>

      <!--- middle part --->
  	 	<div class="middle">
  	       <button onclick="previous_song()" id="pre"><i class="fa fa-step-backward" aria-hidden="true"></i></button>
      	   <button onclick="justplay()" id="play"><i class="fa fa-play" aria-hidden="true"></i></button>
  	       <button onclick="next_song()" id="next"><i class="fa fa-step-forward" aria-hidden="true"></i></button>
  	   </div>

       <!--- song duration part --->
        <div class="duration">
           <input type="range" min="0" max="100" value="0" id="duration_slider" onchange="change_duration()">
        </div>
           <button id="auto" onclick="autoplay_switch()">Auto play <i class="fa fa-circle-o-notch" aria-hidden="true"></i></button>
  	</div>


  </div>

   <!--font awsome-->
  <script src="script/fontawsome.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    
  </body>
</html>

   
  <!--- Add javascript file --->
  
 