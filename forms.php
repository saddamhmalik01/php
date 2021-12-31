<!DOCTYPE html>
<html>
<?php
session_start();
if(isset( $_SESSION['name'] ))
{

?>
<head>
    <title>Dashboard</title>
</head>
<?php
$con = new mysqli("localhost","root","","test") or die("connction not sucessfull");
$sql = "SELECT * FROM `forms`";
$result = mysqli_query($con,$sql) or die("query execution is not sucessfull");
//echo mysqli_num_rows($result);
if(mysqli_num_rows($result)>0) {
?>


<body>
<div class="header">
    <h2>CRUD Project</h2>
    <h4 style="text-align: right">Welcome <?php echo $_SESSION['name']?> </h4>
</div>
</div >
<div class="div1">
    <button><a href="dashboard.php">Dashboard</a></button>
    <button><a href="logout.php">Logout</a></button>
</div>

<div class="loginform">
    <H2 style="text-align:center">Forms</H2>

    <table>
        <tr>
            <th>Id </th>
            <th>Name </th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Remarks</th>
            <th>Action</th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($result)) {
//    <tr>
//        <td>
//            <?php echo $row['id'];  ?>
            <tr>
                <td>
                    <?php echo $row['id'];  ?>
                </td>
                <td>
                    <?php echo $row['name']; ?>
                </td>
                <td>
                    <?php echo $row['email']; ?>
                </td>
                <td>
                    <?php echo $row['phone']; ?>
                </td>
                <td>
                    <?php echo $row['address']; ?>
                </td>
                <td>
                    <?php echo $row['remarks']; ?>
                </td>
                <td>
                    <?php $_SESSION['id']= $row['id']; ?>
                    <button><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></button>
                    <button><a href="delete.php/?id=<?php echo $row['id'];  ?>">Delete</a></button>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<?php }
}else{
    header("location: http://localhost/CRUD/forms.php");
}
?>
</body>
</html>
<style>
    a{
        text-decoration: none;
    }
    .header{
        height: 100px;
        position: sticky;
        background-color: wheat;
        color:black;
        text-align: center;
        padding-top: 10px;
        font-style: oblique;
        font-size: 20px;
        border-radius: 5px;
    }
    a{
        text-decoration: none;
        color: white;
        font-size: large;
        padding: 3px;


    }
    .div1{
        background-color: wheat;
        height: auto;
        text-align: right;
        border-radius: 5px;
        border: white solid;
        padding: 5px;
        margin-top: 5px;
    }
    .loginform{

        height: auto;
        width: auto;
        display: block;
        margin-left: auto;
        margin-right: auto;
        background-color: wheat;
        padding: 20px;
        margin-top: 5px;
        border-radius: 10px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding-bottom: 50px;

    }
    input{
        width: 300px;
        border-radius: 5px;
        height: 30px;
        font-family: Georgia, 'Times New Roman', Times, serif;

    }
    label{
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
    button{
        width: 100px;
        color: white;
        height: 30px;
        font-family: Georgia, 'Times New Roman', Times, serif;
        border-radius:5px;
        background-color: blueviolet;
    }
    table{
        margin-left: 50px;
        border: darkgrey;
        width: auto;
        border-radius: 10px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        border: 2px solid;
        padding: 5px;

    }
    table tr{
        padding: 10px;
        margin: 10px;
        border: 2px solid;

    }
    table td {
        background-color: wheat;
        border: double;
        padding: 5px;
        border-radius: 2px;
    }
</style>