<?php

include("connect.php");
//<?php  //Start the Session
session_start();
$query="SELECT * FROM postad";
$count = mysqli_num_rows($query);

$records=mysqli_query($connection, $query);
?>

<html>
<head>
<title>Employee Data</title>
	<style >
	div	{
			margin-left: 30%;
		}
	</style>
</head>
<body bgcolor="#76b852">
<div>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>CROP ID</th>
<th>CROP NAME</th>
<th>QUANTITY</th>
<th>SUPPLIER NAME</th>
<th>AMOUNT</th>
<th>ACTION</th>
</tr>
<?php

while($emp=mysqli_fetch_assoc($records))
{

echo "<tr>";
echo "<td>".$emp['cropid']."</td>";
echo "<td>".$emp['cropname']."</td>";
echo "<td>".$emp['quantity']."</td>";
echo "<td>".$emp['sname']."</td>";
echo "<td><form action=fcropadvdetails1.php>
<input name='cropid' type='hidden' value='".$emp['cropid']."'>  
<input name='cropname' type='hidden' value='".$emp['cropname']."'>

<input name='quantity' type='hidden' value='".$emp['quantity']."'>
<input name='sname' type='hidden' value='".$emp['sname']."'>
<input type='text' name='amount' ></td>
<td>   
<input type=submit name=submit value='"."PROCEED"."'>
</form></td>";
echo "</tr>";
}
?>

</table>
</div>
<script>
function f(var a,var b)
{
	alert(a);


}
</script>
</body>
</html>






