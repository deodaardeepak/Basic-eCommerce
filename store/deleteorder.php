<?php
include('connect.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "DELETE from orders WHERE id='$id'";
 header("location: laptops.php");
 mysql_query( $sql);
}

?>