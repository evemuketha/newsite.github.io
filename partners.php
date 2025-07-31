<?php include ('head.php');?>
<!DOCTYPE html>
<body>


<!-- ✅ Logo Carousel Section -->
<div class="container py-5" style="height:40vh">
  <h3 style="font-weight:bold;" class="text-center mb-4">Trusted By...</h3>
<p>We’ve worked with industry leaders in FMCG, Telecom, Financial Services, NGO, Real Estate, and Government. </h3>
</p>
  <div id="logoCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner text-center">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="row justify-content-center g-4">
          <div class="col-4 col-md-2">
            <img src="img/demo/BANK.png" class="client-logo" alt="KCMG">
          </div>
          <div class="col-4 col-md-2">
            <img src="img/demo/I&MM.png" class="client-logo" alt="TechNova">
          </div>
          <div class="col-4 col-md-2">
            <img src="img/demo/SAFARICOM.png" class="client-logo" alt="AlphaCorp">
          </div>
          <div class="col-4 col-md-2">
            <img src="img/demo/UNILEVER.png" class="client-logo" alt="KCMG">
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="row justify-content-center g-4">
          <div class="col-4 col-md-2">
            <img src="img/demo/SAFARICOM.png" class="client-logo" alt="Nova">
          </div>
          <div class="col-4 col-md-2">
            <img src="img/demo/UNILEVER.png" class="client-logo" alt="KCMG">
          </div>
          <div class="col-4 col-md-2">
            <img src="img/demo/I&MM.png" class="client-logo" alt="TechNova">
          </div>
          <div class="col-4 col-md-2">
            <img src="img/demo/BANK.png" class="client-logo" alt="KCMG">
          </div>
        </div>
      </div>

    </div>

    <!-- Optional Controls 
    <button class="carousel-control-prev" type="button" data-bs-target="#logoCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#logoCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>-->
  </div>
</div>

<!-- ✅ Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- ✅ Auto-rotate every 4 seconds -->
<script>
  const logoCarousel = document.querySelector('#logoCarousel');
  new bootstrap.Carousel(logoCarousel, {
    interval: 4000,
    ride: 'carousel',
    pause: false
  });
</script>



</body>
</html>
