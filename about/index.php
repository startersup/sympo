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
                <li><a href="../sponsor/">Sponsors</a>
                </li>
                <li><a href="../accomodation/">Accomodation</a>
                </li>
                <li><a href="../contact/">Contact</a></li>
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

        <section class="container">

         <div class="shadow" >
            <center> <div class="logos"><b style="font-family: 'Anton', sans-serif;font-style:20px;margin-top:-40px;">Ab<span>o</span>ut<span>  us</span></b></div>
            </center>
                 <br><br>
             <center><div class="con"><img src="../assets/images/banner.jpeg" style="width:100%;height :auto;"></div></center><br><br>
             <p style="padding:10px;"> Anna University, established in 1978, was brought to life with the purpose of fostering free flow of thought, will and action related to Engineering and Technology,symbolised by the ventilated open halls of our main campus.<br><br>Department of Applied Science and Technology prides itself on producing students who work in Oil & Gas industries which pretty much decides the nation's economy and produces every essential of daily use for humans.
The world pretty much owes us and we are  proud about it. DAB!</p><br>
                <h3> Petrovision</h3>
                <p>A national level technical symposium organised by the Department of Applied Science and Technology that envisions the coming together of diverse students and staffs related to the field of Petroleum Engineering. </p>
               <br>
             <p>Basic commodities to attend this Symposium: Sun tan lotion and Aviators.
Coz it's 🔥 fam.</p><hr>
          <center>  <div class="row">
                <div class="col-md-4">
       <div class="char set">
  <h1>Head of Department</h1>
  <p class="title">DR.S.KALAISELVAM</p>
  <p>hoddast@gmail.com</p>
</div></div>
                            <div class="col-md-4">
       <div class="char set">
  <h1>Faculty Co-ordinator</h1>
  <p class="title">DR.M.DHARMENDIRA KUMAR</p>
  <p>mdkumar@annauniv.edu</p>
</div></div>
                                <div class="col-md-4">
       <div class="char set">
  <h1>SPE Co-ordinator</h1>
  <p class="title">DR.J.JAYAPRIYA</p>
 <p>jayapriyachem@gmail.com</p>
</div></div>
              <div class="col-md-6">

       <div class="char set">
  <h1>President</h1>
  <p class="title">MR. NISHAL KRISHNAN</p>
</div></div>
        <div class="col-md-6">

       <div class="char set">
  <h1>Vice-President</h1>
  <p class="title">MR.VIGNESHWARAN</p>
</div></div>
            </div></center>
            </div>
        </section>

 <footer class="footer"><center><a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a></center>
     <br><center><p>Copyrights &copy 2019 Petrovision. All Rights Reserved</p></center></footer>
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
         .char p
         {
             font-family: 'ProximaNovaSemibold';
    text-align: center;
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

button:hover, a:hover {
  opacity: 0.7;
}
</style>


    </body></html>
