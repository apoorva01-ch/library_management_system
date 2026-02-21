<?php 
$host = "localhost";
$uname = "root";
$pwd = ""; 
$dbname = "library_management_system";

$conn = mysqli_connect($host, $uname, $pwd, $dbname);

// ❌ NEVER echo before header()
// remove connected / not connected echo

if (isset($_POST['submit'])) {

    $book = $_POST["book"];
    $member = $_POST["member"];
    $duedate = $_POST["duedate"];

    $sql = "INSERT INTO issuedetails (book, member, duedate)
            VALUES ('$book', '$member', '$duedate')";

    $result = mysqli_query($conn, $sql);

    // ✅ REDIRECT TO ISSUE TABLE
    if ($result) {
        header("Location: issue.php");
        exit();
    } else {
        echo "Issue failed";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Issue Book - Library</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<style>
    * { box-sizing: border-box; margin:0; padding:0; font-family: 'Inter', sans-serif; }

    body {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #f0f2f7;
    }

    .issue-card {
        background: #fff;
        width: 550px;
        padding: 40px;
        border-radius: 14px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.12);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .issue-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 60px rgba(0,0,0,0.15);
    }

    .issue-card h2 {
        text-align: center;
        margin-bottom: 35px;
        color: #2c3e50;
        font-weight: 600;
        font-size: 24px;
        letter-spacing: 0.5px;
    }

    form {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .form-group {
        position: relative;
        display: flex;
        flex-direction: column;
    }

    .form-group.full-width {
        grid-column: span 2;
    }

    label {
        font-size: 13px;
        font-weight: 500;
        color: #555;
        margin-bottom: 6px;
        transition: 0.3s;
    }

    input[type="text"], input[type="date"] {
        padding: 12px 14px;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 14px;
        transition: all 0.3s ease;
        background-color: #fafafa;
    }

    input:focus {
        border-color: #3498db;
        box-shadow: 0 0 8px rgba(52,152,219,0.2);
        background-color: #fff;
        outline: none;
    }

    .btn-submit {
        grid-column: span 2;
        margin-top: 10px;
        padding: 14px 0;
        background: #3498db;
        color: #fff;
        border: none;
        border-radius: 10px;
        font-weight: 600;
        font-size: 16px;
        cursor: pointer;
        box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }

    .btn-submit:hover {
        background: #2c80b4;
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    @media (max-width: 600px) {
        form {
            grid-template-columns: 1fr;
        }
        .form-group.full-width {
            grid-column: span 1;
        }
        .issue-card {
            width: 90%;
            padding: 30px 20px;
        }
    }
</style>
</head>
<body>

<div class="issue-card">
    <h2>📖 Issue Book</h2>
    <form method="POST" action="issueform.php">

        <div class="form-group">
            <label>Book</label>
            <input type="text" name="book" placeholder="Enter book name" required>
        </div>

        <div class="form-group">
            <label>Member</label>
            <input type="text" name="member" placeholder="Enter member name" required>
        </div>

        <div class="form-group full-width">
            <label>Due Date</label>
            <input type="date" name="duedate" required>
        </div>

        <button class="btn-submit" type="submit" name="submit">Issue Book</button>
    </form>
</div>

</body>
</html>
