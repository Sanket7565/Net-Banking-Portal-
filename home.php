<html>
	<head>
	<script type="text/javascript">
    window.onload = setInterval(clock,1000);

    function clock()
    {
	  var d = new Date();
	  
	  var date = d.getDate();
	  
	  var month = d.getMonth();
	  var montharr =["Jan","Feb","Mar","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
	  month=montharr[month];
	  
	  var year = d.getFullYear();
	  
	  var day = d.getDay();
	  var dayarr =["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
	  day=dayarr[day];
	  
	  var hour =d.getHours();
      var min = d.getMinutes();
	  var sec = d.getSeconds();
	
	  document.getElementById("date").innerHTML=day+" "+date+" "+month+" "+year;
	  document.getElementById("time").innerHTML=hour+":"+min+":"+sec;
    }
  </script>
	<title>E-Banking</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
		width:150px;
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

body{
	background-color: PaleTurquoise;
}
    body
    {
    background-color : PaleTurquoise ;
    </style>
	
	<script src="https://kit.fontawesome.com/f99df39349.js" crossorigin="anonymous"></script>
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
		<h2 >The Home Page</h2>
		<h3> Welcome to E-Banking <?php Print "$user" ?></h3>
		<a href="logout.php" >LOG-OUT <i class="fas fa-sign-out-alt"></i></a><br/>
		<br/><br/>
		
		   <p style="color:red;font-family:times"id="date"></p>
           <p style="color:red"id="time"></p> 
<div class="transaction">		   
		<button type = "button" onclick="location.href='checkbalance.php'" >Check Balance.</button>
	<br>
	<br>
	
		<button type = "button" onclick="location.href='transactionn.php'" >E-Banking</button>

	</div>
	</body>
	
</html>
