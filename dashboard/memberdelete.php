<?php
$conn = mysqli_connect("localhost","root","","library_management_system");
if(!$conn){
    die("Database Error");
}

if(isset($_GET['id'])){
    $id = $_GET['id'];

    mysqli_query($conn, "DELETE FROM memberdetails WHERE id='$id'");
}

header("Location: members.php");
exit;
?>

