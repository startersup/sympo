<?php
	session_start();
if(!isset($_SESSION['id']))
{
	$_SESSION['redirect']='/PaytmKit/TxnTest.php';
	  header('location: /login/index.php');
}
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
	$id= $_SESSION['id'];
	$conn=mysqli_connect('localhost','u453074143_petro','petrovision','u453074143_stud');
	$sql="select name from students where id='$id'";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($res);
	$name=$row['name'];
	if(isset($_POST['class']))
	{
		if($_POST['class']=="CLASS 1")
		{
			$_SESSION['amount']="450";
			$_SESSION['name']="Accommodation";
			$_SESSION['class']="CLASS 1";
		}
		elseif($_POST['class']=="CLASS 2"){
			$_SESSION['amount']="350";
				$_SESSION['name']="Accommodation";
					$_SESSION['class']="CLASS 2";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Petrovision | National Level Technical Symposium</title>
    <link rel="icon" href="../assets/images/logo.png" type="image" sizes="16x16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans|Roboto:500" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/sidenav.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Asap|Bangers|Carter+One|Concert+One|Francois+One|Kanit|Merienda|Noto+Sans+TC|Anton|Passion+One|Signika|Vollkorn" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <script src="../assets/js/sidenav.js"></script>
</head>
    <body style="background-color:#000000;opacity:0.8;">
     <nav class="navbar navbar-default navit navbar-fixed-top">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
           <center> <a class="navbar-brand" href="#">
               <span> <img class="logo" src="../assets/images/logo.png">Petrovision</span>
            </a></center>
        </div>
        <div class="collapse navbar-collapse " id="myNavbar">
            <a href="../index.php"><button style="float:right;padding:5px 10px;" class="button2">Back</button></a>
        </div>

        </nav>
        <section class="container top color">
       <center> <h3>You are One Step Away from Payment !</h3><br>  </center>
           <div class="container1">
               <div class="row">
                   <div class="col-md-3"></div>
                   <div class="col-md-6">
            <div class="card white" style="background-color:#ffffff;color:#000000;border:none;border-radius:12px;">
            <form method="post" action="http://petrovision.co.in/PaytmKit/pgRedirect.php">
    <div class="form-group">
      <label>Order Id</label>
			<input class="form-control" name="ORDER_ID" value="<?php  $_SESSION['orderid']= "ORDS" . rand(10000,99999999); echo $_SESSION['orderid'];?>" disabled>
    </div>
    <div class="form-group">
      <label>Student Name</label>
      <input type="text" class="form-control"  value="<?php echo $name; ?>" name="pwd" disabled>
    </div>
                  <div class="form-group">
      <label>Event Subscribed</label>
      <input type="text" class="form-control"  value="<?php echo $_SESSION['name'];?>" name="pwd" disabled>
    </div>
  <div class="form-group">
      <label>Amount</label>
      <input type="text" class="form-control"  value="<?php echo $_SESSION['amount'];?>" name="pwd" disabled>
			<input type="hidden" value="WEB" name="CHANNEL_ID">
			<input type="hidden" name="INDUSTRY_TYPE_ID" value="Retail">
			<input type="hidden" name="CUST_ID" Value="CUST001">
			<input type="hidden" name="ORDER_ID" value="<?php echo $_SESSION['orderid'];?>">
    </div>

              <input type="submit" class="button1" value="Proceed to Checkout">  </form>    </div></div></div></div>

         <div class="col-md-3"></div>
        </section>

    <style>
.form-control
        {
            border:none !important;
        }
        label
        {
            font-size:22px;
            text-align: left !important;
        }
        input
        {
            background-color:transparent;
            border:none !important;
        }
        </style>
    </body></html>
