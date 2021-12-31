<?php
session_start();
if(isset( $_SESSION['name'] ))
{

    $id= $_REQUEST['id'];
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <?php

        $con = new mysqli("localhost","root","","test") or die("connction not sucessfull");
        $sql = "SELECT * FROM `forms` WHERE id= $id";
        $result = mysqli_query($con,$sql) or die("tere se nahi hoga");
        $row= mysqli_fetch_assoc($result);
        ?>
    </head>
    <body>
    <div class="header">
        <h1>CRUD Project</h1>
    </div>
    </div >
    <div class="div1">
        <button><a href="dashboard.php">Dashboard</a></button>
        <button><a href="logout.php">logout</a></button>

    </div>
    <div class="div2">
        <div class="registerform">
            <form method="POST" action="/CRUD/del.php">
                <h1>Delete Form</h1>
                <label> Do you really want to Delete?</label><br>
                <button><a href="/CRUD/del.php?id=<?php echo  $row['id']; ?>">Yes</a></button>
                <button><a style="font-size: small" href="forms.php">No</a></button><br>
                <label>ID:</label><br>
                <input type="text" name="id" value="<?php echo $row['id'] ?>" disabled><br>
                <label> Name:</label><br>
                <input type="text"  name="name" value="<?php echo $row['name'] ?>" disabled><br><br>
                <label> Email:</label><br>
                <input type="email"  name="email" value="<?php  echo $row['email'] ?>"disabled><br><br>
                <label> Phone:</label><br>
                <input type="phone"  name="phone"  value="<?php  echo $row['phone'] ?>" disabled><br><br>
                <label> Address:</label><br>
                <input type="text"  name="address" value="<?php  echo $row['address'] ?>" disabled><br><br>
                <label> Remarks:</label><br>
                <input type="text"  name="remarks"  value="<?php  echo $row['remarks'] ?>" disabled><br><br>
            </form>
        </div>
    </div>
    </body>
    <?php mysqli_close($con)?>
    </html>
    <?php }
else{
    header("location: http://localhost/CRUD/index.php");
}?>
<style>
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
        background-color:;
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
    .registerform{

        height: auto;
        width: 400px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        background-color: wheat;
        padding: 20px;
        margin-top: 5px;
        border-radius: 10px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

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

</style>
<?php ?>