<?php

include("connect.php");
//<?php  //Start the Session
session_start();
$user = $_COOKIE["user"];

$query="SELECT * FROM sellcrop where farmername='$user'";
$count = mysqli_num_rows($query);

$records=mysqli_query($connection, $query);
?>

<html>
<head>
<title>Order Data</title>
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
<th>Cropid</th>
<th>Suppliername</th>
<th>Cropname</th>
<th>Quantity</th>
<th>Amount</th>
<th>Status</th>
</tr>
<?php

while($emp=mysqli_fetch_assoc($records))
{

echo "<tr>";
echo "<td>".$emp['cropid']."</td>";
echo "<td>".$emp['suppliername']."</td>";
echo "<td>".$emp['cropname']."</td>";
echo "<td>".$emp['quantity']."</td>";
echo "<td>".$emp['Amount']."</td>";
echo "<td>".$emp['status']."</td>";

echo "</tr>";
}
?>
</table>
</div>
</body>
</html>







