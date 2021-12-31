<?php


$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$address= $_POST['address'];
$remarks= $_POST['remarks'];
$con = new mysqli('localhost','root','','test') or die('connection failed');
$sql="INSERT INTO `forms`(`name`, `email`,`phone`,`address`,`remarks`) VALUES ('".$name."','".$email."','".$phone."','".$address."','".$remarks."')";
if(mysqli_query($con, $sql))
{
    header("location: http://localhost/CRUD/forms.php");
}

?>