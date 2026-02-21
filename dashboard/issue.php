<?php
$host = "localhost";
$uname = "root";
$pwd = "";
$dbname = "library_management_system";

$conn = mysqli_connect($host, $uname, $pwd, $dbname);
if (!$conn) {
    die("DB Error");
}

/* ===== SAVE STATUS (issued / return) ===== */
if (isset($_POST['status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    mysqli_query($conn, "
        UPDATE issuedetails
        SET status='$status'
        WHERE id='$id'
    ");
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        body {
            margin: 0;
            background-color: #f4f6f9;
        }

        /* Sidebar */
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(180deg, #2c3e50, #34495e);
            color: #fff;
        }

        .sidebar h4 {
            text-align: center;
            padding: 15px;
            border-bottom: 1px solid rgba(255,255,255,0.2);
            margin-bottom: 0;
        }

        .sidebar .nav-link {
            color: #dcdcdc;
            padding: 12px 20px;
            font-size: 15px;
        }

        .sidebar .nav-link i {
            margin-right: 10px;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: rgba(255,255,255,0.15);
            color: #fff;
        }

        /* Content */
        .content {
            padding: 25px;
        }

        .card-header {
            background-color: #e9ecef;
            font-weight: bold;
        }
    </style>
</head>

<body>

<?php  
$qury= "select * from issuedetails";

$data = mysqli_query($conn, $qury);
?>

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <nav class="col-md-3 col-lg-2 sidebar p-0">
            <h4>Library</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="table.php">
                        <i class="fa fa-home"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="books.php">
                        <i class="fa fa-book"></i> Books
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="members.php">
                        <i class="fa fa-users"></i> Members
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="issue.php">
                        <i class="fa fa-exchange-alt"></i> Issue / Return
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="reports.php">
                        <i class="fa fa-chart-line"></i> Reports
                    </a>
                </li> -->
            </ul>

            <!-- LOGOUT AT BOTTOM -->
    <div class="p-3 border-top">
        <a class="nav-link text-danger" href="logout.php">
            <i class="fa fa-sign-out-alt"></i> Logout
        </a>
    </div>
        </nav>

        <!-- MAIN CONTENT -->
        <main class="col-md-9 col-lg-10 content">
            <div class="card">
                <div class="card-header">
                    Issue / Return
                </div>

                <div class="card-body p-0">
                   <table class="table table-bordered mb-0">
    <thead class="table-dark">
        <tr>
            <th>Book</th>
            <th>Member</th>
            <th>Due Date</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
    <?php
    if(mysqli_num_rows($data) > 0){
        while($row = mysqli_fetch_assoc($data)){
    ?>
        <tr>
            <td><?= $row['book']; ?></td>
            <td><?= $row['member']; ?></td>
            <td><?= $row['duedate']; ?></td>
            <td>
                <select class="form-select statusSelect"
                        data-id="<?= $row['id']; ?>"
                        onchange="changeBg(this)">
                    <option value="issued" <?= $row['action']=='issued'?'selected':''; ?>>issued</option>
                    <option value="return" <?= $row['action']=='return'?'selected':''; ?>>return</option>
                </select>
            </td>
        </tr>
    <?php
        }
    }
    ?>
    </tbody>
</table>

<script>
function changeBg(select) {
    if (select.value === "return") {
        select.style.backgroundColor = "#dc3545";
        select.style.color = "white";
    } else {
        select.style.backgroundColor = "#198754";
        select.style.color = "white";
    }

    // 🔥 AJAX SAVE
    var id = select.dataset.id;
    var action = select.value;

    $.ajax({
        url: "process2.php",
        type: "POST",
        data: {
            id: id,
            action: action
        },
        success: function (res) {
            console.log(res);
        }
    });
}

// page load pe color set
document.querySelectorAll(".statusSelect").forEach(changeBg);
</script>

  
</body>
</html>