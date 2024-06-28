<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TinyTrack CDC Worker-Side</title>
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
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <?php 
  include 'navWorker.php';
   ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Masterlist</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Masterlist</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead style="margin-top: 40px;">
                  <tr>
                    <th>
                      <b>Name of Child</b>
                    </th>
                    <th>Nickname</th>
                    <th>Sex</th>
                    <th>Birthday</th>
                    <th>Birthplace</th>
                    <th>Age</th>
                    <th>Religion</th>
                    <th>Fav Cartoon Character</th>
                    <th>Fav Color</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Harris Mendoza</td>
                    <td>Ris</td>
                    <td>Male</td>
                    <td>20019/29/11</td>
                    <td>Quezon, Province</td>
                    <td>5</td>
                    <td>Roman Catholic</td>
                    <td>Mr. Bean</td>
                    <td>Blue</td>
                  </tr>
                  <tr>
                    <td>Lovely Nasol</td>
                    <td>Love</td>
                    <td>Female</td>
                    <td>2019/02/11</td>
                    <td>Quezon, Province</td>
                    <td>5</td>
                    <td>Roman Catholic</td>
                    <td>Sofia the First</td>
                    <td>Red</td>
                  </tr>
                  <tr>
                    <td>Jonald Bulaclac</td>
                    <td>Jo</td>
                    <td>Male</td>
                    <td>2019/17/09</td>
                    <td>Nasugbu, Batangas</td>
                    <td>5</td>
                    <td>Roman Catholic</td>
                    <td>Barbie</td>
                    <td>Pink</td>
                  </tr>
                  <tr>
                    <td>Graciella Relevo</td>
                    <td>Shela</td>
                    <td>Female</td>
                    <td>2019/11/05</td>
                    <td>Nasugbu, Batangas</td>
                    <td>5</td>
                    <td>Roman Catholic</td>
                    <td>Hello Kitty</td>
                    <td>Yellow</td>
                  </tr>
                  <tr>
                    <td>Chester Tayas</td>
                    <td>Ter</td>
                    <td>Male</td>
                    <td>2019/11/07</td>
                    <td>Nasugbu, Batangas</td>
                    <td>5</td>
                    <td>Roman Catholic</td>
                    <td>Shrek</td>
                    <td>Green</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

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