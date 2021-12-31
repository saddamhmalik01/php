<?php session_start();
if(isset($_SESSION['name']))
{
    header("location: http://localhost/CRUD/dashboard.php");
}
else{
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div class="header">
            <h1>CRUD Project</h1>
        </div>
        </div >
        <div class="div1">

            <button><a href="register.php">Register</a> </button>
            <button style="width: auto"><a href="contact.php">Contact Us</a></button>

        </div>
        <div class="div2">
            <div class="loginform">
                <form method="POST" action="login.php">
                        <h1> Login Form </h1>
                        <label> Email:</label><br>
                        <input type="email" placeholder="Enter Your Email" name="email"><br><br>
                        <label> Password:</label><br>
                        <input type="password" placeholder="Password" name="password"><br><br>
                        <button type="submit">Login</button>
                </form>
            </div>
        </div>
        <div class="footer">

        </div>
    </body>
</html>
<?php } ?>
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
        background-color: ;
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