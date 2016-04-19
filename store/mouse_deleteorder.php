<?php
include('connect.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "DELETE from orders WHERE id='$id'";
 header("location: php.mouse");
 mysql_query( $sql);
}

?>