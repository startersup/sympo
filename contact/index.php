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

        <section class="container contact">
            <div class="row">
                <div class="col-md-3">
       <div class="char">
  <img src="../assets/images/male.jpg" alt="John" style="width:100%">
  <h1>Mr.Abdul Haq</h1>
  <p class="title">Core Team</p>
  <p>ACT<p>
  <p><a href="tel:7708522009"><button>Contact</button></a></p>
</div></div>
                            <div class="col-md-3">
       <div class="char">
  <img src="../assets/images/male.jpg" alt="John" style="width:100%">
  <h1>Mr.Arun Balaji</h1>
  <p class="title">Core Team</p>
  <p>ACT</p>
  <p><a href="tel:9789127282"><button>Contact</button></a></p>
</div></div>
                                <div class="col-md-3">
       <div class="char">
  <img src="../assets/images/male.jpg" alt="John" style="width:100%">
  <h1>Mr.Melvin Thomas</h1>
  <p class="title">Core Team</p>
             <p>ACT</p>
  <p><a href="tel:9597997919"><button>Contact</button></a></p>
</div></div>

                                <div class="col-md-3">
       <div class="char">
  <img src="../assets/images/female.png" alt="John" style="width:100%">
  <h1>Ms.Varshini</h1>
  <p class="title">Core Team</p>
             <p>ACT</p>
  <p><a href="tel:9791190177"><button>Contact</button></a></p>
</div></div>

            </div>
        </section>

        <footer class=""><center><a href="https://www.facebook.com/PetroVisionOfficial/" class="fa fa-facebook"></a>
       <a href="#" class="fa fa-twitter"></a>
       <a href="https://instagram.com/petrovision2018?utm_source=ig_profile_share&igshid=1kt9ff6uyu06q" class="fa fa-instagram"></a>
       </center>
            <br><center><p>Copyrights &copy 2019 Petrovision. All Rights Reserved</p>
        <span class="craft">Crafted By <a href="http://www.seotechie.tk/" target="_blank">SEOTechie</a></span></center></footer>
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
