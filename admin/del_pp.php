<?php

$id = $_REQUEST['id'];

include("connection.php");
$query="delete from tbl_pp where pp_id='$id'";
mysqli_query($dbCon,$query);
header("Location:prev_principle.php");

 ?>
