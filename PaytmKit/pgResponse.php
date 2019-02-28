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
		if($_SESSION['name']=="Paper Presentation" || $_SESSION['name']=="Poster" || $_SESSION['name']=="Case Study"||$_SESSION['name']=="Workshop-Aspen"||$_SESSION['name']=="Workshop-Ansys")
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
			$sql ="INSERT into payinfo (orderid,userid,type) VALUES('".$_SESSION['orderid']."','$id','".$_SESSION['name']."')";
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
		$sql ="UPDATE events SET payment='Paid' where id='$id'";
		mysqli_query($conn,$sql);
	}
}

         $subject ="Greetings From Petrovision";


$headers = "";
   $to      = $mail;
$headers .= "From: Petrovision <info@petrovision.in> \r\n";
$headers .= "Reply-To: Petrovision <info@petrovision.in> \r\n"."X-Mailer: PHP/";// . phpversion();
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";

    $message .= '<body link="#00a5b5" vlink="#00a5b5" alink="#00a5b5">

<table class=" main contenttable" align="center" style="font-weight: normal;border-collapse: collapse;border: 0;margin-left: auto;margin-right: auto;padding: 0;font-family: Arial, sans-serif;color: #555559;background-color: white;font-size: 16px;line-height: 26px;width: 600px;">
		<tr>
			<td class="border" style="border-collapse: collapse;border: 1px solid #eeeff0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
				<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">

					<tr>
						<td valign="top" class="side title" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;vertical-align: top;background-color: white;border-top: none;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">

								<tr>
									<td class="top-padding" style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"></td>
								</tr>
								<tr>
									<td class="grey-block" style="border-collapse: collapse;border: 0;margin: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background-color: #fff; text-align:center;">
									<div class="mktEditable" id="cta">
									<img class="top-image" src="http://petrovision.co.in/assets/images/emailbanner.jpg" width="560"/><br>

									</div>
									</td>
								</tr>
								<tr>
									<td class="top-padding" style="border-collapse: collapse;border: 0;margin: 0;padding: 15px 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 21px;">
										<hr size="1" color="#eeeff0">
									</td>
								</tr>
								<tr>
									<td class="text" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
									<div class="mktEditable" id="main_text">
										Hello,<br>
										Greetings from Petrovision!!<br>
We, the organisers of Petrovision 2k19 would like to welcome you to our Extravaganza of this academic year. This mail is in confirmation that we have recieved your payment and subscription for the event. We expect to meet you soon and welcome you in person . Once again, a warm welcome from the organising committee of Petrovision 2k19.<br>
									</div>
									</td>
								</tr>
								<tr>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">
									 &nbsp;<br>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td valign="top" align="center" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td align="center" valign="middle" class="social" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;text-align: center;">
										<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
											<tr>

									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="tps://www.facebook.com/PetroVisionOfficial/"><img src="https://info.tenable.com/rs/tenable/images/twitter-teal.png"></a></td>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.facebook.com/Tenable.Inc"><img src="https://info.tenable.com/rs/tenable/images/facebook-teal.png"></a></td>

											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr bgcolor="#fff" style="border-top: 4px solid #00a5b5;">
						<td valign="top" class="footer" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background: #fff;text-align: center;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td class="inside-footer" align="center" valign="middle" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 12px;line-height: 16px;vertical-align: middle;text-align: center;width: 580px;">
<div id="address" class="mktEditable">
										<b>Official Email from Petrovision</b><br>
                            <a style="color: #00a5b5;" href="http://petrovision.co.in/contact/">Contact Us</a>
</div>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
  </body>
  <style>
  @media only screen and (max-width: 600px) {
		.main {
			width: 320px !important;
		}

		.top-image {
			width: 100% !important;
		}
		.inside-footer {
			width: 320px !important;
		}
		table[class="contenttable"] {
            width: 320px !important;
            text-align: left !important;
        }
        td[class="force-col"] {
	        display: block !important;
	    }
	     td[class="rm-col"] {
	        display: none !important;
	    }
		.mt {
			margin-top: 15px !important;
		}
		*[class].width300 {width: 255px !important;}
		*[class].block {display:block !important;}
		*[class].blockcol {display:none !important;}
		.emailButton{
            width: 100% !important;
        }

        .emailButton a {
            display:block !important;
            font-size:18px !important;
        }

	}</style>' ;

   mail($to, $subject, $message, $headers);

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
