<?php
include 'connection.php';
$id=$_REQUEST['id'];
//echo $id;
$query1="select * from tbl_alumni where id=$id";
//echo $query1;
//exit();
$res=mysqli_query($dbCon,$query1);
$row=mysqli_fetch_array($res);
//print_r($row);
//exit();
$status=$row['status'];
if($status=='N')
{
	$query="update tbl_alumni set status='Y' where id=$id";
	//echo $query;
	//exit();
	mysqli_query($dbCon,$query);
	header("location:alumni.php?Show on web");
}
if($status=='Y')
{
		$query="update tbl_alumni set status='N' where id=$id";
	//echo $query;
	//exit();
	mysqli_query($dbCon,$query);
	header("location:alumni.php?Not show");
}

?>