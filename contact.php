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
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

  
    $sql = "INSERT INTO users (name, phone, email) VALUES ('$name', '$phone', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully');</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
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
        .login-container {
            font-family: 'Poppins', sans-serif;
            background: rgba(255, 255, 255, 0.9);
            max-width: 1000px;
            
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            border-width: 40%;
            width: 100%;
            animation: slideFromBottom 0.5s ease forwards;
            overflow-y: scroll;
            height: 150vh;
            justify-content: center;
            display: flex;
        }

        .login-container::-webkit-scrollbar {
            display: flex;
            justify-content: center;

        }

        .login-container:hover {
            transform: translateY(-20px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }
       
    h2 {
      color: #333;
    }

    input[type="text"], input[type="email"] {
      width: 50%;
      padding: 8px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    input[type="submit"] {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }
        .contact-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 20px;
    padding: 20px;
}

.contact-details {
    text-align: center;
    margin-bottom: 20px;
}

.contact-details h2 {
    font-size: 24px;
    color: #333;
}

.contact-details p {
    font-size: 16px;
    color: #555;
    margin: 5px 0;
}

.contact-details a {
    text-decoration: none;
    color: #007BFF;
    font-weight: bold;
}

.contact-details span {
    font-size: 20px;
    margin-right: 10px;
}

.map-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
}

iframe {
    border: 1px solid #ddd;
    border-radius: 5px;
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
            <li><a href="home.php">HOME</a></li>
            <li><a href="about.php">ABOUT US</a></li>
            <li><a href="admin_login.php">ADMIN</a></li>
            <li><a href="student_login.php">STUDENT</a></li>
            <li><a href="contact.php">CONTACT US</a></li>
        </ul>

    </nav>
    <br>
    <br>
    
    <center>
    <div class="login-container">
    <div class="contact-container">
        <div class="contact-details">
            <h2>Heber Alumni Centre (HAC)</h2>
            <p>Bishop Heber College (Autonomous)<br>Tiruchirappalli – 620 017</p>
            <p><span>&#9993;</span> <a href="mailto:alumni@bhc.edu.in">alumni@bhc.edu.in</a></p>
        </div>
        <div class="map-container">
        <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.5285753656074!2d78.666986!3d10.8125381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf5766c36af8f%3A0x6b032561715070a3!2sBishop%20Heber%20College!5e0!3m2!1sen!2sin!4v1692281080723!5m2!1sen!2sin"
    width="700"
    height="450"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
</iframe>
        </div>
        <div>
    <form name="forml" method="post" action="">
        <table width="1038" height="438" align="center">
            <tr>
                <td width="283">&nbsp;</td>
                <td width="202">Name</td>
                <td width="437" height="100"><input name="name" type="text" id="name" required=""></td>
            </tr>
            <tr>
                <td width="202">&nbsp;</td>
                <td>Phone Number</td>
                <td><input name="phone" type="text" id="phone" required=""></td>
            </tr>
            <tr>
                <td width="202">&nbsp;</td>
                <td>Email</td>
                <td><input name="email" type="email" id="email" required=""></td>
            </tr>
            <tr>
                <td></td>
                <td width="202"></td>
                <td>
                    <span class="tp">
                        <input type="submit" name="submit" value="Submit">
                    </span>
                </td>
            </tr>
        </table>
    </form>
</div>
       
    </div>
    </div>
    </center>
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
    <script>document.addEventListener('DOMContentLoaded', () => {
    const mapContainer = document.querySelector('.map-container');
    const toggleButton = document.createElement('button');
    toggleButton.textContent = "Toggle Map";
    toggleButton.style.margin = "10px";
    toggleButton.style.padding = "10px 20px";
    toggleButton.style.border = "none";
    toggleButton.style.borderRadius = "5px";
    toggleButton.style.backgroundColor = "#007BFF";
    toggleButton.style.color = "#fff";
    toggleButton.style.cursor = "pointer";
    
    toggleButton.addEventListener('click', () => {
        if (mapContainer.style.display === "none") {
            mapContainer.style.display = "block";
        } else {
            mapContainer.style.display = "none";
        }
    });

    document.body.insertBefore(toggleButton, mapContainer);
});

    function validateForm() {
      const name = document.getElementById('name').value;
      const phone = document.getElementById('phone').value;
      const email = document.getElementById('email').value;

      if (!name || !phone || !email) {
        alert("All fields are required!");
        return false;
      }

      if (!/^\d{10}$/.test(phone)) {
        alert("Phone number must be 10 digits.");
        return false;
      }

      if (!/^\S+@\S+\.\S+$/.test(email)) {
        alert("Invalid email format.");
        return false;
      }

      return true;
    }
</script>
    <script src="script.js"></script>
</body>
</html>
<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "noon_meals";

    $conn = new mysqli($host, $username, $password, $dbname);

   
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);


    if (empty($name) || empty($phone) || empty($email)) {
      echo "<script>alert('All fields are required!');</script>";
    } elseif (!preg_match('/^\d{10}$/', $phone)) {
      echo "<script>alert('Phone number must be 10 digits.');</script>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<script>alert('Invalid email format.');</script>";
    } else {
     
      $sql = "INSERT INTO contacts (name, phone, email) VALUES ('$name', '$phone', '$email')";

      if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Form submitted and data inserted successfully!');</script>";
      } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
      }
    }

    $conn->close();
  }
  ?>
