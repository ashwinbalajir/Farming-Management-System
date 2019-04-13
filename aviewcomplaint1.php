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
echo "<td>".$emp['status']."</td>";
$comp=$emp['farmername'];
$farmer=$emp['farmername'];
echo "<td><form action=amodifycomplain.php>
<input name='comp' type='hidden' value='".$emp['complaintg']."'>  
<input name='farm' type='hidden' value='".$emp['farmername']."'>   
<input type=submit name=submit value='"."view"."'>
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






