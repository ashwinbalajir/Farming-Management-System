<?php

include("connect.php");
//<?php  //Start the Session
session_start();
$query="SELECT * FROM complaint where status='UNREAD'";
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
<th>Complain</th>
<th>Farmer Name</th>
<th>Status</th>

</tr>
<?php

while($emp=mysqli_fetch_assoc($records))
{

echo "<tr>";
echo "<td>".$emp['complaintg']."</td>";
echo "<td>".$emp['farmername']."</td>";
$_SESSION["afname"] = $emp['farmername'];

echo "<td>"."<a href='amodifycomplain.php'>".$emp['status']."</a>"."</td>";

echo "</tr>";
}
?>
</table>
</div>
</body>
</html>







