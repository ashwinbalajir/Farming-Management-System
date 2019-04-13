<html>
<body>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$con = mysqli_connect("localhost","root","","farming");

$select_path="select * from postad";
$var=mysqli_query($con,$select_path);

while($row=mysqli_fetch_array($var))
{
	?>
	<img src="<?php echo $row['cropimage']; ?>" height="500" width="900">
	
	<br><br>
	
</body>
</html>	

<?php
}
?>