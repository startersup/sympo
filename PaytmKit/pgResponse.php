<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	echo "";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		session_start();
		$id= $_SESSION['id'];
		$conn=mysqli_connect('localhost','u453074143_petro','petrovision','u453074143_stud');
		$sql="select * from students where id='$id'";
		$res=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($res);
		$name=$row['name'];
		$mail=$row['email'];
		$number=$row['number'];
		$dept=$row['dept'];
		$college=$row['college'];
		if($_SESSION['name']=="Paper Presentation" || $_SESSION['name']=="Poster" || $_SESSION['name']=="Case Study")
		{
			$sql="select * from spotlight where id='$id' AND event='".$_SESSION['name']."'";
			$res=mysqli_query($conn,$sql);
			$count=mysqli_num_rows($res);
			if($count>0)
			{
				$sql ="INSERT into payinfo (orderid,userid,type) VALUES('".$_SESSION['orderid']."','$id','".$_SESSION['name']."')";
				mysqli_query($conn,$sql);
				$sql ="UPDATE spotlight SET payment='Paid' where id='$id' AND event='".$_SESSION['name']."'";
				mysqli_query($conn,$sql);
			}
			else
			{
			$sql ="INSERT into payinfo (orderid,userid,type) VALUES('".$_SESSION['orderid']."','$id','general')";
			mysqli_query($conn,$sql);
			$sql = "INSERT into spotlight (event,id,name,number,email,dept,college,payment) VALUES ('".$_SESSION['name']."','".$_SESSION['id']."','$name',$number,'$mail','$dept','$college','Paid')";
			$res=mysqli_query($conn,$sql);
	  	}
		}
		else {
		$sql="select * from events where id='$id' AND event='".$_SESSION['name']."'";
		$res=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($res);
		if($count>0)
		{
			$sql ="INSERT into payinfo (orderid,userid,type) VALUES('".$_SESSION['orderid']."','$id','general')";
			mysqli_query($conn,$sql);
			$sql ="UPDATE events SET payment='Paid' where id='$id'";
			mysqli_query($conn,$sql);
		}
		else
		{
		$sql ="INSERT into payinfo (orderid,userid,type) VALUES('".$_SESSION['orderid']."','$id','general')";
		mysqli_query($conn,$sql);
		$sql = "INSERT into events (event,id,name,number,email,dept,college,payment) VALUES ('".$_SESSION['name']."','".$_SESSION['id']."','$name',$number,'$mail','$dept','$college','Paid')";
		$res=mysqli_query($conn,$sql);
	}
}
		echo '<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700" rel="stylesheet" type="text/css">
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
		<h2 class="site-header__title" data-lead-id="site-header-title">Success!</h2>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">We are delighted to inform you that we received your payment, you will be receiveing the payment confirmation and Event Pass through Email.</p>
	</div>
<center><a href="http://petrovision.co.in">Back to Home</a></center>
</body>
</html>';

	}
	else {
		echo '<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700" rel="stylesheet" type="text/css">
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
		<h2 class="site-header__title" data-lead-id="site-header-title">Failure !</h2>
       <center><h3>There is an error happened during the transaction, please try again or reach us at :</h3></center>
	</header></body></html>';
	}

	if (isset($_POST) && count($_POST)>0 )
	{
		foreach($_POST as $paramName => $paramValue) {

		}
	}


}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>
