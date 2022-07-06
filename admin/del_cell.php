<?php   
    $id=$_REQUEST['id'];
   // echo $id;
   include 'connection.php';
   $q="delete from tbl_commitee where cc_id='$id'";
   $res=mysqli_query($dbCon,$q);
   if($res>0)
   {
       header("location:addcell.php?msg=Cell Deleted!!!");
   }
   else
   {
    header("location:addcell.php?msg=Cell not deleted at this time");
   }
?>