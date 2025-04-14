
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BHC Noon Meals Scheme</title>
    <link rel="icon" type="image/x-icon" href="images\user.jpg">
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
     
.eligibility {
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
            <li><a href="admin_home.php">HOME</a></li>
            <li><a href="attendance.php">ATTENDANCE</a></li>
            <li><a href="student_db.php">STUDENT DATABASE</a></li>
            <li><a href="applications.php">APPLICATIONS</a></li>
            <li><a href="report.php">REPORT</a></li>
            <li><a href="home.php">LOGOUT</a></li>
            
        </ul>

    </nav>
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "noon_meals";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT roll_number, department, name, distance, single_parent, economic_status FROM applications";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="container">';
    echo '<h2>Eligibility Status</h2>';
    echo '<table border="1" cellpadding="10" cellspacing="0">';
    echo '<tr>
            <th>Roll Number</th>
            <th>Department</th>
            <th>Name</th>
            <th>Eligibility</th>
          </tr>';
    
    while ($row = $result->fetch_assoc()) {
        $roll_number = $row['roll_number'];
        $department = $row['department'];
        $name = $row['name'];
        $distance = $row['distance'];
        $single_parent = $row['single_parent'];
        $economic_status = $row['economic_status'];

        
        $is_eligible = ($distance > 50 || $single_parent === 'Yes' || $economic_status === 'Yes') ? 'Eligible' : 'Not Eligible';


        echo '<tr>';
        echo '<td>' . htmlspecialchars($roll_number) . '</td>';
        echo '<td>' . htmlspecialchars($department) . '</td>';
        echo '<td>' . htmlspecialchars($name) . '</td>';
        echo '<td class="' . ($is_eligible === 'Eligible' ? 'eligibility' : 'not-eligible') . '">' . $is_eligible . '</td>';
        echo '</tr>';
    }

    echo '</table>';
    echo '</div>';
} else {
    echo '<div class="container"><p>No applications found.</p></div>';
}

$conn->close();
?>
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
    <script src="script.js"></script>
</body>
</html>