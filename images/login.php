<?php
session_start();
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$con= new mysqli("localhost","root","root","php");
if($con->connect_error)
{
	die("connection Failed");
}
 else 
 {
	 $stmt=$con->prepare("select * from user where username= ? and pass= ?");
	 $stmt->bind_param("ss",$uname,$pass);
	 $stmt->execute();
	 $result=$stmt->get_result();
	 if($result->num_rows>0)
	 {
		 $_SESSION['user']= $uname;
		header("location:demo.html");
	 }
	 else
	 {
		 echo"<script> alert('Login Failed')</script>"; 
	 }
 }

?>

