<?php 
 $host = "localhost";
$uname = "root";
$pwd = "";
$dbname = "library_management_system";


$conn = mysqli_connect($host, $uname, $pwd, $dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Members</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            background-color: #f8f9fa;
        }

        /* Sidebar */
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(180deg, #2c3e50, #34495e);
            color: #fff;
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
            color: #fff;
        }

        /* Content */
        .content-area {
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
$qury= "select * from memberdetails";

$data = mysqli_query($conn, $qury);
?>

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <nav class="col-md-3 col-lg-2 sidebar p-0">
            <h4 class="sidebar-title">Library</h4>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="table.php">
                        <i class="fa fa-home"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="books.php">
                        <i class="fa fa-book"></i> Books
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="members.php">
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

        <!-- CONTENT -->
        <main class="col-md-9 col-lg-10 content-area">

    <!-- TOP BAR -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Members</h4>

        <a href="memberform.php" class="btn btn-primary">
            <i class="fa fa-plus"></i> Add Member
        </a>
    </div>

    <div class="card">
        <div class="card-header">
            Member List
        </div>


                <div class="card-body p-0">
                    <table class="table table-bordered mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Books Issued</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <?php
if(mysqli_num_rows($data) > 0){
while($row = mysqli_fetch_assoc($data)){
?>
<tr>
<td><?= $row['idno']; ?></td>
<td><?= $row['name']; ?></td>
<td><?= $row['issued']; ?></td>


<td>
<a href="memberedit.php?id=<?= $row['id'];?>"><button class="btn btn-sm btn-warning">edit</button></a>
<a href="memberdelete.php?id=<?= $row['id'];?>"><button class="btn btn-sm btn-danger">delete</button></a>
</td>
</tr>
<?php
}}
?>
                        <tbody>
                            <tr>
                               
                                <td>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </main>

    </div>
</div>

</body>
</html>