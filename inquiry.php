<?php
?>

<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Our Services - Dental Clinic</title>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">
  <link rel="icon" type="image/png" href="assets/Icon/DC_MLogo.png">
  <link rel="apple-touch-icon" href="assets/Icon/DC_MLogo.png">

  <!-- CSS - Fixed: Removed extra spaces in URLs -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>


  <style>
    /* Sticky Footer CSS */
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
    }
    main {
      flex: 1;
    }
    footer {
      margin-top: auto;
      background-color: #333;
      color: white;
      padding: 40px 0;
      text-align: center;
    }
    .section {
      padding: 60px 0;
    }
    .contact-info {
      background-color: #f8f9fa;
      border-radius: 12px;
      padding: 25px;
      margin-bottom: 40px;
      border: 1px solid #e9ecef;
    }
    .contact-info i {
      color: #008080;
      margin-right: 10px;
      width: 24px;
      text-align: center;
    }
    .map-container {
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      height: 350px;
      margin-bottom: 40px;
    }
    .map-container iframe {
      width: 100%;
      height: 100%;
      border: 0;
    }
  </style>
</head>
<body>


<!-- ✅ Navbar: Simple, Responsive, Working -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container">
    
    <!-- Brand: Logo + Clinic Name (responsive) -->
    <a class="navbar-brand d-flex align-items-center" href="index.html">
      <img src="assets/Icon/DC_MLogo.png" alt="Logo" width="40" height="40" class="me-2">
      <!-- Short on mobile, full on desktop -->
      <span class="fw-bold text-teal d-inline d-md-none">Dental Clinic</span>
      <span class="fw-bold text-teal d-none d-md-inline">Dental Clinic Appointment System</span>
    </a>

    <!-- Hamburger Toggle -->
    <button 
      class="navbar-toggler border-0" 
      type="button" 
      data-bs-toggle="collapse" 
      data-bs-target="#navbarNav"
      aria-controls="navbarNav" 
      aria-expanded="false" 
      aria-label="Toggle menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu Items -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
        
        <!-- About Dropdown (unchanged) -->
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAbout" role="button" data-bs-toggle="dropdown">
    About Us
  </a>
  <ul class="dropdown-menu border-0 shadow-sm">
    <li><h6 class="dropdown-header">Clinic Overview</h6></li>
    <li><a class="dropdown-item" href="about.html">Our Story</a></li>
    <li><a class="dropdown-item" href="about.html#mission">Mission</a></li>
    <li><a class="dropdown-item" href="about.html#vision">Vision</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><h6 class="dropdown-header">Our Team</h6></li>
    <li><a class="dropdown-item" href="about.html#dentist">Dr. R.L. Anino</a></li>
    <li><a class="dropdown-item" href="about.html#receptionist">Maria Santos</a></li>
  </ul>
</li>

<!-- ✅ Services Dropdown (Now Matches About Us Style) -->
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownServices" role="button" data-bs-toggle="dropdown">
    Services
  </a>
  <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="navbarDropdownServices">
    <li><h6 class="dropdown-header"><i class="bi bi-brush me-1"></i> Preventive Care</h6></li>
    <li><a class="dropdown-item" href="services.html#dental-cleaning">Dental Cleaning</a></li>
    <li><a class="dropdown-item" href="services.html#dental-checkup">Dental Check-Up</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><h6 class="dropdown-header"><i class="bi bi-tooth me-1"></i> Restorative Care</h6></li>
    <li><a class="dropdown-item" href="services.html#tooth-filling">Tooth Filling</a></li>
    <li><a class="dropdown-item" href="services.html#tooth-extraction">Tooth Extraction</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><h6 class="dropdown-header"><i class="bi bi-brightness-high me-1"></i> Cosmetic & Orthodontic</h6></li>
    <li><a class="dropdown-item" href="services.html#teeth-whitening">Teeth Whitening</a></li>
    <li><a class="dropdown-item" href="services.html#orthodontic">Orthodontic Treatment</a></li>
  </ul>
</li>
        <!-- ✅ Book Appointment Button (visible in nav on mobile) -->
        <li class="nav-item mt-2 mt-lg-0">
          <a href="appointment.php" class="btn-book nav-link px-3">
            <i class="bi bi-calendar-check"></i> Book
          </a>
        </li>
        
        <li class="nav-item"><a class="nav-link" href="inquiry.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="careers.php">Careers</a></li>
      </ul>
    </div>
    
  </div>
</nav>

  <!-- Main Content -->
  <main>
    <section class="section">
      <div class="container">
        <h2 class="text-center mb-4">Get in Touch</h2>
        <p class="text-center lead mb-5">We'd love to hear from you. Reach out with any questions or concerns.</p>

        <!-- Contact Info -->
        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="contact-info">
              <h5><i class="bi bi-info-circle"></i> Clinic Information</h5>
              <hr>
              <p><i class="bi bi-geo-alt"></i> <strong>Location:</strong> Dental Clinic's Addresss </Address></p>
              <p><i class="bi bi-building"></i> <strong>Clinic Name:</strong> Dental Clinic's Name</p>
              <p><i class="bi bi-clock"></i> <strong>Hours:</strong> Dental Clinic's Hours</p>
              <p><i class="bi bi-telephone"></i> <strong>Contact:</strong> Dental Clinic's Contact Number</p>
              <p><i class="bi bi-envelope"></i> <strong>Email:</strong> <a href="DentalClnic@Email.com" style="color: #008080;">DentalClnic@Email.com</a></p>
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="map-container">
              <!-- Google Map Embed -->
              <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.311786839193!2d125.8007473748576!3d7.49577239258192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMjknNDQuOCJOIDEyNcKwNDgnMDMuOCJF!5e0!3m2!1sen!2sph!4v1725000000000!5m2!1sen!2sph" 
                allowfullscreen="" 
                loading="lazy">
              </iframe>
            </div>
          </div>
        </div>

        <!-- Inquiry Form -->
       
          <?php if(isset($_GET['success']) && $_GET['success'] == 1): ?>
<div class="alert alert-success" id="successMessage">
    Message sent successfully!
</div>
<?php endif; ?>

        <form action="php/send_inquiry.php" method="POST">
       
        <h3 class="mt-5 mb-4">Send Us a Message</h3>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary w-100">Send Inquiry</button>
            </div>
          </div>
        </form>
        <div class="text-center mt-3">
          <small>We'll respond to your inquiry via email within 24 hours.</small>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="text-center">
        <p class="mb-1">&copy; 2025 Dental Clinic's Website. All rights reserved.</p>
      <p>Address: Your Dental's Location</p>
    </div>
    </div>
  </footer>

  <!-- Fixed: Removed extra spaces in script URL -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>

   <script>
    // Auto hide success message after 3 seconds
    setTimeout(function() {
        var msg = document.getElementById("successMessage");
        if (msg) {
            msg.style.transition = "opacity 0.5s ease";
            msg.style.opacity = "0";
            setTimeout(function(){
                msg.style.display = "none";
            }, 500);
        }
    }, 3000);
    
</script>
</body>
</html>