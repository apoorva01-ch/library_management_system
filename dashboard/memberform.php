<?php 
 $host = "localhost";
$uname = "root";
$pwd = ""; 
$dbname = "library_management_system";


if (isset($_POST['submit'])) {

    if (empty($_POST['idno']) || empty($_POST['name']) || empty($_POST['issued'])) {
        echo "<script>alert('All fields are required');</script>";
        exit;
    }

    // then duplicate check
    // then insert
}



$conn = mysqli_connect($host, $uname, $pwd, $dbname);

// if ($conn) {

//     echo "connected";
// } else {
//     echo "not connected";
// }
if (isset($_POST['submit'])) {

    $idno = $_POST["idno"];
    $name = $_POST["name"];
     $issued = $_POST["issued"];


     // STEP 1: Duplicate check using mysqli_num_rows
    $idno = mysqli_real_escape_string($conn, $idno);

    $checkQuery = "SELECT 1 FROM memberdetails WHERE idno='$idno' LIMIT 1";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "<script>
                alert('Duplicate Member ID!');
                window.location.href='memberform.php';
              </script>";
        exit;
    }

    // STEP 2: Insert data
    $sql = "INSERT INTO memberdetails(idno, name, issued)
            VALUES('$idno', '$name', '$issued')";

   if (mysqli_query($conn, $sql)) {
        header("Location: members.php"); // 🔥 THIS sends you back
        exit;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Member</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#f4f6f9;
}

.form-card{
    background:#fff;
    width:360px;
    padding:25px 22px;
    border-radius:8px;
    box-shadow:0 6px 18px rgba(0,0,0,0.12);
}

.form-card h2{
    text-align:center;
    margin-bottom:20px;
    color:#2c3e50;
}

.form-group{
    margin-bottom:14px;
}

label{
    display:block;
    margin-bottom:6px;
    font-size:14px;
    font-weight:600;
    color:#333;
}

input[type="text"]{
    width:100%;
    padding:9px 10px;
    border:1px solid #cbd5e1;
    border-radius:5px;
    font-size:14px;
}

input[type="text"]:focus{
    border-color:#3498db;
    outline:none;
}

.btn-submit{
    width:100%;
    padding:10px;
    margin-top:10px;
    background:#3498db;
    border:none;
    color:#fff;
    font-size:15px;
    border-radius:5px;
    cursor:pointer;
}

.btn-submit:hover{
    background:#2980b9;
}

.back-link{
    display:block;
    text-align:center;
    margin-top:14px;
    font-size:13px;
    text-decoration:none;
    color:#555;
}

.back-link:hover{
    color:#000;
}
</style>

</head>

<body>

<div class="form-card">
    <h2>Add Member</h2>

    <form method="POST" action="memberform.php">

        <div class="form-group">
            <label>ID</label>
            <input type="text" name="idno">
        </div>

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name">
        </div>

        <div class="form-group">
            <label>Books Issued</label>
            <input type="text" name="issued">
        </div>

        <input type="submit" name="submit" value="Add Member" class="btn-submit">

    </form>

    <a href="members.php" class="back-link">← Back to Members</a>
</div>

</body>

</html>

