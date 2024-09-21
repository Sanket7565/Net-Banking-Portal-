<?php


$ac=$_POST['acno1']; //senders acno
$ac1=$_POST['acno2']; // receivers acno
$amt=$_POST['amount'];  // amount
$con= new mysqli("localhost","root","root","php");
if($con->connect_error)
{
	die("connection Failed");
}
 else 
 {
	 
	 
	 
	 
	
	 
	      if($ac<>$ac1)
	            {
	                 $sql0 = "SELECT balance FROM sbi where acno='$ac'";   // senders balance
                     $result1 = $con->query($sql0);
                     $row = $result1->fetch_assoc();
                     $balance = $row["balance"];
	                 if($balance > $amt)       // checking senders balance should be greater than sending amount
	                    {
		
	                          $final=$balance-$amt;
	                          $query="UPDATE sbi SET balance='$final' WHERE acno='$ac'";  // deducting amount from senders account
	                          $result=$con->query($query);
	
	
	                          $sql1 = "SELECT balance FROM sbi where acno='$ac1'";  // receivers balance
                              $result2 = $con->query($sql1);
                              $row = $result2->fetch_assoc();
                              $balance2 = $row["balance"];
	
	                          $final1=$balance2+$amt;
	                          $query1="UPDATE sbi SET balance='$final1' WHERE acno='$ac1'"; // adding amount to receivers account
	                          $result1=$con->query($query1);
	
	
	
	
	
	                          if(!$result) die("failed".$con->error);
	                          else
	                             {
	                             	header("location:transaction successfull.html");
                               	 }
	
	                    }
	
	                    else
	                         {
	                        	echo"unsufficient amount";
	                         }
	
	             }
	 
	             else
				 {
		            echo"sender & receiver both cant be the same";
	             }
	 
	}
	 
	    
?>

