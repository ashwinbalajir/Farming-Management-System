<?php
$username = $_GET['name'];

?>
<html>
<head>

<style> 
div {
margin:25px;
   }
table,th,td
{


    border-collapse: collapse;
}
.first
{
height:150px;

color:black;
font-size:75px;
}
body {
    background: url("1.jpg");
    background-size: 100%;
    background-repeat: no-repeat;
   
}
td.second
{




}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
 
    text-align: center;
    text-decoration: none;
 
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
width:100%;
height:100px;
}



.nav3 {
width:90%;
    float: left;
    padding-right: 20px;
	padding-left:20px;
	background-color:white;
}
.icons
{
padding-left:150px;
}
#heading{
background-color: white;
}
</style>
</head>
<body>

  
   <center> <span class="first">   FARMERS HOME PAGE</span></center>
<table style="width:100%">

  <tr >

<td id="heading"  ><button class="button" onclick="complaint()">Complaint Page</button></td>


<td id="heading">	<button class="button" onclick="cmpstatus()">View Complaints Status </button></td>
<td id="heading">  <button class="button" onclick="frmtips()">Farming Tips </button></td>
<td id="heading">  <button class="button" onclick="advdetails()">Crop Advertisements Details </button></td>


<td id="heading"><button class="button" onclick="sellcrop()">Sell Crop</button></td>
<td id="heading">  <button class="button" onclick="statusdetails()">Order Status </button></td>

<td id="heading"> <a href="farmerlogout.php"> <button class="button">Logout </button></a></td>


</tr>
<?php
$user = $_COOKIE["user"];
echo $user;
?>
</table>
<iframe src="" width="100%"  height="100%" id="ifrm"></iframe>
<!--<div class="nav3" >
<span id="demo">   
 <a href="adminlogin.html" class="icons"><img src="admin.jpeg" height="175px"></a>
                                  <a href="farmerlogin.html" class="icons"><img src="farmer.jpg" height="175px"></a>
    <a href="suppliersignin.html" class="icons"><img src="Supplier.png" height="175px"></a>
</span>
</div>-->


<script>
function complaint() {
  // body...
  document.getElementById('ifrm').style.height="50%";
  document.getElementById('ifrm').src = "fcomplaintpage.html";
}
function sellcrop() {
  // body...
  document.getElementById('ifrm').style.height="50%";
  document.getElementById('ifrm').src = "fsellcrop.html";
}
function cmpstatus() {
  // body...
  document.getElementById('ifrm').style.height="50%";
  document.getElementById('ifrm').src = "fviewcomplaintstatus.php";
}
function frmtips() {
  // body...
  document.getElementById('ifrm').style.height="50%";
  document.getElementById('ifrm').src = "ffarmingtips.php";
}
function advdetails() {
  // body...
  document.getElementById('ifrm').style.height="100%";
  document.getElementById('ifrm').src = "fcropadvdetails.php";
}
function statusdetails() {
  // body...
  document.getElementById('ifrm').style.height="50%";
  document.getElementById('ifrm').src = "forderstatus.php";
}

function farmtips() {
  // body...
  document.getElementById('ifrm').src = "farmerlogin.html";
}
</script>
</body>
</html>

