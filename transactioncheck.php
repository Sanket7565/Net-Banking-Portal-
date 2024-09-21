<?php
session_start();
		if($_SESSION['user'])
		{}
		else
		{
			header("location:index.php");
		}
		$user=$_SESSION['user'];
		

$ac1=$_POST['acno2']; // receivers acno
$amt=$_POST['amount'];  // amount

$_SESSION['amount']= $amt;
$_SESSION['receiver']= $ac1;

$con= new mysqli("localhost","root","root","php");
if($con->connect_error)
{
	die("connection Failed");
}
 else 
 {
	 
	 $s = "SELECT username FROM sbi where acno='$ac1'";  
                     $r = $con->query($s);
                     $row = $r->fetch_assoc();
                     $a= $row["username"];
					 $_SESSION['receiver1']= $a;
	 
	  $sql = "SELECT acno FROM sbi where username='$user'";   
                     $res = $con->query($sql);
                     $row = $res->fetch_assoc();
                     $acc = $row["acno"];
					 
					 
					 $sq = "SELECT acno FROM sbi where acno='$ac1'";  
                     $re = $con->query($sq);
                     $row = $re->fetch_assoc();
                     $ac = $row["acno"];
					 
					 if($acc==$ac1 || $ac!=$ac1)die("<script>alert('User May have Not Be Registered Yet / Wrong Account Number!')</script><script>window.location.assign('transactionn.php');</script>");
	
	                 $sql0 = "SELECT balance FROM sbi where username='$user'";   // senders balance
                     $result1 = $con->query($sql0);
                     $row = $result1->fetch_assoc();
                     $balance = $row["balance"];
	                 if($balance > $amt)       // checking senders balance should be greater than sending amount
	                    {
		
	                          $final=$balance-$amt;
	                          $query="UPDATE sbi SET balance='$final' WHERE username='$user'";  // deducting amount from senders account
	                          $result=$con->query($query);
							  
							  $queryuser="UPDATE sbiuser SET balance='$final' WHERE username='$user'";  // deducting amount from senders account
	                          $resultuser=$con->query($queryuser);
	
	
	                          $sql1 = "SELECT balance FROM sbi where acno='$ac1'";  // receivers balance
                              $result2 = $con->query($sql1);
                              $row = $result2->fetch_assoc();
                              $balance2 = $row["balance"];
	
	                          $final1=$balance2+$amt;
	                          $query1="UPDATE sbi SET balance='$final1' WHERE acno='$ac1'"; // adding amount to receivers account
	                          $result1=$con->query($query1);
							  
							  $query1user="UPDATE sbiuser SET balance='$final1' WHERE acno='$ac1'"; // adding amount to receivers account
	                          $result1user=$con->query($query1user);
	
	
	
	
	
	                          if(!$result) die("failed".$con->error);
	                          else
	                             {
	                             	header("location:transaction successfull.php");
                               	 }
	
	                    }
	
	                    else
	                         {
	                        	echo"unsufficient amount";
	                         }
	
	            
	 
	}
	 
	    
?>

