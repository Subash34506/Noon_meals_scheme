const currentUrl = window.location.pathname.split('/').pop();

      
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
          });
         
       
          
          