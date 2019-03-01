<?php
session_start();
if(!isset($_SESSION['id']))
{
  $_SESSION['redirect']='/success';
  header('location: /login/index.php');
}
$conn=mysqli_connect('localhost','u453074143_petro','petrovision','u453074143_stud');
$id=$_SESSION['id'];
if(isset($_POST['class']))
{
  $sql="select * from students where id='$id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  $name=$row['name'];
  $number=$row['number'];
  $class=$_POST['class'];
  $college=$row['college'];
  $sql = "INSERT into accommodation (userid,name,phone,college,class,payment) VALUES ('".$_SESSION['id']."','$name',$number,'$college','$class','Onspot')";
  $res=mysqli_query($conn,$sql);
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
We, the organisers of Petrovision 2k19 would like to welcome you to our Extravaganza of this academic year. This mail is in confirmation of your successful registration for the acommodation. We expect to meet you soon and deliver the best staying experience for you . Once again, a warm welcome from the organising committee of Petrovision 2k19.<br>
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

                    <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.facebook.com/PetroVisionOfficial/"><img src="https://info.tenable.com/rs/tenable/images/facebook-teal.png"></a></td>
                    <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.instagram.com/_petrovision2k19"><img style="height:20px; width:20px;" src="https://icons-for-free.com/free-icons/png/512/1807542.png"></a></td>

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
  exit();
}
if($_SESSION['name']=="Paper Presentation" || $_SESSION['name']=="Poster" || $_SESSION['name']=="Case Study"||$_SESSION['name']=="Workshop-Aspen"||$_SESSION['name']=="Workshop-Ansys")
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
     $subject ="Greetings From Petrovision";
$eventname=$_SESSION['name'];

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
We, the organisers of Petrovision 2k19 would like to welcome you to our Extravaganza of this academic year. This mail is in confirmation of your successful subscription and registration for the event '.$eventname.'. We expect to meet you soon and welcome you in person . Once again, a warm welcome from the organising committee of Petrovision 2k19.<br>
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

									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.facebook.com/PetroVisionOfficial/"><img src="https://info.tenable.com/rs/tenable/images/facebook-teal.png"></a></td>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.instagram.com/_petrovision2k19"><img style="height:20px; width:20px;" src="https://icons-for-free.com/free-icons/png/512/1807542.png"></a></td>

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
We, the organisers of Petrovision 2k19 would like to welcome you to our Extravaganza of this academic year. This mail is in confirmation of your successful subscription and registration for the event. We expect to meet you soon and welcome you in person . Once again, a warm welcome from the organising committee of Petrovision 2k19.<br>
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

                      <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.facebook.com/PetroVisionOfficial/"><img src="https://info.tenable.com/rs/tenable/images/facebook-teal.png"></a></td>
    									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.instagram.com/_petrovision2k19"><img style="height:20px; width:20px;" src="https://icons-for-free.com/free-icons/png/512/1807542.png"></a></td>

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
