<?php
$conn = mysqli_connect("localhost", "root", "", "library_management_system");

if(!$conn){
    die("Connection failed");
}

if(isset($_POST['id']) && isset($_POST['status'])){

    $bookid = $_POST['id'];     // ✅ FIXED
    $status = $_POST['status'];

    $sql = "UPDATE bookdetails SET status='$status' WHERE id='$bookid'";

    if(mysqli_query($conn, $sql)){
        echo "success";
    } else {
        echo "error";
    }
}
?>
