<?php
session_start();
if($_SESSION['name']) {
    $id = $_REQUEST['id'];
    $con = new mysqli('localhost', 'root', '', 'test');
    $sql = "DELETE FROM `forms` WHERE id='$id'";
    if (mysqli_query($con, $sql)) {
        mysqli_close($con);
        header("location: http://localhost/CRUD/forms.php");
    }
}
else{
    header("location: http://localhost/CRUD/index.php");
}

?>;