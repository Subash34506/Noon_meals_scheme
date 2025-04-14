<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "noon_meals";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $notification_message = $conn->real_escape_string($_POST['notification_message']);
    $notification_type = $conn->real_escape_string($_POST['notification_type']);
    $notification_date = $conn->real_escape_string($_POST['notification_date']);
    $created_at = date("Y-m-d H:i:s");

   
    $sql = "INSERT INTO notifications (message, type, date, created_at) VALUES ('$notification_message', '$notification_type', '$notification_date', '$created_at')";

    if ($conn->query($sql) === TRUE) {
        
        echo "<script>
            alert('Notification sent successfully!');
            window.location.href = 'notify.php';
        </script>";
        exit();
    } else {
       
        $error_message = addslashes($conn->error);
        echo "<script>
            alert('Error: $error_message');
        </script>";
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
    <link rel="icon" type="image/x-icon" href="images\user.jpg">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <style>
        body {
            font-family:'Merriweather', sans-serif ;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            font-size: 2rem;
            color: #333;
            animation: fadeIn 1s ease-in-out;
        }

        form {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
            animation: slideIn 1s ease-in-out;
            justify-items: center;
            align-items: center;
        }

        label {
            font-size: 1rem;
            color: #555;
        }

        textarea, select, input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: all 0.3s ease-in-out;
        }

        textarea:focus, select:focus, input[type="date"]:focus {
            border-color: #06557c;
            box-shadow: 0 0 8px rgba(0, 188, 212, 0.5);
            outline: none;
        }

        button {
            width: 100%;
            background-color: #06557c;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease-in-out;
        }
        button:hover {
            background-color: #06557c;
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
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
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
            <li><a href="notify.php">REPORT</a></li>
            <li><a href="home.php">LOGOUT</a></li>
            
        </ul>

    </nav>

    <h2>Send Notification</h2><center>
    <form action="notify.php" method="POST">
        <label for="notification_message">Notification Message:</label><br>
        <textarea id="notification_message" name="notification_message" rows="4" cols="50" required></textarea><br><br>
        
        <label for="notification_type">Notification Type:</label><br>
        <select id="notification_type" name="notification_type" required>
            <option value="Holiday">Holiday</option>
            <option value="Special Announcement">Special Announcement</option>
        </select><br><br>
        
        <label for="notification_date">Notification Date:</label><br>
        <input type="date" id="notification_date" name="notification_date" required><br><br>
        
        <button type="submit">Send Notification</button>
    </form>
    </center>
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
});
document.addEventListener("scroll", function () {
    const rulesSection = document.querySelector(".rules");
    const sectionPosition = rulesSection.getBoundingClientRect();
    const windowHeight = window.innerHeight;
  
    if (sectionPosition.top <= windowHeight - 100) {
      rulesSection.classList.add("visible");
      const title = rulesSection.querySelector("h1");
      title.style.visibility = "visible"; 
      const listItems = rulesSection.querySelectorAll("li");
      listItems.forEach((item, index) => {
        item.style.visibility = "visible";
        item.style.animationDelay = `${index * 0.2}s`; 
      });
    }
  });</script>
</body>
</html>