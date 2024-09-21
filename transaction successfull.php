<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>E_PAY.COM</title>

    <meta name="author" content="Codeconvey" />
    <!-- Message Box CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="css/demo.css" />
	
	<script language="javascript">




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

</script>
	
</head>
<body>
		
		
		
<div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-4" id="float-right">
 
            <!-- Ad Here -->
            
        </div>
        
    </div>
</div>

<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- partial:index.partial.html -->
<div id='card' class="animated fadeIn">
  <div id='upper-side'>
    <?xml version="1.0" encoding="utf-8"?>
      <!-- Generator: Adobe Illustrator 17.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
      <svg version="1.1" id="checkmark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" xml:space="preserve">
        <path d="M131.583,92.152l-0.026-0.041c-0.713-1.118-2.197-1.447-3.316-0.734l-31.782,20.257l-4.74-12.65
	c-0.483-1.29-1.882-1.958-3.124-1.493l-0.045,0.017c-1.242,0.465-1.857,1.888-1.374,3.178l5.763,15.382
	c0.131,0.351,0.334,0.65,0.579,0.898c0.028,0.029,0.06,0.052,0.089,0.08c0.08,0.073,0.159,0.147,0.246,0.209
	c0.071,0.051,0.147,0.091,0.222,0.133c0.058,0.033,0.115,0.069,0.175,0.097c0.081,0.037,0.165,0.063,0.249,0.091
	c0.065,0.022,0.128,0.047,0.195,0.063c0.079,0.019,0.159,0.026,0.239,0.037c0.074,0.01,0.147,0.024,0.221,0.027
	c0.097,0.004,0.194-0.006,0.292-0.014c0.055-0.005,0.109-0.003,0.163-0.012c0.323-0.048,0.641-0.16,0.933-0.346l34.305-21.865
	C131.967,94.755,132.296,93.271,131.583,92.152z" />
        <circle fill="none" stroke="#ffffff" stroke-width="5" stroke-miterlimit="10" cx="109.486" cy="104.353" r="32.53" />
      </svg>
      <h3 id='status'>
      Success Receipt
    </h3>
  </div>
  <div id='lower-side'>
    <p id='message'>
	    <p id='message'>
     <?php
		session_start();
		if($_SESSION['user']||$_SESSION['receiver']||$_SESSION['receiver1']||$_SESSION['amount'])
		{}
		else
		{
			header("location:index.php");
		}

	   $date = date("d-m-Y");
	   $time = date("h:i:s:a");
		$user=$_SESSION['user'];
		$amount=$_SESSION['amount'];
        $receiver=$_SESSION['receiver'];
		$receiver1=$_SESSION['receiver1'];
      echo"Transaction Of RS: <b>$amount</b> <br>";
	  echo"Done By :<b>$user</b> <br>";
	  echo"To The User: <b>$receiver1</b> <br>";
	  echo"Acc/No: <b>($receiver)</b><br>";
	  echo"Date: <b>$date</b><br>";
	  echo"Time: <b>$time</b>";
	 
	  $con= new mysqli("localhost","root","root","php");
if($con->connect_error)
{
	die("connection Failed");
}
 else 
 {
	 $sql="INSERT INTO transactionhistory values('$date','$time','$user','$receiver.$receiver1','$amount')";
	 $result=$con->query($sql);
	 if(!$result)die("failed ...".$con->error);
 }
	  ?>
	  
    </p>
    <a href="transactionn.php" id="contBtn">Continue</a>
  </div>
</div>
<!-- partial -->
    		
           
    		</div>
		</div>
    </div>
</section>
     


    <!-- Analytics -->

	</body>
</html>