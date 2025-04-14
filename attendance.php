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
    $attendance_date = $_POST['attendance_date'];
    $students = $_POST['students'];

    foreach ($students as $student_id => $status) {
        $query = "INSERT INTO attendance (attendance_date, student_id, student_name, roll_number, department, status)
                  VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);

   
        $student_data = array(
            1 => array("M.Dharanraj", "1", "Computer Science"),
            2 => array("S.Kumarakaubaran", "2", "Computer Science"),
            3 => array("J.Santhosh", "3", "Computer Science"),
            4 => array("R.Yuvaraj", "4", "Computer Science"),
            5 => array("S.Thiloth", "5", "Computer Science"),
            6 => array("V.Dhineshkumar", "6", "Computer Science"),
            7 => array("P.S.Shayam Sundar", "7", "Computer Science"),
            8 => array("S.Anitha", "8", "Computer Science"),
            9 => array("P.Santhosh", "9", "Computer Science"),
            10 => array("V.Jayanthi", "10", "Computer Science"),
            11 => array("M.Muthukumar", "11", "Computer Science"),
            12 => array("K.Rajesh", "12", "Computer Science"),
            13 => array("S.Poongodi", "13", "Computer Science"),
            14 => array("N.Selvakumar", "14", "Computer Science"),
            15 => array("K.Gokul", "15", "Computer Science"),
            16 => array("S.Lokeshwaran", "16", "Computer Science"),
            17 => array("Guban", "17", "Computer Science"),
            18 => array("C.Yokeshwaran", "18", "Computer Science"),
            19 => array("V.Srinath", "19", "Computer Science"),
            20 => array("S.Yogeshwaran", "20", "Botany"),
            21 => array("S.Surya", "21", "Botany"),
            22 => array("V.Rajkumar", "22", "Botany"),
            23 => array("S.Sabaraiselvan", "23", "Botany"),
            24 => array("A.Ranjith", "24", "Botany"),
            25 => array("S.Dinesh", "25", "Botany"),
            26 => array("A.Prathap", "26", "Botany"),
            27 => array("V.Kesavan", "27", "Botany"),
            28 => array("E.Eranklin", "28", "Botany"),
            29 => array("S.Manoj", "29", "Botany"),
            30 => array("B.Shiyam", "30", "BCA"),
            31 => array("R.Surya", "31", "BCA"),
            32 => array("R.Saran", "32", "BCA"),
            33 => array("S.Nalan", "33", "BCA"),
            34 => array("S.Prasanna", "34", "BCA"),
            35 => array("V.Gunaseelan", "35", "BCA"),
            36 => array("Sivakumar", "36", "BCA"),
            37 => array("S.Saran", "37", "Maths department"),
            38 => array("R.Logesh", "38", "Maths department"),
            39 => array("T.Thennarasus", "39", "Maths department"),
            40 => array("M.Karan", "40", "Maths department"),
            41 => array("S.Shanmugan", "41", "Maths department"),
            42 => array("Thirunavukkarasus", "42", "Bio-Tech"),
            43 => array("M.Kavin", "43", "Bio-Tech"),
            44 => array("S.Santhosh", "44", "Bio-Tech"),
            45 => array("A.Vishal", "45", "Bio-Tech"),
            46 => array("S.Jayasanya", "46", "Bio-Tech"),
            47 => array("R.Ragul", "47", "Bio-Tech"),
            48 => array("V.Santhanakoushnan", "48", "Bio-Tech"),
            49 => array("A.Velmani", "49", "Bio-Tech"),
            50 => array("S.M.Keerthivasan", "50", "Bio-Tech"),
            51 => array("S.Vignesh", "51", "Bio-Tech"),
            52 => array("A.Vasanthkumar", "52", "Bio-Tech"),
            53 => array("M.Harish", "53", "Bio-Tech"),
            54 => array("C.Gropi", "54", "Bio-Tech"),
            55 => array("T.Sanjay", "55", "Bio-Tech"),
            56 => array("R.Sivaprakash", "56", "Chemistry"),
            57 => array("S.Tamilselvan", "57", "Chemistry"),
            58 => array("V.Nandhakumar", "58", "Chemistry"),
            59 => array("S.Aadhavan", "59", "Chemistry"),
            60 => array("R.Raghul", "60", "Chemistry"),
            61 => array("Gurukarthikeyan", "61", "Chemistry"),
            62 => array("R.Mowli", "62", "Chemistry"),
            63 => array("S.Vasathan", "63", "Chemistry"),
            64 => array("S.Santhosh", "64", "Chemistry"),
            65 => array("B.Ragavan", "65", "Chemistry"),
            66 => array("V.Gokulnath", "66", "Chemistry"),
            67 => array("R.Plourdu Christopher", "67", "Chemistry"),
            68 => array("Dhanasurya", "68", "Chemistry"),
            69 => array("Madhan", "69", "Chemistry"),
            70 => array("S.Hariharan", "70", "Environmental Science"),
            71 => array("R.Jayakumar", "71", "Environmental Science"),
            72 => array("Karmukid Varman.S", "72", "Environmental Science"),
            73 => array("K.Sugumani", "73", "Environmental Science"),
            74 => array("A.Dharun", "74", "Environmental Science"),
            75 => array("J.Jose Mathen", "75", "Environmental Science"),
            76 => array("M.Vigneshkumar", "76", "Environmental Science"),
            77 => array("S.Vallarasu", "77", "Tamil"),
            78 => array("A.Vimalkumar", "78", "Tamil"),
            79 => array("I.Prabbu", "79", "Tamil"),
            80 => array("R.Prasanna", "80", "Tamil"),
            81 => array("R.Mohandass", "81", "Tamil"),
            82 => array("D.Sasidharan", "82", "Tamil"),
            83 => array("T.Shanmugaved", "83", "Tamil"),
            84 => array("S.Sonjaikumar", "84", "Tamil"),
            85 => array("R.Arulpandiyan", "85", "Tamil"),
            86 => array("R.Harikrishnan", "86", "Commerce"),
            87 => array("M.Kesaven", "87", "Commerce"),
            88 => array("S.Nithishkumar", "88", "Commerce"),
            89 => array("N.Naveen", "89", "Commerce"),
            90 => array("A.Ringsh", "90", "Commerce"),
            91 => array("D.Santhosh", "91", "Commerce"),
            92 => array("Sharukesh", "92", "Commerce"),
            93 => array("C.Sathish", "93", "Commerce"),
            94 => array("S.Ponnusamy", "94", "Commerce"),
            95 => array("K.Asuinkumar", "95", "Commerce"),
            96 => array("P.Darshana", "96", "Commerce"),
            97 => array("R.Karthik Pandiyen", "97", "Commerce"),
            98 => array("S.Subash", "98", "Zoology"),
            99 => array("V.Vasanth", "99", "Zoology"),
            100 => array("P.Harish", "100", "MCA"),
            101 => array("R.Abimanju", "101", "MCA"),
            102 => array("A.Karthick", "102", "MCA"),
            103 => array("Henry Ronald M.Madhavan", "103", "MCA"),
            104 => array("Edwin Joseph-A", "104", "Information Technology"),
            105 => array("P.Hariharen", "105", "Information Technology"),
            106 => array("S.Ranjith", "106", "Information Technology"),
            107 => array("R.Sivamam", "107", "Information Technology"),
            108 => array("P.Santhosh", "108", "Information Technology"),
            109 => array("I.Jerold", "109", "MLISC"),
            110 => array("J.Jana", "110", "MLISC"),
            111 => array("M.Muthamil Selian A.Shiek Abdullah", "111", "MLISC"),
            112 => array("A.Shiek Abdullah", "112", "MLISC"),
            113 => array("S.Sivagisi", "113", "MLISC"),
            114 => array("Sivaramakrishnan B", "114", "Bio.voc"),
            115 => array("M.Vigneshwaran", "115", "Bio.voc"),
            116 => array("S.Srinivasen", "116", "Physics"),
            117 => array("B.Ragavendhan", "117", "Physics"),
            118 => array("Prakashraj Murugan", "118", "BBA"),
            119 => array("M.Aakash", "119", "BBA"),
            120 => array("Kildan Arockinders", "120", "BBA"),
            121 => array("S.Maheswaren", "121", "BBA"),
            122 => array("P.Pradhish", "122", "BBA"),
            123 => array("A.Rohit", "123", "Economics"),
            124 => array("S.Divakaran", "124", "History"),
            125 => array("Mervin", "125", "History"),
            126 => array("Lok Sanjay", "126", "History"),
            127 => array("J.Mohamad Farish", "127", "Bio-info"),
            128 => array("M.Sridhar", "128", "Bio-info"),
            129 => array("Rajavarman", "129", "Bio-info"),
            130 => array("Dharam T", "130", "Commerce"),
            131 => array("R.Keerthana", "131", "Commerce"),
            132 => array("A.Kowsika", "132", "Commerce"),
            133 => array("M.Gopika", "133", "Commerce"),
            134 => array("R.Darsham", "134", "Commerce"),
            135 => array("N.Nivetha", "135", "Chemistry"),
            136 => array("D.Sarerpathi Abirani", "136", "Chemistry"),
            137 => array("N.Yuvarans", "137", "Chemistry"),
            138 => array("S.Hemalatha", "138", "Chemistry"),
            139 => array("T.Aarthi", "139", "Chemistry"),
            140 => array("Banu Priya", "140", "Chemistry"),
            141 => array("Boomika", "141", "Botany"),
            142 => array("T.Lakshmi", "142", "Botany"),
            143 => array("R.Durga", "143", "Botany"),
            144 => array("K.Janani", "144", "Botany"),
            145 => array("H.Delowa", "145", "Botany"),
            146 => array("G.Saranya", "146", "B.Voc"),
            147 => array("J.Boomika", "147", "B.Voc"),
            148 => array("A.Kiruthika", "148", "Tamil"),
            149 => array("Srivathi", "149", "Tamil"),
            150 => array("Josephine Britta", "150", "Tamil"),
            151 => array("K.Thirsha", "151", "BCA"),
            152 => array("B.Dhanalakshmi", "152", "BCA"),
            153 => array("R.Punitha", "153", "English"),
            154 => array("R.Lakshana", "154", "English"),
            155 => array("A.Shravani", "155", "English"),
            156 => array("R.Kavitha", "156", "English"),
            157 => array("V.Aruna", "157", "English"),
            158 => array("S.Jayashree", "158", "English"),
            159 => array("T.Priya", "159", "English")
        );
        
        $student_name = $student_data[$student_id][0];
        $roll_number = $student_data[$student_id][1];
        $department = $student_data[$student_id][2];

        $stmt->bind_param("sissss", $attendance_date, $student_id, $student_name, $roll_number, $department, $status);
        $stmt->execute();
    }

    echo "<script>
            alert('Attendance recorded successfully!');
            window.location.href = 'attendance.php'; // Redirect back to the form
          </script>";
}

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
            font-family: 'Merriweather', sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }
        form {
            background: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            max-width: 1000px;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color:  #06557c;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        input[type="submit"] {
            background-color:  #06557c;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            margin-top: 20px;
        }
        input[type="submit"]:hover {
            background-color:  #06557c;
        }
        input[type="date"] {
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        footer {
            font-family: 'Merriweather', sans-serif;
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
            font-family: 'Merriweather', sans-serif;
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
    <script>
        function selectAllAttendance(status) {
            let inputs = document.querySelectorAll('input[type=radio]');
            inputs.forEach(input => {
                if (input.value === status) {
                    input.checked = true;
                }
            });
        }
    </script>
</head>
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

<h1>Attendance Portal</h1>
<form method="POST" action="">
    <label for="attendance_date">Select Date:</label>
    <input type="date" id="attendance_date" name="attendance_date" required>
    <table>
        <tr>
            <th>Student ID</th>
            <th>Student Name </th>
            <th>Roll Number</th>
            <th>Department</th>
            <th>Present</th>
            <th>Absent</th>
        </tr>
        <tbody class="attendance-checkbox">
        <?php
       
            if ($result_students->num_rows > 0) {
                while ($row = $result_students->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['student_id'] . '</td>';
                    echo '<td>' . $row['student_name'] . '</td>';
                    echo '<td>' . $row['roll_number'] . '</td>';
                    echo '<td>' . $row['department'] . '</td>';
                    echo '<td><input type="radio" name="students[' . $row['student_id'] . ']" value="Present"></td>';
                    echo '<td><input type="radio" name="students[' . $row['student_id'] . ']" value="Absent"></td>';
                    echo '</tr>';
                }
            } 
            
            
            
            ?>
                <tr>
                    <td>1</td>
                    <td>M.Dharanraj</td>
                    <td>1</td>
                    <td>Computer Science</td>
                    <td><input type="radio" name="students[1]" value="Present"></td>
                    <td><input type="radio" name="students[1]" value="Absent"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>S.Kumarakaubaran</td>
                    <td>2</td>
                    <td>Computer Science</td>
                    <td><input type="radio" name="students[2]" value="Present"></td>
                    <td><input type="radio" name="students[2]" value="Absent"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>J.Santhosh</td>
                    <td>3</td>
                    <td>Computer Science</td>
                    <td><input type="radio" name="students[3]" value="Present"></td>
                    <td><input type="radio" name="students[3]" value="Absent"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>R.Yuvaraj</td>
                    <td>4</td>
                    <td>Computer Science</td>
                    <td><input type="radio" name="students[4]" value="Present"></td>
                    <td><input type="radio" name="students[4]" value="Absent"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>S.Thiloth</td>
                    <td>5</td>
                    <td>Computer Science</td>
                    <td><input type="radio" name="students[5]" value="Present"></td>
                    <td><input type="radio" name="students[5]" value="Absent"></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>V.Dhineshkumar</td>
                    <td>6</td>
                    <td>Computer Science</td>
                    <td><input type="radio" name="students[6]" value="Present"></td>
                    <td><input type="radio" name="students[6]" value="Absent"></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>P.S.Shayam Sundar</td>
                    <td>7</td>
                    <td>Computer Science</td>
                    <td><input type="radio" name="students[7]" value="Present"></td>
                    <td><input type="radio" name="students[7]" value="Absent"></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>S.Lokeshwaran</td>
                    <td>8</td>
                    <td>Computer Science</td>
                    <td><input type="radio" name="students[8]" value="Present"></td>
                    <td><input type="radio" name="students[8]" value="Absent"></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Guban</td>
                    <td>9</td>
                    <td>Computer Science</td>
                    <td><input type="radio" name="students[9]" value="Present"></td>
                    <td><input type="radio" name="students[9]" value="Absent"></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>C.Yokeshwaran</td>
                    <td>10</td>
                    <td>Computer Science</td>
                    <td><input type="radio" name="students[10]" value="Present"></td>
                    <td><input type="radio" name="students[10]" value="Absent"></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>V.Srinath</td>
                    <td>11</td>
                    <td>Computer Science</td>
                    <td><input type="radio" name="students[11]" value="Present"></td>
                    <td><input type="radio" name="students[11]" value="Absent"></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>S.Yogeshwaran</td>
                    <td>12</td>
                    <td>Botany</td>
                    <td><input type="radio" name="students[12]" value="Present"></td>
                    <td><input type="radio" name="students[12]" value="Absent"></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>S.Surya</td>
                    <td>13</td>
                    <td>Botany</td>
                    <td><input type="radio" name="students[13]" value="Present"></td>
                    <td><input type="radio" name="students[13]" value="Absent"></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>V.Rajkumar</td>
                    <td>14</td>
                    <td>Botany</td>
                    <td><input type="radio" name="students[14]" value="Present"></td>
                    <td><input type="radio" name="students[14]" value="Absent"></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>S.Sabaraiselvan</td>
                    <td>15</td>
                    <td>Botany</td>
                    <td><input type="radio" name="students[15]" value="Present"></td>
                    <td><input type="radio" name="students[15]" value="Absent"></td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>A.Ranjith</td>
                    <td>16</td>
                    <td>Botany</td>
                    <td><input type="radio" name="students[16]" value="Present"></td>
                    <td><input type="radio" name="students[16]" value="Absent"></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>S.Dinesh</td>
                    <td>17</td>
                    <td>Botany</td>
                    <td><input type="radio" name="students[17]" value="Present"></td>
                    <td><input type="radio" name="students[17]" value="Absent"></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>A.Prathap</td>
                    <td>18</td>
                    <td>Botany</td>
                    <td><input type="radio" name="students[18]" value="Present"></td>
                    <td><input type="radio" name="students[18]" value="Absent"></td>
                </tr>
                
    <td>19</td>
    <td>V. Kesavan</td>
    <td>19</td>
    <td>Botany</td>
    <td><input type="radio" name="students[19]" value="Present"></td>
    <td><input type="radio" name="students[19]" value="Absent"></td>
</tr>
<tr>
    <td>20</td>
    <td>E.Franklin</td>
    <td>20</td>
    <td>Botany</td>
    <td><input type="radio" name="students[20]" value="Present"></td>
    <td><input type="radio" name="students[20]" value="Absent"></td>
</tr>
<tr>
    <td>21</td>
    <td>S. Manoj</td>
    <td>21</td>
    <td>Botany</td>
    <td><input type="radio" name="students[21]" value="Present"></td>
    <td><input type="radio" name="students[21]" value="Absent"></td>
</tr>
<tr>
    <td>22</td>
    <td>B. Shiyam</td>
    <td>22</td>
    <td>BCA</td>
    <td><input type="radio" name="students[22]" value="Present"></td>
    <td><input type="radio" name="students[22]" value="Absent"></td>
</tr>
<tr>
    <td>23</td>
    <td>R. Surya</td>
    <td>23</td>
    <td>BCA</td>
    <td><input type="radio" name="students[23]" value="Present"></td>
    <td><input type="radio" name="students[23]" value="Absent"></td>
</tr>
<tr>
    <td>24</td>
    <td>R. Saran</td>
    <td>24</td>
    <td>BCA</td>
    <td><input type="radio" name="students[24]" value="Present"></td>
    <td><input type="radio" name="students[24]" value="Absent"></td>
</tr>
<tr>
    <td>25</td>
    <td>S. Nalan</td>
    <td>25</td>
    <td>BCA</td>
    <td><input type="radio" name="students[25]" value="Present"></td>
    <td><input type="radio" name="students[25]" value="Absent"></td>
</tr>
<tr>
    <td>26</td>
    <td>S. Prasanna</td>
    <td>26</td>
    <td>BCA</td>
    <td><input type="radio" name="students[26]" value="Present"></td>
    <td><input type="radio" name="students[26]" value="Absent"></td>
</tr>
<tr>
    <td>27</td>
    <td>V. Gunaseelan</td>
    <td>27</td>
    <td>BCA</td>
    <td><input type="radio" name="students[27]" value="Present"></td>
    <td><input type="radio" name="students[27]" value="Absent"></td>
</tr>
<tr>
    <td>28</td>
    <td>Sivakumar</td>
    <td>28</td>
    <td>BCA</td>
    <td><input type="radio" name="students[28]" value="Present"></td>
    <td><input type="radio" name="students[28]" value="Absent"></td>
</tr>
<tr>
    <td>29</td>
    <td>S. Saran</td>
    <td>29</td>
    <td>Maths</td>
    <td><input type="radio" name="students[29]" value="Present"></td>
    <td><input type="radio" name="students[29]" value="Absent"></td>
</tr>
<tr>
    <td>30</td>
    <td>R. Logesh</td>
    <td>30</td>
    <td>Maths</td>
    <td><input type="radio" name="students[30]" value="Present"></td>
    <td><input type="radio" name="students[30]" value="Absent"></td>
</tr>
<tr>
    <td>31</td>
    <td>T. Thennarasus</td>
    <td>31</td>
    <td>Maths</td>
    <td><input type="radio" name="students[31]" value="Present"></td>
    <td><input type="radio" name="students[31]" value="Absent"></td>
</tr>
<tr>
    <td>32</td>
    <td>M. Karan</td>
    <td>32</td>
    <td>Maths Department</td>
    <td><input type="radio" name="students[32]" value="Present"></td>
    <td><input type="radio" name="students[32]" value="Absent"></td>
</tr>
<tr>
    <td>33</td>
    <td>S. Shanmugan</td>
    <td>33</td>
    <td>Maths</td>
    <td><input type="radio" name="students[33]" value="Present"></td>
    <td><input type="radio" name="students[33]" value="Absent"></td>
</tr>
<tr>
    <td>34</td>
    <td>Thirunavukkarasus</td>
    <td>34</td>
    <td>Bio-Tech</td>
    <td><input type="radio" name="students[34]" value="Present"></td>
    <td><input type="radio" name="students[34]" value="Absent"></td>
</tr>
<tr>
    <td>35</td>
    <td>M. Kavin</td>
    <td>35</td>
    <td>Bio-Tech</td>
    <td><input type="radio" name="students[35]" value="Present"></td>
    <td><input type="radio" name="students[35]" value="Absent"></td>
</tr>
<tr>
    <td>36</td>
    <td>S. Santhosh</td>
    <td>36</td>
    <td>Bio-Tech</td>
    <td><input type="radio" name="students[36]" value="Present"></td>
    <td><input type="radio" name="students[36]" value="Absent"></td>
</tr>
<tr>
    <td>37</td>
    <td>A. Vishal</td>
    <td>37</td>
    <td>Bio-Tech</td>
    <td><input type="radio" name="students[37]" value="Present"></td>
    <td><input type="radio" name="students[37]" value="Absent"></td>
</tr>
<tr>
    <td>38</td>
    <td>S. Jayasanya</td>
    <td>38</td>
    <td>Bio-Tech</td>
    <td><input type="radio" name="students[38]" value="Present"></td>
    <td><input type="radio" name="students[38]" value="Absent"></td>
</tr>
<tr>
    <td>39</td>
    <td>R. Ragul</td>
    <td>39</td>
    <td>Bio-Tech</td>
    <td><input type="radio" name="students[39]" value="Present"></td>
    <td><input type="radio" name="students[39]" value="Absent"></td>
</tr>
<tr>
    <td>40</td>
    <td>V. Santhanakrishnan</td>
    <td>40</td>
    <td>Bio-Tech</td>
    <td><input type="radio" name="students[40]" value="Present"></td>
    <td><input type="radio" name="students[40]" value="Absent"></td>
</tr>
<tr>
    <td>41</td>
    <td>A. Pradeep</td>
    <td>41</td>
    <td>Chemistry</td>
    <td><input type="radio" name="students[41]" value="Present"></td>
    <td><input type="radio" name="students[41]" value="Absent"></td>
</tr>
<tr>
    <td>42</td>
    <td>S. Karthik</td>
    <td>42</td>
    <td>Chemistry</td>
    <td><input type="radio" name="students[42]" value="Present"></td>
    <td><input type="radio" name="students[42]" value="Absent"></td>
</tr>
<tr>
    <td>43</td>
    <td>R. Saravanan</td>
    <td>43</td>
    <td>Chemistry</td>
    <td><input type="radio" name="students[43]" value="Present"></td>
    <td><input type="radio" name="students[43]" value="Absent"></td>
</tr>
<tr>
    <td>44</td>
    <td>A. Sasi</td>
    <td>44</td>
    <td>Chemistry</td>
    <td><input type="radio" name="students[44]" value="Present"></td>
    <td><input type="radio" name="students[44]" value="Absent"></td>
</tr>
<tr>
    <td>45</td>
    <td>B. Abinesh</td>
    <td>45</td>
    <td>Chemistry</td>
    <td><input type="radio" name="students[45]" value="Present"></td>
    <td><input type="radio" name="students[45]" value="Absent"></td>
</tr>
<tr>
    <td>46</td>
    <td>V. Niranjan</td>
    <td>46</td>
    <td>Chemistry</td>
    <td><input type="radio" name="students[46]" value="Present"></td>
    <td><input type="radio" name="students[46]" value="Absent"></td>
</tr>
<tr>
    <td>47</td>
    <td>P. Rajan</td>
    <td>47</td>
    <td>Chemistry</td>
    <td><input type="radio" name="students[47]" value="Present"></td>
    <td><input type="radio" name="students[47]" value="Absent"></td>
</tr>
<tr>
    <td>48</td>
    <td>T. Thanmayi</td>
    <td>48</td>
    <td>English Department</td>
    <td><input type="radio" name="students[48]" value="Present"></td>
    <td><input type="radio" name="students[48]" value="Absent"></td>
</tr>
<tr>
    <td>49</td>
    <td>R. Elakkiya</td>
    <td>49</td>
    <td>English Department</td>
    <td><input type="radio" name="students[49]" value="Present"></td>
    <td><input type="radio" name="students[49]" value="Absent"></td>
</tr>
<tr>
    <td>50</td>
    <td>A. Muthumani</td>
    <td>50</td>
    <td>English Department</td>
    <td><input type="radio" name="students[50]" value="Present"></td>
    <td><input type="radio" name="students[50]" value="Absent"></td>
</tr>
<tr>
    <td>51</td>
    <td>S. Tharini</td>
    <td>51</td>
    <td>English Department</td>
    <td><input type="radio" name="students[51]" value="Present"></td>
    <td><input type="radio" name="students[51]" value="Absent"></td>
</tr>
<tr>
    <td>52</td>
    <td>B. Kaviya</td>
    <td>52</td>
    <td>English Department</td>
    <td><input type="radio" name="students[52]" value="Present"></td>
    <td><input type="radio" name="students[52]" value="Absent"></td>
</tr>
<tr>
    <td>53</td>
    <td>A. Vidhya</td>
    <td>53</td>
    <td>English Department</td>
    <td><input type="radio" name="students[53]" value="Present"></td>
    <td><input type="radio" name="students[53]" value="Absent"></td>
</tr>
<tr>
    <td>54</td>
    <td>V. Aruna</td>
    <td>54</td>
    <td>Computer Science</td>
    <td><input type="radio" name="students[54]" value="Present"></td>
    <td><input type="radio" name="students[54]" value="Absent"></td>
</tr>
<tr>
    <td>55</td>
    <td>S. Ajeeth</td>
    <td>55</td>
    <td>Computer Science</td>
    <td><input type="radio" name="students[55]" value="Present"></td>
    <td><input type="radio" name="students[55]" value="Absent"></td>
</tr>
<tr>
    <td>56</td>
    <td>M. Sankar</td>
    <td>56</td>
    <td>Computer Science</td>
    <td><input type="radio" name="students[56]" value="Present"></td>
    <td><input type="radio" name="students[56]" value="Absent"></td>
</tr>
<tr>
    <td>57</td>
    <td>J. Hari</td>
    <td>57</td>
    <td>Computer Science</td>
    <td><input type="radio" name="students[57]" value="Present"></td>
    <td><input type="radio" name="students[57]" value="Absent"></td>
</tr>
<tr>
    <td>58</td>
    <td>T. Aswin</td>
    <td>58</td>
    <td>Computer Science</td>
    <td><input type="radio" name="students[58]" value="Present"></td>
    <td><input type="radio" name="students[58]" value="Absent"></td>
</tr>
<tr>
    <td>59</td>
    <td>V. Manikandan</td>
    <td>59</td>
    <td>Computer Science</td>
    <td><input type="radio" name="students[59]" value="Present"></td>
    <td><input type="radio" name="students[59]" value="Absent"></td>
</tr>
<tr>
    <td>60</td>
    <td>R. Bharani</td>
    <td>60</td>
    <td>Computer Science</td>
    <td><input type="radio" name="students[60]" value="Present"></td>
    <td><input type="radio" name="students[60]" value="Absent"></td>
</tr>
<tr>
    <td>61</td>
    <td>A. Karthick</td>
    <td>61</td>
    <td>Computer Science</td>
    <td><input type="radio" name="students[61]" value="Present"></td>
    <td><input type="radio" name="students[61]" value="Absent"></td>
</tr>
<tr>
    <td>62</td>
    <td>S. Ranjith</td>
    <td>62</td>
    <td>Computer Science</td>
    <td><input type="radio" name="students[62]" value="Present"></td>
    <td><input type="radio" name="students[62]" value="Absent"></td>
</tr>
<tr>
    <td>63</td>
    <td>R. Anjali</td>
    <td>63</td>
    <td>Computer Science</td>
    <td><input type="radio" name="students[63]" value="Present"></td>
    <td><input type="radio" name="students[63]" value="Absent"></td>
</tr>
<tr>
    <td>64</td>
    <td>K. Vidhya</td>
    <td>64</td>
    <td>Computer Science</td>
    <td><input type="radio" name="students[64]" value="Present"></td>
    <td><input type="radio" name="students[64]" value="Absent"></td>
</tr>
<tr>
    <td>65</td>
    <td>M. Gokul</td>
    <td>65</td>
    <td>Computer Science</td>
    <td><input type="radio" name="students[65]" value="Present"></td>
    <td><input type="radio" name="students[65]" value="Absent"></td>
</tr>
<tr>
    <td>66</td>
    <td>S. Muthu</td>
    <td>66</td>
    <td>Computer Science</td>
    <td><input type="radio" name="students[66]" value="Present"></td>
    <td><input type="radio" name="students[66]" value="Absent"></td>
</tr>
<tr>
    <td>67</td>
    <td>A. Rajesh</td>
    <td>67</td>
    <td>Computer Science</td>
    <td><input type="radio" name="students[67]" value="Present"></td>
    <td><input type="radio" name="students[67]" value="Absent"></td>
</tr>
<tr>
    <td>68</td>
    <td>P. Anjali</td>
    <td>68</td>
    <td>Mathematics</td>
    <td><input type="radio" name="students[68]" value="Present"></td>
    <td><input type="radio" name="students[68]" value="Absent"></td>
</tr>
<tr>
    <td>69</td>
    <td>K. Harini</td>
    <td>69</td>
    <td>Mathematics</td>
    <td><input type="radio" name="students[69]" value="Present"></td>
    <td><input type="radio" name="students[69]" value="Absent"></td>
</tr>
<tr>
    <td>70</td>
    <td>M. Ranjith</td>
    <td>70</td>
    <td>Mathematics</td>
    <td><input type="radio" name="students[70]" value="Present"></td>
    <td><input type="radio" name="students[70]" value="Absent"></td>
</tr>
<tr>
    <td>71</td>
    <td>R. Sakthi</td>
    <td>71</td>
    <td>Mathematics</td>
    <td><input type="radio" name="students[71]" value="Present"></td>
    <td><input type="radio" name="students[71]" value="Absent"></td>
</tr>
<tr>
    <td>72</td>
    <td>S. Vignesh</td>
    <td>72</td>
    <td>Mathematics</td>
    <td><input type="radio" name="students[72]" value="Present"></td>
    <td><input type="radio" name="students[72]" value="Absent"></td>
</tr>
<tr>
    <td>73</td>
    <td>A. Kaviya</td>
    <td>73</td>
    <td>Mathematics</td>
    <td><input type="radio" name="students[73]" value="Present"></td>
    <td><input type="radio" name="students[73]" value="Absent"></td>
</tr>
<tr>
    <td>74</td>
    <td>V. Akash</td>
    <td>74</td>
    <td>Mathematics</td>
    <td><input type="radio" name="students[74]" value="Present"></td>
    <td><input type="radio" name="students[74]" value="Absent"></td>
</tr>
<tr>
    <td>75</td>
    <td>S. Prakash</td>
    <td>75</td>
    <td>Mathematics</td>
    <td><input type="radio" name="students[75]" value="Present"></td>
    <td><input type="radio" name="students[75]" value="Absent"></td>
</tr>
<tr>
    <td>76</td>
    <td>R. Sudhakar</td>
    <td>76</td>
    <td>Mathematics</td>
    <td><input type="radio" name="students[76]" value="Present"></td>
    <td><input type="radio" name="students[76]" value="Absent"></td>
</tr>
<tr>
    <td>77</td>
    <td>V. Gokul</td>
    <td>77</td>
    <td>Botany</td>
    <td><input type="radio" name="students[77]" value="Present"></td>
    <td><input type="radio" name="students[77]" value="Absent"></td>
</tr>
<tr>
    <td>78</td>
    <td>A. Karthik</td>
    <td>78</td>
    <td>Botany</td>
    <td><input type="radio" name="students[78]" value="Present"></td>
    <td><input type="radio" name="students[78]" value="Absent"></td>
</tr>
<tr>
    <td>79</td>
    <td>S. Rajesh</td>
    <td>79</td>
    <td>Botany</td>
    <td><input type="radio" name="students[79]" value="Present"></td>
    <td><input type="radio" name="students[79]" value="Absent"></td>
</tr>
<tr>
    <td>80</td>
    <td>R. Jeyaraj</td>
    <td>80</td>
    <td>Botany</td>
    <td><input type="radio" name="students[80]" value="Present"></td>
    <td><input type="radio" name="students[80]" value="Absent"></td>
</tr>
<tr>
    <td>81</td>
    <td>V. Karunashree</td>
    <td>81</td>
    <td>Botany</td>
    <td><input type="radio" name="students[81]" value="Present"></td>
    <td><input type="radio" name="students[81]" value="Absent"></td>
</tr>
<tr>
    <td>82</td>
    <td>S. Swathi</td>
    <td>82</td>
    <td>Botany</td>
    <td><input type="radio" name="students[82]" value="Present"></td>
    <td><input type="radio" name="students[82]" value="Absent"></td>
</tr>
<tr>
    <td>83</td>
    <td>A. Muthupandi</td>
    <td>83</td>
    <td>Botany</td>
    <td><input type="radio" name="students[83]" value="Present"></td>
    <td><input type="radio" name="students[83]" value="Absent"></td>
</tr>
<tr>
    <td>84</td>
    <td>B. Shankar</td>
    <td>84</td>
    <td>Botany</td>
    <td><input type="radio" name="students[84]" value="Present"></td>
    <td><input type="radio" name="students[84]" value="Absent"></td>
</tr>
<tr>
    <td>85</td>
    <td>S. Madhan</td>
    <td>85</td>
    <td>Botany</td>
    <td><input type="radio" name="students[85]" value="Present"></td>
    <td><input type="radio" name="students[85]" value="Absent"></td>
</tr>
<tr>
    <td>86</td>
    <td>V. Shakthi</td>
    <td>86</td>
    <td>Botany</td>
    <td><input type="radio" name="students[86]" value="Present"></td>
    <td><input type="radio" name="students[86]" value="Absent"></td>
</tr>
<tr>
    <td>87</td>
    <td>K. Janani</td>
    <td>87</td>
    <td>Botany</td>
    <td><input type="radio" name="students[87]" value="Present"></td>
    <td><input type="radio" name="students[87]" value="Absent"></td>
</tr>
<tr>
    <td>88</td>
    <td>T. Naveen</td>
    <td>88</td>
    <td>Botany</td>
    <td><input type="radio" name="students[88]" value="Present"></td>
    <td><input type="radio" name="students[88]" value="Absent"></td>
</tr>
<tr>
    <td>89</td>
    <td>R. Mohandass</td>
    <td>89</td>
    <td>Botany</td>
    <td><input type="radio" name="students[89]" value="Present"></td>
    <td><input type="radio" name="students[89]" value="Absent"></td>
</tr>
<tr>
    <td>90</td>
    <td>M. Arun</td>
    <td>90</td>
    <td>Botany</td>
    <td><input type="radio" name="students[90]" value="Present"></td>
    <td><input type="radio" name="students[90]" value="Absent"></td>
</tr>
<tr>
    <td>91</td>
    <td>P. Arun</td>
    <td>91</td>
    <td>Botany</td>
    <td><input type="radio" name="students[91]" value="Present"></td>
    <td><input type="radio" name="students[91]" value="Absent"></td>
</tr>
<tr>
    <td>92</td>
    <td>R. Vishal</td>
    <td>92</td>
    <td>Botany</td>
    <td><input type="radio" name="students[92]" value="Present"></td>
    <td><input type="radio" name="students[92]" value="Absent"></td>
</tr>
<tr>
    <td>93</td>
    <td>A. Santhosh</td>
    <td>93</td>
    <td>Botany</td>
    <td><input type="radio" name="students[93]" value="Present"></td>
    <td><input type="radio" name="students[93]" value="Absent"></td>
</tr>
<tr>
    <td>94</td>
    <td>V. Anand</td>
    <td>94</td>
    <td>Botany</td>
    <td><input type="radio" name="students[94]" value="Present"></td>
    <td><input type="radio" name="students[94]" value="Absent"></td>
</tr>
<tr>
    <td>95</td>
    <td>S. Kumaran</td>
    <td>95</td>
    <td>Botany</td>
    <td><input type="radio" name="students[95]" value="Present"></td>
    <td><input type="radio" name="students[95]" value="Absent"></td>
</tr>
<tr>
    <td>96</td>
    <td>V. Prakash</td>
    <td>96</td>
    <td>Botany</td>
    <td><input type="radio" name="students[96]" value="Present"></td>
    <td><input type="radio" name="students[96]" value="Absent"></td>
</tr>
<tr>
    <td>97</td>
    <td>R. Senthil</td>
    <td>97</td>
    <td>Botany</td>
    <td><input type="radio" name="students[97]" value="Present"></td>
    <td><input type="radio" name="students[97]" value="Absent"></td>
</tr>
<tr>
    <td>98</td>
    <td>A. Gokul</td>
    <td>98</td>
    <td>Botany</td>
    <td><input type="radio" name="students[98]" value="Present"></td>
    <td><input type="radio" name="students[98]" value="Absent"></td>
</tr>
<tr>
    <td>99</td>
    <td>V. Rajesh</td>
    <td>99</td>
    <td>Botany</td>
    <td><input type="radio" name="students[99]" value="Present"></td>
    <td><input type="radio" name="students[99]" value="Absent"></td>
</tr>
<tr>
    <td>100</td>
    <td>S. Vishal</td>
    <td>100</td>
    <td>Botany</td>
    <td><input type="radio" name="students[100]" value="Present"></td>
    <td><input type="radio" name="students[100]" value="Absent"></td>
</tr>
<tr>
    <td>101</td>
    <td>S. Anand</td>
    <td>101</td>
    <td>Botany</td>
    <td><input type="radio" name="students[101]" value="Present"></td>
    <td><input type="radio" name="students[101]" value="Absent"></td>
</tr>
<tr>
    <td>102</td>
    <td>R. Sathish</td>
    <td>102</td>
    <td>Botany</td>
    <td><input type="radio" name="students[102]" value="Present"></td>
    <td><input type="radio" name="students[102]" value="Absent"></td>
</tr>
<tr>
    <td>103</td>
    <td>K. Rajesh</td>
    <td>103</td>
    <td>Botany</td>
    <td><input type="radio" name="students[103]" value="Present"></td>
    <td><input type="radio" name="students[103]" value="Absent"></td>
</tr>
<tr>
    <td>104</td>
    <td>A. Vishal</td>
    <td>104</td>
    <td>Botany</td>
    <td><input type="radio" name="students[104]" value="Present"></td>
    <td><input type="radio" name="students[104]" value="Absent"></td>
</tr>
<tr>
    <td>105</td>
    <td>S. Ramesh</td>
    <td>105</td>
    <td>Botany</td>
    <td><input type="radio" name="students[105]" value="Present"></td>
    <td><input type="radio" name="students[105]" value="Absent"></td>
</tr>
<tr>
    <td>106</td>
    <td>V. Arun</td>
    <td>106</td>
    <td>Botany</td>
    <td><input type="radio" name="students[106]" value="Present"></td>
    <td><input type="radio" name="students[106]" value="Absent"></td>
</tr>
<tr>
    <td>107</td>
    <td>A. Kumar</td>
    <td>107</td>
    <td>Botany</td>
    <td><input type="radio" name="students[107]" value="Present"></td>
    <td><input type="radio" name="students[107]" value="Absent"></td>
</tr>
<tr>
    <td>108</td>
    <td>R. Prakash</td>
    <td>108</td>
    <td>Botany</td>
    <td><input type="radio" name="students[108]" value="Present"></td>
    <td><input type="radio" name="students[108]" value="Absent"></td>
</tr>
<tr>
    <td>109</td>
    <td>S. Rajesh</td>
    <td>109</td>
    <td>Botany</td>
    <td><input type="radio" name="students[109]" value="Present"></td>
    <td><input type="radio" name="students[109]" value="Absent"></td>
</tr>
<tr>
    <td>110</td>
    <td>V. Senthil</td>
    <td>110</td>
    <td>Botany</td>
    <td><input type="radio" name="students[110]" value="Present"></td>
    <td><input type="radio" name="students[110]" value="Absent"></td>
</tr>
<tr>
    <td>111</td>
    <td>A. Senthil</td>
    <td>111</td>
    <td>Botany</td>
    <td><input type="radio" name="students[111]" value="Present"></td>
    <td><input type="radio" name="students[111]" value="Absent"></td>
</tr>
<tr>
    <td>112</td>
    <td>V. Harish</td>
    <td>112</td>
    <td>Botany</td>
    <td><input type="radio" name="students[112]" value="Present"></td>
    <td><input type="radio" name="students[112]" value="Absent"></td>
</tr>
<tr>
    <td>113</td>
    <td>S. Kirubakaran</td>
    <td>113</td>
    <td>Botany</td>
    <td><input type="radio" name="students[113]" value="Present"></td>
    <td><input type="radio" name="students[113]" value="Absent"></td>
</tr>
<tr>
    <td>114</td>
    <td>S. Vijay</td>
    <td>114</td>
    <td>Botany</td>
    <td><input type="radio" name="students[114]" value="Present"></td>
    <td><input type="radio" name="students[114]" value="Absent"></td>
</tr>
<tr>
    <td>115</td>
    <td>R. Vijayakumar</td>
    <td>115</td>
    <td>Botany</td>
    <td><input type="radio" name="students[115]" value="Present"></td>
    <td><input type="radio" name="students[115]" value="Absent"></td>
</tr>
<tr>
    <td>116</td>
    <td>V. Nivetha</td>
    <td>116</td>
    <td>Botany</td>
    <td><input type="radio" name="students[116]" value="Present"></td>
    <td><input type="radio" name="students[116]" value="Absent"></td>
</tr>
<tr>
    <td>117</td>
    <td>V. Karthikeyan</td>
    <td>117</td>
    <td>Botany</td>
    <td><input type="radio" name="students[117]" value="Present"></td>
    <td><input type="radio" name="students[117]" value="Absent"></td>
</tr>
<tr>
    <td>118</td>
    <td>A. Gowtham</td>
    <td>118</td>
    <td>Botany</td>
    <td><input type="radio" name="students[118]" value="Present"></td>
    <td><input type="radio" name="students[118]" value="Absent"></td>
</tr>
<tr>
    <td>119</td>
    <td>S. Chandra</td>
    <td>119</td>
    <td>Botany</td>
    <td><input type="radio" name="students[119]" value="Present"></td>
    <td><input type="radio" name="students[119]" value="Absent"></td>
</tr>
<tr>
    <td>120</td>
    <td>V. Santhosh</td>
    <td>120</td>
    <td>Botany</td>
    <td><input type="radio" name="students[120]" value="Present"></td>
    <td><input type="radio" name="students[120]" value="Absent"></td>
</tr>
<tr>
    <td>121</td>
    <td>S. Karthik</td>
    <td>121</td>
    <td>Botany</td>
    <td><input type="radio" name="students[121]" value="Present"></td>
    <td><input type="radio" name="students[121]" value="Absent"></td>
</tr>
<tr>
    <td>122</td>
    <td>V. Arul</td>
    <td>122</td>
    <td>Botany</td>
    <td><input type="radio" name="students[122]" value="Present"></td>
    <td><input type="radio" name="students[122]" value="Absent"></td>
</tr>
<tr>
    <td>123</td>
    <td>S. Rajini</td>
    <td>123</td>
    <td>Botany</td>
    <td><input type="radio" name="students[123]" value="Present"></td>
    <td><input type="radio" name="students[123]" value="Absent"></td>
</tr>
<tr>
    <td>124</td>
    <td>V. Pavithra</td>
    <td>124</td>
    <td>Botany</td>
    <td><input type="radio" name="students[124]" value="Present"></td>
    <td><input type="radio" name="students[124]" value="Absent"></td>
</tr>
<tr>
    <td>125</td>
    <td>A. Jaya</td>
    <td>125</td>
    <td>Botany</td>
    <td><input type="radio" name="students[125]" value="Present"></td>
    <td><input type="radio" name="students[125]" value="Absent"></td>
</tr>
<tr>
    <td>126</td>
    <td>V. Suresh</td>
    <td>126</td>
    <td>Botany</td>
    <td><input type="radio" name="students[126]" value="Present"></td>
    <td><input type="radio" name="students[126]" value="Absent"></td>
</tr>
<tr>
    <td>127</td>
    <td>A. Krishnan</td>
    <td>127</td>
    <td>Botany</td>
    <td><input type="radio" name="students[127]" value="Present"></td>
    <td><input type="radio" name="students[127]" value="Absent"></td>
</tr>
<tr>
    <td>128</td>
    <td>R. Senthilkumar</td>
    <td>128</td>
    <td>Botany</td>
    <td><input type="radio" name="students[128]" value="Present"></td>
    <td><input type="radio" name="students[128]" value="Absent"></td>
</tr>
<tr>
    <td>129</td>
    <td>S. Vignesh</td>
    <td>129</td>
    <td>Botany</td>
    <td><input type="radio" name="students[129]" value="Present"></td>
    <td><input type="radio" name="students[129]" value="Absent"></td>
</tr>
<tr>
    <td>130</td>
    <td>V. Rajendran</td>
    <td>130</td>
    <td>Botany</td>
    <td><input type="radio" name="students[130]" value="Present"></td>
    <td><input type="radio" name="students[130]" value="Absent"></td>
</tr>
<tr>
    <td>131</td>
    <td>A. Kumaravel</td>
    <td>131</td>
    <td>Botany</td>
    <td><input type="radio" name="students[131]" value="Present"></td>
    <td><input type="radio" name="students[131]" value="Absent"></td>
</tr>
<tr>
    <td>132</td>
    <td>S. Kannan</td>
    <td>132</td>
    <td>Botany</td>
    <td><input type="radio" name="students[132]" value="Present"></td>
    <td><input type="radio" name="students[132]" value="Absent"></td>
</tr>
<tr>
    <td>133</td>
    <td>R. Vijayakumar</td>
    <td>133</td>
    <td>Botany</td>
    <td><input type="radio" name="students[133]" value="Present"></td>
    <td><input type="radio" name="students[133]" value="Absent"></td>
</tr>
<tr>
    <td>134</td>
    <td>S. Prakash</td>
    <td>134</td>
    <td>Botany</td>
    <td><input type="radio" name="students[134]" value="Present"></td>
    <td><input type="radio" name="students[134]" value="Absent"></td>
</tr>
<tr>
    <td>135</td>
    <td>V. Aravind</td>
    <td>135</td>
    <td>Botany</td>
    <td><input type="radio" name="students[135]" value="Present"></td>
    <td><input type="radio" name="students[135]" value="Absent"></td>
</tr>
<tr>
    <td>136</td>
    <td>A. Ravichandran</td>
    <td>136</td>
    <td>Botany</td>
    <td><input type="radio" name="students[136]" value="Present"></td>
    <td><input type="radio" name="students[136]" value="Absent"></td>
</tr>
<tr>
    <td>137</td>
    <td>S. Aravind</td>
    <td>137</td>
    <td>Botany</td>
    <td><input type="radio" name="students[137]" value="Present"></td>
    <td><input type="radio" name="students[137]" value="Absent"></td>
</tr>
<tr>
    <td>138</td>
    <td>V. Santhosh</td>
    <td>138</td>
    <td>Botany</td>
    <td><input type="radio" name="students[138]" value="Present"></td>
    <td><input type="radio" name="students[138]" value="Absent"></td>
</tr>
<tr>
    <td>139</td>
    <td>S. Karthik</td>
    <td>139</td>
    <td>Botany</td>
    <td><input type="radio" name="students[139]" value="Present"></td>
    <td><input type="radio" name="students[139]" value="Absent"></td>
</tr>
<tr>
    <td>140</td>
    <td>A. Raja</td>
    <td>140</td>
    <td>Botany</td>
    <td><input type="radio" name="students[140]" value="Present"></td>
    <td><input type="radio" name="students[140]" value="Absent"></td>
</tr>
<tr>
    <td>141</td>
    <td>V. Muthu</td>
    <td>141</td>
    <td>Botany</td>
    <td><input type="radio" name="students[141]" value="Present"></td>
    <td><input type="radio" name="students[141]" value="Absent"></td>
</tr>
<tr>
    <td>142</td>
    <td>S. Arumugam</td>
    <td>142</td>
    <td>Botany</td>
    <td><input type="radio" name="students[142]" value="Present"></td>
    <td><input type="radio" name="students[142]" value="Absent"></td>
</tr>
<tr>
    <td>143</td>
    <td>R. Kannan</td>
    <td>143</td>
    <td>Botany</td>
    <td><input type="radio" name="students[143]" value="Present"></td>
    <td><input type="radio" name="students[143]" value="Absent"></td>
</tr>
<tr>
    <td>144</td>
    <td>S. Kaviya</td>
    <td>144</td>
    <td>Botany</td>
    <td><input type="radio" name="students[144]" value="Present"></td>
    <td><input type="radio" name="students[144]" value="Absent"></td>
</tr>
<tr>
    <td>145</td>
    <td>V. Selvam</td>
    <td>145</td>
    <td>Botany</td>
    <td><input type="radio" name="students[145]" value="Present"></td>
    <td><input type="radio" name="students[145]" value="Absent"></td>
</tr>
<tr>
    <td>146</td>
    <td>A. Nivetha</td>
    <td>146</td>
    <td>Botany</td>
    <td><input type="radio" name="students[146]" value="Present"></td>
    <td><input type="radio" name="students[146]" value="Absent"></td>
</tr>
<tr>
    <td>147</td>
    <td>S. Rajeshwari</td>
    <td>147</td>
    <td>Botany</td>
    <td><input type="radio" name="students[147]" value="Present"></td>
    <td><input type="radio" name="students[147]" value="Absent"></td>
</tr>
<tr>
    <td>148</td>
    <td>V. Priya</td>
    <td>148</td>
    <td>Botany</td>
    <td><input type="radio" name="students[148]" value="Present"></td>
    <td><input type="radio" name="students[148]" value="Absent"></td>
</tr>
<tr>
    <td>149</td>
    <td>A. Manjula</td>
    <td>149</td>
    <td>Botany</td>
    <td><input type="radio" name="students[149]" value="Present"></td>
    <td><input type="radio" name="students[149]" value="Absent"></td>
</tr>
<tr>
    <td>150</td>
    <td>S. Radhika</td>
    <td>150</td>
    <td>Botany</td>
    <td><input type="radio" name="students[150]" value="Present"></td>
    <td><input type="radio" name="students[150]" value="Absent"></td>
</tr>
<tr>
    <td>151</td>
    <td>V. Thavapalan</td>
    <td>151</td>
    <td>Botany</td>
    <td><input type="radio" name="students[151]" value="Present"></td>
    <td><input type="radio" name="students[151]" value="Absent"></td>
</tr>
<tr>
    <td>152</td>
    <td>R. Selvakumar</td>
    <td>152</td>
    <td>Botany</td>
    <td><input type="radio" name="students[152]" value="Present"></td>
    <td><input type="radio" name="students[152]" value="Absent"></td>
</tr>
<tr>
    <td>153</td>
    <td>S. Vinod</td>
    <td>153</td>
    <td>Botany</td>
    <td><input type="radio" name="students[153]" value="Present"></td>
    <td><input type="radio" name="students[153]" value="Absent"></td>
</tr>
<tr>
    <td>154</td>
    <td>A. Akilan</td>
    <td>154</td>
    <td>Botany</td>
    <td><input type="radio" name="students[154]" value="Present"></td>
    <td><input type="radio" name="students[154]" value="Absent"></td>
</tr>
<tr>
    <td>155</td>
    <td>V. Abinaya</td>
    <td>155</td>
    <td>Botany</td>
    <td><input type="radio" name="students[155]" value="Present"></td>
    <td><input type="radio" name="students[155]" value="Absent"></td>
</tr>
<tr>
    <td>156</td>
    <td>S. Rajesh</td>
    <td>156</td>
    <td>Botany</td>
    <td><input type="radio" name="students[156]" value="Present"></td>
    <td><input type="radio" name="students[156]" value="Absent"></td>
</tr>
<tr>
    <td>157</td>
    <td>V. Bhavani</td>
    <td>157</td>
    <td>Botany</td>
    <td><input type="radio" name="students[157]" value="Present"></td>
    <td><input type="radio" name="students[157]" value="Absent"></td>
</tr>
<tr>
    <td>158</td>
    <td>R. Malarvizhi</td>
    <td>158</td>
    <td>Botany</td>
    <td><input type="radio" name="students[158]" value="Present"></td>
    <td><input type="radio" name="students[158]" value="Absent"></td>
</tr>
<tr>
    <td>159</td>
    <td>A. Balamurugan</td>
    <td>159</td>
    <td>Botany</td>
    <td><input type="radio" name="students[159]" value="Present"></td>
    <td><input type="radio" name="students[159]" value="Absent"></td>
</tr>
    </table>
    <div style="text-align: center;">
        <button type="button" onclick="selectAllAttendance('present')">Mark All Present</button>
        <button type="button" onclick="selectAllAttendance('absent')">Mark All Absent</button>
        <br>
        <input type="submit" value="Submit Attendance">
    </div>
</form>

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
                <a href="https://www.youtube.com/channel/UCLdStGHBVRnwMXSXW21-BSQ"><img src="https://cdn-icons-png.flaticon.com
                 <a href="https://www.instagram.com/heber_official"><img src="https://cdn-icons-png.flaticon.com/128/1384/1384063.png" alt="Instagram" width="20"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Bishop Heber College. All Rights Reserved.</p>
        </div>
    </footer>
    
    <script>
         var radios = document.querySelectorAll('input[type="radio"]');
    radios.forEach(function(radio) {
        if (radio.value.toLowerCase() === status.toLowerCase()) {
            radio.checked = true;
        }
    });

        function selectAllAttendance(status) {
           
            var radios = document.querySelectorAll('input[name^="students"]');
            
        
            radios.forEach(function(radio) {
                if (status === 'present') {
                    radio.checked = (radio.value === 'Present');
                } else if (status === 'absent') {
                    radio.checked = (radio.value === 'Absent');
                }
            });
        }
    </script>

    <script src="script.js"></script>
</body>
</html>