<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BHC Noon Meals Scheme</title>
    <link rel="icon" type="image/x-icon" href="images/user.jpg">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <style>
        body {
            font-family:'Merriweather', sans-serif ;
            margin: 0;
            padding: 0;
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
        .navbar {
    font-family:'Merriweather', sans-serif ;
    background-color: #ffffff;
    border-bottom: 2px solid #ccc;
    padding: 20px 20px;
    display:flex;
    justify-content:center;
}
.nav-links {
    list-style: none;
    display: flex;
    gap: 20px;
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
    padding: 10px 20px;
}



.nav-logo {
    height: 60px;
    width: auto;
    margin-right: 10px;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 20px;
}

.nav-links a {
    font-family:'Merriweather', sans-serif ;
    text-decoration: none;
    color: #333;
    font-size: 16px;
    padding: 5px 10px;
}

.nav-links a.active {
    font-family:'Merriweather', sans-serif ;
    color: #ff5722; 
}
.container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .container p {
            margin: 10px 0;
            font-size: 16px;
        }
     
.eligible {
    color: green;
    font-weight: bold;
}


.not-eligible {
    color: red;
    font-weight: bold;
}

    </style>
</head>
<body>
    <nav class="navbar">
           <a href="home.php" class="logo">
            <img src="images/nav-logo.png" alt="Logo" class="nav-logo">
        </a>
        <ul class="nav-links">
        <li><a href="student_home.php">HOME</a></li>
            <li><a href="attendance_ratio.php">ATTENDANCE RATIO</a></li>
            <li><a href="menu.php">MENU</a></li>
            <li><a href="notification.php ">NOTIFICATION</a></li>
            <li><a href="eligibility.php">ELIGIBILITY</a></li>
            <li><a href="feedback.php">FEEDBACK</a></li>
            <li><a href="home.php">LOGOUT</a></li>
          
        </ul>
    </nav>
    <br>
    <?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "noon_meals";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['roll_number'])) {
    die("Access denied. Please log in.");
}


$logged_in_roll_number = $_SESSION['roll_number'];


$sql = "SELECT roll_number, name, department, distance, single_parent, economic_status 
        FROM applications 
        WHERE roll_number = $logged_in_roll_number LIMIT 1"; // Limit to 1 to ensure only one result
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="container">';
    echo '<h2>Eligibility Status</h2>';

   
    $row = $result->fetch_assoc();
    $roll_number = $row['roll_number'];
    $name = $row['name'];
    $department = $row['department'];
    $distance = $row['distance'];
    $single_parent = $row['single_parent'];
    $economic_status = $row['economic_status'];

    
    $eligibility = ($distance > 50 || $single_parent === 'Yes' || $economic_status === 'Yes') ? 'Eligible' : 'Not Eligible';
    
  
    $eligibility_class = ($eligibility === 'Eligible') ? 'eligible' : 'not-eligible';

  
    echo '<div class="eligibility-card">';
    echo '<p><strong>Name:</strong> ' . htmlspecialchars($name) . '</p>';
    echo '<p><strong>Roll Number:</strong> ' . htmlspecialchars($roll_number) . '</p>';
    echo '<p><strong>Department:</strong> ' . htmlspecialchars($department) . '</p>';

    echo '<p><strong>Distance from College:</strong> ';
    echo ($distance > 50) ? 'Greater than 50 km' : '50 km or less';
    echo '</p>';

    echo '<p><strong>Economic Status:</strong> ';
    echo ($economic_status === 'Yes') ? 'Economically disadvantaged' : 'Economically stable';
    echo '</p>';

    echo '<p><strong>Single Parent Family:</strong> ';
    echo ($single_parent === 'Yes') ? 'Yes' : 'No';
    echo '</p>';


    echo '<p class="' . $eligibility_class . '"><strong>Overall Status:</strong> ' . $eligibility . '</p>';
    echo '</div>';

    echo '</div>';
} else {
    echo '<div class="container"><p>No application found for the logged-in user.</p></div>';
}

$conn->close();
?>



    <br>
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
    <script>const currentUrl = window.location.pathname.split('/').pop();


const navLinks = document.querySelectorAll('.nav-links a');


navLinks.forEach(link => {
    if (link.getAttribute('href') === currentUrl) {
        link.classList.add('active');
    }
});</script>
    <script src="script.js"></script>
</body>
</html>