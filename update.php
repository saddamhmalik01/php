<?php
session_start();
if(isset($_SESSION['name']))
{
    $conn = new mysqli("localhost","root","","test") or die("Connection Failed");
    // echo $name= $_POST['name'];
    //echo $email=$_POST['email'];
    //echo $phone= $_POST['phone'];
    //echo $address= $_POST['address'];
    //echo $remarks= $_POST['remarks'];
    //echo $id=$_POST['id'];

    $sql = "UPDATE forms SET name='$name',email='$email',phone='$phone',address='$address',remarks='$remarks' WHERE id='$id'              ";
    if(mysqli_query($conn,$sql))
    {
        mysqli_close($conn);
        header("location: http://localhost/CRUD/forms.php");
    }

?>
<html>
</html>
<?php }
else{
    header("location: http://localhost/CRUD/index.php");
}