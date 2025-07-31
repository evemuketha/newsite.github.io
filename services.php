<?php include('nav2.php'); ?>
<?php include('head.php'); ?>
<!DOCTYPE HTML>

<!--
    Massively by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
  <title>BLACKPALM</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Black Palm </title>
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <!-- Custom Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link
    href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;'
    rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
  <!-- Plugin CSS -->
  <link rel="stylesheet" href="css/animate.min.css" type="text/css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!-- Icon Font Stylesheet -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!--font awesome-->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    html {
      scroll-behavior: smooth;
    }

    .hero {
      height: 100vh;
      background: url('img/desk.jpg') no-repeat center center/cover;
      position: relative;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
    }

    .hero-content {
      position: relative;
      z-index: 2;
    }

    .down-arrow {
      position: absolute;
      bottom: 30px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 2rem;
      animation: bounce 2s infinite;
      color: white;
      z-index: 2;
      cursor: pointer;
    }

    @keyframes bounce {

      0%,
      100% {
        transform: translateX(-50%) translateY(0);
      }

      50% {
        transform: translateX(-50%) translateY(10px);
      }
    }
  </style>
</head>

<body>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1 class="display-4 fw-bold">Welcome to Our World</h1>
      <p class="lead">Creative. Strategic. Powerful.</p>
    </div>

    <!-- Clickable Arrow -->
    <a href="#next-section" class="down-arrow">
      <i class="bi bi-chevron-down"></i>
    </a>
  </section>

  <!-- Scroll Target Section -->
  <section id="next-section" class="py-5 bg-light">
    <div class="container">
      <h2 class="fw-bold text-center">Our Services</h2>
      <p class="text-center">Learn More...</p>
    </div>
  </section>
  <!---->
  <section class="py-5 bg-light" id="our-values">
    <div class="container text-center">
      <div class="row g-4">

        <!-- Value 1 -->
        <div class="col-md-4">
          <div class="p-4 border rounded-4 h-100 shadow-sm bg-white">
            <div class="fs-2 fw-bold text-primary mb-3"></div>
            <h4 class="fw-semibold mb-3">Marketing Strategy & Consultancy</h4>
            <p class="text-muted">
              Unlock your brand’s full potential with a tailored marketing strategy designed to elevate visibility,
              drive growth, and deliver measurable impact."s
            </p>
            <a href="service1.php"><button class="btn btn-primary mt-3 rounded-pill">Learn More</button></a>

          </div>
        </div>

        <!-- Value 2 -->
        <div class="col-md-4">
          <div class="p-4 border rounded-4 h-100 shadow-sm bg-white">
            <div class="fs-2 fw-bold text-flex mb-3"></div>
            <h4 class="fw-semibold mb-3">Media Services</h4>
            <p class="text-muted">
              Maximize your brand reach through targeted ATL and BTL media solutions that connect, captivate, and
              convert across every channel.
            </p>
            <a href="service2.php"><button class="btn btn-primary mt-3 rounded-pill">Learn More</button></a>

          </div>
        </div>

        <!-- Value 3 -->
        <div class="col-md-4">
          <div class="p-4 border rounded-4 h-100 shadow-sm bg-white">
            <div class="fs-2 fw-bold text-primary mb-3"></div>
            <h4 class="fw-semibold mb-3">Public Relations (PR)</h4>
            <p class="text-muted">
              Shape perception, build trust, and amplify your brand voice with strategic public relations that foster
              meaningful media and stakeholder engagement.
            </p>
            <a href="service3.php"><button class="btn btn-primary mt-3 rounded-pill">Learn More</button></a>

          </div>
        </div>

      </div>


      <div class="row g-4">

        <!-- Value 1 -->
        <div class="col-md-4">
          <div class="p-4 border rounded-4 h-100 shadow-sm bg-white">
            <div class="fs-2 fw-bold text-primary mb-3"></div>
            <h4 class="fw-semibold mb-3">Advertising Production</h4>
            <p class="text-muted">

              Unlock your brand’s full potential with a tailored marketing strategy designed to elevate visibility,
              drive growth, and deliver measurable impact."s
            </p>
            <a href="service4.php"><button class="btn btn-primary mt-3 rounded-pill">Learn More</button></a>

          </div>
        </div>

        <!-- Value 2 -->
        <div class="col-md-4">
          <div class="p-4 border rounded-4 h-100 shadow-sm bg-white">
            <div class="fs-2 fw-bold text-flex mb-3"></div>
            <h4 class="fw-semibold mb-3">Photography & Creative Studio</h4>
            <p class="text-muted">
              Capture compelling visuals with professional photography and creative studio services that elevate your
              brand’s identity, storytelling, and market presence.
            </p>
            <a href="service5.php"><button class="btn btn-primary mt-3 rounded-pill">Learn More</button></a>

          </div>
        </div>

        <!-- Value 3 -->
        <div class="col-md-4">
          <div class="p-4 border rounded-4 h-100 shadow-sm bg-white">
            <div class="fs-2 fw-bold text-primary mb-3"></div>
            <h4 class="fw-semibold mb-3">Events & Activations</h4>
            <p class="text-muted">
              Create unforgettable brand experiences through expertly planned events and activations that engage
              audiences, spark interaction, and inspire lasting connections.
            </p>
            <a href="service6.php"><button class="btn btn-primary mt-3 rounded-pill">Learn More</button></a>

          </div>
        </div>



        <div class="row g-4">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <div class="p-4 border rounded-4 h-100 shadow-sm bg-white">
              <div class="fs-2 fw-bold text-primary mb-3"></div>
              <h4 class="fw-semibold mb-3">Campaign Execution & Strategy</h4>
              <p class="text-muted">
               Drive results with end-to-end campaign strategy and execution tailored to align with your goals, audience insights, and brand vision   </p>
              <a href="service7.php"><button class="btn btn-primary mt-3 rounded-pill">Learn More</button></a>

            </div>
          </div>
          <div class="col-md-4"></div>


        </div>

      </div>
    </div>
  </section>

  <!--our services-->


  <!--end-->

  <div class="container" style="background-color: rgba(0, 0, 0, 0.5); ">
    <div class="container bg-light wow fadeInLeft" style="background-color:#333; ">
      <div class="row align-items-center">


      </div>
    </div>
  </div>


  <!--Hero section-->
  <div class="container wow fadeInRight">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1 text-center">
        <h2></h2>
        <p></p>
        <!--<hr class="primary">-->


      </div>
    </div>
  </div>








  <?php include('chooseus.php'); ?>



  <!-- ✅ Logo Carousel Section -->
  <?php include('partners.php') ?>

</body>

</html>

<?php include('get.php'); ?>

<!-- Footer-->
<?php include('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<!-- Scripts 
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/browser.min.js"></script>
            <script src="assets/js/breakpoints.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>-->
</body>

</html>