<?php
	include('../store/connect.php');
	$roomid = $_POST['roomid'];
	$type=$_POST['type'];
	$rate=$_POST['rate'];
	$description=$_POST['description'];
	mysql_query("UPDATE internet_shop SET name='$type', price='$rate', description='$description' WHERE id='$roomid'");
	header("location: products.php");
?>