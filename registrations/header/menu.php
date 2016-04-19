<?php
//session_start();
?>
<!-- start header_bottom -->
<style type="text/css">
	a:link{color:white;}
	a:visited{color:white;}
	a:hover{color:#428BCA;}
</style>



<link rel="stylesheet" type="text/css" href="header/header.css">
<script src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
		});
	});
</script>
<div class="header-bottom">
	
	<div class="col-md-6">
		<div class="header-bottom_left">
			<?php if(!isset($_SESSION['Username'])) 
			{
				?>
				<span style="font-size:100%;" class="flk"><a href="http://www.djtrinity.in/reg/login.php">Login</a> |<a href="http://www.djtrinity.in/reg/"> Register</a></span>
				<?php } 
				else{
					$na=$_SESSION['Username'];
					echo'<span>Welcome ';
					echo $na;
					echo '</span> &nbsp;&nbsp;<a href="http://www.djtrinity.in/reg/logout.php">Logout</a>   ';
				}
				?>
			</div>
		</div>
		<div class="col-md-6">
			<div class="social">	
				<ul>	
					<li class="facebook"><a href="http://www.facebook.com/djscetrinity" target="_blank"><span> </span></a></li>
					<li class="twitter"><a href="http://www.twitter.com/djscetrinity" target="_blank"><span> </span></a></li>
					<li class="pinterest"><a href="https://www.youtube.com/user/djscetrinity" target="_blank"><span> </span></a></li>	
					<!--<li class="google"><a href="#" target="_blank"><span> </span></a></li>-->
					<li class="tumblr"><a href="http://www.snapchat.com/trinity.djsce" target="_blank"><span> </span></a></li>
					<li class="instagram"><a href="http://www.instagram.com/trinity.djsce/" target="_blank"><span> </span></a></li>		
				</ul>
			</div>
		</div>
		<div class="clear"></div>
		
	</div>
	<!-- end header_bottom -->
	<!-- start menu -->
	<div class="menu" id="menu">
		<div class="container">
			<div class="logo">
				<a href="index.html"><img class="img-resp" style="max-width:150px;" src="images/logo.png" alt=""/></a>
			</div>
			<div class="h_menu4"><!-- start h_menu4 -->
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
					<li><a href="../index.php">Home</a></li>
					<li><a href="../about.php">About</a></li>
					<li><a href="../events.php">Events</a></li>
					<li><a href="../events.php">Attractions</a></li>
					<li><a href="../venue.php">Schedule</a></li>
					<li><a href="../sponsors.php">Sponsors</a></li>
					<li><a href="../team.php">Team</a></li>
					<li><a href="../contact.php">Contact</a></li>
				</ul>
				<script type="text/javascript" src="js/nav.js"></script>
			</div><!-- end h_menu4 -->
			<div class="clear"></div>
		</div>
	</div>
	<!-- end menu -->
	