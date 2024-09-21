<html>
	<head>
	<title>E-Banking</title>
	<script language='JavaScript' type='text/JavaScript'>
	
function validate()
{
	var amount =window.document.forms.form1.amount.value;
	if(amount<=0)
	{
		alert("Amount Must Be Greater Than '0'");
		
	}
	else
	{
		window.document.forms.form1.submit();
	}
	
}
</script>
	
	
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
	border: none;
		outline: none;
		width:250px;
		height: 40px;
		background:red;
		color: #000;
		font-size: 18px;
		border-radius: 20px;
		cursor: pointer;
}


button:hover {
  background: orange;
}
input{
	background:transparent;
	border:1px solid blue;
	height:30px;
	width:200px;
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
<form  name="form1" method="POST" action="transactioncheck.php">
	<div class="container">
		<h2 >The E-Banking Page</h2>
		<h3> Welcome to E-Banking <?php Print "$user" ?></h3>
		<a href="logout.php" >LOG-OUT <i class="fas fa-sign-out-alt"></i></a><br/>
		<br/><br/>
		<div class="transaction">
		ACC/NO:
 <input type="number" name="acno2"id="acno2" placeholder="Enter Receivers Acc/No" required><br><br>
 AMOUNT:
 <input type="number" name="amount" placeholder="Enter Amount" required><br><br>
<button type = "button" onclick="validate()" >Send Money.</button><br><br>
<a href="checkbalance.php">
<button type = "button" >Check Balanace</button>
</a><br><br>
<a href="transactionhistory.php">
<button type = "button" >Transaction History</button>
</a>
	</div>	
		

	</div>
	<form>
	</body>
	
</html>
