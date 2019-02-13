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
                <li><a href="../contact/">Contact</a>
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

        <section class="container">

         <div class="shadow" >
            <center><img class="spot" src="../assets/images/paper.png">

             <p>The great platform for the participates to present their innovative technical review or research paper through a digital presentation. The topics consist both chemical and oil and gas sector. The judgement will be based on the technical content of the paper and how well the content is presented.</p><br>
                <button class="button">Subscribe and Register</button>
             </center>
            </div>
        </section>

        <footer class=""><center><a href="https://www.facebook.com/PetroVisionOfficial/" class="fa fa-facebook"></a>
       <a href="#" class="fa fa-twitter"></a>
       <a href="https://instagram.com/petrovision2019?utm_source=ig_profile_share&igshid=1g99nkx7wd9pd" class="fa fa-instagram"></a>
       </center>
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


    </body></html>
