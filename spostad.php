<?php
include("connect.php");
//<?php  //Start the Session
session_start();
 //require('connect.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
//3.1.1 Assigning posted values to variables.
$cropid = $_POST['cropid'];
$cropname = $_POST['cropname'];
$image = $_FILES['image']['tmp_name'];
$img = file_get_contents($image);    
$quant = $_POST['quant'];
    $query = "insert into postad (cropimage) values(?)";
 
    $stmt = mysqli_prepare($connection,$query);
 
    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);
 
    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        $msg = 'Successfullly UPloaded';
    }else{
        $msg = 'Could not upload';
    }
    mysqli_close($con);
}
?>