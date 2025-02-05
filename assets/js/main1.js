// ------ skills circular section -------//
document.addEventListener('DOMContentLoaded', () => {
  const progressCircle = document.querySelector('circle');
  const progressSection = document.getElementById('skills');
  
  const PHP_number = document.getElementById('PHP_number');
  const Database_number = document.getElementById('Database_number');
  const Dart_number = document.getElementById('Dart_number');
  const WordPress_number = document.getElementById('WordPress_number');
  const JavaScript_number = document.getElementById('JavaScript_number');
  const MVC_number = document.getElementById('MVC_number');
  const Graphics_number = document.getElementById('Graphics_number');
  const Solving_number = document.getElementById('Solving_number');
  
  const sectionOffsetTop = progressSection.offsetTop;
  let hasAnimated = false;

  const animateProgress = () => {

    let PHP = 0;
    let Database = 0;
    let Dart = 0;
    let WordPress = 0;
    let JavaScript = 0;
    let MVC = 0;
    let Graphics = 0;
    let Solving = 0;
    
    // PHP interval
    let PHP_Interval = setInterval(() => {
      if (PHP >= 80) {
        clearInterval(interval);
      } else {
        PHP += 1;
        PHP_number.textContent = `${PHP}%`;
      }
    }, 25);

    // Database interval
    let Database_Interval = setInterval(() => {
      if (Database >= 75) {
        clearInterval(interval);
      } else {
        Database += 1;
        Database_number.textContent = `${Database}%`;
      }
    }, 20);

    // Dart interval
    let Dart_Interval = setInterval(() => {
      if (Dart >= 70) {
        clearInterval(interval);
      } else {
        Dart += 1;
        Dart_number.textContent = `${Dart}%`;
      }
    }, 20);

    // WordPress interval
    let WordPress_Interval = setInterval(() => {
      if (WordPress >= 85) {
        clearInterval(interval);
      } else {
        WordPress += 1;
        WordPress_number.textContent = `${WordPress}%`;
      }
    }, 20);

    // JavaScript interval
    let JavaScript_Interval = setInterval(() => {
      if (JavaScript >= 75) {
        clearInterval(interval);
      } else {
        JavaScript += 1;
        JavaScript_number.textContent = `${JavaScript}%`;
      }
    }, 20);

    // MVC interval
    let MVC_Interval = setInterval(() => {
      if (MVC >= 80) {
        clearInterval(interval);
      } else {
        MVC += 1;
        MVC_number.textContent = `${MVC}%`;
      }
    }, 20);

    // Graphics interval
    let Graphics_Interval = setInterval(() => {
      if (Graphics >= 70) {
        clearInterval(interval);
      } else {
        Graphics += 1;
        Graphics_number.textContent = `${Graphics}%`;
      }
    }, 20);

    // React interval
    let Solving_Interval = setInterval(() => {
      if (Solving >= 80) {
        clearInterval(interval);
      } else {
        Solving += 1;
        Solving_number.textContent = `${Solving}%`;
      }
    }, 20);
    

  };

  window.addEventListener('scroll', () => {
    const scrollY = window.scrollY + window.innerHeight;
    if (scrollY > sectionOffsetTop && !hasAnimated) {
      hasAnimated = true;
      
      document.querySelector('.PHP').classList.add('PHP-show-progress');
      document.querySelector('.Database').classList.add('Database-show-progress');
      document.querySelector('.Dart').classList.add('Dart-show-progress');
      document.querySelector('.WordPress').classList.add('WordPress-show-progress');
      document.querySelector('.JavaScript').classList.add('JavaScript-show-progress');
      document.querySelector('.MVC').classList.add('MVC-show-progress');
      document.querySelector('.Graphics').classList.add('Graphics-show-progress');
      document.querySelector('.Solving').classList.add('Solving-show-progress');

      animateProgress();
    }
  });
});


// ------ searching records in JS ----------//
function searchTable() {
    let input = document.getElementById("SearchSale").value.toLowerCase();
    let table = document.getElementById("SaleTable");
    let rows = table.getElementsByTagName("tr");

    for (let i = 1; i < rows.length; i++) { // Start from 1 to skip the header row
        let cells = rows[i].getElementsByTagName("td");
        let match = false;

        for (let j = 0; j < cells.length; j++) {
            if (cells[j].innerText.toLowerCase().includes(input)) {
                match = true;
                break;
            }
        }

        rows[i].style.display = match ? "" : "none";
    }
}



// Select all BtnEdit buttons
const BtnEdit = document.querySelectorAll(".BtnEdit");

// Add event listeners to BtnEdit buttons
BtnEdit.forEach((btn) => {
  btn.addEventListener("click", () => {
    const id = btn.getAttribute("data-id"); // Get the unique ID
    const modal = document.querySelector(`#RecordEditModal${id}`); // Find the corresponding modal
    if (modal) {
      const modalInstance = new bootstrap.Modal(modal); // Create a new modal instance
      modalInstance.show(); // Show the modal
    } else {
      console.error(`No matching modal found for ID: ${id}`);
    }
  });
});


// ---------- side menu display-------//
const mobileScreen = window.matchMedia("(max-width: 990px)");

$(document).ready(function() {
    $(".dashboard-nav-dropdown-toggle").click(function() {
        const parentDropdown = $(this).closest(".dashboard-nav-dropdown");

        // Toggle the clicked dropdown and close siblings
        parentDropdown.toggleClass("show");
        parentDropdown.siblings().removeClass("show");

        // Close nested dropdowns within the same parent
        parentDropdown.find(".dashboard-nav-dropdown").removeClass("show");
    });

    $(".menu-toggle").click(function() {
        if (mobileScreen.matches) {
            $(".dashboard-nav").toggleClass("mobile-show");
        } else {
            $(".dashboard").toggleClass("dashboard-compact");
        }
    });
});

//---------- for bootstrap 5.0.0 tooltips ---------//
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})


(function($) {
    "use strict";

    // Spinner
    var spinner = function() {
        setTimeout(function() {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function() {
        if ($(this).scrollTop() > 45) {
            $('.nav-bar').addClass('sticky-top');
        } else {
            $('.nav-bar').removeClass('sticky-top');
        }
    });


    // Back to top button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 1500, 'easeInOutExpo');
        return false;
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: true,
        loop: true,
        nav: true,
        navText: [
            '<i class="fa-solid fa-chevron-left"></i>',
            '<i class="fa-solid fa-chevron-right"></i>'
        ]
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 24,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="fa-solid fa-arrow-left"></i>',
            '<i class="fa-solid fa-arrow-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            992: {
                items: 2
            }
        }
    });

})(jQuery);