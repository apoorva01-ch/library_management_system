<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>B.E.D / Education Library</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* ======================
   BASE (MOBILE-FIRST)
====================== */
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

/* Heading */
.b {
    font-weight: 800;
    font-size: clamp(2rem, 6vw, 4rem);
    color: white;
    text-shadow: 0 0 12px black;
    text-align: center;
    margin-bottom: 3rem;
}

/* Button grid container */
.row-gap {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1.5rem;
}

/* Button group */
.btn-group {
    position: relative;
    width: 100%;
    max-width: 22rem;
}

/* Main button */
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
    text-align: center;
}

.glass-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}

/* Dropdown */
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

/* ======================
   ≥ 480px (Large Mobile)
====================== */
@media (min-width: 480px) {
    .glass-btn {
        font-size: 1.3rem;
        min-height: 5rem;
    }
}

/* ======================
   ≥ 768px (Tablet)
====================== */
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

/* ======================
   ≥ 1024px (Desktop)
====================== */
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

<h1 class="b">B.E.D / EDUCATION LIBRARY</h1>

<div class="container text-center">
    <div class="row-gap">

        <div class="btn-group">
            <button class="glass-btn">Teacher Education</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Teaching Skills</a>
                <a class="dropdown-item" href="#">Classroom Management</a>
                <a class="dropdown-item" href="#">Lesson Planning</a>
                <a class="dropdown-item" href="#">Micro-Teaching</a>
                <a class="dropdown-item" href="#">Teaching Practice Records</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">Curriculum & Instruction</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Pedagogy</a>
                <a class="dropdown-item" href="#">Curriculum Design</a>
                <a class="dropdown-item" href="#">Teaching Aids</a>
                <a class="dropdown-item" href="#">Instructional Strategies</a>
                <a class="dropdown-item" href="#">Assessment Methods</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">Educational Psychology</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Learning Theories</a>
                <a class="dropdown-item" href="#">Child Development</a>
                <a class="dropdown-item" href="#">Motivation & Behaviour</a>
                <a class="dropdown-item" href="#">Personality Development</a>
                <a class="dropdown-item" href="#">Guidance & Counselling</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">Educational Technology</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">ICT in Education</a>
                <a class="dropdown-item" href="#">Smart Classroom Tools</a>
                <a class="dropdown-item" href="#">Digital Learning</a>
                <a class="dropdown-item" href="#">Audio-Visual Aids</a>
                <a class="dropdown-item" href="#">Educational Software</a>
            </div>
        </div>

        <div class="btn-group">
            <button class="glass-btn">Research & Assessment</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Research Methodology</a>
                <a class="dropdown-item" href="#">Educational Statistics</a>
                <a class="dropdown-item" href="#">Tools & Techniques</a>
                <a class="dropdown-item" href="#">Question Paper Design</a>
                <a class="dropdown-item" href="#">Evaluation & Measurement</a>
            </div>
        </div>

    </div>
</div>

</body>
</html>

