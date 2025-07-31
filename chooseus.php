<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Auto-Open Accordion on Scroll</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html {
      scroll-behavior: smooth;
    }
    .pill-header {
      cursor: pointer;
      padding: 1rem;
      border-radius: 50px;
      background-color: #f8f9fa;
      border: 1px solid #ddd;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: background-color 0.3s ease;
    }
    .pill-header:hover {
      background-color: #e9ecef;
    }
    .pill-body {
      padding: 1rem 1.5rem;
      border-left: 3px solid #0d6efd;
      background-color: #fefefe;
    }
    .toggle-icon::after {
      content: "+";
      font-size: 1.5rem;
      color: #0d6efd;
      transition: all 0.3s ease;
    }
    .pill-header[aria-expanded="true"] .toggle-icon::after {
      content: "–";
    }
      /* Highlight opened pill */
.accordion-collapse.show ~ .pill-body,
.pill-header[aria-expanded="true"] {
  background-color: #ffffff !important; /* light blue */
  transition: background-color 0.3s ease;
}

/* Optional: make the text bolder or more vivid when active */
.pill-header[aria-expanded="true"] .fw-bold {
  color: #0d6efd;
}
  </style>
</head>
<body>

<!-- Navigation Links
<div class="container py-3 text-center">
  <a href="#section1" class="btn btn-outline-primary mx-1 scroll-link" data-target="pill1">Marketing Strategy</a>
  <a href="#section2" class="btn btn-outline-primary mx-1 scroll-link" data-target="pill2">Media Services</a>
  <a href="#section3" class="btn btn-outline-primary mx-1 scroll-link" data-target="pill3">Creative Studio</a>
</div>
-->
<!-- Accordion Section -->
 <section class="bg-darkgray">
<div class="container py-5">
<h4 style="font-weight:100;">Our Values</h4>
    <h1 style="font-weight: bold;">Why should you work <BR/>with us?</h1><BR/>
  <div class="accordion" id="pillAccordion">
    
    <!-- Pill 1 -->
    <div id="section1" class="accordion-item border-0 mb-3 bg-transparent">
      <div class="pill-header collapsed" data-bs-toggle="collapse" data-bs-target="#pill1" aria-expanded="false" aria-controls="pill1">
        <span class="fw-bold"> End-to-End Capability</span>
        <span class="toggle-icon"></span>
      </div>
      <div id="pill1" class="accordion-collapse collapse" data-bs-parent="#pillAccordion">
        <div class="pill-body">
            From concept to execution under one roof.
        </div>
      </div>
    </div>

    <!-- Pill 2 -->
    <div id="section2" class="accordion-item border-0 mb-3 bg-transparent">
      <div class="pill-header collapsed" data-bs-toggle="collapse" data-bs-target="#pill2" aria-expanded="false" aria-controls="pill2">
        <span class="fw-bold">Innovation-Led</span>
        <span class="toggle-icon"></span>
      </div>
      <div id="pill2" class="accordion-collapse collapse" data-bs-parent="#pillAccordion">
        <div class="pill-body">
            We merge data with creativity for smart solutions.
        </div>
      </div>
    </div>

    <!-- Pill 3 -->
    <div id="section3" class="accordion-item border-0 mb-3 bg-transparent">
      <div class="pill-header collapsed" data-bs-toggle="collapse" data-bs-target="#pill3" aria-expanded="false" aria-controls="pill3">
        <span class="fw-bold">Client-Centric</span>
        <span class="toggle-icon"></span>
      </div>
      <div id="pill3" class="accordion-collapse collapse" data-bs-parent="#pillAccordion">
        <div class="pill-body">
            Customized solutions tailored to your goals.
        </div>
      </div>
    </div>

     <!-- Pill 4 -->
    <div id="section4" class="accordion-item border-0 mb-3 bg-transparent">
      <div class="pill-header collapsed" data-bs-toggle="collapse" data-bs-target="#pill4" aria-expanded="false" aria-controls="pill4">
        <span class="fw-bold">Results-Focused</span>
        <span class="toggle-icon"></span>
      </div>
      <div id="pill4" class="accordion-collapse collapse" data-bs-parent="#pillAccordion">
        <div class="pill-body">
            Every initiative is tied to clear performance metrics.
        </div>
      </div>
    </div>

     <!-- Pill 5 -->
    <div id="section5" class="accordion-item border-0 mb-3 bg-transparent">
      <div class="pill-header collapsed" data-bs-toggle="collapse" data-bs-target="#pill5" aria-expanded="false" aria-controls="pill5">
        <span class="fw-bold">Nationwide Reach</span>
        <span class="toggle-icon"></span>
      </div>
      <div id="pill5" class="accordion-collapse collapse" data-bs-parent="#pillAccordion">
        <div class="pill-body">
Strong presence and partnerships across Kenya and beyond.        
</div>
      </div>
    </div>

  </div>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Automatically expand accordion on scroll-to
  document.querySelectorAll('.scroll-link').forEach(link => {
    link.addEventListener('click', function(e) {
      const targetId = this.getAttribute('data-target');
      const collapseElement = document.getElementById(targetId);

      // Wait for the scroll to finish
      setTimeout(() => {
        const bsCollapse = bootstrap.Collapse.getOrCreateInstance(collapseElement);
        bsCollapse.show(); // Expand
      }, 500); // Adjust for scroll timing
    });
  });
</script>

</body>
</html>


<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Handle scroll link click to expand targeted pill
  document.querySelectorAll('.scroll-link').forEach(link => {
    link.addEventListener('click', function (e) {
      const targetId = this.getAttribute('data-target');
      const collapseEl = document.getElementById(targetId);

      // Wait until scroll is done then show
      setTimeout(() => {
        // Collapse others (Bootstrap handles this if data-bs-parent is set)
        const bsCollapse = bootstrap.Collapse.getOrCreateInstance(collapseEl);
        bsCollapse.show();
      }, 500);
    });
  });

  // On page load: open pill if hash matches
  window.addEventListener('DOMContentLoaded', () => {
    const hash = window.location.hash;
    if (hash) {
      const targetSection = document.querySelector(hash);
      if (targetSection) {
        const collapseId = targetSection.querySelector('.accordion-collapse')?.id;
        if (collapseId) {
          const collapseEl = document.getElementById(collapseId);
          const bsCollapse = bootstrap.Collapse.getOrCreateInstance(collapseEl);
          bsCollapse.show();
        }
      }
    }
  });
</script>

</body>
</html>
