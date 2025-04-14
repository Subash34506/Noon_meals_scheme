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
    font-family: 'Poppins', sans-serif;
    background-image: url('images/bbackground.jpg');
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    overflow: hidden;
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

.new-user {
    text-align: center;
    margin-top: 10px;
}

.new-user a {
    color: #06557c;
    text-decoration: none;
}

.new-user a:hover {
    text-decoration: underline;
    color: #054c6e;
}

    </style>
</head>
<body>
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

                <button type="submit">Login</button>
                <div class="new-user">
                <p>New user? <a href="apply.php">Apply For Scheme</a></p>
            </div>
            </form>
        </div>
    </div>

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
            $_SESSION['department'] = $department;

            echo "<script>alert('Login successful! Redirecting to your profile.'); window.location.href='student_home.php';</script>";
        } else {
            echo "<script>alert('Invalid Roll Number or Department!');</script>";
        }

        $conn->close();
    } else {
        echo "<script>alert('Roll Number or Department is missing.');</script>";
    }
}
?>

   


</body>
</html>
