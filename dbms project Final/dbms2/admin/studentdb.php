
<?php
	session_start();



include("connection.php");


$sql="INSERT INTO login(username,password,profession) VALUES('$_POST[username]','$_POST[password]','student')";
$sql1="INSERT INTO studentdb(name,regno,gender,email,sem) VALUES('$_POST[name]','$_POST[username]','$_POST[gender]','$_POST[email]','$_POST[sem]')";


mysql_query($sql,$conn);
mysql_query($sql1,$conn);

mysql_close($conn);

	header('location:http://resultportal.16mb.com/admin/index2.php');
	//echo "za";


?>
