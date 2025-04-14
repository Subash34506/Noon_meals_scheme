<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "noon_meals"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


session_start();


if (!isset($_SESSION['roll_number'])) {
    die("You must be logged in to submit feedback.");
}

$roll_number = $_SESSION['roll_number'];
$department = $_SESSION['department'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $experience = mysqli_real_escape_string($conn, $_POST['experience']);
    $likeMost = mysqli_real_escape_string($conn, $_POST['likeMost']);
    $improve = mysqli_real_escape_string($conn, $_POST['improve']);
    $variety = mysqli_real_escape_string($conn, $_POST['variety']);
    $recommend = mysqli_real_escape_string($conn, $_POST['recommend']);
    $issues = mysqli_real_escape_string($conn, $_POST['issues']);
    $features = mysqli_real_escape_string($conn, $_POST['features']);
    $comments = mysqli_real_escape_string($conn, $_POST['comments']);
    $submission_time = mysqli_real_escape_string($conn, $_POST['submission_time']);
 
    $sql = "INSERT INTO feedback (roll_number, department, experience, like_most, improve, variety, recommend, issues, features, comments,submission_time) 
            VALUES ('$roll_number', '$department', '$experience', '$likeMost', '$improve', '$variety', '$recommend', '$issues', '$features', '$comments','$submission_time')";

    if ($conn->query($sql) === TRUE) {
     
        echo "<script>alert('Feedback submitted successfully. Thank you!'); window.location.href = 'feedback.php';</script>";
    } else {
   
        echo "<script>alert('Error submitting feedback: " . addslashes($conn->error) . "'); window.location.href = 'feedback.php';</script>";
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
            max-width: 700px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 24px;
            color: #06557c;
        }

        .header p {
            font-size: 16px;
            color: #666;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="radio"], input[type="checkbox"] {
            margin-right: 10px;
        }

        .rating {
            display: flex;
            gap: 10px;
        }

        button {
            display: block;
            width: 100%;
            background-color: #06557c;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #06557c;
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
    <div class="container">
        <div class="header">
            <h1>Your Feedback Matters!</h1>
            <p>Help us improve by sharing your thoughts. This form will take only 2 minutes of your time!</p>
        </div>
        <form id="feedbackForm" method="POST">
            <div class="form-group">
                <label>1. How would you rate your overall experience with our food services?</label><br>
                <label><input type="radio" name="experience" value="Excellent" required> Excellent</label>
                <label><input type="radio" name="experience" value="Good"> Good</label>
                <label><input type="radio" name="experience" value="Neutral"> Neutral</label>
                <label><input type="radio" name="experience" value="Poor"> Poor</label>
            </div>
            <div class="form-group">
                <label>2. What did you like the most about our food services?</label><br>
                <textarea name="likeMost" rows="3" placeholder="Your answer..." required></textarea>
            </div>
            <div class="form-group">
                <label>3. What can we improve to make your dining experience better?</label><br>
                <textarea name="improve" rows="3" placeholder="Your answer..." required></textarea>
            </div>
            <div class="form-group">
                <label>4. How would you rate the variety of dishes available?</label><br>
                <div class="rating">
                    <label><input type="radio" name="variety" value="1" required> Below Average</label>
                    <label><input type="radio" name="variety" value="2"> Average</label>
                    <label><input type="radio" name="variety" value="3"> Good</label>
                    <label><input type="radio" name="variety" value="4"> Very Good</label>
                    <label><input type="radio" name="variety" value="5"> Excellent</label>
                </div>
            </div>
            <div class="form-group">
                <label>5. Would you recommend our food services to others?</label><br>
                <label><input type="radio" name="recommend" value="Yes" required> Yes, absolutely!</label>
                <label><input type="radio" name="recommend" value="Maybe"> Maybe</label>
                <label><input type="radio" name="recommend" value="No"> No</label>
            </div>
            <div class="form-group">
                <label>6. Did you encounter any issues or challenges with our food services? If yes, please elaborate.</label><br>
                <textarea name="issues" rows="3" placeholder="Your answer..." required></textarea>
            </div>
            <div class="form-group">
                <label>7. What new dishes or cuisines would you like us to add in the future?</label><br>
                <textarea name="features" rows="3" placeholder="Your answer..." required></textarea>
            </div>
            <div class="form-group">
                <label>8. Any other comments or feedback regarding our food services?</label><br>
                <textarea name="comments" rows="3" placeholder="Your answer..." required></textarea>
            </div>
            <button type="submit" class="submit-btn">Submit Feedback</button>
        </form>
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