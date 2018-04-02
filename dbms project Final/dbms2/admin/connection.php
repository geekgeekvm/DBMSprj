<?php

	$hostname = "localhost";
	$usrname = "root";
	$pasword = "";
	$database = "dbms2";


	$conn = @mysql_connect("$hostname","$usrname","$pasword") or die(mysqli_connect_error($conn));
	mysql_select_db("$database", $conn) or die(mysql_error($conn));

         
?>