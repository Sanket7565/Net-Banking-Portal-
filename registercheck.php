<?php 

	$acno=$_POST['acc'];
	$username=$_POST['uname'];
	$password=$_POST['pass'];

 $con= new mysqli("localhost","root","root","php");
 
if($con->connect_error)die("connection Failed");


     $stmt=$con->prepare("select * from sbiuser where acno='$acno'");
	 $stmt->execute();
	 $result=$stmt->get_result();
	 if(!$result->num_rows>0) 
	 die("<script>alert('Unable to find your account')</script><script>window.location.assign('register.html')</script>");
 
      $sql1 = "SELECT * FROM sbi where acno='$acno'";  
                     $result1 = $con->query($sql1);
                     $row1 = $result1->fetch_assoc();
                     $acc= $row1["acno"];
					 
	   $sql2 = "SELECT * FROM sbi where username='$username'";  
                     $result2 = $con->query($sql2);
                     $row2 = $result2->fetch_assoc();
                     $user= $row2["username"];				 
       if($acno==$acc||$user==$username)
		   die("<script>alert('User already exists')</script><script>window.location.assign('register.html')</script>");
 
 
       $sql3 = "SELECT * FROM sbiuser where acno='$acno'";  
                     $result3= $con->query($sql3);
                     $row3 = $result3->fetch_assoc();
                     $fname= $row3["firstname"];

        $sql4 = "SELECT * FROM sbiuser where acno='$acno'";  
                     $result4= $con->query($sql3);
                     $row4 = $result4->fetch_assoc();
                     $lname= $row4["lastname"];
					 
              $ifsc="SBIN0000284"			;		 
        
        $sql5 = "SELECT * FROM sbiuser where acno='$acno'";  
                     $result5= $con->query($sql5);
                     $row5 = $result5->fetch_assoc();
                     $branch= $row5["branchname"];	

        $sql6 = "SELECT * FROM sbiuser where acno='$acno'";  
                     $result6= $con->query($sql6);
                     $row6 = $result6->fetch_assoc();
                     $mob= $row6["mobileno"];	

        $sql7 = "SELECT * FROM sbiuser where acno='$acno'";  
                     $result7= $con->query($sql7);
                     $row7 = $result7->fetch_assoc();
                     $balance= $row7["balance"];
        
        $sql8="INSERT INTO sbi values('$fname','$lname','$ifsc','$branch','$mob','$acno','$balance','$username','$password')";
	 $result8=$con->query($sql8);
	 if(!$result8)die("failed ...".$con->error);		
 
     $sql9="update sbiuser set username='$username',pass='$password' where acno='$acno'";
	 $result9=$con->query($sql9);
	 
	 
	 echo"<script>alert('Registration done successfull')</script><script>window.location.assign('register.html')</script>";
	
 ?>