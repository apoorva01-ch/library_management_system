<?php
$conn = mysqli_connect("localhost", "root", "", "library_management_system");

if(isset($_POST['id']) && isset($_POST['status'])){

    $id = $_POST['id'];
    $status = $_POST['status'];

    $query = "UPDATE library SET status='$status' WHERE id='$id'";
    $run = mysqli_query($conn, $query);

    if($run){
        echo "Status updated successfully";
    } else {
        echo "Database update failed";
    }

}else{
    echo "Invalid request";
}
?>
