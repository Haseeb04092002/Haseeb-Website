<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	
	<?php $this->load->view('components/header_meta'); ?>
  <?php $this->load->view('components/css_links'); ?>

</head>
<body class="index-page">

  <?php $this->load->view('components/header'); ?>

  <main class="main">

	   <?php $this->load->view('components/hero_primary'); ?>
  
    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up">
        <div class="row mx-auto justify-content-center text-center">

          <div class="col-12 d-flex flex-column justify-content-center text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>About me</h3>
              <p>
                I am an enthusiastic IT professional and developer fueled by a passion for crafting transformative digital experiences. With expertise in Web Development, WordPress, and Front-End Development, I thrive in dynamic environments where I can harness cutting-edge technologies to tackle complex challenges. Eager to continue pushing boundaries and contributing to meaningful projects that leave a lasting impact.
              </p>
              <div class="text-center text-lg-center">
                <a data-bs-toggle="modal" data-bs-target="#CVDownloadModal" style="cursor: pointer;" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center d-none" data-aos="zoom-out" data-aos-delay="200">
            <img src="<?= base_url('assets/images/haseeb-about-img.png');?>" class="img-fluid" alt="">
          </div>

          <!-- cv download modal -->
          <div class="modal fade" id="CVDownloadModal" tabindex="-1" aria-labelledby="CVDownloadModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">My Resume</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <object class="pdf" width="100%" height="600" data="<?= base_url('assets/Haseeb-CV.pdf'); ?>"></object>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Download</button>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Resume Section -->
    <section id="resume" style="margin-top: -30px" class="resume">
      <div class="container-fluid">
        <div class="section-title">
          <h2>Resume</h2>
          <p>Education</p>
        </div>

        <div class="row container-fluid mx-auto justify-content-center">
          <div class="col-lg-5">
            <!-- <h3 class="resume-title">Sumary</h3> -->
            <div class="resume-item">
              <div class="p-4 resume-item-content">
                <h2>Bachelor IT</h2>
                <h5>2021 - Present</h5>
                <p>
                  <span>University of Chakwal </span>
                  <a target="_blank" href="https://uoc.edu.pk/">Verify</a>
                </p>
              </div>
            </div>

            <div class="resume-item">
              <div class="p-4 resume-item-content">
                <h2>Matric Computer Science</h2>
                <h5>2019 - 2020</h5>
                <p>
                  <span>Allied Schools </span>
                  <a
                  target="_blank"
                  href="https://www.facebook.com/alliedschoolchakwal/"
                  >Verify</a
                  >
                </p>
              </div>
            </div>
          </div>

          <div class="mt-3 col-lg-5">
            <div class="resume-item">
              <div class="p-4 resume-item-content">
                <h2>F.SC Pre-Engineering</h2>
                <h5>2020 - 2021</h5>
                <p>
                  <span>Punjab Group of Colleges </span>
                  <a target="_blank" href="https://pgc.edu/campus/chakwal/"
                  >Verify</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="section-title mt-5">
          <p>Certifications</p>
        </div>

        <div class="row container-fluid mx-auto justify-content-center">
          <div class="col-lg-5">

            <div class="resume-item">
              <div class="p-4 resume-item-content">
                <h2>Mobile App Development</h2>
                <h5>IBM Certified</h5>
                <p>
                  <span>Powered by Coursera </span>
                  <a
                  target="_blank"
                  href="https://www.coursera.org/account/accomplishments/verify/5VIEEVBXNFVF"
                  >Verify</a
                  >
                </p>
              </div>
            </div>
            <div class="resume-item">
              <div class="p-4 resume-item-content">
                <h2>Wordpress Development</h2>
                <h5>9 months Course</h5>
                <p>
                  <span>Pakaims Computer Center </span>
                  <a
                  target="_blank"
                  href="https://www.facebook.com/PakaimsChakwal/"
                  >Verify</a
                  >
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-5">

            <div class="resume-item mt-2">
              <div class="p-4 resume-item-content">
                <h2>Communication Skills</h2>
                <h5>Google Certified</h5>
                <p>
                  <span>Powered by PAFLA </span>
                  <a href="https://www.linkedin.com/in/haseeb-ur-rehman-b99477268/details/certifications/" target="_blank" 
                  >Verify</a
                  >
                </p>
              </div>
            </div>
            
            <div class="resume-item">
              <div class="p-4 resume-item-content">
                <h2>Web Development</h2>
                <h5>3 months course</h5>
                <h5>Certificate ID: 9XESHWMMK</h5>
                <p>
                  <span>DigiSkills (Online) </span>
                  <a target="_blank" href="https://digiskills.pk/verify/"
                  >Verify</a
                  >
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-5 mt-3">
            <!-- <h3 class="resume-title">Sumary</h3> -->
            

            <div class="resume-item">
              <div class="p-4 resume-item-content">
                <h2>Search Engine Optimization</h2>
                <h5>3 months course</h5>
                <h5>Certificate ID: BBM3ZEFMK</h5>
                <p>
                  <span>DigiSkills (Online) </span>
                  <a target="_blank" href="https://digiskills.pk/verify/"
                  >Verify</a
                  >
                </p>
              </div>
            </div>
            <div class="resume-item">
              <div class="p-4 resume-item-content">
                <h2>Video Editing</h2>
                <h5>3 months course</h5>
                <h5>Certificate ID: GRFJF5RMK</h5>
                <p>
                  <span>DigiSkills (Online) </span>
                  <a target="_blank" href="https://digiskills.pk/verify/"
                  >Verify</a
                  >
                </p>
              </div>
            </div>
          </div>

          <div class="mt-3 col-lg-5">
            

            <div class="resume-item">
              <div class="p-4 resume-item-content">
                <h2>Freelancing</h2>
                <h5>3 months course</h5>
                <h5>Certificate ID: XKXUZ7YMK</h5>
                <p>
                  <span>DigiSkills (Online) </span>
                  <a target="_blank" href="https://digiskills.pk/verify/"
                  >Verify</a
                  >
                </p>
              </div>
            </div>
          <div class="resume-item">
            <div class="p-4 resume-item-content">
              <h2>React.Js Development</h2>
              <h5>3 months course</h5>
              <p>
                <span>w3 Schools (Online) </span>
                <a target="_blank" href="https://verify.w3schools.com/1OW8YF4O7O"
                >Verify</a
                >
              </p>
            </div>
          </div>

        </div>


        </div>
      </div>
    </section>
    <!-- End Resume Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section-bg">
      <div class="container">
        
        <div class="section-title">
          <h2>Skills</h2>
          <p>I have following skills to serve IT Industry</p>
        </div>

        <!-- CUSTOM SKILLS -->
        <div id="SkillsSection" class="mx-auto text-center justify-content-center container">
          
          <div class="row mb-5 justify-content-center">
            
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">
              <div class="Myskills PHP text-center">
                <div class="outer">
                  <div class="bg-light inner">
                    <div class="fw-bold fs-1" id="PHP_number">0%</div>
                  </div>
                  <svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="190px" height="190px">
                    <defs>
                      <linearGradient id="GradientColor">
                        <stop offset="0%" stop-color="#e91e63" />
                        <stop offset="100%" stop-color="#673ab7" />
                      </linearGradient>
                    </defs>
                    <circle cx="95" cy="95" r="85" stroke-linecap="round" />
                  </svg>
                </div>
                <h3>PHP</h3>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">
              <div class="Myskills Database text-center">
                <div class="outer">
                  <div class="bg-light inner">
                    <div class="fw-bold fs-1" id="Database_number">0%</div>
                  </div>
                  <svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="190px" height="190px">
                    <defs>
                      <linearGradient id="GradientColor">
                        <stop offset="0%" stop-color="#e91e63" />
                        <stop offset="100%" stop-color="#673ab7" />
                      </linearGradient>
                    </defs>
                    <circle cx="95" cy="95" r="85" stroke-linecap="round" />
                  </svg>
                </div>
                <h3>Database</h3>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">
              <div class="Myskills Dart text-center">
                <div class="outer">
                  <div class="bg-light inner">
                    <div class="fw-bold fs-1" id="Dart_number">0%</div>
                  </div>
                  <svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="190px" height="190px">
                    <defs>
                      <linearGradient id="GradientColor">
                        <stop offset="0%" stop-color="#e91e63" />
                        <stop offset="100%" stop-color="#673ab7" />
                      </linearGradient>
                    </defs>
                    <circle cx="95" cy="95" r="85" stroke-linecap="round" />
                  </svg>
                </div>
                <h3>Flutter/Dart</h3>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">
              <div class="Myskills WordPress text-center">
                <div class="outer">
                  <div class="bg-light inner">
                    <div class="fw-bold fs-1" id="WordPress_number">0%</div>
                  </div>
                  <svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="190px" height="190px">
                    <defs>
                      <linearGradient id="GradientColor">
                        <stop offset="0%" stop-color="#e91e63" />
                        <stop offset="100%" stop-color="#673ab7" />
                      </linearGradient>
                    </defs>
                    <circle cx="95" cy="95" r="85" stroke-linecap="round" />
                  </svg>
                </div>
                <h3>WordPress</h3>
              </div>
            </div>

          </div>
          
          <div id="SecondRow" class="row mx-auto mt-5 text-center justify-content-center">
            
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">
              <div class="Myskills JavaScript text-center">
                <div class="outer">
                  <div class="bg-light inner">
                    <div class="fw-bold fs-1" id="JavaScript_number">0%</div>
                  </div>
                  <svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="190px" height="190px">
                    <defs>
                      <linearGradient id="GradientColor">
                        <stop offset="0%" stop-color="#e91e63" />
                        <stop offset="100%" stop-color="#673ab7" />
                      </linearGradient>
                    </defs>
                    <circle cx="95" cy="95" r="85" stroke-linecap="round" />
                  </svg>
                </div>
                <h3>JavaScript</h3>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">
              <div class="Myskills MVC text-center">
                <div class="outer">
                  <div class="bg-light inner">
                    <div class="fw-bold fs-1" id="MVC_number">0%</div>
                  </div>
                  <svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="190px" height="190px">
                    <defs>
                      <linearGradient id="GradientColor">
                        <stop offset="0%" stop-color="#e91e63" />
                        <stop offset="100%" stop-color="#673ab7" />
                      </linearGradient>
                    </defs>
                    <circle cx="95" cy="95" r="85" stroke-linecap="round" />
                  </svg>
                </div>
                <h3>MVC Design Pattern</h3>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">
              <div class="Myskills Graphics text-center">
                <div class="outer">
                  <div class="bg-light inner">
                    <div class="fw-bold fs-1" id="Graphics_number">0%</div>
                  </div>
                  <svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="190px" height="190px">
                    <defs>
                      <linearGradient id="GradientColor">
                        <stop offset="0%" stop-color="#e91e63" />
                        <stop offset="100%" stop-color="#673ab7" />
                      </linearGradient>
                    </defs>
                    <circle cx="95" cy="95" r="85" stroke-linecap="round" />
                  </svg>
                </div>
                <h3>Graphics</h3>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">
              <div class="Myskills Solving text-center">
                <div class="outer">
                  <div class="bg-light inner">
                    <div class="fw-bold fs-1" id="Solving_number">0%</div>
                  </div>
                  <svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="190px" height="190px">
                    <defs>
                      <linearGradient id="GradientColor">
                        <stop offset="0%" stop-color="#e91e63" />
                        <stop offset="100%" stop-color="#673ab7" />
                      </linearGradient>
                    </defs>
                    <circle cx="95" cy="95" r="85" stroke-linecap="round" />
                  </svg>
                </div>
                <h3>Problem Solving</h3>
              </div>
            </div>

          </div>

        </div>
        <!-- CUSTOM SKILLS -->
      </div>
    </section>
    <!-- End Skills Section -->


    <!-- Services Section -->
    <section id="services" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>My Best Services<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="<?= base_url('assets/features.png');?>" class="img-fluid" alt="">
          </div>

          <div class="col-xl-6 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Web Development</h3>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Mobile App Development</h3>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>E-Commerce</h3>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Software Maintenance</h3>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Graphic Designing</h3>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Software Consultancy</h3>
                </div>
              </div><!-- End Feature Item -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Achievements</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Portfolio Section Slider -->
    <section id="Projects" class="portfolio section-bg">
      <div class="section-title">
        <h2>Projects</h2>
        <p>Have a look at my portfolio and hire me if you are inspired.</p>
      </div>

      <div class="ag-format-container">
        <div class="ag-courses_box">

          <div class="ag-courses_item">
            <a href="<?= site_url('Home/Pages/project_details/JS_web'); ?>" class="ag-courses-item_link">
              <div class="ag-courses-item_bg"></div>
              <div class="mt-3 ag-courses-item_title">Jaunt Solutions</div>
              <div class="sub-content">
                <div class="d-flex">
                  <span class="me-2 fw-bold text-primary">Category:</span> <span class="text-dark fw-normal">Official Website</span>
                </div>
                <div class="d-flex">
                  <span class="me-2 fw-bold text-primary">Skills:</span> <span class="text-dark fw-normal">WordPress</span>
                </div>
                <div class="d-flex">
                  <span class="me-2 fw-bold text-primary">Status:</span> <span class="text-dark fw-normal">Live</span>
                </div>
              </div>
              <div class="my-3 ag-courses-item_date-box">
                <button type="button" class="btn btn-sm btn-primary">Visit Project</button>
              </div>
            </a>
          </div>

          <div class="ag-courses_item">
            <a href="<?= site_url('Home/Pages/project_details/myers_web'); ?>" class="ag-courses-item_link">
              <div class="ag-courses-item_bg"></div>
              <div class="mt-3 ag-courses-item_title">Myers College</div>
              <div class="sub-content">
                <div class="d-flex">
                  <span class="me-2 fw-bold text-primary">Category:</span> <span class="text-dark fw-normal">Official Website</span>
                </div>
                <div class="d-flex">
                  <span class="me-2 fw-bold text-primary">Skills:</span> <span class="text-dark fw-normal">HTML, CSS, JS</span>
                </div>
                <div class="d-flex">
                  <span class="me-2 fw-bold text-primary">Status:</span> <span class="text-dark fw-normal">Live</span>
                </div>
              </div>
              <div class="my-3 ag-courses-item_date-box">
                <button type="button" class="btn btn-sm btn-primary">Visit Project</button>
              </div>
            </a>
          </div>

          <div class="ag-courses_item">
            <a href="<?= site_url('Home/Pages/project_details/realestate_web'); ?>" class="ag-courses-item_link">
              <div class="ag-courses-item_bg"></div>
              <div class="mt-3 ag-courses-item_title">Real Estate</div>
              <div class="sub-content">
                <div class="d-flex">
                  <span class="me-2 fw-bold text-primary">Category:</span> <span class="text-dark fw-normal">Property marketplace</span>
                </div>
                <div class="d-flex">
                  <span class="me-2 fw-bold text-primary">Skills:</span> <span class="text-dark fw-normal">PHP, MVC, SQL</span>
                </div>
                <div class="d-flex">
                  <span class="me-2 fw-bold text-primary">Status:</span> <span class="text-dark fw-normal">In progress</span>
                </div>
              </div>
              <div class="my-3 ag-courses-item_date-box">
                <button type="button" class="btn btn-sm btn-primary">Visit Project</button>
              </div>
            </a>
          </div>

          <div class="ag-courses_item">
            <a href="index.html" class="ag-courses-item_link">
              <div class="ag-courses-item_bg"></div>
              <div class="mt-3 ag-courses-item_title">The Learning Flow</div>
              <div class="sub-content">
                <div class="d-flex">
                  <span class="me-2 fw-bold text-primary">Category:</span> <span class="text-dark fw-normal">Education Website</span>
                </div>
                <div class="d-flex">
                  <span class="me-2 fw-bold text-primary">Skills:</span> <span class="text-dark fw-normal">PHP, HTML, CSS, JS</span>
                </div>
                <div class="d-flex">
                  <span class="me-2 fw-bold text-primary">Status:</span> <span class="text-dark fw-normal">Live</span>
                </div>
              </div>
              <div class="my-3 ag-courses-item_date-box">
                <button type="button" class="btn btn-sm btn-primary">Visit Project</button>
              </div>
            </a>
          </div>

          <div class="ag-courses_item">
            <a href="connections.html" class="ag-courses-item_link">
              <div class="ag-courses-item_bg"></div>
              <div class="mt-3 ag-courses-item_title">ERP Modules-1</div>
              <div class="sub-content">
                <div class="d-block">
                  <span class="d-block me-2 fw-bold text-primary">Modules:</span>
                  <span class="d-block text-dark fw-normal">Email Reading System</span>
                  <span class="d-block text-dark fw-normal">IP Address Checking System</span>
                </div>
                <div class="d-flex">
                  <span class="me-2 fw-bold text-primary">Skills:</span> <span class="text-dark fw-normal">PHP, MVC, SQL, JS</span>
                </div>
                <div class="d-flex">
                  <span class="me-2 fw-bold text-primary">Status:</span> <span class="text-dark fw-normal">Live</span>
                </div>
              </div>
              <div class="my-3 ag-courses-item_date-box">
                <button type="button" class="btn btn-sm btn-primary">Visit Project</button>
              </div>
            </a>
          </div>

          <div class="ag-courses_item">
            <a href="https://tlfedu.com/" target="_blank" class="ag-courses-item_link">
              <div class="ag-courses-item_bg"></div>
              <div class="mt-3 ag-courses-item_title">ERP Modules-2</div>
              <div class="sub-content">
                <div class="d-block">
                  <span class="d-block me-2 fw-bold text-primary">Modules:</span>
                  <span class="d-block text-dark fw-normal">Knowledge Base for ERP</span>
                  <span class="d-block text-dark fw-normal">Solving Client Tickets in ERP</span>
                </div>
                <div class="d-flex">
                  <span class="me-2 fw-bold text-primary">Skills:</span> <span class="text-dark fw-normal">PHP, MVC, SQL, JS</span>
                </div>
                <div class="d-flex">
                  <span class="me-2 fw-bold text-primary">Status:</span> <span class="text-dark fw-normal">Live</span>
                </div>
              </div>
              <div class="my-3 ag-courses-item_date-box">
                <button type="button" class="btn btn-sm btn-primary">Visit Project</button>
              </div>
            </a>
          </div>

              
        </div>
      </div>
    </section>
    <!-- End Portfolio Section Slider -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>What they are saying about me<br></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  I had the pleasure of managing Haseeb at JauntSolutions. His hard work, dedication, and ability to deliver high-quality results under pressure made him an invaluable asset to the team.
                </p>
                <div class="profile mt-auto">
                  <img src="<?= base_url('assets/images/abbas-bhai.jpeg');?>" class="testimonial-img" alt="">
                  <h3>Muhammad Abbas Naqvi</h3>
                  <h4>Project Manager At JauntSolutions</h4>
                  <div class="social-links d-flex mx-auto justify-content-center text-center">
                    <a class="mx-2" target="_blank" href="https://www.linkedin.com/in/abbasmsyed/"><i class="bi bi-linkedin"></i></a>
                    <a class="mx-2" target="_blank" href="https://wa.link/iuq9vj"><i class="bi bi-whatsapp"></i></a>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Haseeb has full-stack development skills, attention to detail, and ability to deliver on time with seamless communication truly set him apart as a top-tier professional.
                </p>
                <div class="profile mt-auto">
                  <img src="<?= base_url('assets/images/zarar-haider.png');?>" class="testimonial-img" alt="">
                  <h3>Zarar Haider</h3>
                  <h4>Major-Pak Army</h4>
                  <div class="social-links d-flex mx-auto justify-content-center text-center">
                    <!-- <a class="mx-2" href=""><i class="bi bi-facebook"></i></a> -->
                    <a class="mx-2" target="_blank" href="https://wa.link/s4cl8y"><i class="bi bi-whatsapp"></i></a>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  It was a pleasure working with Haseeb. His expertise in full-stack development, combined with his exceptional problem-solving skills and timely delivery, made him a standout professional. I highly recommend his services!
                </p>
                <div class="profile mt-auto">
                  <img src="<?= base_url('assets/images/arshad-jummani.png');?>" class="testimonial-img" alt="">
                  <h3>Arshad Jummani</h3>
                  <h4>Founder-CEO Alfa Marine Electronics</h4>
                </div>
                <div class="social-links d-flex mx-auto justify-content-center text-center">
                  <a class="mx-2" target="_blank" href="https://www.linkedin.com/in/arshad-jummani-145b8a12/"><i class="bi bi-linkedin"></i></a>
                  <a class="mx-2" target="_blank" href="https://wa.link/lwk84w"><i class="bi bi-whatsapp"></i></a>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Thanks to Haseeb, we now have a powerful e-learning platform that exceeds our expectations. His attention to detail and technical expertise are impressive
                </p>
                <div class="profile mt-auto">
                  <img src="<?= base_url('assets/images/user.png');?>" class="testimonial-img" alt="">
                  <h3>Khurram Butt</h3>
                  <h4>Lecturer</h4>
                </div>
                <div class="social-links d-flex mx-auto justify-content-center text-center">
                  <a class="mx-2" target="_blank" href="https://wa.link/vjcofl"><i class="bi bi-whatsapp"></i></a>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact me</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row my-3">

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="info-item" data-aos="fade" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call me</h3>
              <div class="d-flex">
                <p>+92 336 8438235</p>
                <p class="mx-2">|</p>
                <p>+92 333 5601117</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="info-item" data-aos="fade" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email me</h3>
              <p>haseeb24hours@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="info-item" data-aos="fade" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>Maghi Road, Nishat Colony, Chakwal Punjab Pakistan</p>
            </div>
          </div>

        </div>

        <div class="row my-3">

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="info-item" data-aos="fade" data-aos-delay="300">
              <i class="bi bi-whatsapp"></i>
              <h3>Whatsapp</h3>
              <a href="https://wa.link/6ldhkm" target="_blank">+92 336 8438235</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="info-item" data-aos="fade" data-aos-delay="400">
              <i class="bi bi-linkedin"></i>
              <h3>LinkedIn</h3>
              <a href="https://www.linkedin.com/in/haseeb-ur-rehman-b99477268" target="_blank">See Profile</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="info-item" data-aos="fade" data-aos-delay="200">
              <i class="bi bi-facebook"></i>
              <h3>FaceBook</h3>
              <a href="https://www.facebook.com/profile.php?id=100085610030242" target="_blank">See Profile</a>
            </div>
          </div>

        </div>



      </div>

    </section><!-- /Contact Section -->

  </main>

  
  <?php $this->load->view('components/footer'); ?>

  <?php $this->load->view('components/js_links'); ?>


</body>
</html>
