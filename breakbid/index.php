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
            <center><img class="spot" src="../assets/images/break.png">

             <p> An innovative bidding competition in which the participants are requested to attain the highest possible assets. It is a two-round event where prelims of technical question from chemical and oil and gas domain will be conducted for the shortlisting. The shortlisted participants will be allowed to purchase the various refining raw materials and unit operations through bidding by using the provided virtual money.  The team that makes the most profit wins the game.
</p>
                  <div class="tabbable-panel margin-tops4 ">
      <div class="tabbable-line">
        <ul class="nav nav-tabs tabtop  tabsetting">
          <li class="active"> <a href="#tab_default_1" data-toggle="tab"> Magento Product Upload </a> </li>
          <li> <a href="#tab_default_2" data-toggle="tab"> Yahoo Store Data Entry</a> </li>
          <li> <a href="#tab_default_3" data-toggle="tab"> Shopify Product Upload </a> </li>
          <li> <a href="#tab_default_4" data-toggle="tab"> OpenCart Product Upload</a> </li>
          <li> <a href="#tab_default_5" data-toggle="tab" class="thbada"> Amazon Product Listing </a> </li>
        </ul>
        <div class="tab-content margin-tops">
          <div class="tab-pane active fade in" id="tab_default_1">
            <div class="col-md-4">
              <div class="row"> <img src="http://placemi.com/petnp/500x300" class="img-responsive"> </div>
            </div>
            <div class="col-md-8">
              <h4 class="heading4">Magento Product Upload Services</h4>
              <p>Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
              <h4 class="heading4">Magento Product Upload Services</h4>
              <p>Also a data entry company from India, we provide time-bound and high-quality data entry services and encourage our clients to outsource end-to-end data entry projects to us. </p>
              <a href="#">
              <div class="btns">View More <i class="fa fa-angle-right"></i></div>
              </a> </div>
          </div>
          <div class="tab-pane fade" id="tab_default_2">
            <div class="col-md-4">
             <div class="row"> <img src="http://placemi.com/petnp/500x300" class="img-responsive"> </div>
            </div>
            <div class="col-md-8">
              <h4 class="heading4">Yahoo Store Data Entry</h4>
              <p>Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
              <h4 class="heading4">Yahoo Store Data Entry</h4>
              <p>Also a data entry company from India, we provide time-bound and high-quality data entry services and encourage our clients to outsource end-to-end data entry projects to us. </p>
              <a href="#">
              <div class="btns">View More <i class="fa fa-angle-right"></i></div>
              </a> </div>
          </div>
          <div class="tab-pane fade" id="tab_default_3">
            <div class="col-md-4">
             <div class="row"> <img src="http://placemi.com/petnp/500x300" class="img-responsive"> </div>
            </div>
            <div class="col-md-8">
              <h4 class="heading4">Shopify Product Upload </h4>
              <p>Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
              <h4 class="heading4">Shopify Product Upload </h4>
              <p>Also a data entry company from India, we provide time-bound and high-quality data entry services and encourage our clients to outsource end-to-end data entry projects to us. </p>
              <a href="#">
              <div class="btns">View More <i class="fa fa-angle-right"></i></div>
              </a> </div>
          </div>
          <div class="tab-pane fade" id="tab_default_4">
            <div class="col-md-4">
             <div class="row"> <img src="http://placemi.com/petnp/500x300" class="img-responsive"> </div>
            </div>
            <div class="col-md-8">
              <h4 class="heading4">OpenCart Product Upload</h4>
              <p>Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
              <h4 class="heading4">OpenCart Product Upload</h4>
              <p>Also a data entry company from India, we provide time-bound and high-quality data entry services and encourage our clients to outsource end-to-end data entry projects to us. </p>
              <a href="#">
              <div class="btns">View More <i class="fa fa-angle-right"></i></div>
              </a> </div>
          </div>
          <div class="tab-pane fade" id="tab_default_5">
            <div class="col-md-4">
              <div class="row"> <img src="http://placemi.com/petnp/500x300" class="img-responsive"> </div>
            </div>
            <div class="col-md-8">
              <h4 class="heading4">Amazon Product Listing </h4>
              <p>Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
              <h4 class="heading4">Amazon Product Listing</h4>
              <p>Also a data entry company from India, we provide time-bound and high-quality data entry services and encourage our clients to outsource end-to-end data entry projects to us. </p>
              <a href="#">
              <div class="btns">View More <i class="fa fa-angle-right"></i></div>
              </a> </div>
          </div>
        </div>
      </div>

<!--home-content-top ends here--> 

                </div>

                <br><button class="button">Subscribe and Register</button>
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
            .heading4{font-size:18px;font-weight:400;font-family:'Lato', sans-serif;color:#111111;margin:0px 0px 5px 0px;}
.heading1{font-size:30px;line-height:20px;font-family:'Lato', sans-serif;text-transform:uppercase;color:#1b2834;font-weight:900;}
.content-quality{float:left;width:193px;}
.content-quality p{margin-left:10px;font-family:'Open Sans', sans-serif;font-size:14px;font-weight:600;line-height:17px;}
.content-quality p span{display:block;}
.tabtop li a{font-family:'Lato', sans-serif;font-weight:700;color:#1b2834;border-radius:0px;margin-right:22.008px;border:1px solid #ebebeb !important;}
.tabtop .active a:before{content:"♦";position:absolute;top:15px;left:82px;color:#e31837;font-size:30px;}
.tabtop li a:hover{color:#e31837 !important;text-decoration:none;}
.tabtop .active a:hover{color:#fff !important;}
.tabtop .active a{background-color:#e31837 !important;color:#FFF !important;}
.margin-tops{margin-top:30px;}
.tabtop li a:last-child{padding:10px 22px;}
.thbada{padding:10px 28px !important;}
section p{font-family:'Lato', sans-serif;}
.margin-tops4{margin-top:20px;}
.tabsetting{border-top:5px solid #ebebeb;padding-top:6px;}
.services{background-color:#d4d4d4;min-height:710px;padding:65px 0 27px 0;}
.services a:hover{color:#000;}
.services h1{margin-top:0px !important;}
.heading-container p{font-family:'Lato', sans-serif;text-align:center;font-size:16px !important;text-transform:uppercase;}
</style>


    </body></html>
