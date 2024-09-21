<?php 
	session_start();
	$username=$_POST['uname'];
	$password=$_POST['pass'];

$con= new mysqli("localhost","root","root","php");
if($con->connect_error)
{
	die("connection Failed");
}
 else 
 {
	 $stmt=$con->prepare("select * from sbi where username= ? and pass= ?");
	 $stmt->bind_param("ss",$username,$password);
	 $stmt->execute();
	 $result=$stmt->get_result();
	 if($result->num_rows>0)
	 {
		$_SESSION['user']= $username;
				header("location:home.php");
	 }
	 else
	 {
		 Print '<script>alert("Invalid Credentials!");</script>';
				Print '<script>window.location.assign("login.html");</script>';
	 }
 }


 ?>