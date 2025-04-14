<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BHC Noon Meals Scheme</title>
    <link rel="icon" type="image/x-icon" href="images/user.jpg">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <style>
       body {
           font-family: 'Poppins', sans-serif;
           background-image: url(images/bbackground.jpg);
           display: flex;
           justify-content: center;
           align-items: center;
           height: 100vh;
           margin: 0;
           overflow: hidden;
       }

       .back {
           display: flex;
           justify-content: center;
           align-items: center;
           height: 100vh;
           background-image: url('');
           background-size: cover;
           background-position: center;
       }

       @keyframes slideFromBottom {
           0% {
               transform: translateY(100%);
               opacity: 0;
           }
           100% {
               transform: translateY(0);
               opacity: 1;
           }
       }

       .login-container {
           background: rgba(255, 255, 255, 0.9);
           padding: 40px;
           border-radius: 20px;
           box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
           max-width: 400px;
           width: 100%;
           position: relative;
           animation: slideFromBottom 1s ease forwards;
       }

       .login-container:hover {
           transform: translateY(-20px);
           box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
       }

       .login-container h2 {
           margin-bottom: 20px;
           text-align: center;
           color: black;
           font-family: 'Poppins', sans-serif;
       }

       .login-container img {
           display: block;
           margin: 0 auto 20px;
           width: 80px;
       }

       label {
           display: block;
           font-size: 14px;
           margin-bottom: 5px;
           color: black;
       }

       input {
           width: 100%;
           padding: 10px;
           margin-bottom: 15px;
           border: 1px solid black;
           border-radius: 5px;
           font-size: 14px;
           font-family: 'Poppins', sans-serif;
       }

       button {
           font-family: 'Poppins', sans-serif;
           width: 100%;
           padding: 10px;
           background: #06557c;
           color: #fff;
           border: none;
           border-radius: 5px;
           font-size: 16px;
           cursor: pointer;
           transition: background 0.3s ease;
       }

       button:hover {
           background: #054c6e;
       }

      
    </style>
</head>
<body>
    <div class="back">
        <div class="login-container">
            <img src="images/bhc_logo.png" alt="BHC Logo">
            <h2>Noon Meals Scheme</h2>

            <form class="login-form" method="POST">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Enter Username" required>

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Enter Password" required>

                <button type="submit">Login</button>
            </form>

            
        </div>
    </div>

    <?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = isset($_POST['username']) ? trim($_POST['username']) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : '';

        if (empty($username) || empty($password)) {
            echo '<script>alert("Username or password is missing.");</script>';
        } else {
         
            $conn = new mysqli('localhost', 'root', '', 'noon_meals');

          
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            
            $stmt = $conn->prepare("SELECT username, password FROM admin_login WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->bind_result($db_username, $db_password);

            if ($stmt->fetch()) {
               
                if ($password === $db_password) { 
                    $_SESSION['username'] = $db_username;
                    echo "<script>alert('Login successful!'); window.location.href='admin_home.php';</script>";
                } else {
                    echo "<script>alert('Invalid Password!'); window.location.href='admin_login.php';</script>";
                }
            } else {
                echo "<script>alert('Invalid Username!'); window.location.href='admin_login.php';</script>";
            }

            $stmt->close();
            $conn->close();
        }
    }
    ?>
</body>
</html>
