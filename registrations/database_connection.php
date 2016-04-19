<?php

/*Database Basic Constants for connections */
DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD', '');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'Deepak');
date_default_timezone_set('UTC');

/*Not needed values */
//ini_set('SMTP', "mail.myt.mu"); // Overide The Default Php.ini settings for sending mail


//From address
define('EMAIL', 'email@gmail.com');

/*Define the root url where the script will be found such as http://website.com or http://website.com/Folder/ */
DEFINE('WEBSITE_URL', 'http://localhost/efinal/registrations');


// Make the connection:
$conn = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,
    DATABASE_NAME);

if (!$conn) {
    trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}

?>