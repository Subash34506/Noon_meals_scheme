
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
            display:grid;
            margin: 0;
            padding: 0;
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
        .button-container {
            display: flex;
            flex-direction: column;
            gap: 30px;
            text-align: center;
        }
        button {
            padding: 15px 30px;
            font-size: 25px;
           font-family: "https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900";
            color: white;
            background: rgba(0, 0, 0, 0.6);
            border: 2px solid black;
            border-radius: 30px;
            cursor: pointer;
            transition: transform 0.3s ease, background 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        button:hover {
            background: rgba(0, 0, 0, 0.8);
            transform: scale(1.1);
        }
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
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
    
    <div class="button-container">
        <a href="feedbackreply.php">
            <button>Student Feedbacks</button>
        </a>
        <a href="notify.php">
            <button>Notify Student</button>
        </a>
   
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
    <script src="script.js">
       document.getElementById('feedbackButton').addEventListener('click', () => {
            alert('Redirecting to Student Feedbacks!');
        });

        document.getElementById('notifyButton').addEventListener('click', () => {
            alert('Notifying Students!');
        });
    </script>
</body>
</html>

