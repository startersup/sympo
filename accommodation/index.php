<?php
$_SESSION['redirect']='/accommodation';
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

              <ul class="nav navbar-nav navbar-right " id="myTopnav">
                <li><a href="../index.php">Home</a>
                </li>
                <li><a href="../about/">About</a>
                </li>
                <li><a href="../events/">Events</a>
                </li>
                <li><a href="../workshop/">Workshops</a>
                </li>
                <li><a href="../accommodation/">Accommodation</a>
                </li>
                <li><a href="../contact/">Contact</a>
                </li>
                  <li><a href="../gallery/">Gallery</a></li>
                <?php
                session_start();
                  if(isset($_SESSION['id'])){
                  echo "<li><a href='/logout/'>Logout</a>
               </li> ";
             } else {
               echo "<li><a href='/login/'>Login</a>
            </li>";
             }       ?>
            </ul>
        </div>
    </nav>
    <br><br>
                <section class="container">

         <div class="shadow" >
            <center> <div class="logos"><b style="font-family: 'Signika', sans-serif;font-style:20px;margin-top:-40px;">Acc<span>o</span>moda<span>tion</span></b></div>
            </center>
                 <br><br>
             <h3>RULES :</h3>
             <p>➢ Registration for accommodation is not part of the events
registration, and is to be done separately.
</p>
             <p>➢ Hospitality services will be available from 11 march 2019 to 13
march 2019</p>
             <p>➢ Services will be offered on “First Register First Serve “basis.
</p>
             <p>➢ Accommodation will be provided on a sharing basis. Any
requests for individual room will not be entertained.
</p>
             <p>➢ However, we will try to accommodate students from the same
college (if possible)</p>
             <p>➢ Participants are responsible for their belongings during their
stay.</p>
             <p>➢ In time is 9:00 pm for NRI hostels.</p>
             <p>➢ Random checks will be made to avoid illegal stay.</p>
             <p>➢ Smoking and Drinking is strictly prohibited inside the room.</p>
             <p>➢ Any act of misbehaviour inside the campus will be severely
dealt, leading to the immediate expulsion of the team (in
question) from the campus and cancellation of registration.</p>
             <p>➢ Any damage caused by the participants to the campus property
will result in recovery of the amount due to the damage
(whichever is higher)</p>
             <p>➢ Accommodated students can have their food at their own
expense in canteens and food stalls that are available.</p>
             <br><br>    <center> <div class="logos"><b style="font-family: 'Signika', sans-serif;font-style:20px;margin-top:-40px;">Ab<span>o</span>ut<span> Rooms</span></b></div>
            </center>
             <div class="row">
                 <div class="col-md-6 ">
                     <div class="workshop">
                         <h3>☝🏻CLASS 1</h3><br>
             <center><div class="con"><img src="../assets/images/5star.png"></div></center><br><br>
             <p><span> RS 450</span> per head per day</p>
                               <p>High class OYO Hotel Galaxy Manor, West saidapet. </p>
                         <p><span>Travel time:-</span> 5kms (15mins) from our campus.</p>
                         <p><span>Perks :-</span> A/C Room, Free WiFi connection, 3days Compliment Breakfast TV
facility.</p>
                         <p>We will take care of the Transportation </p>
                         <p><span>Total Inmates :-</span> 75 Members ( 3 per room ).</p>
                         <p>Boys and Girls will be accommodated in <span>separate rooms.</span>
</p>
                         <p><span>PS :-</span> March 11th morning breakfast will be provided at the hotel for those
alone who check in on 10th night. Check out time will be considered as the
same as check in time.</p>
                         <br><center><button class="button2" data-toggle="modal" data-target="#myModal-1">Avail For Accomodation</button></center>
        </div></div>


              <div class="col-md-6 ">
                     <div class="workshop">
                         <h3>✌CLASS 2</h3><br>
             <center><div class="con"><img src="../assets/images/hotel.png"></div></center><br><br>
             <p><span> RS 350</span> per head per day.</p>
                               <p>Non-resident Indian Hostel inside our Campus. </p>
                         <p><span>Non-AC </span> room</p>
                         <p><span>No food </span> will be provided</p>
                         <p><span>Total Inmates :-</span> 60 Members ( 2 per room )</p>
                         <p>Boys and Girls will be accommodated in <span>separate rooms</span>
</p><p>Accommodation will be provided on first come first serve Basis</p>
                 <br> <br> <br><br> <br><button class="button1" data-toggle="modal" data-target="#myModal-2">Avail For Accomodation</button>
        </div></div>

             </div>
             <br><br>
            </div>
        </section>
      <div class="modal fade" id="myModal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel-2">Avail Accomodation Soon! </h4>
      </div>
      <div class="modal-body">
        <center><p>Choose your suitable options according to your convenience</p>
                  <div class="row">
            <div class="col-md-6"><center><form method="post" action="/PaytmKit/TxnTest.php"><input type="hidden" name="class" value="CLASS 1"><button type="submit"><img src="../assets/images/debit-card%20(1).png"></button></form><br><p>Online</p></center></div>
                  <div class="col-md-6"><center><form method="post" action="/success"><input type="hidden" name="class" value="CLASS 1"><button type="submit"><img src="../assets/images/cash.png"></button></form><br><p>Onspot</p></center></div>
                  </div>
                  </center>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-dialog" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
    </div>
  <div class="modal fade" id="myModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-2">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title" id="myModalLabel-2">Avail Accomodation Soon! </h4>
  </div>
  <div class="modal-body">
    <center><p>Choose your suitable options according to your convenience</p>
              <div class="row">
        <div class="col-md-6"><center><form method="post" action="/PaytmKit/TxnTest.php"><input type="hidden" name="class" value="CLASS 2"><button><img src="../assets/images/debit-card%20(1).png"></button></form><br><p>Online</p></center></div>
              <div class="col-md-6"><center><form method="post" action="/success"><input type="hidden" name="class" value="CLASS 2"><button><img src="../assets/images/cash.png"></button></form><br><p>Onspot</p></center></div>
              </div>
              </center>
  </div>

  <div class="modal-footer">
    <button type="button" class="btn btn-dialog" data-dismiss="modal">Cancel</button>
  </div>
</div><!-- modal-content -->
</div><!-- modal-dialog -->
  </div>

       <footer class=""><center><a href="https://www.facebook.com/PetroVisionOfficial/" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="https://www.instagram.com/_petrovision2k19q" class="fa fa-instagram"></a>
</center>
     <br><center><p class="footerp">Copyrights &copy 2019 Petrovision. All Rights Reserved</p>
        <span class="craft">Crafted By <a href="http://www.seotechie.tk/" target="_blank">SEOTechie</a></span></center>
        </footer>
        <style>.shadow {
  position: relative;
  margin: 120px auto 0;
  padding:20px;
  background: linear-gradient(0deg, #000, #262626);
}
            p
            {
                font-family: 'ProximaNovaSemibold';
    color:#bbb;
    font-size:20px;
            }
.shadow:before,
.shadow:after {
  content: "";
  position: absolute;
  top: -2px;
  left: -2px;
  background: linear-gradient(
    45deg,
    rgb(250,250,250),
    rgb(0, 190, 200),
    rgb(250,250,250)
  );
  background-size: 400%;
  width: calc(100% + 4px);
  height: calc(100% + 4px);
  z-index: -1;
  animation: moveBackground 20s linear infinite;
}
            button {
  background: #4CAF50;
  border: none;
  border-radius: 25px;
  color: snow; // Vanilla HTML color name
  cursor: pointer;
  font-size: 1.25em;
  letter-spacing: .1em;
  outline: none;
  padding: .75em 2em;
  position: relative; // Required for pseudo-element positioning
  text-transform: uppercase;
}
.shadow:after {
  filter: blur(20px);
}
@keyframes moveBackground{
  0% {
    background-position: 0 0;
  }
  50%{
    background-position: 400% 0;
  }
  100% {
    background-position: 0 0;
  }
}
</style>
         <style>
.char {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  background-color:#ffffff;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}
.char h1
         {
             font-family: 'ProximaNovaSemibold';
    text-align: center;
    font-size:30px;
         }
         .workshop p
         {
             font-family: 'ProximaNovaSemibold';
    font-size:20px;
         }
button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: black;
  background-color: #FCBB1C;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}
             .workshop p span
             {
                 color:red;
             }

             .workshop p
             {
                 color:#000000;
             }
             .workshop h3
             {
                 color:#000000;
             }
button:hover, a:hover {
  opacity: 0.7;
}
</style>


    </body></html>
