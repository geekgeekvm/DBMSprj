<?php
session_start();
    // $username=$_SESSION['username'];

$username=$_POST['username'];
$_SESSION['username']=$_POST['username'];

$password=$_POST['password'];
$profession=$_POST['profession'];

include("connection.php");
// Check connection
if (!$conn) {
     
	header('location:login.html');
}
echo $username;
echo $password;
echo $profession;
$sql="SELECT * FROM login where username=\"$username\"and password=\"$password\"and profession=\"$profession\"";
$rs=mysql_query($sql,$conn)or die(mysql_error());
$rows=mysql_num_rows($rs);
if($rows!=0){
	echo "success";
	if($profession=="admin")
	header('location:admin/index2.php');
    else if($profession=="student")
	header('location:student/index.php');
    else if($profession=="teacher")
	header('location:teacher/index.php');
}
else
{
	echo $rows;
	header('location:login.html');
}


?>
