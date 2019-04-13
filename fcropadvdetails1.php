<?php
include("connect.php");
//<?php  //Start the Session
session_start();
$cropid = $_GET['cropid'];
$cropname = $_GET['cropname'];
$quantity = $_GET['quantity'];
$supname = $_GET['sname'];
$amount = $_GET['amount'];

$user = $_COOKIE["user"];

 //require('connect.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
//3.1.1 Assigning posted values to variables.
$query = "INSERT INTO sellcrop(cropid,suppliername,cropname,quantity,Amount,farmername,status) VALUES('$cropid','$supname','$cropname','$quantity','$amount','$user','PENDING')";

$query1 = "DELETE from postad where cropid='$cropid' and cropname='$cropname'";

if (mysqli_query($connection, $query) && mysqli_query($connection, $query1)) {
	header("Location:http://localhost/a/fcropadvdetails.php");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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