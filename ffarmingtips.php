<?php

include("connect.php");
//<?php  //Start the Session
session_start();
$query="SELECT * FROM farmingtips";
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
<th>Tips</th>
</tr>
<?php

while($emp=mysqli_fetch_assoc($records))
{

echo "<tr>";
echo "<td>".$emp['ftips']."</td>";
echo "</tr>";
}
?>
</table>
</div>
</body>
</html>







