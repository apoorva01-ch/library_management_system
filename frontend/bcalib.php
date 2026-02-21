<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modern Dropdown - No JS</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* ---------- RESET & BASE ---------- */
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    padding: 4rem 1rem 2rem;
    background-image: url(wassup.jpeg);
    background-size: cover;
    background-position: center;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    backdrop-filter: blur(4px);
    overflow-x: hidden;
}

/* ---------- HEADING ---------- */
.b {
    font-weight: 800;
    font-size: clamp(1.8rem, 6vw, 4rem);
    color: white;
    text-align: center;
    text-shadow: 0 0 12px black;
    margin-bottom: 3rem;
    line-height: 1.2;
}

/* ---------- BUTTONS ---------- */
.glass-btn {
    padding: 0.65rem 1.4rem;
    font-weight: 600;
    font-size: 0.95rem;
    border-radius: 12px;
    border: none;
    transition: 0.3s ease;
    box-shadow: 0 4px 14px rgba(0,0,0,0.2);
    cursor: pointer;
    background: #131adc;
    color: white;
    white-space: nowrap;
}

.glass-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}

/* ---------- DROPDOWN ---------- */
.btn-group {
    position: relative;
    display: inline-flex;
}

.dropdown-menu {
    display: none;
    position: absolute;
    top: 110%;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(255,255,255,0.95);
    padding: 0.6rem;
    border-radius: 12px;
    min-width: 180px;
    backdrop-filter: blur(12px);
    z-index: 100;
}

.btn-group:hover .dropdown-menu {
    display: block;
}

.dropdown-item {
    padding: 0.5rem 0.7rem;
    display: block;
    border-radius: 6px;
    text-decoration: none;
    color: black;
    font-size: 0.9rem;
}

.dropdown-item:hover {
    background: rgba(19, 26, 220, 0.9);
    color: white;
}

/* ---------- LAYOUT ---------- */
.container {
    max-width: 1200px;
    padding: 0;
}

.row-gap {
    margin-bottom: 2rem;
}

.row-flex {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 0.8rem;
}

/* ---------- MEDIA QUERIES ---------- */

/* ≥ 480px (large phones) */
@media (min-width: 480px) {
    .glass-btn {
        font-size: 1rem;
        padding: 0.7rem 1.6rem;
    }

    .row-flex {
        gap: 1rem;
    }
}

/* ≥ 768px (tablets) */
@media (min-width: 768px) {
    body {
        padding-top: 5rem;
    }

    .b {
        margin-bottom: 4rem;
    }

    .glass-btn {
        font-size: 1.05rem;
        padding: 0.75rem 1.8rem;
    }

    .row-gap {
        margin-bottom: 2.5rem;
    }
}

/* ≥ 1024px (desktop) */
@media (min-width: 1024px) {
    .glass-btn {
        font-size: 1.1rem;
        padding: 0.8rem 2rem;
    }

    .row-flex {
        gap: 1.2rem;
    }
}
</style>
</head>

<body>

<h1 class="b">BCA/MCA GRADUATION LIBRARY</h1>

<div class="container text-center">

    <!-- ROW 1 -->
    <div class="row-gap row-flex">

        <div class="btn-group">
            <button class="glass-btn">Journal MCA</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Introduction to Mass Communication</a>
                <a class="dropdown-item" href="#">Mass Communication India</a>
                <a class="dropdown-item" href="#">Reporting for Media</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">Computer Network</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Computer Networks</a>
                <a class="dropdown-item" href="#">Data Communication</a>
                <a class="dropdown-item" href="#">Introduction to Algorithms</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">Programming</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Let Us C</a>
                <a class="dropdown-item" href="#">Programming in ANSI C</a>
                <a class="dropdown-item" href="#">Head First Java</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">Database</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Database System Concepts</a>
                <a class="dropdown-item" href="#">Fundamentals of Database</a>
                <a class="dropdown-item" href="#">SQL Queries</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">UNIX</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">UNIX Concepts & Applications</a>
                <a class="dropdown-item" href="#">UNIX Programming Environment</a>
                <a class="dropdown-item" href="#">Advanced Programming</a>
            </div>
        </div>

    </div>

    <!-- ROW 2 -->
    <div class="row-gap row-flex">

        <div class="btn-group">
            <button class="glass-btn">Data Structure</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Data Structure of C</a>
                <a class="dropdown-item" href="#">Data Structure & Algorithms</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">Computer Architecture</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Computer Organisation</a>
                <a class="dropdown-item" href="#">Computer System Architecture</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">Operating System</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Modern Operating Systems</a>
                <a class="dropdown-item" href="#">Operating System Concepts</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">Visual Basic .NET</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Programming in VB.NET</a>
                <a class="dropdown-item" href="#">Mastering Visual Basic</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">IT</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Fundamentals of IT</a>
                <a class="dropdown-item" href="#">Information Technology</a>
                <a class="dropdown-item" href="#">Introduction to IT</a>
            </div>
        </div>

    </div>

    <!-- ROW 3 -->
    <div class="row-flex">

        <div class="btn-group">
            <button class="glass-btn">Financial Accounting</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Accounting for Management</a>
                <a class="dropdown-item" href="#">Accounting Principles</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">Mathematics</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Engineering Mathematics</a>
                <a class="dropdown-item" href="#">Discrete Mathematics</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">Computer Fundamentals</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Fundamentals of Computers</a>
                <a class="dropdown-item" href="#">Introduction to Computers</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">Operation Research</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Operation Research</a>
                <a class="dropdown-item" href="#">Introduction to OR</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">Compiler / MySQL</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Compiler Principles</a>
                <a class="dropdown-item" href="#">Advanced Compiler Design</a>
                <a class="dropdown-item" href="#">Modern Compiler Implementation</a>
            </div>
        </div>

    </div>

</div>

</body>
</html>
