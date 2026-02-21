<?php
// $host = "localhost";
// $uname = "root";
// $pwd = "";
// $dbname = "sign1";

// session_start(); // start session to keep user logged in


// $conn = mysqli_connect($host, $uname, $pwd, $dbname);
// if (!$conn) {
//     die("Database connection failed: " . mysqli_connect_error());
// }

// if (isset($_POST['login'])) {
//     $name = mysqli_real_escape_string($conn, $_POST['email']);
       

//     $password = mysqli_real_escape_string($conn, $_POST['password']);

//     // check user in DB
//     $sql = "SELECT * FROM signdetails WHERE email='$email' AND password='$password' LIMIT 1";
//     $result = mysqli_query($conn, $sql);

//      header("Location: ../dashboard/table.php");

// }
$host = "localhost";
$uname = "root";
$pwd = "";
$dbname = "library_management_system";

session_start();

$conn = mysqli_connect($host, $uname, $pwd, $dbname);
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM signdetails 
            WHERE email='$email' AND password='$password' 
            LIMIT 1";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $email;
        header("Location: ../dashboard/table.php");
        exit();
    } else {
        echo "<script>alert('Invalid email or password');</script>";
    }
}
?>

 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('BG.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: "Poppins", Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .main {
    width: 90vw;          /* adjusts to screen width */
    max-width: 1100px;    /* desktop limit */
    min-height: 650px;
    display: flex;
    background-color: rgba(255, 255, 255, 0.55);
    border: 2px solid white;
    border-radius: 39px;
    overflow: hidden;
    box-shadow: 0 0 25px rgba(0, 0, 0, 0.25);
}


        /* Left Image */
        .user {
            width: 50%;
            height: auto;
            object-fit: cover;
            max-width: 100%;
        }

        /* Right Side */
        .right {
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 25px;
            /* REDUCED */
        }

        .pfp {
            width: 150px;
            height: 150px;
            max-width: 100%;
            margin-bottom: 5px;
            /* REDUCED GAP BELOW IMAGE */
        }

        .right h1 {
            font-size: 40px;
            margin-top: 5px;
            /* REDUCED */
            margin-bottom: 10px;
            color: #002147;
        }

        /* Card */
        .card {
            width: 90%;
            max-width: 350px;
            padding: 25px;
            border-radius: 20px;
            background: white;
            text-align: center;
            margin-top: 15px;
            /* REDUCED */
            box-shadow: 4px 4px 12px rgba(97, 95, 95, 0.35);
            animation: fadeIn 0.6s ease-out;
            transition: 0.4s;
        }

        @keyframes fadeIn {
            from {
                transform: scale(0.85);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .card:hover {
            transform: scale(1.04);
        }

        .card label {
            font-size: 20px;
            font-weight: 600;
            color: #003366;
        }

        .card input {
            width: 100%;
            padding: 12px;
            font-size: 17px;
            margin-top: 8px;
            margin-bottom: 18px;
            border-radius: 10px;
            border: 2px solid #93cff4;
            outline: none;
            box-sizing: border-box;
        }

        .bt {
            width: 140px;
            padding: 12px;
            font-size: 18px;
            background-color: #93cff4;
            border: none;
            color: black;
            border-radius: 15px;
            cursor: pointer;
            transition: 0.3s;
            font-weight: bold;
        }

        .bt:hover {
            background-color: #2e2ec6;
            color: white;
        }

        /* Tablet & Mobile */
        @media (max-width: 900px) {
            .main {
                flex-direction: column;
                min-height: auto;
                padding-bottom: 25px;
            }

            .user {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }

            .right {
                width: 100%;
                padding-top: 20px;
                /* TIGHTER */
            }

            .right h1 {
                font-size: 32px;
                margin-top: 5px;
            }

            .card {
                margin-top: 12px;
            }

            .bt {
                width: 100%;
                max-width: 200px;
            }
        }

        /* Small phones */
        @media (max-width: 480px) {
            .user {
                height: 150px;
            }

            .pfp {
                width: 110px;
                height: 110px;
                margin-bottom: 4px;
            }

            .right {
                padding-top: 15px;
            }
        }
        @media (max-width: 900px) {
    .main {
        width: 95vw;
        min-height: auto;
    }
}

@media (max-width: 480px) {
    .main {
        width: 100%;
        border-radius: 25px;
    }
}

    </style>
</head>

<body>
    <form method="POST" action="loginpg.php">
        <div class="main">

            <!-- Left Image -->
            <img src="STK-20251202-WA0002.webp" class="user" alt="User Image">

            <!-- Right Side -->
            <div class="right">
                <img src="pfp.png" class="pfp" alt="Profile">
                <h1></h1>

                <div class="card">
                    <label>EMAIL:</label><br>
                    <input type="email" placeholder="Enter email" required name="email"><br>

                    <label>PASSWORD:</label><br>
                    <input type="password" placeholder="Enter Password" required name="password"><br>

                    <button type="submit" name="login" class="bt">Login</button>
                     <a href="form.php" class="bt" style="text-decoration:none; display:inline-block; text-align:center;">Sign Up</a> 

                </div>
            </div>

        </div>
    </form>
</body>

</html>