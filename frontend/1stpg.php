<!-- chatgpt -->

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">


  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>SSI</title>

  <style>
    /* ===================== GLOBAL FIXES ===================== */
    * {
      box-sizing: border-box;
    }

    img, video {
      max-width: 100%;
      height: auto;
    }

    body {
      font-family: "Poppins", Arial, sans-serif;
      background: #e9f0ff;
     padding: clamp(12px, 3vw, 30px);
      text-align: center;
      background-image: url('library2.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      margin: 0;
      height: 320px;
    }

    /* ===================== HEADER ===================== */
    .h1 {
      border-radius: 8px;
      background-color: #93cff4;
      color: #040440;
      width: 100%;
      padding: 14px 10px;
      margin-bottom: 18px;
      font-size: 50px;
      font-weight: bold;
      box-shadow: 0 5px 12px rgba(0, 0, 0, 0.15);
    }

    .h1 h1 {
      margin: 0;
        font-size: clamp(26px, 5vw, 52px); /* smaller max size */
  line-height: 1.1;                 /* tighter vertical spacing */

    }

    /* ===================== LOGO ===================== */
    .logo {
      width: 60%;
     max-width: 260px;
  margin-bottom: 12px;
      filter: drop-shadow(0 5px 10px rgba(0, 0, 0, 0.15));
    }

    /* ===================== TOGGLE ===================== */
    #toggle {
      display: none;
    }

    .btn-center {
      display: flex;
      justify-content: center;
      width: 100%;
    }

    label.student-btn {
      display: inline-block;
       padding: 12px 28px;
      background: linear-gradient(135deg, #6aa0ff, #4177ff);
      color: white;
      border-radius: 30px;
      cursor: pointer;
      font-size: 18px;
      font-weight: 600;
      box-shadow: 0 8px 20px rgba(65, 119, 255, 0.25);
      transition: 0.3s ease;
      position: relative;
      max-width: 100%;
      text-align: center;
    }

    label.student-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 12px 26px rgba(65, 119, 255, 0.35);
    }

    label.student-btn::after {
      content: none;
      font-size: 14px;
      margin-left: 10px;
      transition: 0.3s;
    }

    #toggle:checked + .logo + .btn-center label.student-btn::after {
      transform: rotate(180deg);
    }

    /* ===================== OPTIONS BOX ===================== */
    .options {
      margin-top: 15px;
      width: 90%;
      max-width: 290px;
      margin-left: auto;
      margin-right: auto;
      border-radius: 20px;
      background: #ffffff;
      box-shadow: 0 10px 28px rgba(0, 0, 0, 0.1);
      transform: translateY(-15px);
      opacity: 0;
      pointer-events: none;
      transition: 0.4s ease;
      overflow: hidden;
    }

    #toggle:checked ~ .options {
      transform: translateY(0px);
      opacity: 1;
      pointer-events: all;
       padding: 14px 16px 18px;
    }

    .title {
      font-size: 18px;
      font-weight: 600;
      color: #344767;
      margin-bottom: 12px;
    }

    /* ===================== BUTTONS ===================== */
    .btn-box button {
      width: 100%;
      padding: 14px;
      margin: 10px 0;
      border: none;
      border-radius: 14px;
      font-size: 17px;
      cursor: pointer;
      font-weight: 600;
      transition: 0.3s ease;
    }

    .btn-box a {
      text-decoration: none;
      display: block;
      width: 100%;
      height: 100%;
    }

    .login-btn {
      background: #edf2ff;
      color: #3456d1;
      box-shadow: inset 3px 3px 7px #d7dfff,
                  inset -3px -3px 7px #ffffff;
    }

    .signin-btn {
      background: #e8fff2;
      color: #0d8a5a;
      box-shadow: inset 3px 3px 7px #c9f5df,
                  inset -3px -3px 7px #ffffff;
    }

    .btn-box button:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    /* ===================== MOBILE ONLY TWEAKS ===================== */
    @media (max-width: 600px) {
      .title {
        font-size: 16px;
      }

      .btn-box button {
        font-size: 25px;
        justify-content: center;
        height: 50px;
      }
    }

    @media (max-width: 768px) {
      body {
        background-position: top center;
      }
    }
  </style>
</head>

<body>

  <div class="h1">
    <h1>SHREE SAI INSTITUTE OF TECHNOLOGY</h1>
  </div>

  <input type="checkbox" id="toggle">

  <img src="STK-20251201-WA0002 (2).webp" class="logo" alt="Institute Logo">

  <div class="btn-center">
    <label for="toggle" class="student-btn">Student</label>
  </div>

  <div class="options">
    <div class="title">Choose an Option</div>

    <div class="btn-box">
      <button class="login-btn">
        <a href="loginpg.php">Login</a>
      </button>

      <button class="signin-btn">
        <a href="signin.php">Sign In</a>
      </button>
    </div>
  </div>

</body>
</html>
 





