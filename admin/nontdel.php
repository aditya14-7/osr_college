<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$q="select * from tbl_nonteacher where non_id='$id'";
$resn=mysqli_query($dbCon,$q);
$rown=mysqli_fetch_array($resn);
unlink('staff/'.$rown['pic']);
$query="delete from tbl_nonteacher where non_id='$id'";
mysqli_query($dbCon,$query);
header("Location:viewnonteacher.php");
?>