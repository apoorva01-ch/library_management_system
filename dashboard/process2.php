<?php
$conn = mysqli_connect("localhost","root","","library_management_system");
if(!$conn){
    die("DB Error");
}

$id = $_POST['id'];
$action = $_POST['action'];

$sql = "UPDATE issuedetails SET action='$action' WHERE id='$id'";

if(mysqli_query($conn,$sql)){
    echo "saved";
}else{
    echo "error";
}
