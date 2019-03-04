<?php
session_start();
 $_SESSION['redirect']='/tariff'; ?>
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
    <style>
    .table,
.table tr,
.table td {
    background-color: white !important;
}

    </style>
</head>

<body style="background-color:#000000;opacity:0.8;">
    <nav class="navbar navbar-default navit navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <center>
                <a class="navbar-brand" href="#">
                    <span> <img class="logo" src="../assets/images/logo.png">Petrovision</span>
                </a>
            </center>
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
                <li><a href="../gallery/">Gallery</a>
                </li>
                <?php session_start(); if(isset($_SESSION[ 'id'])){ echo "<li><a href='/logout/'>Logout</a>
               </li> "; } else { echo "<li><a href='/login/'>Login</a>
            </li>"; } ?>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <div class="evento">
        <div class="container">
          <table class="table table-striped table-bordered" BORDER=10 BORDERCOLOR=RED>
    <thead>
      <tr>
        <th scope="col">Workshops</th>
        <th scope="col">Online</th>
        <th scope="col">Combo</th>
        <th scope="col">Onspot</th>
        <th scope="col">Combo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Directional Drilling</td>
        <td>450/-</td>
        <td></td>
        <td>500/-</td>
        <td></td>
      </tr>
      <tr>
        <td>Aspen Plus</td>
        <td>450/-</td>
        <td rowspan="2">850/-</td>
        <td>500/-</td>
        <td rowspan="2">900/-</td>
      </tr>
      <tr>
        <td>Aspen Fluent</td>
        <td>450/-</td>
        <td>500/-</td>
      </tr>
      <tr>
        <th scope="row">Technical Events</th>
      </tr>
      <tr>
        <td>Paper Presentation</td>
        <td>250/-</td>
        <td rowspan="2">400/-</td>
        <td>250/-</td>
        <td rowspan="2">400/-</td>
      </tr>
      <tr>
        <td>Poster Presentation</td>
        <td>250/-</td>
        <td>250/-</td>
      </tr>
      <tr>
        <td>Directional Drilling</td>
        <td>200/-</td>
        <td></td>
        <td>200/-</td>
        <td></td>
      </tr>
      <tr>
        <td>Be-An-Analyst</td>
        <td rowspan="6">100/-</td>
        <td></td>
            <td rowspan="6">150/-</td>
      </tr>
      <tr>
        <td>Breaking-Bid</td>
      </tr>
      <tr>
        <td>Connexions</td>
      </tr>
      <tr>
        <td>Design Challenge</td>
      </tr>
      <tr>
        <td>PetroClash</td>
      </tr>
      <tr>
        <th scope="row">Non-Technical Events</th>
      </tr>
    </tbody>
  </table>
        </div>
    </div>
    <footer class="">
        <center>
            <a href="https://www.facebook.com/PetroVisionOfficial/" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/_petrovision2k19" class="fa fa-instagram"></a>
        </center>
        <br>
        <center>
            <p>Copyrights &copy 2019 Petrovision. All Rights Reserved</p>
            <span class="craft">Crafted By <a href="http://www.seotechie.tk/" target="_blank">SEOTechie</a></span>
        </center>
    </footer>

</body>

</html>
