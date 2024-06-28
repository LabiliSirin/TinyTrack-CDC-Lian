<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TinyTrack Parent-Side</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/reg.css" rel="stylesheet">

</head>

<body>

  <?php 
  include 'headerNav.php';
   ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Registration</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Registration</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="timeline-container">
        <div class="timeline">
            <ul>
                <li class="completed">1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
            </ul>
        </div>
    </div>

    <br>

    <section class="section regform">
    <div class="form-container">
        <div class="formheader">
            <div class="form-logo">
                <!-- Placeholder for logo -->
                <img src="assets/img/eccd_logo.png" alt="Logo" />
            </div>
            <div class="form-title">
                <h2>FORM 1</h2>
                <h3>Child Development Center</h3>
                <h4>Lian Batangas</h4>
                <h5>REGISTRATION FORM</h5>
            </div>
        </div>
        <form action="#" method="POST" class="registration-form">
            <div class="form-section">
                <h3>Child Information</h3>
                <div class="form-group">
                    <label for="child-name">Name of Child:</label>
                    <input type="text" class="form-control" id="child-name" name="child_name" required>
                </div>
                <div class="form-group">
                    <label for="child-gender">Gender:</label>
                    <input type="text" class="form-control" id="child-gender" name="child_gender" required>
                </div>
                <div class="form-group">
                    <label for="child-address">Address:</label>
                    <input type="text" class="form-control" id="child-address" name="child_address" required>
                </div>
                <div class="form-group">
                    <label for="child-birthday">Birthday:</label>
                    <input type="date" class="form-control" id="child-birthday" name="child_birthday" required>
                </div>
                <div class="form-group">
                    <label for="child-guardian">Guardian:</label>
                    <input type="text" class="form-control" id="child-guardian" name="child_guardian" required>
                </div>
                <div class="form-group">
                    <label for="guardian-relationship">Relationship:</label>
                    <input type="text" class="form-control" id="guardian-relationship" name="guardian_relationship" required>
                </div>
                <div class="form-group">
                    <label for="child-age">Age:</label>
                    <input type="number" class="form-control" id="child-age" name="child_age" required>
                </div>
                <div class="form-group">
                    <label for="child-first-language">Child First Language:</label>
                    <input type="text" class="form-control" id="child-first-language" name="child_first_language" required>
                </div>
                <div class="form-group">
                    <label for="child-second-language">Child Second Language:</label>
                    <input type="text" class="form-control" id="child-second-language" name="child_second_language" required>
                </div>
            </div>
            <div class="form-section">
                <h3>Guardian Information</h3>
                <div class="guardian-group">
                    <h4>Mother:</h4>
                    <div class="form-group">
                        <label for="mother-name">Name:</label>
                        <input type="text" class="form-control" id="mother-name" name="mother_name" required>
                    </div>
                    <div class="form-group">
                        <label for="mother-occupation">Occupation:</label>
                        <input type="text" class="form-control" id="mother-occupation" name="mother_occupation" required>
                    </div>
                    <div class="form-group">
                        <label for="mother-address">Address:</label>
                        <input type="text" class="form-control" id="mother-address" name="mother_address" required>
                    </div>
                    <div class="form-group">
                        <label for="mother-contact">Contact Number:</label>
                        <input type="text" class="form-control" id="mother-contact" name="mother_contact" required>
                    </div>
                </div>
                <div class="guardian-group">
                    <h4>Father:</h4>
                    <div class="form-group">
                        <label for="father-name">Name:</label>
                        <input type="text" class="form-control" id="father-name" name="father_name" required>
                    </div>
                    <div class="form-group">
                        <label for="father-occupation">Occupation:</label>
                        <input type="text" class="form-control" id="father-occupation" name="father_occupation" required>
                    </div>
                    <div class="form-group">
                        <label for="father-address">Address:</label>
                        <input type="text" class="form-control" id="father-address" name="father_address" required>
                    </div>
                    <div class="form-group">
                        <label for="father-contact">Contact Number:</label>
                        <input type="text" class="form-control" id="father-contact" name="father_contact" required>
                    </div>
                </div>
            </div>
            <div class="form-section">
                <h3>Emergency Contact</h3>
                <div class="form-group">
                    <label for="emergency-name">Name:</label>
                    <input type="text" class="form-control" id="emergency-name" name="emergency_name" required>
                </div>
                <div class="form-group">
                    <label for="emergency-contact">Contact:</label>
                    <input type="text" class="form-control" id="emergency-contact" name="emergency_contact" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>




  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>