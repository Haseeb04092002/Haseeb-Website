<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="<?= site_url('Home/Pages/Home'); ?>" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Haseeb's Portfolio</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?= site_url('Home/Pages/Home'); ?>" class="active">Home<br></a></li>
          <li><a href="<?= site_url('Home/Pages/About'); ?>">About</a></li>
          <li><a href="<?= site_url('Home/Pages/Resume'); ?>">Resume</a></li>
          <li><a href="<?= site_url('Home/Pages/Skills'); ?>">Skills</a></li>
          <li><a href="<?= site_url('Home/Pages/Services'); ?>">Services</a></li>
          <li><a href="<?= site_url('Home/Pages/Projects'); ?>">Projects</a></li>
          <!-- <li><a href="<?= site_url('Home/Pages/RecentPosts'); ?>">Blog</a></li> -->
          <li><a href="<?= site_url('Home/Pages/Contact'); ?>">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted flex-md-shrink-0" type="button" href="<?= base_url('assets/Haseeb-CV.pdf'); ?>" download="Haseeb-CV.pdf">Download CV</a>

    </div>
</header>