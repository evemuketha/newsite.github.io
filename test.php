
<head>
    <style>
    .navbar-brand img {
      height: 30px;
      object-fit: contain;
    }
  </style>
</head>
<nav class="navbar navbar-expand-sm navbar-light bg-light py-3 sticky-top shadow-sm">
  <div class="container">

    <!-- Mobile toggle button -->
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNav" aria-controls="mobileNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Mobile collapse menu -->
    <div class="collapse navbar-collapse d-lg-none" id="mobileNav">
      <ul class="navbar-nav mx-auto text-center">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
       
        </ul>
<!-- Centered Logo -->
    <a class="navbar-brand ms-auto" href="#">
      <img src="img/demo/bph.jpg" alt="Logo" />
    </a>


              <ul class="navbar-nav mx-auto text-center">
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Split Hero with Gradient Overlay</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    #typed-text {
      color: #0d6efd;
      min-height: 40px;
    }

    .hero-image {
      position: relative;
background: url('https://images.unsplash.com/photo-1603570419896-d6786dfc7af4?auto=format&fit=crop&w=800&q=80') center/cover no-repeat;
      min-height: 400px;
    }

    .hero-image::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom right, rgba(13, 110, 253, 0.6), rgba(0, 0, 0, 0.5));
      z-index: 1;
    }

    .hero-image::after {
      content: "";
      position: absolute;
      inset: 0;
      z-index: 2;
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
      <div class="col-md-6 p-5 z-3">
        <h1 class="display-4 fw-bold mb-3">
          We Help You <span id="typed-text"></span>
        </h1>
        <p class="lead mb-4">
          From strategy to execution, we build bold brands that connect, engage, and grow with purpose.
        </p>
        <a href="#contact" class="btn btn-primary btn-lg d-inline-flex align-items-center gap-2">
          Get in Touch
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0L14 7.793l-3.146 3.147a.5.5 0 0 1-.708-.708L12.293 8H2.5a.5.5 0 0 1 0-1h9.793L10.146 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </a>
      </div>

      <!-- Image with Gradient -->
      <div class="col-md-6 hero-image">
        						<img src="img/seo7.png" alt="Hero Image">

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



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Split Hero with Typing</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    #typed-text {
      color: #0d6efd; /* Bootstrap primary color */
      min-height: 40px;
    }
    .hero-image {
      background: url('img/seo.png') center/cover no-repeat;
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
          We Help You <span id="typed-text"></span>
        </h1>
        <p class="lead mb-4">
          From strategic thinking to flawless execution, we build bold brands that connect, engage, and grow.
        </p>
        <a href="#contact" class="btn btn-primary btn-lg d-inline-flex align-items-center gap-2">
          Get in Touch
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0L14 7.793l-3.146 3.147a.5.5 0 0 1-.708-.708L12.293 8H2.5a.5.5 0 0 1 0-1h9.793L10.146 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </a>
      </div>

      <!-- Image Column -->
      <div class="col-md-6 hero-image"></div>

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



<!DOCTYPE html>
<html lang="en">
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
        <a href="#get-in-touch" class="btn btn-outline-light btn-lg d-inline-flex align-items-center gap-2">
          Contact Us
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




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Centered Logo Navbar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      padding-top: 80px; /* Adjust based on navbar height */
    }

    .navbar-custom {
      background-color: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      border-bottom: 1px solid #ddd;
    }

    .navbar-brand img {
      height: 50px;
    }

    .navbar-nav .nav-link {
      font-weight: 500;
      color: #333;
    }

    .navbar-nav .nav-link:hover {
      color: #007bff;
    }

    .hero-section {
      height: 100vh;
      background-image: url('https://images.unsplash.com/photo-1519337265831-281ec6cc8514');
      background-size: cover;
      background-position: center;
      position: relative;
    }

    .hero-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      text-align: center;
    }
  </style>
</head>
<body>


<!-- Hero Section -->
<section class="hero-section">
  <div class="hero-text">
    <h1 class="display-4">Welcome to Our Website</h1>
    <p class="lead">We craft brand experiences that shine.</p>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

  <!---->
	<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-4">
      
      <!-- Box 1 -->
      <div class="col-md-4">
        <div
        class="bg-white rounded-3 shadow p-4 h-100 text-center">
          <h4 class="fw-bold mb-2">Marketing Strategy & Consultancy</h4>
          <p class="text-muted">
Unlock your brand’s full potential with a tailored marketing strategy designed to elevate visibility, drive growth, and deliver measurable impact."s 

		</p>
          <button class="btn btn-primary mt-3 rounded-pill" data-bs-toggle="collapse" data-bs-target="#service1" aria-expanded="false" aria-controls="service1">Learn More</button>

        </div>
      </div>
      
      <!-- Box 2 -->
      <div class="col-md-4">
        <div class="bg-white rounded-3 shadow p-4 h-100 text-center">
          <h4 class="fw-bold mb-2">Media Services</h4>
          <p class="text-muted">
Maximize your brand reach through targeted ATL and BTL media solutions that connect, captivate, and convert across every channel.
		  </p>
            <button class="btn btn-primary mt-3 rounded-pill">Learn More</button>

        </div>
      </div>
      
      <!-- Box 3 -->
      <div class="col-md-4">
        <div class="bg-white rounded-3 shadow p-4 h-100 text-center">
          <h4 class="fw-bold mb-2"> Public Relations (PR)</h4>
          <p class="text-muted">
Shape perception, build trust, and amplify your brand voice with strategic public relations that foster meaningful media and stakeholder engagement.
		  </p>
            <button class="btn btn-primary mt-3 rounded-pill">Learn More</button>

        </div>
      </div>

    </div>

	    <div class="row g-4">
			 <!-- Box 1 -->
      <div class="col-md-4">
        <div class="bg-white rounded-3 shadow p-4 h-100 text-center">
          <h4 class="fw-bold mb-2">Advertising Production</h4>
          <p class="text-muted">
Bring your brand to life with high-quality advertising production that captures attention, tells your story, and drives measurable impact.		</p>
      <button class="btn btn-primary mt-3 rounded-pill">Learn More</button>
        
</div>
      </div>
      
      <!-- Box 2 -->
      <div class="col-md-4">
        <div class="bg-white rounded-3 shadow p-4 h-100 text-center">
          <h4 class="fw-bold mb-2">Photography & Creative Studio</h4>
          <p class="text-muted">
Capture compelling visuals with professional photography and creative studio services that elevate your brand’s identity, storytelling, and market presence.
		  </p>
            <button class="btn btn-primary mt-3 rounded-pill">Learn More</button>

        </div>
      </div>
      
      <!-- Box 3 -->
      <div class="col-md-4">
        <div class="bg-white rounded-3 shadow p-4 h-100 text-center">
          <h4 class="fw-bold mb-2">Events & Activations</h4>
          <p class="text-muted">
Create unforgettable brand experiences through expertly planned events and activations that engage audiences, spark interaction, and inspire lasting connections.		
</p>
      <button class="btn btn-primary mt-3 rounded-pill">Learn More</button>
        
</div>
      </div>
</div>
<div class="row g-4">
  <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="bg-white rounded-4 shadow p-4 h-100 text-center">
          <h4 class="fw-bold mb-2">Campaign Strategy & Execution</h4>
          <p class="text-muted">
Drive results with end-to-end campaign strategy and execution tailored to align with your goals, audience insights, and brand vision.      </p>
      <button class="btn btn-primary mt-3 rounded-pill">Learn More</button>
        
    </div>
    </div>
  <div class="col-md-4"></div>

</div>

  </div>
</section>
  <!---->
<section class="py-5 bg-light" id="our-values">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">What You Gain Working With Us</h2>
    <div class="row g-4">

      <!-- Value 1 -->
      <div class="col-md-4">
        <div class="p-4 border rounded-4 h-100 shadow-sm bg-white">
          <h4 class="fw-semibold mb-3">Expertise You Can Trust</h4>
          <p class="text-muted">
            With decades of combined industry experience, our team delivers insights that guide powerful, strategic brand decisions.
          </p>
        </div>
      </div>

      <!-- Value 2 -->
      <div class="col-md-4">
        <div class="p-4 border rounded-4 h-100 shadow-sm bg-white">
          <h4 class="fw-semibold mb-3">Holistic Brand Support</h4>
          <p class="text-muted">
            We unite strategy, creative, production, and PR to offer cohesive, full-spectrum support tailored to your brand.
          </p>
        </div>
      </div>

      <!-- Value 3 -->
      <div class="col-md-4">
        <div class="p-4 border rounded-4 h-100 shadow-sm bg-white">
          <h4 class="fw-semibold mb-3">Commitment to Quality</h4>
          <p class="text-muted">
            Every execution is delivered with precision, care, and creativity to meet your brand's highest standards.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="py-5 bg-light" id="our-values">
  <div class="container text-center">
    <h2 class="fw-bold mb-5">What You Gain Working With Us</h2>
    <div class="row g-4">

      <!-- Value 1 -->
      <div class="col-md-4">
        <div class="p-4 border rounded-4 h-100 shadow-sm bg-white">
          <div class="fs-2 fw-bold text-primary mb-3"></div>
          <h4 class="fw-semibold mb-3">Marketing Strategy & Consultancy</h4>
          <p class="text-muted">
Unlock your brand’s full potential with a tailored marketing strategy designed to elevate visibility, drive growth, and deliver measurable impact."s 
          </p>
        </div>
      </div>

      <!-- Value 2 -->
      <div class="col-md-4">
        <div class="p-4 border rounded-4 h-100 shadow-sm bg-white">
          <div class="fs-2 fw-bold text-flex mb-3"></div>
          <h4 class="fw-semibold mb-3">Media Services</h4>
          <p class="text-muted">
Maximize your brand reach through targeted ATL and BTL media solutions that connect, captivate, and convert across every channel.
          </p>
        </div>
      </div>

      <!-- Value 3 -->
      <div class="col-md-4">
        <div class="p-4 border rounded-4 h-100 shadow-sm bg-white">
          <div class="fs-2 fw-bold text-primary mb-3"></div>
          <h4 class="fw-semibold mb-3">Public Relations (PR)</h4>
          <p class="text-muted">
Shape perception, build trust, and amplify your brand voice with strategic public relations that foster meaningful media and stakeholder engagement.
          </p>
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

Unlock your brand’s full potential with a tailored marketing strategy designed to elevate visibility, drive growth, and deliver measurable impact."s 
          </p>
        </div>
      </div>

      <!-- Value 2 -->
      <div class="col-md-4">
        <div class="p-4 border rounded-4 h-100 shadow-sm bg-white">
          <div class="fs-2 fw-bold text-flex mb-3"></div>
          <h4 class="fw-semibold mb-3">Photography & Creative Studio</h4>
          <p class="text-muted">
Capture compelling visuals with professional photography and creative studio services that elevate your brand’s identity, storytelling, and market presence.
          </p>
        </div>
      </div>

      <!-- Value 3 -->
      <div class="col-md-4">
        <div class="p-4 border rounded-4 h-100 shadow-sm bg-white">
          <div class="fs-2 fw-bold text-primary mb-3"></div>
          <h4 class="fw-semibold mb-3">Events & Activations</h4>
          <p class="text-muted">
Create unforgettable brand experiences through expertly planned events and activations that engage audiences, spark interaction, and inspire lasting connections.		
          </p>
        </div>
      </div>



      <div class="row g-4">
      <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="p-4 border rounded-4 h-100 shadow-sm bg-white">
          <div class="fs-2 fw-bold text-primary mb-3"></div>
          <h4 class="fw-semibold mb-3">Events & Activations</h4>
          <p class="text-muted">
Create unforgettable brand experiences through expertly planned events and activations that engage audiences, spark interaction, and inspire lasting connections.		
          </p>
        </div>
            </div>
      <div class="col-md-4"></div>


      </div>

    </div>
  </div>
</section>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pills with One Content Body</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">
  <h2 class="mb-4 text-center">Our Services</h2>

  <!-- Pills Navigation -->
  <ul class="nav nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="strategy-tab" data-bs-toggle="pill" data-bs-target="#strategy" type="button" role="tab">Marketing Strategy</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="media-tab" data-bs-toggle="pill" data-bs-target="#media" type="button" role="tab">Media Services</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="events-tab" data-bs-toggle="pill" data-bs-target="#events" type="button" role="tab">Events & Activation</button>
    </li>
  </ul>

  <!-- Shared Content Area -->
  <div class="tab-content bg-white rounded-4 shadow-sm p-4" id="pills-tabContent">
    <div class="tab-pane fade show active" id="strategy" role="tabpanel">
      <h4>Marketing Strategy</h4>
      <p>
        We provide tailored marketing strategies designed to align with your brand goals and engage your audience effectively.
      </p>
    </div>
    <div class="tab-pane fade" id="media" role="tabpanel">
      <h4>Media Services (ATL & BTL)</h4>
      <p>
        Our expert team delivers across traditional and digital channels to reach your audience with impact and precision.
      </p>
    </div>
    <div class="tab-pane fade" id="events" role="tabpanel">
      <h4>Events & Activation</h4>
      <p>
        We plan and execute live experiences that immerse, engage, and leave lasting impressions with your target audience.
      </p>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Connected Pills with Multiple Content Bodies</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">
  <h2 class="text-center mb-5">Explore Our Services</h2>

  <!-- Pills Navigation -->
  <ul class="nav nav-pills justify-content-center mb-3" id="service-pills" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pill-strategy-tab" data-bs-toggle="pill" data-bs-target="#pill-strategy" type="button" role="tab">
        Marketing Strategy
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pill-media-tab" data-bs-toggle="pill" data-bs-target="#pill-media" type="button" role="tab">
        Media Services
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pill-events-tab" data-bs-toggle="pill" data-bs-target="#pill-events" type="button" role="tab">
        Events & Activation
      </button>
    </li>
  </ul>

  <!-- Shared Container with Multiple Tab Bodies -->
  <div class="tab-content border rounded-4 shadow-sm p-4 bg-white" id="service-pillsContent">
    <!-- Body 1 -->
    <div class="tab-pane fade show active" id="pill-strategy" role="tabpanel">
      <h4 class="fw-bold">Marketing Strategy</h4>
      <p>We craft intelligent, data-driven strategies to grow your brand and connect with your target market effectively.</p>
    </div>

    <!-- Body 2 -->
    <div class="tab-pane fade" id="pill-media" role="tabpanel">
      <h4 class="fw-bold">Media Services (ATL & BTL)</h4>
      <p>Delivering bold campaigns across digital and traditional channels with measurable impact and creative precision.</p>
    </div>

    <!-- Body 3 -->
    <div class="tab-pane fade" id="pill-events" role="tabpanel">
      <h4 class="fw-bold">Events & Activation</h4>
      <p>We create memorable, live brand experiences that inspire, activate, and drive lasting consumer engagement.</p>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<section class="vh-100 d-flex align-items-center bg-light" id="hero">
  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h1 class="display-4 fw-bold mb-3">
          Elevate Your Brand with Bold, Strategic Marketing
        </h1>
        <p class="lead text-muted mb-4">
          We help visionary brands grow through smart campaigns, storytelling, and unforgettable experiences.
        </p>
        <a href="#get-in-touch" class="btn btn-primary btn-lg d-inline-flex align-items-center gap-2">
          Let’s Get Started
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0L14 7.793l-3.146 3.147a.5.5 0 0 1-.708-.708L12.293 8H2.5a.5.5 0 0 1 0-1h9.793L10.146 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>

	<div class="flex-section gtco-gray-bg">
		<div class="col-1">
			<div class="text">

				<div class="row row-pb-sm">
					<div class="col-md-12">
					<h2>Web Analytics</h2>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae accusamus, fugiat ut! Ducimus accusamus, quos. Esse ea iste, expedita atque quod quo maxime, saepe! Architecto unde aliquid atque excepturi dolores dolore fugit rem recusandae amet a, molestiae et! Dolore, laborum?</p>
					<p>Quaerat quisquam quasi minima at molestias porro accusantium qui atque doloremque ab, odio tempora obcaecati cumque veritatis quo, assumenda nihil dolor optio enim fugit accusamus laborum. Autem neque dignissimos, corrupti, fugiat labore nisi illo, delectus, alias natus optio distinctio culpa!</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<ul class="check-li">
							<li>Quaerat quisquam quasi</li>
							<li>Accusantium qui atque doloremque</li>
							<li>Expedita atque quod</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="check-li">
							<li>Quaerat quisquam quasi</li>
							<li>Accusantium qui atque doloremque</li>
							<li>Expedita atque quod</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-2 flex-img" style="background-image: url(images/img_1.jpg);"></div>
	</div>

     <section>
    <div class="container wow fadeInLeft" style="background-color: #e4e4e4;">
			<div class="row align-items-center">
				<div class="col-lg-6 px-5 py-5">
					
          <h2 class="mb-4">Media Services</h2>

						<BR/><BR/>
            
<div class="row mt-4">
  <div class="col-md-6">
 <ul class="list-unstyled">
            <p>Above-the-Line (ATL) Media</p>
            <li>✅ TV, Radio, Print media planning and buying</li>
            <li>✅ Outdoor media (billboards, transit ads, street poles)</li>
            <li>✅ Go-to-market strategy</li>
            <li>✅ Integrated campaign planning</li>
          </ul>

  </div>
  <div class="col-md-6">
 <ul class="list-unstyled">
  <p>Below-the-Line (BTL) Media</p>
            <li>✅ Trade activations</li>
            <li>✅ Experiential marketing</li>
            <li>✅ Roadshows, pop-ups, and point-of-sale displays</li>
           
          </ul>

  </div>
</div>
					
				</div>
				<div class="col-md-6">
					<div class="hero-image">
						<img src="img/seo7.png" alt="Hero Image">
					</div>
				</div>
			</div>
		</div>
</section>


<!--section end-->
    <section>
    <div class="container wow fadeInLeft" style="background-color: #e4e4e4;">
			<div class="row align-items-center">
				<div class="col-lg-6 px-5 py-5">
					
          <h2 class="mb-4">Media Services</h2>

						<BR/><BR/>
            
<div class="row mt-4">
  <div class="col-md-6">
 <ul class="list-unstyled">
            <p>Above-the-Line (ATL) Media</p>
            <li>✅ TV, Radio, Print media planning and buying</li>
            <li>✅ Outdoor media (billboards, transit ads, street poles)</li>
            <li>✅ Go-to-market strategy</li>
            <li>✅ Integrated campaign planning</li>
          </ul>

  </div>
  <div class="col-md-6">
 <ul class="list-unstyled">
  <p>Below-the-Line (BTL) Media</p>
            <li>✅ Trade activations</li>
            <li>✅ Experiential marketing</li>
            <li>✅ Roadshows, pop-ups, and point-of-sale displays</li>
           
          </ul>

  </div>
</div>
					
				</div>
				<div class="col-md-6">
					<div class="hero-image">
						<img src="img/seo7.png" alt="Hero Image">
					</div>
				</div>
			</div>
		</div>
</section>


  <section>
<div class="col-lg-6 px-5 py-5" id="service1">
					
          <h2 class="mb-4"> Marketing Strategy <br> Consultancy</h2>

						<BR/><BR/>
<div class="row mt-4">
  <div class="col-md-6">
 <ul class="list-unstyled">
            <li>✅ Brand positioning & development</li>
            <li>✅ Consumer research & market insights</li>
            <li>✅ Brand positioning & development</li>
            <li>✅ Go-to-market strategy</li>
            <li>✅ Integrated campaign planning</li>
          </ul>

  </div>
</div>
					
				</div>
                	 <!-- Hexagon Image Column -->
    <div class="col-lg-6 d-flex justify-content-center align-items-center p-5">
      <div class="hexagon-img" style="
        background-image: url('img/events.jpg');
        background-size: cover;
        background-position: center;
        width: 50vw;
        height: 50vh; ">
      </div>
    </div>
    </section>
