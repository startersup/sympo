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
            <div class="logos"><b style="font-family: 'Anton', sans-serif;font-style:20px;margin-top:-40px;">Wo<span>rk</span>s<span>h</span>ops </b>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="workshop">
                      <h1>ASPEN PLUS</h1> 
                        <hr>
                        <p>ASPEN Plus is a process simulation software package widely used in
industry today. Given a process design and an appropriate selection of
thermodynamic models, ASPEN uses mathematical models to predict
the performance of the process. This information can then be used in
an iterative fashion to optimize the design. This accurate modelling of
thermodynamic properties is particularly important. </p>
                <center><button class="button2">Registrations Open !</button></center>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="workshop">
                      <h1>ANSYS FLUENT</h1> 
                        <hr>
                        <p>ANSYS Fluent is a simulation tool that predicts the impact of fluid flows
throughout design and manufacturing as well as during end use. The
software’s fluid flow analysis capabilities can be used to design and optimize new equipment and to troubleshoot already existing installations. The package can handle variety of fluid dynamics segments
ranging from single- or multi-phase, isothermal or reacting, compressible or non-compressible. </p>
                          <center><button class="button1">Registrations Open !</button></center>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="workshop">
                      <h1>ASPEN PLUS</h1> 
                        <hr>
                        <p>ASPEN Plus is a process simulation software package widely used in
industry today. Given a process design and an appropriate selection of
thermodynamic models, ASPEN uses mathematical models to predict
the performance of the process. This information can then be used in
an iterative fashion to optimize the design. This accurate modelling of
thermodynamic properties is particularly important.</p>
                       <center><button class="button2">Registrations Open !</button></center>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="">
        <center>
            <a href="https://www.facebook.com/PetroVisionOfficial/" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/_petrovision2k19q" class="fa fa-instagram"></a>
        </center>
        <br>
        <center>
            <p>Copyrights &copy 2019 Petrovision. All Rights Reserved</p>
            <span class="craft">Crafted By <a href="http://www.seotechie.tk/" target="_blank">SEOTechie</a></span>
        </center>
    </footer>

</body>

</html>
