<?php

$name_err = $email_err = $password_err = $password1_err = " ";
$name = $email = $password = $password1 = "";
if($_SERVER['REQUEST_METHOD']== 'POST')
{
    if(empty($_POST['name']))
        {
            $name_err="Name required";
        }
    else
        {
            $name= $_POST['name'];
        }
    if(empty($_POST['email']))
        {
            $email_err= "Email required";
        }
    else
        {
            $email = $_POST["email"];
            $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
            if (!preg_match($pattern, $email))
            {
                $email_err = "Email is not valid.";
                $email="";
            }
            else
             {
                 $email = $_POST["email"];
             }
        }
    if(empty($_POST['password']))
        {
        $password_err= "Password required";
        }
    else
        {
        $password=trim(md5($_POST['password']));
        }
    if(empty($_POST['password1']))
        {
        $password1_err= "Password required";
        }
    else{
        $password1 = trim(md5($_POST['password1']));
        }
    if(($name!='') && ($email!=''))
        {
            if($password==$password1)
            {

                echo $name;echo $email;echo $password;echo $password1;
                $con = new mysqli('localhost','root','','test');
                $sql="INSERT INTO `users`(`name`,`email`,`password`) VALUES ('".$name."','".$email."','".$password."')";
                $result = mysqli_query($con, $sql) or die('query ka chaker babu bhaiya');
                if(isset($result))
                {
                    header("location: http://localhost/CRUD/index.php");
                }
                else
                {
                    $password_err = $password1_err = "Password do not match";
                }
            }
        }
}
?>
<?php ?>
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

            <button><a href="index.php">Login</a></button>
            <button style="width: auto"><a href="#">Contact Us</a></button>

        </div>
        <div class="div2">
            <div class="registerform">
                <form method="POST">
                        <h1> Register Here </h1>
                        <label> Name:</label><span style="color: red"> <?php echo $name_err; ?></span><br>
                    <input type="text" placeholder="Enter Your Name" name="name" ><br><br>
                        <label> Email:</label><span style="color: red"> <?php echo $email_err; ?></span><br>
                        <input type="text" placeholder="Enter Your Email" name="email" ><br><br>
                        <label> Password:</label><span style="color: red"> <?php echo $password_err; ?></span><br>
                        <input type="password" placeholder="Enter Your password" name="password" > <br><br>
                        <label> Re-Enter Password:</label><span style="color: red"> <?php echo $password1_err; ?></span><br>
                        <input type="password" placeholder="Re-Enter your Password" name="password1" ><br><br>
                        <button type="submit">Sign Up</button>
                    </form>

            </div>
        </div>
        <div class="footer">

        </div>
        <footer>

        </footer>
    </body>
</html>
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

    span{
        font-size: small;
        font-family: "Courier New";
    }
</style>