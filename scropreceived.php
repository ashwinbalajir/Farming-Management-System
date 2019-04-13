<?php

include("connect.php");
//<?php  //Start the Session
session_start();
$user = $_COOKIE["supuser"];

$query="SELECT * FROM sellcrop where suppliername='$user' and status='YES'";
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
<th>cropid</th>
<th>crop name</th>
<th>Quantity</th>
<th>amount</th>
<th>farmer</th>
<th>Accept</th>
</tr>
<?php

while($emp=mysqli_fetch_assoc($records))
{

echo "<tr>";
echo "<td>".$emp['cropid']."</td>";
echo "<td>".$emp['cropname']."</td>";
echo "<td>".$emp['quantity']."</td>";
echo "<td>".$emp['Amount']."</td>";
echo "<td>".$emp['farmername']."</td>";
echo "<td><form action=scropreceived1.php>
<input name='cropid' type='hidden' value='".$emp['cropid']."'>  
<input name='cropname' type='hidden' value='".$emp['cropname']."'>
<input name='fname' type='hidden' value='".$emp['farmername']."'>

<input type=submit name=submit value='"."YES1"."'>
</form></td>";
echo "</tr>";

}
?>
</table>
</div>
</body>
</html>







