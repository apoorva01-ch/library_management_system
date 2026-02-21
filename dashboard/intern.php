 <?php
$host = "localhost";
$uname = "root";
$pwd = "";
$dbname = "library_management_system";

$conn = mysqli_connect($host, $uname, $pwd, $dbname);

if (isset($_POST['submit'])) {

    // if (empty($_POST['idno']) || empty($_POST['name']) || empty($_POST['issued'])) {
    //     echo "<script>alert('All fields are required');</script>";
    //     exit;
    // }

    // then duplicate check
    // then insert
}


if (isset($_POST['submit'])) {

    $accountno = $_POST["accountno"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $publisher = $_POST["publisher"];
    $year = $_POST["year"];
    $amount = $_POST["amount"];

        // STEP 1: Duplicate check
        $checkQuery = "SELECT 1 FROM library WHERE accountno='$accountno' LIMIT 1";

    $accountno = mysqli_real_escape_string($conn, $accountno);
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
     header("Location: intern.php?error=duplicate");
exit;


    }


    $sql = "INSERT INTO library(accountno, title, author, publisher, year, amount)
            VALUES ('$accountno', '$title', '$author', '$publisher', '$year', '$amount')";

    $result = mysqli_query($conn, $sql);

    // ✅ REDIRECT AFTER INSERT
    if ($result) {
        header("Location: table.php");
        exit();
    } else {
        echo "Error inserting data";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Library Management</title>

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: "Segoe UI", Tahoma, sans-serif;
        background: linear-gradient(135deg, #e9eef5, #f7f9fc);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .library-card {
        background: #fff;
        width: 520px;
        padding: 30px 35px;
        border-radius: 12px;
        box-shadow: 0 20px 45px rgba(0,0,0,0.15);
    }

    .library-card h2 {
        text-align: center;
        margin-bottom: 30px;
        color: #2c3e50;
        letter-spacing: 0.5px;
        font-weight: 600;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .full-width {
        grid-column: span 2;
    }

    label {
        font-size: 13px;
        margin-bottom: 6px;
        color: #555;
        font-weight: 600;
    }

    input {
        height: 42px;
        padding: 8px 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        transition: 0.25s;
    }

    input:focus {
        border-color: #3498db;
        box-shadow: 0 0 0 3px rgba(52,152,219,0.15);
        outline: none;
    }

    .btn-submit {
        margin-top: 25px;
        width: 100%;
        height: 45px;
        background: #3498db;
        border: none;
        border-radius: 8px;
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-submit:hover {
        background: #2c80b4;
    }

    @media (max-width: 600px) {
        .library-card {
            width: 90%;
        }

        .form-grid {
            grid-template-columns: 1fr;
        }

        .full-width {
            grid-column: span 1;
        }
    }
</style>
</head>

<body>

<div class="library-card">
    <h2>📚 Add New Book</h2>

    <form method="POST" action="intern.php">

        <div class="form-grid">

            <div class="form-group">
                <label>Account Number</label>
                <input type="text" name="accountno" required>
            </div>

            <div class="form-group">
                <label>Year</label>
                <input type="number" name="year">
            </div>

            <div class="form-group full-width">
                <label>Book Title</label>
                <input type="text" name="title" required>
            </div>

            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" required>
            </div>

            <div class="form-group">
                <label>Publisher</label>
                <input type="text" name="publisher">
            </div>

            <div class="form-group full-width">
                <label>Amount</label>
                <input type="text" name="amount">
            </div>

        </div>

        <button class="btn-submit" type="submit" name="submit">
            Save Book
        </button>

    </form>
</div>

</body>
</html>
