<?php
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$desig=$_POST['designation'];
$quali=$_POST['quali'];
$address=$_POST['address'];
$file=$_FILES['file']['name'];
$file_new=rand(000,999).rand(000,9999).$file;
//echo $file;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
if($type=='image/jpeg' or $type=='image/png' or $type='image/jpg')
{
$location="staff/";
include("connection.php");
$query="insert into tbl_nonteacher(name,fname,gender,mobile,designation,qualification,address,pic,dor) values('$name','$fname','$gender','$mobile','$desig','$quali','$address','$file_new',now())";
//echo $query;
mysqli_query($dbCon,$query);
move_uploaded_file($tmp_name,$location.$file_new);
header("Location:viewnonteacher.php");
}
else
{
	echo "<script>
	window.alert('Pls select correct file type');
	window.location.href='addnonteacher.php'
	</script>";
}
?>