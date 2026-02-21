 <?php 
 $host = "localhost";
$uname = "root";
$pwd = "";
$dbname = "library_management_system";

if (isset($_POST['submit'])) {

    if (empty($_POST['idno']) || empty($_POST['name']) || empty($_POST['issued'])) {
        // echo "<script>alert('All fields are required');</script>";
        exit;
    }

    // then duplicate check
    // then insert
}



$conn = mysqli_connect($host, $uname, $pwd, $dbname);

if ($conn) {

    echo "connected";
} else {
    echo "not connected";
}
if (isset($_POST['submit'])) {

    $accountno = $_POST["accountno"];
    $title = $_POST["title"];
    
// STEP 1: Duplicate check
    $accountno = mysqli_real_escape_string($conn, $accountno);

    $checkQuery = "SELECT 1 FROM bookdetails WHERE accountno='$accountno' LIMIT 1";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "<script>
                alert('Duplicate Account Number!');
                window.location.href='bookform.php';
              </script>";
        exit;
    }

    // STEP 2: Insert
    $sql = "INSERT INTO bookdetails(accountno, title)
            VALUES('$accountno', '$title')";

   
    $sql = "insert into bookdetails(accountno, title) 
    value('$accountno', '$title')";

    $result = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="bookform.php">

        <label>Account NO.</label>
        <input type="text" name="accountno"><br>
        <br>

        <label>Title</label>
        <input type="text" name="title"><br>
        <br>

        
        <input type="submit" name="submit">
        <br>


    </form>
</body>

</html>
