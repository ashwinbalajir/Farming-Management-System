
<?php
 $link = mysql_connect("localhost", "root", "pass")
     or die("Could not connect: " . mysql_error());

     // select our database
     mysql_select_db("farming") or die(mysql_error());

     // get the image from the db
     $sql = "SELECT cropimage FROM postad";

     // the result of the query
     $result = mysql_query("$sql") or die("Invalid query: " . mysql_error());

     // set the header for the image
     header("Content-type: blob/jpeg");
     echo mysql_result($result, 0);

     // close the db link
     mysql_close($link);
 }
 else {
     echo 'Please use a real id number';
 }
?>