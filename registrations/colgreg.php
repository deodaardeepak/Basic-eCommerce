<?php

session_start();

include ('database_connection.php');

require_once('class.phpmailer.php');

require_once('class.smtp.php');

if (isset($_POST['formsubmitted'])) {

    $error = array();//Declare An Array to store any error message  

    if (empty($_POST['name'])) {//if no name has been supplied 

        $error[] = 'Please Enter a name ';//add to array "error"

      } else {

        $name = $_POST['name'];//else assign it a variable

      }





 



 if (empty($_POST['mob'])) {//if no mob has been supplied 

        $error[] = 'Please Enter Mobile Number ';//add to array "error"

      } else {

        if(strlen($_POST['mob'])!=10)

        {

          $error[]='Please Enter correct mobile number';

        }

        else



        $mob = $_POST['mob'];//else assign it a variable

    }







    if (empty($_POST['e-mail'])) {

      $error[] = 'Please Enter your E-mail ';

    } else {





      if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['e-mail'])) {

           //regular expression for email validation

        $email = $_POST['e-mail'];

      } else {

       $error[] = 'Your E-Mail Address is invalid  ';

     }





   }





   if (empty($_POST['password'])) {

    $error[] = 'Please Enter Your Password ';

  } else {

    $password = $_POST['password'];

    $password = md5($password);

  }





  





    if (empty($error)) //send to Database if there's no error '



    { // If everything's OK...

$check = "SELECT * FROM reg_users  WHERE Email ='$email'";
$run= mysqli_query($conn, $check);
if($run)
{
     
}


        // Make sure the email address is available:

    $query_verify_email = "SELECT * FROM reg_users  WHERE Email ='$email' AND Activation IS NULL ";

    $result_verify_email = mysqli_query($conn, $query_verify_email);

        if (!$result_verify_email) {//if the Query Failed ,similar to if($result_verify_email==false)

          echo ' Database Error Occured ';

        }











       if (mysqli_num_rows($result_verify_email) == 0) {// IF no previous user is using this email or sap .



      

            // Create a unique  activation code:

          $activation = md5(uniqid(rand(), true));





          $query_insert_user = "INSERT INTO `reg_users` ( `Username`, `Email`, `Password`,`Mob`,`Activation`) VALUES ( '$name', '$email', '$password','$mob','$activation')";





          $result_insert_user = mysqli_query($conn, $query_insert_user);

          if (!$result_insert_user) {

            echo 'Query Failed ';

          }



            if (mysqli_affected_rows($conn) == 1) { //If the Insert Query was successfull.





                // Send the email:

              $message = " To activate your account, please click on this link:\n\n";

              $message .= WEBSITE_URL . '/activate.php?email=' . urlencode($email) . "&key=$activation";

         






              $mail = new PHPMailer(); // create a new object

              $mail->IsSMTP(); // enable SMTP

           //   $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only default=0 no error and no msgs.

              $mail->SMTPAuth = true; // authentication enabled

              $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail

              $mail->Host = "smtp.gmail.com";

              $mail->Port = 465; // or 587 or 465

              $mail->IsHTML(true);

              $mail->Username = "mail@gmail.com";

              $mail->Password = "password";

              $mail->SetFrom("mail@gmail.com");

              $mail->Subject = "Account Activation Link";

              $mail->Body = $message;

              $mail->AddAddress($email);

              $mail->Send();

         /*     if(!$mail->Send())

              {

                echo "Mailer Error: " . $mail->ErrorInfo;

              }

               else

                {

                    echo "Message has been sent";

                }



         */























                // Flush the buffered output.





                // Finish the page:

                /*echo '<div class="alert alert-dismissable alert-success">

                <button type="button" class="close" data-dismiss="alert">×</button>Thank you for

                registering! A confirmation email

                has been sent to '.$email.' Also check your Spam folder for the mail. And Please click on the Activation Link to Activate your account </div>';*/
                echo '<script type="text/javascript">alert("Success check your email for verification link");</script>';





            } else { // If it did not run OK.

              /*echo '<div class="alert alert-dismissable alert-danger">

              <button type="button" class="close" data-dismiss="alert">×</button>You could not be registered due to a system

              error. We apologize for any

              inconvenience.Mail Error</div>';*/
              echo '<script type="text/javascript">alert("System Error");</script>';

            }



        } else { // The email address is not available.

          /*echo '<div class="alert alert-dismissable alert-danger">

          <button type="button" class="close" data-dismiss="alert">×</button>That email

          address or SAP ID has already been registered.

        </div>';*/
        //echo '<script type="text/javascript">document.querySelector(\'.submit\').onclick = function(){swal("Email or SAP already registered");};</script>';
          echo '<script type="text/javascript">alert("Email already Exists");</script>';
      }



    } else {//If the "error" array contains error msg , display them







    /*echo '<div class="alert alert-dismissable alert-danger">

    <button type="button" class="close" data-dismiss="alert">×</button> <ol>';

    foreach ($error as $key => $values) {



      echo '  <li>'.$values.'</li>';
      






    }

    echo '</ol></div>';*/

echo '<script type="text/javascript">alert("Please check all the details");</script>';


  }

  

    mysqli_close($conn);//Close the DB Connection



} // End of the main Submit conditional.







?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Registrations</title>
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

    <link rel="stylesheet" href="../bootstrap-sweetalert-master/lib/sweet-alert.css">
    <script src="js/modernizr.custom.dialog.js"></script>
    <style type="text/css">input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}</style>

<link rel="shortcut icon" href="fav.ico">
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
                <li><a href="logincolg.php"><span> </span>LOGIN</a></li> |
                <li ><a href="colgreg.php">SIGNUP</a></li>
              </ul>
            <div class="cart"><a href="#"><span> </span>CART</a></div>
          <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div> 
      </div>
    </div>
  </div>
  <!---->
   

     <div class="main">
      <div class="col-md-2">
      <div class="header-bottom_left">
      <?php  if(!isset($_SESSION['Username']))       { ?>
      
        <?php 
  } else {
    $na=$_SESSION['Username'];
    echo'<span>Welcome ';
    echo $na;
    echo '</span> &nbsp;&nbsp;<a href="http://folder/registrations/logout.php">Logout</a>   ';
  }

  ?>
      </div>
     </div><div class="row" style="border-color:#000;"><br></div>
     <div class="about_banner_wrap" style="border-color:#000;">
<div class="row" style="border-color:#000;">
</div>          
        </div>
        <div class="container"> </div><center><h1 style="color:white;font-size:200%;border-color: #000;">Register</h1></center>
      <div class="col-md-12">



 
</div>
     <div class="row">
       <div class="col-md-3"></div>
       <div class="col-md-6">
        <form action="colgreg.php" method="post" name="colgreg" id="colgreg" class="form-horizontal">
          <fieldset>
            <br>
            <div class="form-group">
             <div class="col-md-2"></div>
              <div class="col-lg-8">
                <div class="input-group">
                  <input style="border-radius:5px;" type="text" class="form-control" id="name" name="name" size="235" placeholder="Enter your Full name" required>
                 </div>
                </div>
              </div>
              <div class="form-group">
 <div class="col-md-2"></div>
                <div class="col-lg-8">
                  <div class="input-group">
                    <input style="border-radius:5px;" type="email" class="form-control" id="e-mail" name="e-mail" size="235" placeholder="Email ID" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-2"></div>
                  <div class="col-lg-8">
                  
                      <input style="border-radius:5px;" type="number" class="form-control" id="mob" name="mob" size="10" placeholder="Mobile no." required>
           
                    </div>
                  </div>
                         
                    <div class="form-group">
                       <div class="col-md-2"></div>
                      <div class="col-lg-8">
                        
                          <input style="border-radius:5px;" type="password" class="form-control" id="password" name="password" size="25" placeholder="Enter Password." required>
                         
                        </div>
                      </div>
                     
    <br>
<center>

    <br>

    <button type="reset" class="btn btn-danger "><span class="glyphicon glyphicon-refresh"></span>&nbspReset</button>&nbsp&nbsp&nbsp

    <input type="hidden" name="formsubmitted" value="TRUE" />

    <button type="submit" class="btn btn-success submit"><span class="glyphicon glyphicon-log-in"></span>&nbsp&nbspSubmit</button>

  </center>

  <br>

  <br>

</div>

</div>

</fieldset>

</form>

</div>



  <div class="col-md-2"></div>

</div>







<br>



</div>


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
<script src="js/classie.dialog.js"></script>
    <script src="js/dialogFx.js"></script>
    <script>
      (function() {

        var dlgtrigger = document.querySelector( '[data-dialog]' ),
          somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog' ) ),
          dlg = new DialogFx( somedialog );

        dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

      })();
    </script>
</body>
</html>