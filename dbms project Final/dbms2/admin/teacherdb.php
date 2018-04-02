
<?php
	session_start();



include("connection.php");


$sql="INSERT INTO login(username,password,profession) VALUES('$_POST[username]','$_POST[password]','teacher')";
$sql1="INSERT INTO teacherdb(name,email,username,gender,course,sem) VALUES('$_POST[name]','$_POST[email]','$_POST[username]','$_POST[gender]','$_POST[course]','$_POST[sem]')";


mysql_query($sql,$conn);
mysql_query($sql1,$conn);

mysql_close($conn);

	header('location:http://resultportal.16mb.com/dbms/admin/index2.php');
	//echo "za";


?>
