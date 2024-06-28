<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TinyTrack CDC Worker-Side</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  <link href="assets/css/cdcwAttendance.css" rel="stylesheet">

</head>

<body>

  <?php 
  include 'navWorker.php';
   ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Attendance</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Attendance</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section contact">

      <div class="row gy-4">

        <div class="col-xl-6">
            <div class="attendance-list">
              <div class="section">
                  <div class="section-title">C</div>
                  <div class="student">
                      <img src="assets/img/Child_2.jpg">
                      <div class="student-name">Chester Tayas</div>
                      <div class="status">
                          <span class="present">P</span>
                          <span class="absent">A</span>
                          <span class="late">L</span>
                          <span class="excuse">E</span>
                      </div>
                  </div>
                  <!-- Repeat .student divs for each student -->
              </div>
              <div class="section">
                  <div class="section-title">G</div>
                  <div class="student">
                      <img src="assets/img/Child_4.jpg">
                      <div class="student-name">Graciella Relevo</div>
                      <div class="status">
                          <span class="present">P</span>
                          <span class="absent">A</span>
                          <span class="late">L</span>
                          <span class="excuse">E</span>
                      </div>
                  </div>
                  <!-- Repeat .student divs for each student -->
              </div>
              <div class="section">
                  <div class="section-title">H</div>
                  <div class="student">
                      <img src="assets/img/profile-img.jpg">
                      <div class="student-name">Harris Mendoza</div>
                      <div class="status">
                          <span class="present">P</span>
                          <span class="absent">A</span>
                          <span class="late">L</span>
                          <span class="excuse">E</span>
                      </div>
                  </div>
                  <!-- Repeat .student divs for each student -->
              </div>
              <div class="section">
                  <div class="section-title">J</div>
                  <div class="student">
                      <img src="assets/img/Child_3.jpg">
                      <div class="student-name">Jonald Bulaclac</div>
                      <div class="status">
                          <span class="present">P</span>
                          <span class="absent">A</span>
                          <span class="late">L</span>
                          <span class="excuse">E</span>
                      </div>
                  </div>
                  <!-- Repeat .student divs for each student -->
              </div>
              <div class="section">
                  <div class="section-title">L</div>
                  <div class="student">
                      <img src="assets/img/Child_5.jpg">
                      <div class="student-name">Lovely Nasol</div>
                      <div class="status">
                          <span class="present">P</span>
                          <span class="absent">A</span>
                          <span class="late">L</span>
                          <span class="excuse">E</span>
                      </div>
                  </div>
                  <!-- Repeat .student divs for each student -->
              </div>
              <!-- Repeat .section divs for each section -->
          </div>

        </div>

        <div class="col-xl-6">
          <div class="row">
            <div class="col-lg-6">
              <div class="info-box card" style="display: flex; align-items: center; padding: 20px;">
              <i class="bi bi-person-check" style="color: #338E40; margin-right: 10px;"></i>
                <h3 style="margin: 0;">Present</h3>
                <b style="margin: 0;">10</b>
              </div>
            </div>
            <div class="col-lg-6">
               <div class="info-box card" style="display: flex; align-items: center; padding: 20px; ">
                <i class="bi bi-person-x" style="color: #f44336; margin-right: 10px;"></i>
                <h3 style="margin: 0;">Absent</h3>
                <b style="margin: 0;">3</b>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="info-box card" style="display: flex; align-items: center; padding: 20px;">
                <i class="bi bi-clock-history" style="color: #ff9800; margin-right: 10px;"></i>
                <h3 style="margin: 0;">Late</h3>
                <b style="margin: 0;">2</b>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card" style="display: flex; align-items: center; padding: 20px;">
                <i class="bi bi-person-dash" style="color: #0E2448; margin-right: 10px;"></i>
                <h3 style="margin: 0;">Excuse</h3>
                <b style="margin: 0;">1</b>
              </div>
            </div>
          </div>
        </div>

        

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