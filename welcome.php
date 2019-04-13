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
tr.first
{
height:300px;

color:green;
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

</style>
</head>
<body>

<div>
<table style="width:100%">
  <tr class="first">
   <td colspan="4">
    <center> FARMING ASSISTANT WEB SERVICE</center></td> 
</tr>
  <tr>

<td width="33%" ><a href="2.html">	<button class="button">Home</button></a></td>


<td>	<button class="button" onclick="myfunction()">About Us </button></td>


<td>	<button class="button" onclick="myfunction1()">Contact Us</button></td>



</tr>


</table>
<div class="nav3" >
<span id="demo">   
 <a href="adminlogin.html" class="icons"><img src="admin.jpeg" height="175px"></a>
                                  <a href="farmerlogin.html" class="icons"><img src="farmer.jpg" height="175px"></a>
    <a href="suppliersignin.html" class="icons"><img src="Supplier.png" height="175px"></a>
</span>
</div>


<script>
function myfunction1()
{

 document.getElementById("demo").innerHTML = "If you are facing any issues you can mail us any time<br>ID:farmingassistantwebservice@gmail.com";


}

function myfunction()
{

 document.getElementById("demo").innerHTML = "We have developed this web project to help farmers ensure greater profitability through direct farmer to supplier and farmer to farmer communication.";


}
</script>
</body>
</html>

