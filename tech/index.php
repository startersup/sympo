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
                  echo "<li><a href='./logout/'>Logout</a>
               </li> ";
             } else {
               echo "<li><a href='./login/'>Login</a>
            </li>";
             }       ?>
            </ul>
        </div>

    </nav>

        <section class="container">

            <div class="evento">

                          <div class="logos"><b style="font-family: 'Anton', sans-serif;font-style:20px;margin-top:-40px;">T<span>ec</span>hn<span>i</span>cal</b></div>
             <div class="row">
            <div class="col-md-6">
                <center><a href="../spotlight/"><div class="card"><img src="../assets/images/20190203_114857.png" style="max-width:400px;width:auto;"> <h3>Intrested to Participate?</h3></div></a></center>

                 </div>
                  <div class="col-md-6">
                      <center><a href="../greycell/"><div class="card"><img src="../assets/images/greycell.png" style="max-width:400px;width:auto;"><h3>Intrested to Exploring?</h3></div></a></center>

                 </div>
                        </div></div>


        </section>

 <footer class="footer"><center><a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a></center>
     <br><center><p>Copyrights &copy 2019 Petrovision. All Rights Reserved</p></center></footer>



    </body></html>
