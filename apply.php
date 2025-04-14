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
    $roll_number = $_POST['roll_number'];
    $department = $_POST['department'];
    $year = $_POST['year'];
    $distance = $_POST['distance'];
    $single_parent = $_POST['single_parent'];
    $economic_status = $_POST['economic_status'];
    $college_residence = $_POST['college_residence'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
   

    $sql_applications = "INSERT INTO applications (name, roll_number, department, year,distance, single_parent, economic_status, college_residence, contact_number, email) 
                         VALUES ('$name', '$roll_number', '$department','$year', '$distance', '$single_parent', '$economic_status', '$college_residence', '$contact_number', '$email')";

    if ($conn->query($sql_applications) === TRUE) {
        
        $sql_student_login = "INSERT INTO student_login (roll_number, department) 
                              VALUES ('$roll_number', '$department')";

        if ($conn->query($sql_student_login) === TRUE) {
            echo "<script>alert('Application submitted successfully!'); window.location.href='student_login.php';</script>";
        } else {
            echo "<script>alert('Failed to save to student_login: " . $conn->error . "');</script>";
        }
    } else {
        echo "<script>alert('Failed to save to applications: " . $conn->error . "');</script>";
    }
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BHC Noon Meals Scheme - Apply</title>
    <link rel="icon" href="images/user.jpg">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('images/originalbg.jpg');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .back {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        @keyframes slideFromBottom {
            0% { transform: translateY(100%); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        .login-container {
            font-family: 'Poppins', sans-serif;
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
            animation: slideFromBottom 1s ease forwards;
            overflow-y: scroll;
            height: 80vh;
        }

        .login-container::-webkit-scrollbar {
            display: none;
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

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid black;
            border-radius: 5px;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        button {
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
            <h2>Apply for Noon Meals Scheme</h2>

            <form method="POST" id="noonMealsForm">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter Full Name" required>

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

            <label for="year">Year</label>
                <select id="year" name="year" required>
                <option value="">Select Year</option>
                <option value="Ist_Year">I</option>
                <option value="IIst_Year">II</option>
                <option value="IIIst_Year">III</option>
                </select>

                
                <label for="distance">Distance from College (in km)</label>
                <input type="number" id="distance" name="distance" placeholder="Enter Distance" required>

                <label for="single_parent">Are you from a single-parent family?</label>
                <select id="single_parent" name="single_parent" required>
                    <option value="">Select Option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <label for="economic_status">Are you from an economically disadvantaged background?</label>
                <select id="economic_status" name="economic_status" required>
                    <option value="">Select Option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <label for="college_residence">Do you live in a college hostel?</label>
                <select id="college_residence" name="college_residence" required>
                    <option value="">Select Option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <label for="contact_number">Contact Number</label>
                <input type="text" id="contact_number" name="contact_number" placeholder="Enter Contact Number" required>

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter Email" required>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
