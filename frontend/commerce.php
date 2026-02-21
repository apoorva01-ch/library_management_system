<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Commerce / Education Library</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* =====================
   RESET + MOBILE FIRST
===================== */
*,
*::before,
*::after {
    box-sizing: border-box;
}

body {
    margin: 0;
    background-image: url(wassup.jpeg);
    background-size: cover;
    background-position: center;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 2rem 1rem;
    backdrop-filter: blur(4px);
    overflow-x: hidden;
}

/* =====================
   HEADING
===================== */
.b {
    font-weight: 800;
    font-size: clamp(2rem, 6vw, 4rem);
    color: white;
    text-shadow: 0 0 12px black;
    text-align: center;
    margin-bottom: 3rem;
}

/* =====================
   BUTTON GRID
===================== */
.row-gap {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1.5rem;
    margin-bottom: 2rem;
}

/* =====================
   BUTTON GROUP
===================== */
.btn-group {
    position: relative;
    width: 100%;
    max-width: 22rem;
}

/* =====================
   MAIN BUTTON
===================== */
.glass-btn {
    width: 100%;
    min-height: 4.5rem;
    padding: 1rem;
    font-weight: 600;
    border-radius: 12px;
    border: none;
    transition: 0.3s ease;
    box-shadow: 0 4px 14px rgba(0,0,0,0.2);
    cursor: pointer;
    background: #131adc;
    color: white;
    font-size: 1.2rem;
}

.glass-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}

/* =====================
   DROPDOWN
===================== */
.dropdown-menu {
    display: none;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: calc(100% + 0.5rem);
    background: rgba(255,255,255,0.95);
    padding: 0.75rem;
    border-radius: 12px;
    min-width: 100%;
    backdrop-filter: blur(12px);
    z-index: 10;
}

.btn-group:hover .dropdown-menu,
.btn-group:focus-within .dropdown-menu {
    display: block;
}

.dropdown-item {
    padding: 0.5rem 0.75rem;
    display: block;
    border-radius: 6px;
    text-decoration: none;
    color: black;
    font-size: 0.95rem;
}

.dropdown-item:hover {
    background: rgba(19, 26, 220, 0.9);
    color: white;
}

/* =====================
   480px – LARGE MOBILE
===================== */
@media (min-width: 480px) {
    .glass-btn {
        font-size: 1.3rem;
        min-height: 5rem;
    }
}

/* =====================
   768px – TABLET
===================== */
@media (min-width: 768px) {
    body {
        padding-top: 4rem;
    }

    .btn-group {
        max-width: 20rem;
    }

    .glass-btn {
        font-size: 1.4rem;
        min-height: 5.5rem;
    }
}

/* =====================
   1024px – DESKTOP
===================== */
@media (min-width: 1024px) {
    .btn-group {
        max-width: 21rem;
    }

    .glass-btn {
        font-size: 1.5rem;
        min-height: 6rem;
    }
}
</style>
</head>

<body>

<h1 class="b">COMMERCE / EDUCATION LIBRARY</h1>

<div class="container text-center">
    <div class="row-gap">

        <div class="btn-group">
            <button class="glass-btn">FOUNDATION</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Environmental Studies – Erach Bharucha</a>
                <a class="dropdown-item" href="#">Communication Skills – Sanjay Kumar</a>
                <a class="dropdown-item" href="#">Computer Applications – P.K. Sinha</a>
                <a class="dropdown-item" href="#">Value & Ethics – R.R. Gaur</a>
                <a class="dropdown-item" href="#">General Hindi</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">CHEMISTRY</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Organic Chemistry – Bahl</a>
                <a class="dropdown-item" href="#">Inorganic Chemistry – J.D. Lee</a>
                <a class="dropdown-item" href="#">Physical Chemistry – Puri</a>
                <a class="dropdown-item" href="#">Practical Chemistry – Vogel</a>
                <a class="dropdown-item" href="#">NCERT Class 12</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">COMMERCE</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Financial Accounting – T.S. Grewal</a>
                <a class="dropdown-item" href="#">Corporate Accounting</a>
                <a class="dropdown-item" href="#">Micro Economics</a>
                <a class="dropdown-item" href="#">Macro Economics</a>
                <a class="dropdown-item" href="#">Business Law</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">MATHEMATICS</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Calculus – Shanti Narayan</a>
                <a class="dropdown-item" href="#">Advanced Algebra</a>
                <a class="dropdown-item" href="#">Linear Algebra</a>
                <a class="dropdown-item" href="#">Real Analysis</a>
                <a class="dropdown-item" href="#">Differential Equations</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">PHYSICS</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Concept of Physics – H.C. Verma</a>
                <a class="dropdown-item" href="#">University Physics</a>
                <a class="dropdown-item" href="#">Classical Mechanics</a>
                <a class="dropdown-item" href="#">Electricity & Magnetism</a>
                <a class="dropdown-item" href="#">Modern Physics</a>
            </div>
        </div>

    </div>
</div>

</body>
</html>
