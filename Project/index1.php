<?php
$con=mysqli_connect("localhost","root","","koury");
  $nav_q="SELECT * FROM nav";
  $res_nav=mysqli_query($con,$nav_q);


?>



<html>

<head>



	<title>Koury</title>







	<link rel="stylesheet" href="css/index.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

 <style >
   * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */

/* Number text (1/3 etc) */

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

 </style>
<style >


div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 200px;
}



div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
  font-family: "Open Sans";
font-size:20px;font-weight: bolder;
	color: #000000;


}
</style>




</head>

<body>

<header class="header">

	<div class="header-limiter">

		<img src=".\images\logo.png">

		<nav>


<?php
			while ($nav_data =mysqli_fetch_array($res_nav)) {


	echo(
		"
			<a href=# ><b>".$nav_data["name"]."</b></a>");
			
	}

?>
	
		<a href="#" class="login">Log In</a>
			
		</nav>

	</div>

</header>

<section class="proposal">
<center>
<p>SOUTHERN CALIFORNIA'S<br> MOST RELIABLE QUALITY CONTROL<br> & INVESTIGATE SERVICES COMPANY<br>

	Results You Can Trust Since 1992</p>

<form method="POST" action="actions.php">
	<input id="button" type="submit" name="request" value="REQUEST PROPOSAL">
	<input id="button" type="submit" name="contact" value="CONTACT">
	
</form>

</center>

</section>
<br>
<div style="padding-left: 200px;

font-size:15px;font-weight: bolder;
font-family: Open Sans;"
class="container" id="inspect">


	<img src=".\images\inspect.png"	
 style="float:left; ">
 <h1>
 	SPECIAL INSPECTION
 </h1>
<p style="font-size:20px;
font-family: Open Sans;font-weight: bolder;
padding-left: 50px;">
Verifying Requirements & code structure of critical structre
<button id="button" onclick="window.location.href='#'">Learn More</button>
</p>
</div>
<br>
<br>
<br>
<div style="padding-left: 200px;
padding-bottom: 80px;
font-size:15px;font-weight: bolder;
font-family: Open Sans;"
class="container" id="inspect">


	<img src=".\images\geotech.png"	
 style="float:left; ">
 <h1>
GEOTECHNICAL SERVICES
 </h1>
<p style="font-size:20px;
font-family: Open Sans;font-weight: bolder;">
Comprehensive testing & reports for large scale project
<button id="button" onclick="window.location.href='#'">Learn More</button>
</p>

</div>

<div class="container_stat">

	<img  src=".\images\section3.png" align="center" width="100%" style="height: 500px">
	  <div class="centered">
<table width="100%" align="center" bgcolor="white" cellpadding="25px" cellspacing="50px" >
	<tr>
		<td>
			250+ INSPECTORS
		</td>
		<td>
			250+ ACTIVE PROJECTS
		</td>
	</tr>
</table>



	  </div>

</div>

<div>
	<img src=".\images\francisco.png" height="400px" 	
 style="float:left;size:  ">
 <br>

 <h1 id="text">
<u> 	
ABOUT KOURY 

<br>

ENGINEERING & TESTING
</u>
 </h1>	
<p class="para">
	Koury Engineering provides testing and inspection
services for construction projects throughout 
Southern California.
<br>
<br>

We serve as the Independent Testing Lab and the 
EOR for projects of all sizes from 60 story high-
rises in Downtown LA to DSA shade structures at 
your neighborhood school. From freeway lane 
additions, to OSHPD infrastructure upgrades, 
we can be your trusted compliance partner.
</p>







</div>



<br>
<br>
<br>
<br>


<div>
	<center>

 <h1 id="text"><u>FEATURED PROJECT</u></h1>
 <h2 class="para">
 	"Grand Hope Lofts"
 </h2>	
<p class="para" style="width: 75%;">



888 South Hope Street is a residential tower in downtown Los Angeles that feature 
526 residential apartment units atop ground floor retail space. The building will also i
nclude a penthouse clubhouse, a 33,000 square-foot, open-air amenity deck, and additional
 amenity space on the eighth floor.  A 25-foot bridge will connect the eighth floor amenity space
 in the residential tower with the open-air amenity deck, which is situated atop an existing adjacent 
parking garage.	
</p>

</center>

</div>










<br><br>



<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
 <?php
$con=mysqli_connect("localhost","root","","koury");
  $sld="SELECT * FROM slider";
 $res_sld=mysqli_query($con,$sld);

while ($slide =mysqli_fetch_array($res_sld)) {



echo("

  <div class=mySlides fade>
    <img src=".$slide["name"].".png style=width:100%>
  </div>
");
}
?> 

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>








 <h1 id="text"><u>SPECIALIZED SECTORS</u></h1>


<?php

$con=mysqli_connect("localhost","root","","koury");
  $gal="SELECT * FROM gallery";

  $res_gal=mysqli_query($con,$gal);

while ($imgs =mysqli_fetch_array($res_gal)) {



echo("
  <div class=gallery>

    <img src=".$imgs["name"].".png alt=Forest width=600 height=400>
  </a>
  <div class=desc >".$imgs["cap"]."</div>
</div>

");

 
}
?>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br>




<div class="lifooter">
<br>
 <h1 id="text_white"><u>CERTIFICATIONS INCLUDE</u></h1>

<br>

<ul > 
 <?php
$con=mysqli_connect("localhost","root","","koury");

  $list="SELECT * FROM list";

  $res_list=mysqli_query($con,$list);

while ($li =mysqli_fetch_array($res_list)) {



echo("

<li class=li>
".$li["name"]."
</li>


");
}
?>
</ul>
<br>
<br>
<footer id="sticky">
LOOKING TO TALK TO SOMEONE? NEED ANSWERS NOW?<br> 
CONTACT US, WE’RE ALWAYS HERE TO HELP.
</footer>

</div>











<script >
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
}
</script>








</body>

</html>
