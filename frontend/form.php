<?php
$host = "localhost";
$uname = "root";
$pwd = "";
$dbname = "library_management_system";



error_reporting(E_ERROR | E_PARSE);
$conn = mysqli_connect($host, $uname, $pwd, $dbname);

if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    // STEP 1: Duplicate check using mysqli_num_rows
    $email = mysqli_real_escape_string($conn, $email);

    $checkQuery = "SELECT 1 FROM signdetails WHERE email='$email' LIMIT 1";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "<script>
                alert('Email already registered!');
                window.location.href='form.php';
              </script>";
        exit;
    }

    // STEP 2: Insert data
    $sql = "INSERT INTO signdetails (name, email, password, gender)
            VALUES ('$name', '$email', '$password', '$gender')";

    if (mysqli_query($conn, $sql)) {
        header("Location: loginpg.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Styled Form</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
   background-color: #cbdae1e6;
}

.form-container{
    background-color: #bcdbe9e7;
    padding:30px;
    width:100%;
    max-width:400px;
    border-radius:12px;
   box-shadow:  0 0 0 1px rgba(0, 0, 0, 0),
  0 15px 35px rgba(0, 0, 0, 0.5);



}

.form-container h2{
    text-align:center;
    margin-bottom:20px;
    color:#1e293b;
    font-family: overlock;
    font-size: 46px;
}

.form-group{
    margin-bottom:15px;
}

label{
    display:block;
    margin-bottom:6px;
    font-size:14px;
    color:#475569;
}

input[type="text"],
input[type="email"],
input[type="password"]{
    width:100%;
    padding:10px;
    border:1px solid #cbd5e1;
    border-radius:8px;
    outline:none;
    font-size:14px;
}

input:focus{
    border-color:#2563eb;
}

.gender{
    display:flex;
    gap:20px;
    margin-top:5px;
}

.gender label{
    display:flex;
    align-items:center;
    gap:6px;
    font-size:14px;
}

button{
    width:100%;
    padding:12px;
    margin-top:15px;
    background:#2563eb;
    color:#fff;
    border:none;
    border-radius:8px;
    font-size:20px;
    cursor:pointer;
}

button:hover{
    background:#1e40af;
}
</style>

</head>

<body>

<div class="form-container">
    <h2> Sign In</h2>

    <form method="POST" action="form.php">

        <div class="form-group">
            <label>NAME</label>
            <input type="text" name="name" required>
        </div>

        <div class="form-group">
            <label>EMAIL</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>PASSWORD</label>
            <input type="password" name="password" required>
        </div>

        <div class="form-group">
            <label>GENDER</label>
            <div class="gender">
                <label><input type="radio" name="gender" value="male" required> Male</label>
                <label><input type="radio" name="gender" value="female"> Female</label>
            </div>
        </div>

        <button type="submit" name="submit">Sign in</button>

    </form>
</div>

</body>
</html>
