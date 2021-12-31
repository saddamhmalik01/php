
<?php
    session_start();
    $con = new mysqli("localhost","root","","test") or die("Connection Failed");
    $email=$_POST['email'];
    $password = md5($_POST['password']);
    $sql="select * from users where email='".$email."' and password='".$password."'limit 1";
    $result= mysqli_query($con, $sql);
    if(mysqli_num_rows($result)==1)
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['name']=$row['name'];
        header("location: http://localhost/CRUD/dashboard.php");
    }
    else{
        header("location: http://localhost/CRUD/index.php");
    }
        
?>

<?php ?>