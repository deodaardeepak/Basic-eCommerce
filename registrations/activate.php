<?php
session_start();
ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Activate Your Account</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

      <div class="header">
    <div class="top-header">
      <div class="container">
        <div class="top-header-left">
          <ul class="support">
            <li><a href="#"><label> </label></a></li>
            <li><a href="#">24x7 live<span class="live"> support</span></a></li>
          </ul>
          <ul class="support">
            <li class="van"><a href="#"><label> </label></a></li>
            <li><a href="#">Free shipping <span class="live">on order over 500</span></a></li>
          </ul>
          <div class="clearfix"> </div>
        </div>
        <div class="top-header-right">
      
           <!---->
          <div class="clearfix"> </div> 
        </div>
        <div class="clearfix"> </div>   
      </div>
    </div>
    <div class="bottom-header">
      <div class="container">
        <div class="header-bottom-left">
          <div class="logo">
            <a href="index.html"><img src="../images/logo.png" alt=" " /></a>
          </div>
          <div class="search">
            <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
            <input type="submit"  value="SEARCH">

          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="header-bottom-right">         
            <div class="account"><a href="login.html"><span> </span>YOUR ACCOUNT</a></div>
              <ul class="login">
                <li><a href="login.html"><span> </span>LOGIN</a></li> |
                <li ><a href="colgreg.php">SIGNUP</a></li>
              </ul>
            <div class="cart"><a href="#"><span> </span>CART</a></div>
          <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div> 
      </div>
    </div>
  </div>

     <?php
     $dbc = mysqli_connect("localhost","root","","drashti");

     if (isset($_GET['email']) && preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', $_GET['email']))
     {
        $email = $_GET['email'];
    }
if (isset($_GET['key']) && (strlen($_GET['key']) == 32))//The Activation key will always be 32 since it is MD5 Hash
{
    $key = $_GET['key'];
}


if (isset($email) && isset($key))
{

    // Update the database to set the "activation" field to null

    $query_activate_account = "UPDATE reg_users SET Activation=NULL WHERE(Email ='$email' AND Activation='$key')LIMIT 1";


    $result_activate_account = mysqli_query($dbc, $query_activate_account) ;

    // Print a customized message:
    if (mysqli_affected_rows($dbc) == 1)//if update query was successfull
    {

        echo '<div class="alert alert-dismissable alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>Your account is now active. Goto 
        <a href="http://djtrinity.in/reg/login.php"> Login Page</a> or Goto   <a href="http://djtrinity.in"> Main Page</a>
    </div>';

} else
{
    echo '<div class="alert alert-dismissable alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>Oops !Your account could not be activated. Please recheck the link or contact the system administrator.</div>';

}

mysqli_close($dbc);

} else {
    echo '<div class="alert alert-dismissable alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>Error Occured .</div>';
}


?>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>