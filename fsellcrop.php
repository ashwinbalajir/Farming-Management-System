<?php
include("connect.php");
//<?php  //Start the Session
session_start();
 //require('connect.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
//3.1.1 Assigning posted values to variables.
$cropid = $_POST['cropid'];
$supname = $_POST['supname'];
$cropname = $_POST['cropname'];
$quantity = $_POST['quantity'];
$rs = $_POST['rs'];
$user = $_COOKIE["user"];
$query = "INSERT INTO sellcrop(cropid,suppliername,cropname,quantity,Amount,farmername,status) VALUES('$cropid','$supname','$cropname','$quantity','$rs','$user','YES')";

if (mysqli_query($connection, $query)) {
	header("Location:http://localhost/a/fsellcrop.html");

} else {
header("Location:http://localhost/a/farmererrorsignup.html");

}

mysqli_close($conn);//3.1.4 if the user is logged in Greets the user with message
/*if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Hai " . $username . ";
echo "This is the Members Area";
echo "<a href='logout.php'>Logout</a>";
header("Location:http://127.0.0.1/a/adminhp.html")
 
}else{


//3.2 When the user visits the page first time, simple login form will be displayed.
}*/
?>	