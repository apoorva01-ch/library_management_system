<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Sidebar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        rel="stylesheet">

    
</head>
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

/* Sidebar title */
.sidebar-title {
    padding: 15px;
    text-align: center;
    font-weight: bold;
    border-bottom: 1px solid rgba(255,255,255,0.2);
}

/* Links */
.sidebar .nav-link {
    color: #ddd;
    padding: 12px 20px;
    font-size: 15px;
}

.sidebar .nav-link i {
    margin-right: 10px;
}

/* Hover & active */
.sidebar .nav-link:hover,
.sidebar .nav-link.active {
    background-color: rgba(255,255,255,0.15);
    color: #fff;
}

/* Content area */
.content-area {
    padding: 30px;
}


</style>
<body>

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <nav class="col-md-3 col-lg-2 sidebar p-0">
            <div class="sidebar-sticky">

                <h4 class="sidebar-title">Library</h4>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="table.html">
                            <i class="fa fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="books.html">
                            <i class="fa fa-book"></i> Books
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="members.html" >
                            <i class="fa fa-users"></i> Members
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="issue.html">
                            <i class="fa fa-exchange-alt"></i> Issue / Return
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reports.html">
                            <i class="fa fa-chart-line"></i> Reports
                        </a>
                    </li>
                </ul>

            </div>
        </nav>


        
       

    </div>
</div>

</body>
</html>
