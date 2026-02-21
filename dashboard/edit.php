<?php
$conn = mysqli_connect("localhost","root","","library_management_system");
if(!$conn){
    die("DB Error");
}

/* ===== FETCH DATA ===== */

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM library WHERE id='$id'"); 
$row = mysqli_fetch_assoc($data);

/* ===== UPDATE DATA ===== */
if(isset($_POST['submit'])){

    $accountno = $_POST["accountno"];
    $title     = $_POST["title"];
    $author    = $_POST["author"];
    $publisher = $_POST["publisher"];
    $year      = $_POST["year"];
    $amount    = $_POST["amount"];

    $update = mysqli_query($conn,"UPDATE library SET
        accountno='$accountno',
        title='$title',
        author='$author',
        publisher='$publisher',
        year='$year',
        amount='$amount'
        WHERE id='$id'
    ");

    if($update){
        header("Location: table.php");
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

<input type="text" name="accountno" class="form-control" value="<?= $row['accountno']; ?>" placeholder="accountno">
<input type="text" name="title" class="form-control" value="<?= $row['title']; ?>" placeholder="title">
<input type="text" name="author" class="form-control" value="<?= $row['author']; ?>" placeholder="author">
<input type="text" name="publisher" class="form-control" value="<?= $row['publisher']; ?>" placeholder="publisher">

<input type="date" name="year" class="form-control" value="<?= $row['year']; ?>">

<input type="text" name="amount" class="form-control" value="<?= $row['amount']; ?>" placeholder="amount">



<button type="submit" name="submit" class="btn btn-primary btn-submit">
submit
</button>

</form>

</div>
</div>

</body>
</html>