<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>pg 5th</title>

<style>
/* ===== RESET ===== */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  min-height: 100vh;
  background-image: url(3.jpg);
  background-size: cover;
  background-position: center;
  font-family: 'Poppins', sans-serif;
  overflow-x: hidden;
}

/* ===== MAIN CONTAINER (CENTER FIX) ===== */
.main {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;      /* horizontal center */
  justify-content: center;  /* vertical balance */
  gap: 2.5rem;
  padding: 2rem 1rem;
}

/* ===== CARD ===== */
.card {
  position: relative;
  width: 100%;
  max-width: 52rem;
  min-height: 22rem;
  padding: 2.5rem 2rem 4.5rem;
  border-radius: 3.4rem;

  background-image: url(bgimage.jpg);
  background-color: rgba(255, 255, 255, 0.25);
  backdrop-filter: blur(12px);
  border: 1px solid rgba(255, 255, 255, 0.4);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);

  transition: transform 0.6s ease, box-shadow 0.6s ease;
}

.card:hover {
  transform: translateY(-10px);
  box-shadow: 0 18px 35px rgba(0, 75, 221, 0.35);
}

/* ===== TITLE ===== */
.card h1 {
  text-align: center;
  font-size: 1.8rem;
  font-weight: 800;
  color: #050834;
  text-shadow: 0 3px 8px rgba(0, 0, 0, 0.35);
}

/* ===== ABSOLUTE BUTTON ===== */
.btn {
  position: absolute;
  right: 3rem;
  bottom: 2.5rem;

  width: 11rem;
  height: 3rem;
  line-height: 3rem;

  background-color: #081e4a;
  color: #D5D5D5;
  border: 2px solid rgba(245, 245, 245, 0.62);
  border-radius: 2rem;

  font-size: 1rem;
  text-align: center;
  text-decoration: none;

  box-shadow: 2px 4px 12px rgba(6, 92, 221, 0.4);
  transition: transform 0.3s ease, background-color 0.3s ease;
}

.btn:hover {
  background-color: #3A63A8;
  transform: scale(1.08);
}

/* ===== BREAKPOINTS ===== */

/* ≥ 480px */
@media (min-width: 480px) {
  .card h1 {
    font-size: 2.1rem;
  }
}

/* ≥ 768px */
@media (min-width: 768px) {
  .main {
    flex-direction: row;
    flex-wrap: wrap;
  }

  .card {
    flex: 1 1 45%;
    max-width: 45rem;
  }
}

/* ≥ 1024px */
@media (min-width: 1024px) {
  .main {
    flex-wrap: nowrap;
  }

  .card {
    max-width: 52rem;
    min-height: 26rem;
  }

  .card h1 {
    font-size: 2.6rem;
  }
}
</style>
</head>

<body>

<div class="main">

  <div class="card">
    <h1>Graduation / MCA library</h1>
    <a href="bcalib.php" class="btn">Click me</a>
  </div>

  <div class="card">
    <h1>B.Ed / Education library</h1>
    <a href="bedlib.php" class="btn">Click me</a>
  </div>

  <div class="card">
    <h1>Commerce / BSC library</h1>
    <a href="commerce.php" class="btn">Click me</a>
  </div>

</div>

</body>
</html>
