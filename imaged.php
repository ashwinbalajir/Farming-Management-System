
<?php
mysqli_connect("localhost","root","");
mysqli_select_db("farming");


   $res=mysqli_query("select * from postad");
   echo "<table>";
   echo "<tr>";
   
   while($row=mysqli_fetch_array($res))
   {
   echo "<td>"; 
   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['cropimage'] ).'" height="200" width="200"/>';
   echo "<br>";
      
   
   }
   echo "</tr>";
   
   echo "</table>";
  


?>