<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="delete from aqar where aqar_id='$id'";
mysqli_query($dbCon,$query);
header("Location:aqar.php");
?>