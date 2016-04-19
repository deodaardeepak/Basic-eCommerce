<?php
session_start();
if(!(isset($_SESSION['Username'])))
{
	header('Location: http://www.djtrinity.in');
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



	<!-- //grid-slider -->
	<?php
	include('headlinks.php');
	?>
	<style type="text/css">
		body{color:white;}
	</style>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->




  </head>
  <body>

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
  				<h2> You already have an account and are logged in! </h2>
  				<br>
  				<div class="col-md-2"></div>
  				<div class="col-md-4">

  					<a href="http://www.djtrinity.in" class="btn btn-danger"><h4>Go back to Main Page</h4></a><br><br>
  					

  				</div>

  				<div class="col-md-4">
  					<a href="logout.php" class="btn btn-warning"><h4>Logout Current Account</h4></a><br><br>
  					
  				</div>
  			</div>
  		</center>
  	</div>
  </div>
  <br>    <br>    <br>    
  <?php
  include('footer.php');
  ?>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>