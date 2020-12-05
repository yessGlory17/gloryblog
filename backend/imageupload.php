<?php 



if(isset($_FILES['file']['name'])){

    //Dosyayı Al
    $filename = $_FILES['file']['name'];
 
    //Konum
    $location = "../uploads/".$filename;
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
    $imageFileType = strtolower($imageFileType);
 
    
    $valid_extensions = array("jpg","jpeg","png");
 
    $response = 0;
    
    if(in_array(strtolower($imageFileType), $valid_extensions)) {
       /* Upload file */
       if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
          $response = $location;
       }
    }
 
    echo $response;
    exit;
 }






?>