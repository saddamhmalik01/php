<?php
session_start();
if (isset($_SESSION['name']))
{
    session_destroy();
    header("location: http://localhost/CRUD/index.php");
}
?>
<?php ?>
