<?php


$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//KONTROLLOJME NQS FILE ESHTE FOTO APO JO

if(isset($_POST['submit'])){

    $check = getimagesize($_FILES["fileToUpload"]['tmp_name']);

    if($check !== false){
        echo "File is an image - " . $check['mime'];
        $uploadOk = 1; 

    }else {
        echo "File is  not an image";
        $uploadOk = 0; 

    }
 }


 //kontrolloj a ekziston 


 if(file_exists($target_file)){

    echo "File exists, sorry";
    $uploadOk = 0;
 }

 //kontrolloj size 

 if($_FILES['fileToUpload']['size'] > 500000){
    echo "File is too big";
    $uploadOk = 0;
 }



 //kontrolloj formatet e lejuara

 if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif"){

    echo "Only JPG, JPEG, PNG, Gif formats are allowed";
    $uploadOk = 0;
 }


 if($uploadOk == 0){

    echo "Sorry, your file was not uploaded";
 }else {
     if (move_uploaded_file($_FILES["fileToUpload"]['tmp_name'],$target_file)){
         echo "success!";
     }else {
         echo "error uploading file";
     }


 }


