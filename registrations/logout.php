<?php
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();

session_destroy();


header('Location: logincolg.php');
?>