<?php
$conn = mysqli_connect("localhost","root","","library_management_system");
if(!$conn){
    die("DB Error");
}

/* ===== FETCH DATA ===== */

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM memberdetails WHERE id='$id'"); 
$row = mysqli_fetch_assoc($data);

/* ===== UPDATE DATA ===== */
if(isset($_POST['submit'])){

    $idno = $_POST["idno"];
    $name = $_POST["name"];
     $issued = $_POST["issued"];

   

    $update = mysqli_query($conn,"UPDATE memberdetails SET
        idno='$idno',
        name='$name',
        issued='$issued'
        
        WHERE id='$id'







    ");

    if($update){
        header("Location: members.php");
        exit;
    } else {
        echo "Update failed: " . mysqli_error($conn);
    }
}


   
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Student</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


</head>

<body>

<div class="popup">
<div class="popup-box">

<h4>Edit Student</h4>

<form method="post">

<input type="hidden" name="id" value="<?= $row['id']; ?>">

<input type="text" name="idno" class="form-control" value="<?= $row['idno']; ?>" placeholder="idno">

<input type="text" name="name" class="form-control" value="<?= $row['name']; ?>" placeholder="name">
<input type="text" name="issued" class="form-control" value="<?= $row['issued']; ?>" placeholder="issued">





<button type="submit" name="submit" class="btn btn-primary btn-submit">
submit
</button>

</form>

</div>
</div>

</body>
</html>