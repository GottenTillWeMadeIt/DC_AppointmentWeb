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
    /* Sticky Footer Styles */
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
    .policy-box {
      background-color: #f8f9fa;
      border-left: 4px solid #008080;
      padding: 15px;
      margin: 20px 0;
      border-radius: 4px;
      font-size: 0.95rem;
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
        <h2 class="text-center mb-5">Book Your Appointment</h2>

        <!-- Appointment Policy Notice -->
        <div class="policy-box">
          <p><strong>Appointment Fee:</strong> A booking fee is required to confirm your appointment. You will be redirected to GCash or PayPal after submission.</p>
          <p><strong>No-Show Policy:</strong> If you fail to arrive within <strong>15–30 minutes</strong> of your scheduled time, you may be considered a no-show and required to pay a <strong>penalty fee</strong> before rescheduling. Please notify us if you need to cancel or reschedule.</p>
      </div>

<?php if(isset($_GET['success']) && $_GET['success'] == 1): ?>
<div class="alert alert-success" id="successMessage">
    Appointment booked successfully!
</div>
<?php endif; ?>

     <form action="php/book_appointment.php" method="POST">

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="fullName" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="fullName" name="fullName" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="contact" class="form-label">Contact Number</label>
              <input type="text" class="form-control" id="contact" name="contact" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="service" class="form-label">Service</label>
              <select class="form-select" id="service" name="service" required>
                <option value="">Select Service</option>
                <option value="Tooth Extraction">Tooth Extraction</option>
                <option value="Dental Cleaning">Dental Cleaning</option>
                <option value="Orthodontic Treatment">Orthodontic Treatment</option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="date" class="form-label">Preferred Date</label>
              <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="time" class="form-label">Preferred Time</label>
              <input type="time" class="form-control" id="time" name="time" required>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary w-100">Submit Booking</button>
            </div>
          </div>
        </form>

        <!-- Post-Form Note -->
        <div class="text-center mt-4">
          <small>By booking, you agree to our appointment and no-show policy.</small>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="text-center">
        <p class="mb-1">&copy; 2025 Dental Clinic's Website. All rights reserved.</p>
      
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