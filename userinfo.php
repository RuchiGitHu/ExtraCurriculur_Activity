<?php

$con = mysqli_connect('localhost', 'root');
if($con){
	echo "connection successful";
}else{
	echo" not connected";
}
mysqli_select_db($con, 'contact_us');

$id=$_POST['id'];
$user_email=$_POST['user_email'];
$number=$_POST['number'];
$massage=$_POST['massage'];

$query = "insert into userinfo(id ,user_email, number, massage) values('$id', '$user_email', '$number','$massage')";
mysqli_query($con, $query);
echo"$query";
mysqli_query($con, $query);

header('location:index.php');		


?>