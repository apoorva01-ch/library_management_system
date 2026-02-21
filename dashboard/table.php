<?php 
$host = "localhost";
$uname = "root";
$pwd = "";
$dbname = "library_management_system";
 
$conn = mysqli_connect($host, $uname , $pwd , $dbname);
session_start();

?>
    


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Library Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<style>
body {
    margin: 0;
    background-color: #f8f9fa;
}

/* Sidebar */
.sidebar {
    min-height: 100vh;
    background: linear-gradient(180deg, #2c3e50, #34495e);
    color: white;
}

.sidebar-title {
    padding: 15px;
    text-align: center;
    font-weight: bold;
    border-bottom: 1px solid rgba(255,255,255,0.2);
}

.sidebar .nav-link {
    color: #ddd;
    padding: 12px 20px;
    font-size: 15px;
}

.sidebar .nav-link i {
    margin-right: 10px;
}

.sidebar .nav-link:hover,
.sidebar .nav-link.active {
    background-color: rgba(255,255,255,0.15);
    color: white;
}

/* Content */
.content-area {
    padding: 25px;
}

/* Stat Cards */
.stat-card {
    background: white;
    border-radius: 8px;
    padding: 18px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    font-weight: 600;
}

/* Table Box */
.table-box {
    background: white;
    border-radius: 8px;
    padding: 15px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.08);
}

/* Table Header */
.table th {
    background: #2c3e50;
    color: white;
    font-size: 14px;
}

/* Status Badges */
.status-available {
    background: #28a745;
    color: white;
    padding: 4px 10px;
    border-radius: 5px;
    font-size: 13px;
}

.status-issued {
    background: #ffc107;
    color: black;
    padding: 4px 10px;
    border-radius: 5px;
    font-size: 13px;
}

.status-overdue {
    background: #dc3545;
    color: white;
    padding: 4px 10px;
    border-radius: 5px;
    font-size: 13px;
}

.btn-small {
    padding: 4px 10px;
    font-size: 13px;
}
.anchor{
    color: #ddd;
    text-decoration: none;
}

</style>
</head>

<body>
<?php  
// $qury= "select * from library";

// $data = mysqli_query($conn, $qury);

if (isset($_GET['search']) && $_GET['search'] != '') {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    $qury = "SELECT * FROM library 
             WHERE title LIKE '%$search%' 
             OR author LIKE '%$search%'";
} else {
    $qury = "SELECT * FROM library";
}

$data = mysqli_query($conn, $qury);

?>

 
<div class="container-fluid">
<div class="row">



<!-- SIDEBAR -->
<nav class="col-md-3 col-lg-2 sidebar p-0 d-flex flex-column">

    <h4 class="sidebar-title">Library</h4>

    <!-- MENU -->
    <ul class="nav flex-column flex-grow-1">

        <li class="nav-item">
            <a class="nav-link active" href="table.php">
                <i class="fa fa-home"></i> Dashboard
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="books.php">
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
<main class="col-md-9 col-lg-10 content-area">

<!-- STATS -->
<div class="row g-3 mb-4">

<div class="col-md-3">
<div class="stat-card">
Total Books<br>
<strong>1200</strong>
</div>
</div>

<div class="col-md-3">
<div class="stat-card">
Issued<br>
<strong>340</strong>
</div>
</div>

<div class="col-md-3">
<div class="stat-card">
Overdue<br>
<strong>12</strong>
</div>
</div>

<div class="col-md-3">
<div class="stat-card">
Total Fine<br>
<strong>₹860</strong>
</div>
</div>

</div>

<!-- SEARCH + BUTTONS -->
<div class="d-flex justify-content-between mb-3">

<form method="GET" class="d-flex w-50">
    <input type="text" 
           class="form-control" 
           name="search"
           placeholder="Search by title or author"
           value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
</form>


<div>
<button class="btn btn-primary btn-sm"><a href="intern.php" class="anchor">Add Book</a></button>
<button class="btn btn-dark btn-sm"><a href="issueform.php" class="anchor">issue Book</a></button>
</div>

</div>

<!-- TABLE -->
<div class="table-box">

<table class="table table-bordered table-hover text-center align-middle">

<thead>
<tr>
<th>Acc No</th>
<th>Title</th>
<th>Author</th>
<th>Publisher</th>
<th>Year</th>
<th>Amount ₹</th>
<th>Status</th>
<th>Actions</th>
</tr>
</thead>

<?php
if(mysqli_num_rows($data) > 0){
while($row = mysqli_fetch_assoc($data)){
?>
<tr>
<td><?= $row['accountno']; ?></td>
<td><?= $row['title']; ?></td>
<td><?= $row['author']; ?></td>
<td><?= $row['publisher']; ?></td>
<td><?= $row['year']; ?></td>
<td><?= $row['amount']; ?></td>
   

<td>
    <select class="form-select statusSelect"
            data-id="<?= $row['id']; ?>">

        <option value="available" <?= $row['status']=='available'?'selected':''; ?>>
            available
        </option>

        <option value="issued" <?= $row['status']=='issued'?'selected':''; ?>>
            issued
        </option>

    </select>
</td>










<td>
<a href="edit.php?id=<?= $row['id'];?>"><button class="btn btn-sm btn-warning">edit</button></a>
<a href="delet.php?id=<?= $row['id'];?>"><button class="btn btn-sm btn-danger">delete</button></a>
</td>
</tr>
<?php
}}
?>


<tbody>

<tr>


</tr>

<tr>


</tr>

<tr>


</tr>

</tbody>

</table>
</div>

</main>
</div>
</div>
<script>

function applyBg(select) {
    if (select.value === "issued") {
        select.style.backgroundColor = "#dc3545";
        select.style.color = "white";
    } else {
        select.style.backgroundColor = "#198754";
        select.style.color = "white";
    }
}

// page load
document.querySelectorAll('.statusSelect').forEach(applyBg);

// on change
$(document).on("change", ".statusSelect", function () {
    applyBg(this);

    $.ajax({
        url: "process.php",
        type: "POST",
        data: {
            id: $(this).data("id"),
            status: $(this).val()
        },
        success: function (res) {
            console.log(res);
        }
    });
});
</script>


</body>
</html>
