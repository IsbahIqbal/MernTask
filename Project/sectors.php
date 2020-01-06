






<?php
$con=mysqli_connect("localhost","root","","koury");
  $nav_q="SELECT * FROM nav";
  $res_nav=mysqli_query($con,$nav_q);


?>



<html>

<head>



	<title>Sectors</title>

	<link rel="stylesheet" href="css/index.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
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





	#stick {
  width:100%;
  height:44px;
  padding-top:80px;
  background:black;
  color:white;
  font-weight:bold;
  font-size:24px;
  text-align:center;
font-family: Open Sans;
  top: 0;
  bottom:0;          
  left:0; 

  padding-bottom: 80px;          
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
			<a href=".$nav_data["ref"]." ><b>".$nav_data["name"]."</b></a>");
			
	}

?>
	
		<a href="#" class="login">Log In</a>
			
		</nav>

	</div>


<br>
<br><br>


 <h1 id="text"><u>SECTORS</u></h1>


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
<br>
<br>
<br>
<br>
<br>













<!--

</header>
<footer id="stick">
LOOKING TO TALK TO SOMEONE? NEED ANSWERS NOW?<br> 
CONTACT US, WE’RE ALWAYS HERE TO HELP.
</footer>
-->
</body>

</html>
