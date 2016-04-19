<?php
session_start();
ob_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">


      <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />  
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="../js/jquery.min.js"></script>
    <!-- //grid-slider -->


  <?php
      include('headlinks.php');
      ?>
 <!-- //grid-slider -->
 <style type="text/css">
  body{color:white;}
</style>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->


      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Reset Password</title>

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
                <li ><a href="register.html">SIGNUP</a></li>
              </ul>
            <div class="cart"><a href="#"><span> </span>CART</a></div>
          <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div> 
      </div>
    </div>
  </div>


    <?php



    include ('database_connection.php');

    if (isset($_POST['formsubmitted'])) {
    // Initialize a session:
      session_start();
    $error = array();//this array will store all error messages


    if (empty($_POST['e-mail'])) {//if the email supplied is empty 
      $error[] = 'You forgot to enter the temporary password ';
    } else {



      $new=$_POST['pass'];
      $new=md5($new);
      $temp = $_POST['e-mail'];
    } 

 $dbc = mysqli_connect("localhost","root","databasename","password");

    
       if (empty($error))//if the array is empty , it means no error found
       { 



        $query_check_credentials = "SELECT * FROM pwdrec WHERE (string='$temp')";

        

        $result_check_credentials = mysqli_query($dbc, $query_check_credentials);
        if(!$result_check_credentials){//If the QUery Failed 
          echo 'Query Failed ';
        }

        if (@mysqli_num_rows($result_check_credentials) == 1)//if Query is successfull 
        { // A match was made.




            $res = mysqli_fetch_array($result_check_credentials, MYSQLI_ASSOC);//Assign the result of this query to a Variable

            $id=$res['id'];




            $query_modify2 = "INSERT INTO `pwdrec` ( `id`, `string`) VALUES ( '$id', '$ranstr')";
            $query_modify = "UPDATE `reg_users` SET `Password`='$new' WHERE `Memberid`='$id' ";



            $result_modify = mysqli_query($dbc, $query_modify);



            header("Location: pwdthanks.php");


          }else
          { 

            $msg_error= 'Either Your Account does not match or temporary password is incorrect';
          }

        }  else {



          echo '<br><br><div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button> <ol>';
          foreach ($error as $key => $values) {

            echo '  <li>'.$values.'</li>';



          }
          echo '</ol></div>';

        }


        if(isset($msg_error)){

          echo '<br><br><div class="lert alert-dismissable alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button><br>'.$msg_error.' <br><br></div>';
        }
    /// var_dump($error);
        mysqli_close($dbc);

} // End of the main Submit conditional.



?>
<body>


 <br><br>

 <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <br>


    <center>
    
   </center>



   <br>
   <br>

   <form action="pwdreset.php" method="post" class="form-horizontal">
    <fieldset>

      <br>

      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Temp Pass:</label>
        <div class="col-lg-8">
          <div class="input-group">
            <input type="password" class="form-control" id="e-mail" name="e-mail" size="235" placeholder="Enter temporary password">
            <span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span></div>
          </div>
        </div>
        <br>
        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">New Pass:</label>
          <div class="col-lg-8">
            <div class="input-group">
              <input type="password" class="form-control" id="pass" name="pass" size="235" placeholder="Enter the new password">
              <span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span></div>
            </div>
          </div>
          <center>
            <br>
            <button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span>&nbspCancel</button>&nbsp&nbsp&nbsp
            <input type="hidden" name="formsubmitted" value="TRUE" />
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-log-in"></span>&nbsp&nbspSubmit</button></center>
            <br>
            <br>
          </div>
        </div>
      </fieldset>
    </form>
  </div>


  <div class="col-md-2"></div>

</div>
<br><br>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
