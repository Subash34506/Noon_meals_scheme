<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "noon_meals";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM attendance a JOIN stu_attendance sa ON a.roll_number = sa.roll_number";


$result = $conn->query($sql);


if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "Roll Number: " . $row["roll_number"] . " - Attendance Status: " . $row["attendance_status"] . "<br>";
    }
} 

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BHC Noon Meals Scheme</title>
    <link rel="icon" href="images/user.jpg">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <style>
     body {
        font-family:'Merriweather', sans-serif ;
    display:grid;
    margin: 0;
    padding: 0;
}
.navbar {
    font-family:'Merriweather', sans-serif ;
    background-color: #ffffff;
    border-bottom: 2px solid #ccc;
   margin-top: 5px;
    padding: 20px 20px;
    display:flex;
    justify-content:center;
}
.nav-links {
    list-style: none;
    display: flex;
    gap: 30px;
}

.nav-links a {
    text-decoration: none;
    color: #333;
    font-size: 16px;
}

.nav-links a:hover {
    color: #ff5722;
}
.logo
{
    margin-left: 5px;
    justify-content:left;

}
.nav-links a.active {
    color: #ff5722; 
    border-bottom: 2px solid #ff5722;
    font-weight: bold;
}

.nav-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 20px;
}
.nav-logo {
    height: 60px;
    width: auto;
    margin-right: 10px;
}

.back {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url('images/originalbg.jpg');
    background-size: cover;
    background-position: center;
}

@keyframes slideFromBottom {
    0% { transform: translateY(100%); opacity: 0; }
    100% { transform: translateY(0); opacity: 1; }
}

.login-container {
    background: rgba(255, 255, 255, 0.9);
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    max-width: 400px;
    width: 100%;
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
           width: 92%;
           padding: 10px;
           margin-bottom: 15px;
           border: 1px solid black;
           border-radius: 5px;
           font-size: 14px;
           font-family: 'Poppins', sans-serif;
       }
       select{
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
footer {
            font-family:'Merriweather', sans-serif ;
            background-color: #06557c;
            color: #ffffff;
            padding: 20px 0;
            position:relative;
        }

        .footer-container {
            display:flex;
            justify-content: space-around;
            flex-wrap: wrap;
            text-align:left;
            padding: 0 20px;
            position: relative;
        }

        .footer-section {
            background-color:  #06557c;
            flex: 1;
            margin: 10px;
            min-width: 200px;
            font-family:'Merriweather', sans-serif';
            
        }

        .footer-section h4 {
            font-size: 18px;
            margin-bottom: 10px;
            border-bottom: 2px #ffffff;
           font-family:'Merriweather', sans-serif' ;
        }

        .footer-section p,
        .footer-section ul {
            font-size: 15px;
            margin: 0;
            padding: 0;
        }

        .social-icons {
            display: flex;
            gap: 10px;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 10px;
            border-top: 1px solid #ffffff;
            font-size: 14px;
        }

    </style>
</head>
<body>
<nav class="navbar">
           <a href="home.php" class="logo">
            <img src="images/nav-logo.png" alt="Logo" class="nav-logo">
        </a>
        <ul class="nav-links">
            <li><a href="admin_home.php">HOME</a></li>
            <li><a href="attendance.php">ATTENDANCE</a></li>
            <li><a href="student_db.php">STUDENT DATABASE</a></li>
            <li><a href="applications.php">APPLICATIONS</a></li>
            <li><a href="report.php">REPORT</a></li>
    
            <li><a href="home.php">LOGOUT</a></li>
        </ul>

    </nav>

    <div class="back">
        <div class="login-container">
            <img src="images/bhc_logo.png" alt="BHC Logo">
            <h2>Noon Meals Scheme</h2>

            <form method="POST">
                <label for="roll_number">Roll Number</label>
                <input type="text" id="roll_number" name="roll_number" placeholder="Enter Roll Number" required>

                <label for="department">Department</label>
                <select id="department" name="department" required>
                <option value="">Select Department</option>
                <option value="BSc Computer Science">BSc Computer Science</option>
                <option value="BSc Physics">BSc Physics</option>
                <option value="BSc Chemistry">BSc Chemistry</option>
                <option value="BSc Mathematics">BSc Mathematics</option>
                <option value="BCom General">BCom General</option>
                <option value="BCom Accounting">BCom Accounting</option>
                <option value="BA English">BA English</option>
                <option value="BA History">BA History</option>
                <option value="BBA">BBA</option>
                <option value="MSc Physics">MSc Physics</option>
                <option value="MSc Computer Science">MSc Computer Science</option>
                <option value="MSc Mathematics">MSc Mathematics</option>
                <option value="MA English">MA English</option>
            </select>

            <button type="submit">Check Attendance</button>
            </form>
        </div>
    </div>
  <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h4>Bishop Heber College</h4>
                <p>Post Box No. 615,<br>
                   Tiruchirappalli - 620 017<br>
                   Tamil Nadu, South India.</p>
                <p>Phone: 0431 - 2770136<br>
                   Fax: 0431 - 2770293<br>
                   Email: <a href="mailto:principal@bhc.edu.in" style="color: #ffffff">principal@bhc.edu.in</a></p>
            </div>
            <div class="footer-section">
                <h4>Our Social Networks</h4>
                <div class="social-icons">
                   
                    <a href="https://www.facebook.com/bishophebercollegeofficial"><img src="https://cdn-icons-png.flaticon.com/128/5968/5968764.png" alt="Facebook" width="20"></a>
                    <a href="https://twitter.com/Heber_Tweets?s=08"><img src="https://cdn-icons-png.flaticon.com/128/5969/5969020.png" alt="Twitter" width="20"></a>
                    <a href="https://www.youtube.com/channel/UCLdStGHBVRnwMXSXW21-BSQ"><img src="https://cdn-icons-png.flaticon.com/128/1384/1384060.png" alt="Youtube" width="20"></a>
                    <a href="https://www.instagram.com/heber_official"><img src="https://cdn-icons-png.flaticon.com/128/1384/1384063.png" alt="Instagram" width="20"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Bishop Heber College. All Rights Reserved.</p>
        </div>
    </footer>
    <?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roll_number = $_POST['roll_number'];
    $department = $_POST['department'];

    if ($roll_number && $department) {
       
        $conn = new mysqli('localhost', 'root', '', 'noon_meals');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $query = "SELECT * FROM applications WHERE roll_number = '$roll_number' AND department = '$department'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
          
            session_start();
            $_SESSION['roll_number'] = $roll_number;
            echo "<script>alert('Login successful! Redirecting to your profile.'); window.location.href='stu_attendance.php';</script>";
        } else {
            echo "<script>alert('Invalid Roll Number or Department!');</script>";
        }

        $conn->close();
    } else {
        echo "<script>alert('Roll Number or Department is missing.');</script>";
    }
}
?>
  <script src="script.js"></script>

</body>
</html>
