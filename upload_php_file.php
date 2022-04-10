<?php
include 'include/header.php';
include 'include/database.php';


if(isset($_POST['submit'])){
 // Count total files
 $countfiles = count($_FILES['file']['name']);
 if($countfiles< 5){
 
 // Looping all files
 for($i=0;$i<$countfiles;$i++){
  $filename = $_FILES['file']['name'][$i];
 
   // Upload file
 
   move_uploaded_file($_FILES['file']['tmp_name'][$i],'songs/'.$filename);

  $upload_image="INSERT INTO `upload_carousel_inner_image` (`img_id`, `img_name`, `images`) VALUES (NULL, 'upload', '$filename')"; 
   $result=mysqli_query($conn,$upload_image);
   if($result){
    echo 'you successfully uploaded';
   }else{
     echo 'the error is occur'.mysqli_error($conn);

   }
 }
}else{
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Alert ! </strong> You Triying.. to upload more than 5 files
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
} 
?>