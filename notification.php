<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "noon_meals";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM notifications ORDER BY created_at DESC";
$result = $conn->query($sql);
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
.notification-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 600px;
            margin: 0 auto;
        }

        .notification {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            animation: fadeIn 0.8s ease-in-out;
        }

        .notification h4 {
            margin: 0;
            color: #333;
        }

        .notification p {
            color: #555;
            margin: 10px 0;
        }

        .notification small {
            color: #888;
            display: block;
        }

        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 15px 0 0;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .notification-container {
            width: 80%;
            max-width: 600px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            animation: fadeInContainer 1s ease-in-out;
        }

        .notification {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            padding: 15px;
            animation: slideIn 0.8s ease-in-out;
        }

        .notification h4 {
            margin: 0;
            color: #2c3e50;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .notification p {
            margin: 10px 0;
            color: #34495e;
        }

        .notification small {
            color: #7f8c8d;
            display: block;
        }

        hr {
            border: none;
            border-top: 1px solid #ecf0f1;
            margin: 10px 0 0;
        }

        .no-notifications {
            text-align: center;
            font-size: 1.2rem;
            color: #95a5a6;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(10px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeInContainer {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .section-title{
    justify-self: center;
    font-family: 'Merriweather', sans-serif;
}
        .section-title h2 {
    font-size: 32px;
    font-weight: 700;
    position: relative;
    justify-content: center;
    color:#2b2320;
    font-family: 'Merriweather', sans-serif;
}
.section-title h2:before {
    margin: 0 15px 10px 0;
}
.section-title h2:after {
    margin:  0 0 10px 15px;
}
.section-title h2:before, .section-title h2:after {
    content: "";
    width: 50px;
    height: 2px;
    background: #f03c02;
    display: inline-block;
    justify-content: center;
    position: relative;
    box-sizing: border-box;
    font-family: 'Merriweather', sans-serif;
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
    <div class="section-title">
        <h2>Notification</h2>
    </div>
    <div class="notification-container">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='notification'>";
                echo "<h4>" . htmlspecialchars($row['type']) . "</h4>";
                echo "<p>" . htmlspecialchars($row['message']) . "</p>";
                echo "<small>Date: " . htmlspecialchars($row['date']) . "</small>";
                echo "<small>Posted on: " . htmlspecialchars($row['created_at']) . "</small>";
                echo "<hr>";
                echo "</div>";
            }
        } else {
            echo "<p class='no-notifications'>No notifications available.</p>";
        }
        ?>
    </div>
    <?php $conn->close(); ?>
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