<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BHC Noon Meals Scheme</title>
    <link rel="icon" type="image/x-icon" href="images/user.jpg">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">S
    <style>
        body {
            font-family:'Merriweather', sans-serif ;
            margin: 0;
            padding: 0;
            overflow: auto;
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
  max-width: 800px;
  margin: 20px auto;
  padding: 20px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

h1 {
  margin: 0;
}

.view-toggle button {
  margin-left: 10px;
  padding: 10px 15px;
  border: none;
  background: #007bff;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
}

.view-toggle button:hover {
  background: #0056b3;
}

.upcoming-events h2 {
  margin-top: 20px;
  border-bottom: 2px solid #007bff;
  padding-bottom: 5px;
}

#event-list {
  list-style: none;
  padding: 0;
}

#event-list li {
  margin: 10px 0;
  padding: 10px;
  background: #e9f5ff;
  border-left: 5px solid #007bff;
  border-radius: 5px;
}

#event-list li span {
  font-weight: bold;
  display: block;
}

#event-list li .date {
  color: #555;
  font-size: 0.9em;
}
    </style>
</head>
<div>
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
    <div class="back">
    <div class="container">

  
</div>
</div>
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
    <script>
   
    const currentUrl = window.location.pathname.split('/').pop();

const navLinks = document.querySelectorAll('.nav-links a');

navLinks.forEach(link => {
    if (link.getAttribute('href') === currentUrl) {
        link.classList.add('active');
    }
});

    
    </script>
    <script src="script.js"></script>
</body>
</html>