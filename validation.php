<?php
$name_error="";
if($_SERVER['REQUEST_METHOD']=="POST") {
    if (empty($_POST['name'])) {
        $name_error = "Name Required";
    } else {
        $name = input_data($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only alphabets and white space are allowed";
        }
    }
}

?>
<?php ?>
<!doctype html>
<html>
<form method="post" action="">
    <label> Name:</label><br>
    <span class="error">* <?php echo $name_error; ?> </span>
    <input type="text" placeholder="Enter Your Name" name="name" ><br><br>
    <button type="sumbit">submit</button>
</form>
</html>
