<?php
session_start();
$_SESSION['amount']="250";
$_SESSION['redirect']='/isomanic';
$_SESSION['name']='Insomniac';
$_SESSION['mode']='Paid';
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

        <section class="container">

             <div class="shadow" >
            <center><img class="spot" src="../assets/images/inso.png">
              <div class="container1">
              <br>
              <div class="tabbable-panel">
              <div class="tabbable-line">
              <ul class="nav nav-tabs ">
              <li class="active">
              <a href="#tab_default_1" data-toggle="tab">
              Description </a>
              </li>
              <li>
              <a href="#tab_default_2" data-toggle="tab">
              Rules </a>
              </li>
              </ul>
              <div class="tab-content">
              <div class="tab-pane active" id="tab_default_1">
              <p>
              An online photography event in which participants are required to send their photograph based on the given theme to our event email id.	</p>
              </div>
              <div class="tab-pane" id="tab_default_2">

                <p>Theme: Nature, Animals, City.</p>
    <p>Use Watermarks.</p>
    <p>Please Mention:
    Name,
    Department,
    Year,
    College.</p>
    <p>The type of nature/ name of the animal/ name of the city</p>
    <p>Send your meme to petrovisionevents@gmail.com</p>
    <p>Send it before 5 th March 2019</p>
    <p>The content will be uploaded in social medias.</p>
    <p>The most liked photograph will be the winner.</p>

              </div>
              </div>
              </div>
              </div>

              <br><?php if($_SESSION['mode']=="Paid"){
             echo "<a href='/success/'><button class='button' class='btn btn-demo'>Subscribe</button></a>";}
             else if($flag==1 && $_SESSION['mode']=='Onspot')
             {
               echo "<a href='/PaytmKit/TxnTest.php'><button class='button' class='btn btn-demo'>Pay Now and get RS.50 Off</button></a>";
               $flag=0;
             }
               else{
                  echo "<button class='button' class='btn btn-demo' data-toggle='modal' data-target='#myModal-2'>Subscribe</button>";
               }?>
              </div>
              </center>
              </div>
              </section>


              <div class="modal fade" id="myModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-2">
              <div class="modal-dialog" role="document">
              <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel-2">Subscribe the Event </h4>
              </div>
              <div class="modal-body">
              <center><p>Choose your suitable options according to your convenience</p>
                  <div class="row">
              <div class="col-md-6"><center><a href="/PaytmKit/TxnTest.php"><img src="../assets/images/debit-card%20(1).png"></a><br><p>Online</p></center></div>
                  <div class="col-md-6"><center><a href="/success/"><img src="../assets/images/cash.png"></a><br><p>Onspot</p></center></div>
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
              <br><center><p>Copyrights &copy 2019 Petrovision. All Rights Reserved</p>
              <span class="craft">Crafted By <a href="http://www.seotechie.tk/" target="_blank">SEOTechie</a></span></center></footer>
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
              /* Tabs panel */
              .tabbable-panel {
              padding: 10px;
              background-color: transparent;
              }

              /* Default mode */
              .tabbable-line > .nav-tabs {
              border: none;
              margin: 0px;
              }
              .tabbable-line > .nav-tabs > li {
              margin-right: 2px;
              }
              .tabbable-line > .nav-tabs > li > a {
              border: 0;
              margin-right: 0;
              font-family: 'Anton', sans-serif;
              font-size:18px;
              letter-spacing: 1.9px;
              line-height:29px;
              font-weight:400;
              margin:0px 10px;
              color: #737373;
              }
              .tabbable-line > .nav-tabs > li > a > i {
              color: #a6a6a6;

              }
              .tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {
              border-bottom: 4px solid #fbcdcf;
              }
              .tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
              border: 0;
              color: #333333;
              }
              .tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
              color: #a6a6a6;
              }
              .tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
              margin-top: 0px;
              }
              .tabbable-line > .nav-tabs > li.active {
              border-bottom: 4px solid #f3565d;
              position: relative;
              }
              .tabbable-line > .nav-tabs > li.active > a {
              border: 0;
              color: #333333;
              }
              .tabbable-line > .nav-tabs > li.active > a > i {
              color: #404040;
              }
              .tabbable-line > .tab-content {
              margin-top: -3px;
              background-color:transparent;
              border: 0;
              border-top: 1px solid #eee;
              padding: 15px 0;
              }
              .portlet .tabbable-line > .tab-content {
              padding-bottom: 0;
              }

              .tabpane
              {
              background-color:transparent;
              }
              @media screen and (max-width: 600px) {

              .tabbable-line > .nav-tabs > li > a {
              border: 0;
              margin-right: 0;
              font-family: 'Anton', sans-serif;
              font-size:14px;
              letter-spacing: 1.9px;
              line-height:29px;
              font-weight:400;
              margin:0px 0px;
              color: #737373;
              }

              }
              </style>


              </body></html>
