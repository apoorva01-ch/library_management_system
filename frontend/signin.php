<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Responsive Fixed</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background-image: url('BG.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Main Container */
        .main {
            display: flex;
            width: 900px;
            max-width: 95%; /* Responsive width */
            height: 650px;
            background-color: rgba(255, 255, 255, 0.8); /* Slightly more opaque for readability */
            backdrop-filter: blur(10px); /* Adds real glass blur effect */
            border: 2px solid white;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            margin: 20px;
        }

        /* Left Side Image */
        .user-image-container {
            width: 50%;
            height: 100%;
            background-color: #ddd;
        }

        .user-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Right Side Form */
        .form-container {
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 30px;
            overflow-y: auto; /* Allows scrolling inside form if screen is short */
        }

        .pfp {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
            border: 3px solid white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .h1 {
            margin: 5px 0 20px 0;
            font-weight: 800;
            font-size: 2rem;
            color: #333;
        }

        .card {
            width: 100%;
            padding: 10px;
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Inputs */
        .input-group {
            margin-bottom: 15px;
            width: 100%;
        }

        .input-group label {
            display: block;
            font-weight: 700;
            margin-bottom: 5px;
            color: #444;
            font-size: 0.9rem;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 1rem;
            background-color: rgba(255, 255, 255, 0.9);
            transition: border-color 0.3s;
        }

        .input-group input:focus {
            outline: none;
            border-color: #93cff4;
            box-shadow: 0 0 5px rgba(147, 207, 244, 0.5);
        }

        /* Button */
        .bt {
            width: 100%;
            padding: 14px;
            font-size: 1.1rem;
            font-weight: bold;
            color: black;
            background-color: #93cff4;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            margin-top: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .bt:hover {
            background-color: #2e2ec6;
            color: white;
            transform: translateY(-2px);
        }

        /* --- RESPONSIVE CSS (PHONE WIDGET MODE) --- */
        @media screen and (max-width: 768px) {
            .main {
                flex-direction: column; /* Stack image on top of form */
                height: auto; /* Let height grow with content */
                min-height: 80vh;
                width: 90%;
                margin: 20px auto;
            }

            .user-image-container {
                width: 100%;
                height: 200px; /* Shorter banner image on phone */
            }

            .form-container {
                width: 100%;
                padding: 20px;
            }

            .h1 {
                font-size: 1.8rem;
            }

            /* FIXED: Removed negative margin so it doesn't overlap */
            .pfp {
                width: 70px;
                height: 70px;
                margin-bottom: 15px; 
            }
        }
    </style>
</head>
<body>

    <div class="main">
        <div class="user-image-container">
            <img src="STK-20251202-WA0001.webp" class="user-image" alt="Side Image">
        </div>

        <div class="form-container">
            <img src="pfp.png" class="pfp" alt="PFP">
            
            <h1 class="h1">SIGN IN</h1>

            <div class="card">
                <form action="cardpg.php">
                    <div class="input-group">
                        <label for="name">NAME:</label>
                        <input type="text" id="name" placeholder="Enter Name here" required>
                    </div>
                    <div class="input-group">
                        <label for="pass">PASSWORD:</label>
                        <input type="password" id="pass" placeholder="Enter Password here" required>
                    </div>
                    <div class="input-group">
                        <label for="email">EMAIL:</label>
                        <input type="email" id="email" placeholder="Enter Email here" required>
                    </div>
                    <div class="input-group">
                        <label for="sid">STUDENT ID:</label>
                        <input type="text" id="sid" placeholder="Enter Student ID here" required>
                    </div>
                    
                    <button type="submit" class="bt">Sign In</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>