<?php 
 session_start();

//Process file upload ($_FILES)

/**
 * image/jpeg
 * image/png
 * application/pdf
 * 
 * image/gif
 * image/jpg
 * 
 * 26.6KB
 * 
 * 31030 bytes
 * 1KB = 1024byte
 * 
 * 1024 x 1024 x 2
 */

if(isset($_FILES['image'])){
   $imgName = $_FILES['image']['name'];
   $imgType = $_FILES['image']['type'];
   $imgTmp = $_FILES['image']['tmp_name'];
   $imgSize = $_FILES['image']['size'];

   if($imgType=="application/pdf" || $imgType=="image/jpeg" || $imgType=="image/png"){
        //2097152
        if($imgSize<=502400){
            echo '<pre>';
            print_r($_FILES['image']);
            echo '</pre>';
            $file_location = "uploads/{$imgName}";
            //session_destroy();
            session_unset();

           //save uploaded file
           move_uploaded_file($imgTmp, $file_location);

            $_SESSION['img_url'] = $file_location;
           //redirect to form
           header("location: form.php");
        }else {
            $_SESSION['error'] = "File size is exceeded!";
            
            //redirect to form
           header("location: form.php");
        }
   }else {
      $_SESSION['error'] = "Invalid file type";
      
      //redirect to form
      header("location: form.php");
   }

}

//Img_74673673.jpg