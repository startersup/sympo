<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Petrovision | National Level Technical Symposium</title>
    <link rel="icon" href="./assets/images/logo.png" type="image" sizes="16x16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans|Roboto:500" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/head.css">
    <script src="./assets/js/sidenav.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Asap|Bangers|Carter+One|Concert+One|Francois+One|Kanit|Merienda|Noto+Sans+TC|Anton|Passion+One|Signika|Vollkorn" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/fonts.css">
    <script src="./assets/js/sidenav.js"></script>
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
               <span> <img class="logo" src="./assets/images/logo.png">Petrovision</span>
            </a></center>
        </div>
        <div class="collapse navbar-collapse " id="myNavbar">

              <ul class="nav navbar-nav navbar-right " id="myTopnav">
                <li><a href="./index.php">Home</a>
                </li>
                <li><a href="./about/">About</a>
                </li>
                <li><a href="./events/">Events</a>
                </li>
                <li><a href="./workshop/">Workshops</a>
                </li>
                <li><a href="./sponsor/">Sponsors</a>
                </li>
                <li><a href="./accomodation/">Accomodation</a>
                </li>
                <li><a href="./contact/">Contact</a>
                </li>
                <li><a href="./gallery/">Gallery</a>
                </li>
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

        <section class="main">
            <div class="container">
          <center>  <div class="logos"><b style="font-family: 'Signika', sans-serif;margin-top:-40px;">P<span>ETR</span>O<span>VI</span>SION 2K19</b></div>
            <br>
              <h3 class="downer hidden-xs">A National Level Technical Symposium</h3>
              <p class="margin-top">Starts at</p>
 <ul>
    <li><span id="days"></span>days</li>
    <li><span id="hours"></span>Hours</li>
    <li><span id="minutes"></span>Minutes</li>
    <li><span id="seconds"></span>Seconds</li>
  </ul>
            </center>
            <section class="container about">
                <br><br>
             <div class="row">
            <div class="col-xs-6 nopadding">
                <div class=" margino right ">
               <center>
                    <h3>Intrested to Participate?</h3>
                  <a href="events/index.php"> <button class="button2">Events</button></a>
                    </center></div>
               </div>
                <div class="col-xs-6 nopadding">
                      <div class="margino left ">
                          <center>
                    <h3>Know about Timeline ?</h3>
                              <a target="_blank" href="tl.html">    <button class="button1">Click Here </button>   </a>
                          </center>
                    </div>
               </div>

            </div>
        </section>
                 <footer class=""><center><a href="https://www.facebook.com/PetroVisionOfficial/" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="https://instagram.com/petrovision2019?utm_source=ig_profile_share&igshid=1g99nkx7wd9pd" class="fa fa-instagram"></a>
</center>
     <br><center><p class="footerp">Copyrights &copy 2019 Petrovision. All Rights Reserved</p>
        <span class="craft">Crafted By <a href="http://www.seotechie.tk/" target="_blank">SEOTechie</a></span></center>
        </footer>
            </div>
</section>


    </body>
<script>const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('March 11, 2019 00:00:00').getTime(),
    x = setInterval(function() {

      let now = new Date().getTime(),
          distance = countDown - now;

      document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);



    }, second)</script>

</html>
