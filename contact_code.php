<?php

include 'admin/connection.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mobno = $_POST['mobno'];
$msg = $_POST['msg'];

$q_contact = "insert into tbl_contact (fname,lname,email,mobile,message,date)
          values('$fname','$lname','$email','$mobno','$msg',now())";


          if(mysqli_query($dbCon,$q_contact)){
            header("location:contact.php?msg=Message sent Successfully");
          }else{
            header("location:contact.php?msg=Sorry, something went wrong :(");
          }


?>
