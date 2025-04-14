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
.menu-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 10px;
            font-family: 'Merriweather', sans-serif;
        }
        .menu-item {
            background-color: #f4f4f9;
            border: 1px solid #ddd;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: 30px;
            flex: 0 0 30%;
            max-width: 100%;
            text-align: center;
            padding: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .menu-item:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }
        .menu-title {
            background-color: #06557c;
            color: white;
            padding: 10px;
            font-size: 1.5rem;
            font-weight: bold;
            border-radius: 5px 5px 0 0;
            font-family: 'Merriweather', sans-serif;
        }
        .menu-content {
            margin-top: 15px;
            text-align: left;
            color: #333;
            line-height: 1.6;
            font-family: 'Merriweather', sans-serif;
        }
        .menu-content li {
            margin: 5px 0;
            font-family: 'Merriweather', sans-serif;
        }
        .menu-content img {
            width: 100%;
            height: 10%;
            border-radius: 5px;
            margin-top: 10px;

        }

        @media (max-width: 768px) {
            .menu-item {
                flex: 0 0 90%;
                max-width: 90%;
            }
        }
        footer {
            font-family:'Merriweather', sans-serif ;
            background-color: #06557c;
            color: #ffffff;
            padding: 20px 10px;
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
            flex: 2;
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
            font-family: 'Merriweather', sans-serif;
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
    <br>
    <div class="section-title">
        <h2>Weekly Menu</h2>
    </div>
    <div class="menu-container">
        <div class="menu-item">
            <div class="menu-title">Monday</div>
            <ul class="menu-content">
                <li>Thayir Satham</li>
                <li>Sambar</li>
                <li>Vegetable Curry</li>
                <img src="images/thayir.jpg" alt="Thayir Satham">
            </ul>
        </div>
        <div class="menu-item">
            <div class="menu-title">Tuesday</div>
            <ul class="menu-content">
                <li>Lemon Rice</li>
                <li>Rasam</li>
                <li>Beans Poriyal</li>
                <img src="images/lemon.jpg" alt="Lemon Rice">
            </ul>
        </div>
        <div class="menu-item">
            <div class="menu-title">Wednesday</div>
            <ul class="menu-content">
                <li>Tomato Rice</li>
                <li>Curd</li>
                <li>Potato Fry</li>
                <img src="images/tomato.jpeg" alt="Tomato Rice">
            </ul>
        </div>
        <div class="menu-item">
            <div class="menu-title">Thursday</div>
            <ul class="menu-content">
                <li>Vegetable Biryani</li>
                <li>Onion Raitha</li>
                <li>Cabbage Poriyal</li>
                <img src="images/veg.jpg" alt="Vegetable Biryani">
            </ul>
        </div>
        <div class="menu-item">
            <div class="menu-title">Friday</div>
            <ul class="menu-content">
                <li>Puliyodarai</li>
                <li>Avial</li>
                <li>Papad</li>
                <img src="images/puli.jpg" alt="Puliyodarai">
            </ul>
        </div>
        <div class="menu-item">
            <div class="menu-title">Saturday</div>
            <ul class="menu-content">
                <li>Coconut Rice</li>
                <li>Vatha Kuzhambu</li>
                <li>Banana Chips</li>
                <img src="images/thenga.jpg" alt="Curd Rice">
            </ul>
        </div>
        <br>
        <br>
        <br>
        <br>
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
                <div class="social-icons">   <a href="https://www.facebook.com/bishophebercollegeofficial"><img src="https://cdn-icons-png.flaticon.com/128/5968/5968764.png" alt="Facebook" width="20"></a>
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