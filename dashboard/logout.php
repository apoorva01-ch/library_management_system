<?php
session_start();
session_unset();   // remove all session variables
session_destroy(); // destroy session

header("Location: ../frontend/loginpg.php");
exit();


if(!isset($_SESSION['name'])){
    header("Location: ../frontend/loginpg.php");
    exit();
}
?>