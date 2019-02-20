<?php
session_start();
if(!isset($_SESSION['id']))
{
  header('location: /login/index.php');
}
$conn=mysqli_connect('localhost','u453074143_petro','petrovision','u453074143_stud');
$id=$_SESSION['id'];
if($_SESSION['name']=="Paper Presentation" || $_SESSION['name']=="Poster" || $_SESSION['name']=="Case Study")
{
  $sql="select * from spotlight where id='$id' AND event='".$_SESSION['name']."'";
  $res=mysqli_query($conn,$sql);
  $count=mysqli_num_rows($res);
  if($count>0)
  {
  echo "<script type='text/javascript'> alert('Already Registered'); </script>";
    header('location: /index.php');
  }
  else {
    $sql="select * from students where id='$id'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($res);
    $name=$row['name'];
    $mail=$row['email'];
    $number=$row['number'];
    $dept=$row['dept'];
    $college=$row['college'];
    $sql = "INSERT into spotlight (event,id,name,number,email,dept,college,payment) VALUES ('".$_SESSION['name']."','".$_SESSION['id']."','$name',$number,'$mail','$dept','$college','".$_SESSION['mode']."')";
    $res=mysqli_query($conn,$sql);
   $to = 'saicharan14996@gmail.com';

$subject = 'Website Change Reqest';

$headers = "From: saicharan14996@gmail.com\r\n";
$headers .= "Reply-To: saicharan14996@gmail.com \r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<p><strong>This is strong text</strong> while this is not.</p>';


mail($to, $subject, $message, $headers);

}



}
else{
$sql="select * from events where id='$id' AND event='".$_SESSION['name']."'";
$res=mysqli_query($conn,$sql);
$count=mysqli_num_rows($res);
if($count>0)
{
echo "<script type='text/javascript'> alert('Already Registered'); </script>";
  header('location: /index.php');
}
else {
  $sql="select * from students where id='$id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  $name=$row['name'];
  $mail=$row['email'];
  $number=$row['number'];
  $dept=$row['dept'];
  $college=$row['college'];
  $sql = "INSERT into events (event,id,name,number,email,dept,college,payment) VALUES ('".$_SESSION['name']."','".$_SESSION['id']."','$name',$number,'$mail','$dept','$college','".$_SESSION['mode']."')";
  $res=mysqli_query($conn,$sql);

   $to = 'saicharan14996@gmail.com';

$subject = 'Website Change Reqest';

$headers = "From: saicharan14996@gmail.com\r\n";
$headers .= "Reply-To: saicharan14996@gmail.com \r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<p><strong>This is strong text</strong> while this is not.</p>';


mail($to, $subject, $message, $headers);

 
}
}
 ?>
 <html lang="en">
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
 <p class="main-content__body" data-lead-id="main-content-body">You have successfully subscribed the event.You have chosen onspot resgistration.</p>
 </div>
 <center><a href="http://petrovision.co.in">Back to Home</a></center>
 </body>
 </html>
