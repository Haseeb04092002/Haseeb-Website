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

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section mt-5">

      <div class="container mt-5" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-8 border border-secondary border-2">
            <div class="portfolio-details-slider swiper init-swiper">

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
                  }
                }
              </script>

              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="<?= base_url('assets/images/property01.png');?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?= base_url('assets/images/property02.png');?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?= base_url('assets/images/property03.png');?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?= base_url('assets/images/property04.png');?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?= base_url('assets/images/property05.png');?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?= base_url('assets/images/property06.png');?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Property marketplace (Sale & Purchase)</h3>
              <ul>
                <li><strong>Category</strong>: Marketplace Website</li>
                <li><strong>Client</strong>: JauntSolutions Software Company</li>
                <li><strong>Project URL</strong>: <a target="_blank" href="http://properties.jauntsolutions.com/Properties">Click here</a></li>
              </ul>
              <h3 class="mt-3">Description</h3>
              <p>
                It is a properties sale purchase website. I am thrilled to introduce a seamless, user-friendly experience designed to revolutionize the way you buy and sell real estate. User can register himself as a seller or a buyer.
              </p>
              <button data-bs-toggle="modal" data-bs-target="#ProjectVerifyModal" type="button" class="btn btn-sm btn-primary my-3">Verify</button>

              <!-- cv download modal -->
              <div class="modal fade" id="ProjectVerifyModal" tabindex="-1" aria-labelledby="ProjectVerifyModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Verify my project by confirming from client</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row mx-auto justify-content-center text-center align-items-center">
                        <div class="col-5">

                          <div class="profile mt-auto">
                            <img src="<?= base_url('assets/images/abbas-bhai.jpeg');?>" class="testimonial-img" alt="">
                            <h5 class="my-2">Muhammad Abbas Naqvi</h5>
                            <p class="my-2">Project Manager At JauntSolutions</p>
                          </div>
                          
                        </div>
                        <div class="col-7">
                          <h5>
                            I had the pleasure of managing Haseeb at JauntSolutions. His hard work, dedication, and ability to deliver high-quality results under pressure made him an invaluable asset to the team.
                          </h5>
                          <div class="social-links d-flex mx-auto justify-content-center text-center">
                            <a class="mx-2 fs-3 p-1" href=""><i class="bi bi-linkedin"></i></a>
                            <a class="mx-2 fs-3 p-1" href=""><i class="bi bi-whatsapp"></i></a>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>

  
  <?php $this->load->view('components/footer'); ?>

  <?php $this->load->view('components/js_links'); ?>


</body>
</html>
