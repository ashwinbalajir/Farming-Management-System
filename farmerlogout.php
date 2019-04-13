<?php
session_start();
header("Cache-Control: no-cache");
session_destroy();
	header("Location:http://localhost/a/farmerlogin.html");
?>