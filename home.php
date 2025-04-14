<!DOCTYPE html>
<lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BHC Noon Meals Scheme</title>
    <link rel="icon" type="image/x-icon" href="images/user.jpg">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
</head>
<div>
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
    <div class="video">
    <video autoplay loop muted>
    <source src="video/v1.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>
</div>
<br>
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
            font-family:'Merriweather', sans-serif;
            
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
            text-align:center;
            padding-top: 10px;
            border-top: 1px solid #ffffff;
            font-size: 14px;
          
        }
        .footer-bottom p{
           text-align: center;
        }
        .video{
            padding: 0;
            margin: 0;
            height: 100vh ;
            width: 100%;
            justify-content: center;
           display: flex;
           position: relative; 
           transition:  0.4s ease-in-out; 
    top: 0;
    object-fit: cover;
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
.hover-shadow {
      width: 60%; 
      height: 180px;
      background-color: #ffffff;
      margin: 50px auto;
      border-radius: 7px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3); 
      transition: transform 0.5s ease, box-shadow 0.5s ease;
    }

    .hover-shadow:hover {
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
      transform: translateY(-5px); 
    }
    .content-title {
        font-family:'Poppins', sans-serif ;
      font-size: 20px;
      color: #f03c02; 
      margin: 3%;
      margin-bottom: 0px;
      text-align: center;
      text-decoration: none;
      padding: 1px;
     padding-top: 3%;
    }

    .content-text {
      color: black; 
      line-height: 1.5;
      margin-bottom: 20px;
      padding: 1%;
      justify-content: center;
    }
    .content-text p{
        margin: 1%;
        padding: %;
        justify-content: center;
    }
 
.about{
    height: 10%;
    width: 10%;
    margin-top: 1%;
    justify-content: center;
    display: flex;
   align-content: center;
   
   
}
.rules {
    font-family:'Poppins', sans-serif ;
  max-width: 800px;
  margin: 2% auto;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 8px;
  background-color: #f9f9f9;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
  transition: transform 0.3s ease, box-shadow 0.3s ease; 
  opacity: 0; 
  transform: translateY(50px); 
}


.rules:hover {
  transform: scale(1.02);
  box-shadow: 0 20px 16px rgba(0, 0, 0, 0.2);
}


.rule-title {
    font-family:'Poppins', sans-serif ;
  border-bottom: 2.5px solid #f03c02;
  text-align: center; 
}

.rules h2 {
    font-family:'Poppins', sans-serif ;
  text-align: center;
  color: #333;
  font-size: 2.5rem;
  font-weight: bold;
  visibility: visible;
  margin-bottom: 25px;
  margin-top: 10px;

}


.rules ul {
    font-family:'Poppins', sans-serif ;
  list-style-type: disc;
  margin-left: 20px;
  margin-top: 10px;

}

.rules li {
    font-family:'Poppins', sans-serif ;
  margin-bottom: 10px;
  opacity: 0; 
  transform: translateX(-30px);
  animation: slideIn 1s ease forwards; 
  animation-delay: 1s; 
  visibility: hidden; 
  
}


@keyframes slideIn {
  from {
    opacity: 0;
    transform: translateX(-30px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}


.visible {
  opacity: 1 !important;
  transform: translateY(0) !important;
  visibility: visible !important;
}
.about-p{
 
    justify-content: center;
    font-family:'Poppins', sans-serif ;
   
    text-align:center;
    
}

.orange-box {
    border: 2px solid #f03c02; 
    border-radius: 10px;
    padding: 20px; 
    background-color: #fff; 
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2); 
    margin: 20px auto; 
    max-width: 600px; 
    position: relative;
    font-family: 'Poppins', sans-serif;
}

.orange-box:hover {
  transform: scale(1.02);
  box-shadow: 0 20px 16px rgba(0, 0, 0, 0.2);
}



.orange-box::before,
.orange-box::after {
    content: "";
    position: absolute;
    width: 50px; 
    height: 4px; 
    background-color: #f03c02;
}

.orange-box::before {
    top: 0; 
    left: 10px;
}

.orange-box::after {
    bottom: 0; 
    right: 10px;
}

.stats-section {
  text-align: center;
  padding: 30px;
  background:rgb(255, 255, 255);
  
}

.stats-container {
  display: -moz-popup;
  justify-content: space-around;
  padding: 30px;
  margin-top: 30px;
}

.stat {
  background:gainsboro;
  border-radius: 20px;
  padding: 30px;
  padding-bottom: 5px;
  width: 180px;
  text-align: center;
  margin: 10px;
  display: inline-block;
  justify-items: auto;
}

.stat .count {
  font-size: 48px;
  font-weight: bold;
  color:rgb(240, 133, 2);
}

.stat p {
  font-size: 18px;
  margin-top: 10px;
  color:black;
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

<br>
<div class="section-title">
        <h2>Noon Meals Scheme</h2>
    </div>
    
    <br>
    <div class="hover-shadow" id="scrollBox">
    <div class="content-title">Purpose</div>
    <div class="content-text">
      <p style="font-family:'Poppins', sans-serif; font-size:1em;text-align:justify;">The Noon Meal Scheme is a Project designed to improve the nutritional status of our college students who are unable to get at least one complete square meal a day coming from marginalized family backgrounds. This is with a view to enhancing enrolment, retention, and attendance simultaneously.</p>
    </div>
  </div>
  <div class="hover-shadow" id="scrollBox">
  <div class="content-title">Model</div>
    <div class="content-text">
      <p style="font-family:'Poppins', sans-serif; font-size:1em;text-align:justify;">The students will be selected based on their willingness and also references from class teachers. The students will be thoroughly verified and will be given a Mess card, just like any other student who takes food in the College Mess.</p>
    </div>
</div>
<div class="hover-shadow" id="scrollBox">
    <div class="content-title">Need</div>
    <div class="content-text">
     <p style="font-family:'Poppins', sans-serif; font-size:1em;text-align:justify;justifycontent:center;"><center>The Noon Meal Scheme aims to improve students' nutritional status and academic engagement by supporting those from marginalized backgrounds. We seek Alumni assistance in providing project opportunities to further empower our students.</center></p>
    </div>
    </div>

    <br><section>
    <div class="section-title">
        <h2>About the Scheme</h2>
    
        </div>
        <br><div class="orange-box">
    <a href="home.php">
         <center>   <img src="images/bhc_logo.png" alt="Logo" class="about"></center>
        </a>
    <br><div class="about-p">
    <p>The Noon Meals Scheme at Bishop Heber College is a welfare initiative supporting students traveling over 50 km, single-parent students, or those from economically disadvantaged backgrounds. Providing lunch parcels on college working days, the scheme benefits 150 students and aims to streamline management with features like attendance tracking, online applications, attendance reports, daily menus, and feedback submission. Administrators can monitor trends, review feedback, and send notifications for schedule changes, ensuring transparency and efficiency in operation.</p>
    </div>

    </section>
    </div>
    <br>
    <div class="section-title">
        <h2>Rules and Regulation</h2>
    </div>
    <div class="rules">
    <div class="rule-title">
        <h2>Conduct Guidelines</h2>
    </div>
    <div class="rule-list">
        <ul>
            <strong>Eligibility and Registration</strong>
                <ul>
                    <li>Only students meeting the eligibility criteria (distance, single-parent status, or financial background) can register for the scheme.</li>
                    <li>Submit valid documents during registration for verification purposes.</li>
                </ul>
            </li>
            <li><strong>Attendance and Timings</strong>
                <ul>
                    <li>Attendance during meal distribution is mandatory to avail of the benefits.</li>
                    <li>Lunch parcels are distributed from 12:30 PM to 1:40 PM. Students must adhere to this schedule.</li>
                </ul>
            </li>
            <li><strong>Feedback and Complaints</strong>
                <ul>
                    <li>Students are encouraged to provide feedback on meal quality through the designated platform.</li>
                    <li>All complaints or grievances should be reported to the administrator for resolution.</li>
                </ul>
            </li>
            <li><strong>Code of Conduct</strong>
                <ul>
                    <li>Maintain discipline and ensure respectful behavior during meal distribution.</li>
                    <li>Avoid creating disturbances or skipping designated queues.</li>
                </ul>
            </li>
            <li><strong>Health and Hygiene</strong>
                <ul>
                    <li>Report any health issues or dietary restrictions to the administrator promptly.</li>
                    <li>Maintain cleanliness in the meal distribution area.</li>
                </ul>
            </li>
        </ul>
    </div>
</div>
    <br>

    <section class="stats-section">
    <div class="section-title">
        <h2>A Few Facts About Our Scheme</h2>
    </div>
    <div class="stats-container">
      <div class="stat">
        <span class="count" data-target="159">0</span>
        <p>Scheme Beneficiaries(Students)</p>
      </div>
      <br>

      <div class="stat">
        <span class="count" data-target="25">0</span>
        <p>Newly Applied Students</p>
      </div>
      <br>
      <div class="stat">
        <span class="count" data-target="6">0</span>
        <p>Current Working Staffs</p>
      </div>
    </div>
  </section>
  <div class="container">
    <header>
      <h1>Holidays / Events</h1>
      <div class="view-toggle">
  
      </div>
    </header>
    <main>
      <section class="upcoming-events">
        <h2>Upcoming</h2>
        <ul id="event-list">
          
        </ul>
      </section>
    </main>
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
            <p>&copy; <?php echo date('Y'); ?> <strong>Bishop Heber College.</strong> All Rights Reserved.</p>
        </div>
    </footer>
   
    <script src="script.js"></script>
    <script>  const events = [
  { name: "Pongal-Holidays", date: "13-Jan-2025 to 16-Jan-2025" },
  { name: "Thai Poosam-Holiday", date: "11-Feb-2025" },
  { name: "Rejoice 25 (Student Retreat) - Holiday", date: "22-Feb-2025" },
  { name: "College Day & Achiever's Day", date: "15-Mar-2025" },
  { name: "Service Day & Placement Day", date: "17-Mar-2025" },
  { name: "Ramzan-Holiday", date: "31-Mar-2025" },
  { name: "Mahaveer Jayanthi-Holiday", date: "10-Apr-2025" },
  { name: "Tamil New Year-Holiday", date: "14-Apr-2025" },
  { name: "Good Friday-Holiday", date: "18-Apr-2025" },
  { name: "Easter-Holiday", date: "20-Apr-2025" },
  { name: "May Day-Holiday", date: "01-May-2025" },
];

const eventList = document.getElementById("event-list");

function loadEvents() {
  events.forEach((event) => {
    const li = document.createElement("li");
    li.innerHTML = `
      <span>${event.name}</span>
      <span class="date">${event.date}</span>
    `;
    eventList.appendChild(li);
  });
}

loadEvents();

    document.addEventListener("scroll", function () {
  const rulesSection = document.querySelector(".rules");
  const sectionPosition = rulesSection.getBoundingClientRect();
  const windowHeight = window.innerHeight;

  if (sectionPosition.top <= windowHeight - 100) {
    rulesSection.classList.add("visible");
    const listItems = rulesSection.querySelectorAll("li");
    listItems.forEach((item, index) => {
      item.style.visibility = "visible";
      item.style.animationDelay = `${index * 0.2}s`; // Staggered animation
    });
  }
});
document.addEventListener('DOMContentLoaded', () => {
  const counters = document.querySelectorAll('.count');

  const startCounting = (counter) => {
    const target = +counter.getAttribute('data-target');
    const speed = 100; 
    const updateCount = () => {
      const count = +counter.innerText;
      const increment = Math.ceil(target / speed);

      if (count < target) {
        counter.innerText = count + increment;
        setTimeout(updateCount, 20);
      } else {
        counter.innerText = target; 
      }
    };
    updateCount();
  };

  const options = {
    root: null,
    threshold: 0.1 
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const counter = entry.target;
        startCounting(counter);
        observer.unobserve(counter); 
      }
    });
  }, options);

 
  counters.forEach(counter => {
    const rect = counter.getBoundingClientRect();
    if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
      
      startCounting(counter);
    } else {
     
      observer.observe(counter);
    }
  });
});

</script>

</body>
</html>

