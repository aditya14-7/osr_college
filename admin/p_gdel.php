<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$q1="select pic from tbl_press where press_id='$id'";
$resg=mysqli_query($dbCon,$q1);
$rowg=mysqli_fetch_array($resg);
unlink('press/'.$rowg['pic']);
$query="delete from tbl_press where press_id='$id'";
mysqli_query($dbCon,$query);
header("Location:p_viewimages.php");
?>