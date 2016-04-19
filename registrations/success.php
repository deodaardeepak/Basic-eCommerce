<?php
session_start();
if(!(isset($_SESSION['Username'])))
{
	header('Location: logincolg.php');
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Logged In</title>


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/home/bootstrap-3.3.6-dist/css/bootstrap.css">
  <link href='../css/home/fonts.css' rel='stylesheet' type='text/css'>
 <script src="../js/home/jquery.min.js"></script>
  <script src="../css/home/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
  <script src="../js/home/modernizr.js" type="text/javascript"></script>
  <link rel="stylesheet" href="../css/home/3d-rotating-navigation/css/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="../css/home/3d-rotating-navigation/css/style.css"> <!-- Resource style -->
  <script src="../css/home/3d-rotating-navigation/js/modernizr.js"></script> <!-- Modernizr -->
<link rel="shortcut icon" href="fav.ico">
    </head>
<body>
<header class="cd-header">
    <a href="#0" class="cd-logo"><img src="../reg/img/logo.png" alt="Logo"></a>
    <a href="#0" class="cd-3d-nav-trigger">
      Menu
      <span></span>
    </a>
  </header>



	<!-- //grid-slider -->
	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->




 <div class="main">
  	<br><br><br>
  	<div class="container">
  		<center>

  			<center>
  				<div class="row centered embed-responsive-item">
  					<img src="djlogo.png" style='max-width:320px;width:100%;height:auto;' class="embed-responsive-item">
  					<br>
  					<img src="logo.png" style='max-width:600px;width:100%;height:auto;'  class="embed-responsive-item">

  					<br>
  				</div>
  			</center>
  			<div class="row">
  				<br><br>
  				<h2 style="color:#ffffff;"> You are successfully logged in! </h2>
  				<br>
  				<div class="col-md-2"></div>
  				<div class="col-md-4">

  					<a style="background-color: #3bafda;color: #ffffff;text-decoration: none;" href="../" class="btn primary"><h4>Go back to Main Page</h4></a><br><br>
  					

  				</div>

  				<div class="col-md-4">
  					<a style="background-color: #ff4d4d;color: #ffffff;text-decoration: none;"  href="logout.php" class="btn primary"><h4 style="color:#ffffff;">Logout Current Account</h4></a><br><br>
  					
  				</div>
  			</div>
  		</center>
  	</div>
  </div>
  <br>    <br>    <br>    
 </div>
 <nav class="cd-3d-nav-container fixed">
 <!-- .cd-3d-nav -->

    <span class="cd-marker color-1"></span> 
  </nav> <!-- .cd-3d-nav-container --> <!-- .cd-3d-nav-container -->
  <!-- for back to top-->

   <div class="container" align="right">
  <a href="#" class="top"><span class="glyphicon glyphicon-chevron-up"></span></a>
   </div>

  <footer align="center" style="position:relative;margin:0 auto;left:0;right:0;bottom:20px;text-align:center;color:white;padding-top:100px;">

  </footer>


<script src="../css/home/3d-rotating-navigation/js/jquery-2.1.1.js"></script>
<script src="../css/home/3d-rotating-navigation/js/main.js"></script> <!-- Resource jQuery -->
<script src="../css/home/back to top/js/index.js"></script>












<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="js/bootstrap.min.js"></script>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>