<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  include("connect.php");

  $cropid = $_POST['cropid'];
$cropname = $_POST['cropname'];
$quant = $_POST['quantity'];
$user = $_COOKIE["supuser"];

    $sql = "insert into postad (cropid,cropname,quantity,sname) values('$cropid','$cropname','$quant','$user')";
 
   if (mysqli_query($connection, $sql)) {
	header("Location:http://localhost/a/suplierhp.html");

} else {
header("Location:http://localhost/a/farmererrorsignup.html");
}
}
?>