<?php

use GuzzleHttp\Psr7\Response;

include 'connection.php';

   if($_POST['t']=='dept')
   {
       $id=$_POST['id'];
    $q="select * from tbl_department where dept_id='$id'";
   // echo $q;
    $res=mysqli_query($dbCon,$q);
    $row=mysqli_fetch_array($res);
    echo json_encode($row);
}
else if($_POST['t']=='teacher')
{
   $tid=$_POST['id'];
   //echo $tid;
   $q="select * from tbl_teacher left join tbl_department on tbl_teacher.dept_id=tbl_department.dept_id where tech_id='$tid' ";
   $res=mysqli_query($dbCon,$q);
    $row=mysqli_fetch_array($res);
    echo json_encode($row);

}
if($_POST['t']=='nonteacher')
{
    $nid=$_POST['id'];
    $q="select * from tbl_nonteacher where non_id='$nid'";
    // echo $q;
     $res=mysqli_query($dbCon,$q);
     $row=mysqli_fetch_array($res);
     echo json_encode($row);
    
}
?>