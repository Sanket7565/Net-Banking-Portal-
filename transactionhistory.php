<html>
	<head>
	<title>Money in the Bank</title>
	<style>
	 .container{
	width: 620px;
	padding: 4% 4% 4%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position:relative;
	top:50px;
	vertical-align: middle;
}


h3{
	color:#1f00a8;
	font-family: helvetica;
}

a{
	color:#f00f53;
	text-decoration: none;
	align-content: right;
}

button{
	width:380px;
	margin :10px;
	padding:5px;
	font-weight: bold;
	background-color: #ff474a;
	text-align: center;
	color:white;
}


button:hover {
  background: #a30003;
}

body{
	background-color: PaleTurquoise;
}
    body
    {
    background-color : PaleTurquoise ;
    </style>
	</head>
	<?php
		session_start();
		if($_SESSION['user'])
		{}
		else
		{
			header("location:index.php");
		}
		$user=$_SESSION['user'];
		?>
	<body>

	<div class="container">
		<h2 >The History Page</h2>
		<h3> Hello <?php Print "$user" ?></h3>
		<a href="transactionn.php" >Click Here to Go Back.</a><br/>
		<br/><br/>
		<?php
		$con= new mysqli("localhost","root","root","php");
if($con->connect_error)
{
	die("connection Failed");
}
 else 
 {
	$sql ="select * from transactionhistory where sentby='$user'";
	$result=$con->query($sql);
	 
	 if(!$result)die("No History Yet....!");
	 $rows=$result->num_rows;
	 echo"<center><table border='1'><tr><th>DATE</th><th>TIME</th><th>SENT BY</th><th>SENT TO</th> <th>AMOUNT</th></tr>";
	 for($j=0; $j<$rows ; ++$j)
	 {
		 $result->data_seek($j);
		 $row=$result->fetch_array(MYSQLI_NUM);
		 echo"<tr>";
		 for($k=0; $k<5;++$k) echo"<td>$row[$k]</td>";
		 echo"</tr>";
	 }
	 echo"</table></center>";
						
 }
		?>

	</div>
	</body>
	
</html>
