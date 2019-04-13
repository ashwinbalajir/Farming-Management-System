<html>
<body>
<?php
$host = "localhost";
$user = "root";
$pass = "";
mysql_connect("localhost","root","");
mysql_select_db("farming");


$select_path="select * from postad";
$var=mysql_query($select_path);

while($row=mysql_fetch_array($var))
{
	?>
	<img src="<?php echo $row['cropimage']; ?>" height="500" width="900">
	
	<br><br>
	
</body>
</html>
<?php
}
?>