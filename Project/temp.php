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
<style >
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
			<a href=# ><b>".$nav_data["name"]."</b></a>");
			
	}

?>
	
		<a href="#" class="login">Log In</a>
			
		</nav>

	</div>

</header>
<footer id="stick">
LOOKING TO TALK TO SOMEONE? NEED ANSWERS NOW?<br> 
CONTACT US, WE’RE ALWAYS HERE TO HELP.
</footer>

</body>

</html>
