<?php
include 'connection.php';
echo "<br>";
if (isset($_POST['submit']))
{
$fname = $_POST['fname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$subject=$_POST['subject'];
$result = mysqli_query($conn,"insert into mobile(fname,email,mobile,subject) values ('$fname','$email','$mobile','$subject')");
if($result)
{
	echo "data inserted";
}else
{
	echo "insertion fail";
}
}
?>


