<?php include ('nav2.php');?>

<?php include ('head.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      background-color: #0d1117;
      color: #ffffff;
    }

    .hero {
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.7)), url('omg/business.jpg') center/cover no-repeat;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      position: relative;
      background: url('img/business.jpg') center/cover no-repeat;

    }

    #typed-text {
      color: #0dcaf0;
      font-weight: bold;
    }

    .btn-outline-light:hover {
      background-color: #0dcaf0;
      color: #000;
      border-color: #0dcaf0;
    }
  </style>
</head>
<body>

<!-- Hero Section -->
<section class="hero">
  <div class="container z-3">
    <h2 class="display-4 fw-bold text-white mb-3">Welcome to our Website
    </h2>
    <h1 class="display-4 fw-bold text-white mb-3">
      We Help You <span id="typed-text"></span>
    </h1>
    <p class="lead fw-300 text-white mb-4">From strategy to execution, we build brands that connect and grow with purpose.</p>
    <a href="contact.php" class="btn btn-outline-light btn-lg d-inline-flex align-items-center gap-2">
      Contact Us
      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0L14 7.793l-3.146 3.147a.5.5 0 0 1-.708-.708L12.293 8H2.5a.5.5 0 0 1 0-1h9.793L10.146 5.354a.5.5 0 0 1 0-.708z"/>
      </svg>
    </a>
  </div>
</section>

<!-- Typed.js for animation -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
  new Typed("#typed-text", {
    strings: ["Grow.", "Stand Out.", "Connect.", "Win."],
    typeSpeed: 80,
    backSpeed: 40,
    backDelay: 1500,
    loop: true
  });
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



<!---->
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    #typed-text {
      color: #0d6efd; /* Bootstrap primary color */
      min-height: 40px;
    }
    .hero-image {
      background: url('img/service.jpg') center/cover no-repeat;
      min-height: 400px;
    }
    @media (min-width: 768px) {
      .hero-image {
        min-height: 100%;
      }
    }
  </style>
</head>
<body>

<section class="vh-100 d-flex align-items-center bg-white text-dark" id="hero">
  <div class="container-fluid">
    <div class="row g-0 align-items-center">

      <!-- Text Column -->
      <div class="col-md-6 p-5">
        <h1 class="display-4 fw-bold mb-3">
          BLACKPALM HOLDINGS LIMITED
        </h1>
        <p class="lead mb-4">
QUALITY OVER QUANTITY        </p>
        <a href="about.php" class="btn btn-primary btn-lg d-inline-flex align-items-center gap-2">
          About US
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0L14 7.793l-3.146 3.147a.5.5 0 0 1-.708-.708L12.293 8H2.5a.5.5 0 0 1 0-1h9.793L10.146 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </a>
      </div>

      <!-- Image Column -->
      <div class="col-md-6 hero-image">
						<img src="img/service.jpg" alt="Hero Image">
      </div>

    </div>
  </div>
</section>

<!-- Typed.js for animated text -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
  new Typed("#typed-text", {
    strings: ["Grow.", "Stand Out.", "Connect.", "Win."],
    typeSpeed: 80,
    backSpeed: 40,
    backDelay: 1500,
    loop: true
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<!---->
<head>
  <meta charset="UTF-8">
  <title>Hero with Typed Animation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    #typed-text {
      min-height: 40px;
    }
  </style>
</head>
<body>

<section class="vh-100 d-flex align-items-center bg-dark text-white" id="hero">
  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h1 class="display-4 fw-bold mb-3">
          We Help You <span id="typed-text" class="text-primary"></span>
        </h1>
        <p class="lead text-light mb-4">
          From strategy to execution, we fuel brands with creativity, campaigns, and meaningful engagement.
        </p>
        <a href="services.php" class="btn btn-outline-light btn-lg d-inline-flex align-items-center gap-2">
          OUR SERVICES
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0L14 7.793l-3.146 3.147a.5.5 0 0 1-.708-.708L12.293 8H2.5a.5.5 0 0 1 0-1h9.793L10.146 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Typed.js -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
  const typed = new Typed("#typed-text", {
    strings: ["Grow.", "Stand Out.", "Connect.", "Win."],
    typeSpeed: 80,
    backSpeed: 40,
    backDelay: 1500,
    loop: true
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



<!---->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Sticky Navbar with Centered Logo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .navbar-brand img {
      height: 50px;
      object-fit: contain;
    }
  </style>
</head>
	
<body>


  <!--Our Services
  <section id="services" class="services section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2></h2>
            <h2 style="display: flex; color:#333;">What we can do for you</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-dark text-center bg-light pb-2 h-100 shadow rounded-5 border-0">
              <div class="card-body d-flex flex-column justify-content-between">

                <!-- Icon (requires Bootstrap Icons) 
                <i class="bi bi-subtract display-4 text-primary mb-3"></i>
                <h3 class="card-title">A. Marketing Strategy & Consultancy</h3>

                <p class="lead">
                  Unlock your brand’s full potential with a tailored marketing strategy designed to elevate visibility,
                  drive growth, and deliver measurable impact."s</p>

              </div>
            </div>
          </div>


          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-dark rounded-5 shadow border-0">
              <div class="card-body d-flex flex-column justify-content-between">

                <!-- Icon (requires Bootstrap Icons)
                <i class="bi bi-subtract display-4 text-primary mb-3"></i>

                <h3 class="card-title">B. Media Services</h3>

                <p class="lead">
                  "Maximize your brand reach through targeted ATL and BTL media solutions that connect, captivate, and
                  convert across every channel." </p>


              </div>
            </div>
          </div>

          <div class="col-12 col-md-12 col-lg-4">
            <div class="card rounded-5 shadow border-0" style="background-color: #f3eac2; color: #3e3e3e;">
              <div class="card-body d-flex flex-column justify-content-between">

                <!-- Icon (requires Bootstrap Icons)
                <i class="bi bi-subtract display-4 text-primary mb-3"></i>

                <h3 class="card-title">C. Public Relations (PR)</h3>

                <p class="lead">
                  "Shape perception, build trust, and amplify your brand voice with strategic public relations that
                  foster meaningful media and stakeholder engagement." </p>


              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  -->
  <?php include ('chooseus.php');?>
<?php include ('footer.php');?>

</body>

</html>