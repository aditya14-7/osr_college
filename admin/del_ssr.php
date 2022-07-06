<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="delete from ssr where ssr_id='$id'";
mysqli_query($dbCon,$query);
header("Location:ssr.php");
?>