<?php include ('nav2.php');?>

<!DOCTYPE html>
<html>
    <head>
    <title>BLACKPALM</title>
	 <style>
    .fade-in {
      opacity: 0;
      animation: fadeIn ease-in 1.5s forwards;
    }

    .fade-in-delay {
      opacity: 0;
      animation: fadeIn ease-in 2.5s forwards;
    }

    @keyframes fadeIn {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }
  </style>

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

    </head>
    <body>


<header class="position-relative bg-dark text-white" style="background-image: url('img/img_3.jpg'); background-size: cover; background-position: center; height: 60vh;">
  <!-- Overlay -->
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

  <!-- Content -->
  <div class="container h-100 d-flex align-items-center justify-content-center">
    <div class="text-center z-1">
       <h1 class="display-4 fw-bold mb-3 fade-in">Get <strong>In Touch</strong></h1>
        <h2 class="fs-4 fw-light fade-in-delay">Turn Conversations Into Conversions...We’re Ready When You Are.



</h2>
     </div>
  </div>
</header>


<!-- Section Contact -->
		<section id="contact">
			<div class="container wow fadeInUp">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="section-heading">CONTACT <b>US</b></h2>
						<hr class="primary">
						<p>
							Ready to start your next project with us? That's great! Give us a call or send us an email
							and
							we will get back to you as soon as possible!
						</p>
						<div class="regularform">
							<div class="done">
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">×</button>
									Your message has been sent. Thank you!
								</div>
							</div>
							<form method="post" action="contact.php" id="contactform" class="text-left">
								<input name="name" type="text" class="col-md-6 norightborder" placeholder="Your Name *">
								<input name="email" type="email" class="col-md-6" placeholder="E-mail address *">
								<textarea name="comment" class="col-md-12" placeholder="Message *"></textarea>
								<input type="submit" id="submit" class="contact submit btn btn-primary btn-xl"
									value="Send message">
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="social" class="parallax parallax-image">
			<div class="overlay" style="background:#f8eeee;opacity:0.5;">
			</div>
			<div class="wrapsection">
				<div class="container wow fadeInUp">
					<div class="parallax-content">
						<div class="row wow fadeInLeft">
							<div class="col-md-6 text-center">
								<h2 class="section-heading">GET IN <b> TOUCH</b></h2>

								<hr class="primary">
								<p style="color: black;"> Sign up to our newsletter</p>
								<div class="regularform">
									<div class="done">
										<div class="alert alert-success">
											<button type="button" class="close" data-dismiss="alert">×</button>
											You are now subscribed. Thank You!
										</div>
									</div>
									<form action="subscription.php" method="post" id="subscriptionform"
										class="text-left">
										<input name="subscribername" type="text" class="col-md-12"
											placeholder="Your Name *"><br><br><br>
										<input name="subscriberemail" type="email" class="col-md-12"
											placeholder="Your Email *"><br><br><br>
										<input type="submit" name="" id="submit"
											class="contact submit btn btn-primary btn-xl" value="Subscribe">

									</form>
								</div>
							</div>

							<div class="col-md-6">
								<h2 class="section-heading text-center">CONTACT <b> SUPPORT</b></h2>
								<hr class="mb-4">
								<p style="color: black; text-align: center;"> Our Contact Details</p>


								<div class="contact-info">
									<p><i class='bx bxs-home-alt-2' ></i><strong> Address:</strong> 1234 Street, Nairobi City, Kenya</p>
									<p><i class='bx bxs-phone' ></i><strong> Phone:</strong> +123 456 7890</p>

									<p><i class='bx bxs-envelope' ></i><strong> Email:</strong> info@example.com</p>
									<p><i class='bx bxs-phone' ></i><strong> Website:</strong> Website Placeholder</p>
									<p><i class='bx bxs-phone' ></i><strong> Social Media:</strong> Handles Placeholder</p>
									
								</div>							
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<a id="sendbtn" href="https://api.whatsapp.com/send?phone=254114466205&text=Hello"></a>
<?php include ('footer.php');?>
         </body>
</html>
	