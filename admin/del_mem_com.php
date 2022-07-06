<?php
include("connection.php");

$query="delete from tbl_commitee_member where mem_id='".$_REQUEST['id']."'";
$res=mysqli_query($dbCon,$query);
if($res>0)
{
    header('location:addmember.php?msg=Member deleted');
}
else
{
    header('location:addmember.php?msg=Member not deleted at this time');
}
?>