<html>
	<head>
	<title>E-Banking</title>
	<script language='JavaScript' type='text/JavaScript'>
	
function validate()
{
	var sender =window.document.forms.form1.acno1.value;
	var receiver =window.document.forms.form1.acno2.value;
	if(sender==receiver)
	{
		alert("sender and receiver both cant be the same");
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
<form  name="form1" method="POST" action="transactioncheck.php">
	<div class="container">
		<h2 >The E-Banking Page</h2>
		<h3> Welcome to E-Banking <?php Print "$user" ?></h3>
		<a href="logout.php" >LOG-OUT <i class="fas fa-sign-out-alt"></i></a><br/>
		<br/><br/>
		senders acno:<input type="number" name="acno1" id="acno1"><br>
receivers acno:<input type="number" name="acno2"id="acno2"><br>
amount:<input type="number" name="amount"><br>

<input type="button" value="ok" onclick="validate();">
		
		

	</div>
	<form>
	</body>
	
</html>
