<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lightening Station</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <h1><a href="index" class="scrollto">Light<span>ening</span></a></h1>
        <!-- <a href="index.html" class="scrollto"><img src="assets/img/logos.png" alt="" title=""></a> -->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index#">Home</a></li>
          <li><a class="nav-link scrollto" href="index#about">About</a></li>
          <li><a class="nav-link scrollto" href="index#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="index#schedule">Test 1</a></li>
          <li><a class="nav-link another" href="reservation">Reservation</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

      <?php if(isset($_SESSION['user_id'])) : ?>
        <a class="sign-in scrollto" href="signin/logout">Log out</a>
      <?php else : ?>
        <a class="sign-in scrollto" href="signin">Sign In</a>
      <?php endif; ?>

    </div>
  </header>
  <!-- End Header -->

  
