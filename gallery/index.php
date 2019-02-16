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
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
  height: auto;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  background-color: black;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
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

      <h2 style="text-align:center">Slideshow Gallery</h2>

  <div class="container">
    <div class="mySlides">
      <div class="numbertext">1 / 21</div>
      <img src="/assets/images/gallery/1.JPG" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 21</div>
      <img src="/assets/images/gallery/2.JPG" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 21</div>
      <img src="/assets/images/gallery/3.JPG" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 21</div>
      <img src="/assets/images/gallery/4.JPG" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 21</div>
      <img src="/assets/images/gallery/5.JPG" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 21</div>
      <img src="/assets/images/gallery/6.JPG" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">7 / 21</div>
      <img src="/assets/images/gallery/7.JPG" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">8 / 21</div>
      <img src="/assets/images/gallery/8.JPG" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">9 / 21</div>
      <img src="/assets/images/gallery/9.JPG" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">10 / 21</div>
      <img src="/assets/images/gallery/10.JPG" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">11 / 21</div>
      <img src="/assets/images/gallery/11.JPG" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">12 / 21</div>
      <img src="/assets/images/gallery/12.JPG" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">13 / 21</div>
      <img src="/assets/images/gallery/13.JPG" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">14 / 21</div>
      <img src="/assets/images/gallery/14.JPG" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">15 / 21</div>
      <img src="/assets/images/gallery/15.JPG" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">16 / 21</div>
      <img src="/assets/images/gallery/16.JPG" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">17 / 21</div>
      <img src="/assets/images/gallery/17.JPG" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">18 / 21</div>
      <img src="/assets/images/gallery/18.JPG" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">19 / 21</div>
      <img src="/assets/images/gallery/19.JPG" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">20 / 21</div>
      <img src="/assets/images/gallery/20.JPG" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">21 / 21</div>
      <img src="/assets/images/gallery/21.JPG" style="width:100%">
    </div>
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="row">
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/1.JPG" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
      </div>
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/2.JPG" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
      </div>
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/3.JPG" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
      </div>
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/4.JPG" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
      </div>
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/5.JPG" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
      </div>
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/6.JPG" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
      </div>
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/7.JPG" style="width:100%" onclick="currentSlide(7)" alt="Snowy Mountains">
      </div>
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/8.JPG" style="width:100%" onclick="currentSlide(8)" alt="Snowy Mountains">
      </div>
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/9.JPG" style="width:100%" onclick="currentSlide(9)" alt="Snowy Mountains">
      </div>
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/10.JPG" style="width:100%" onclick="currentSlide(10)" alt="Snowy Mountains">
      </div>
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/11.JPG" style="width:100%" onclick="currentSlide(11)" alt="Snowy Mountains">
      </div><div class="column">
        <img class="demo cursor" src="/assets/images/gallery/12.JPG" style="width:100%" onclick="currentSlide(12)" alt="Snowy Mountains">
      </div>
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/13.JPG" style="width:100%" onclick="currentSlide(13)" alt="Snowy Mountains">
      </div>
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/14.JPG" style="width:100%" onclick="currentSlide(14)" alt="Snowy Mountains">
      </div>
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/15.JPG" style="width:100%" onclick="currentSlide(15)" alt="Snowy Mountains">
      </div>
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/16.JPG" style="width:100%" onclick="currentSlide(16)" alt="Snowy Mountains">
      </div>
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/17.JPG" style="width:100%" onclick="currentSlide(17)" alt="Snowy Mountains">
      </div>
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/18.JPG" style="width:100%" onclick="currentSlide(18)" alt="Snowy Mountains">
      </div>
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/19.JPG" style="width:100%" onclick="currentSlide(19)" alt="Snowy Mountains">
      </div>
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/20.JPG" style="width:100%" onclick="currentSlide(20)" alt="Snowy Mountains">
      </div>
      <div class="column">
        <img class="demo cursor" src="/assets/images/gallery/21.JPG" style="width:100%" onclick="currentSlide(21)" alt="Snowy Mountains">
      </div>
    </div>
  </div>
</section>
<footer class=""><center><a href="https://www.facebook.com/PetroVisionOfficial/" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="https://instagram.com/petrovision2018?utm_source=ig_profile_share&igshid=1kt9ff6uyu06q" class="fa fa-instagram"></a>
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


    </body>
    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    //  captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>



    </html>
