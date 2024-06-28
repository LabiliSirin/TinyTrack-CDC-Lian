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
  <link href="assets/css/cdcwDashboard.css" rel="stylesheet">

</head>

<body>

  <?php 
  include 'navWorker.php';
   ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Registered Child</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-check"></i>
                    </div>
                    <div class="ps-3">
                      <h6>15</h6>
                      <span class="text-success small pt-1 fw-bold">75%</span> <span class="text-muted small pt-2 ps-1">of expected enrollees</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Pending Registration</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-file-text"></i>
                    </div>
                    <div class="ps-3">
                      <h6>5</h6>
                      <span class="text-success small pt-1 fw-bold">25%</span> <span class="text-muted small pt-2 ps-1">of expected enrollees</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Present <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>7</h6>
                      <span class="text-danger small pt-1 fw-bold">46%</span> <span class="text-muted small pt-2 ps-1">of the children</span>
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bar CHart</h5>

              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels: ['Gross Motor', 'Fine Motor', 'Self-Help', 'Receptive Language', 'Expressive Language', 'Cognitive', 'Social-Emotional'],
                      datasets: [{
                        label: 'Bar Chart',
                        data: [65, 59, 80, 91, 56, 55, 40],
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

            </div>
          </div>
            </div><!-- End Reports -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Top Performing Kid <span>| Today</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Rank</th>
                        <th scope="col">Fav Color</th>
                        <th scope="col">Fav Cartoon Character</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/profile-img.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Harris Mendoza</a></td>
                        <td>1</td>
                        <td class="fw-bold">Blue</td>
                        <td>Mr. Bean</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/Child_5.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Lovely Nasol</a></td>
                        <td>2</td>
                        <td class="fw-bold">Red</td>
                        <td>Sofia the First</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/Child_3.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Jonald Bulaclac</a></td>
                        <td>3</td>
                        <td class="fw-bold">Pink</td>
                        <td>Barbie</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/Child_4.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Graciella Relevo</a></td>
                        <td>4</td>
                        <td class="fw-bold">Yellow</td>
                        <td>Hello Kitty</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/Child_2.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Chester Tayas</a></td>
                        <td>5</td>
                        <td class="fw-bold">Green</td>
                        <td>Shrek</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Reports</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Submitted to</th>
                        <th scope="col">Types</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">Master List</a></th>
                        <td><a href="#" class="text-primary">Municipal</a></td>
                        <td>Monthly</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">Accomplishement Report</a></th>
                        <td><a href="#" class="text-primary">Municipal</a></td>
                        <td>Monthly</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">Accomplishement Report</a></th>
                        <td><a href="#" class="text-primary">Provincial</a></td>
                        <td>Quarterly</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

                      <div class="card">
            <div class="card-body">
              <h5 class="card-title">Doughnut Chart</h5>

              <!-- Doughnut Chart -->
              <canvas id="doughnutChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#doughnutChart'), {
                    type: 'doughnut',
                    data: {
                      labels: [
                        'Girls',
                        'Boys',
                      ],
                      datasets: [{
                        label: 'The total number is',
                        data: [15, 5],
                        backgroundColor: [
                          'rgb(255, 99, 132)',
                          'rgb(54, 162, 235)',
                        ],
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
              <!-- End Doughnut CHart -->

            </div>
          </div>

          <!-- Recent Activity -->
          <div class="card">

            <div class="card-body">
              <h5 class="card-title">Today's Activity <span>| Today</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">5 mins</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    <a href="#" class="fw-bold text-dark">Arrival / Greeting Time</a>
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">5 mins</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    <a href="#" class="fw-bold text-dark">Flag Ceremony / Activity to develop love of the country</a>
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">15 mins</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    <a href="#" class="fw-bold text-dark">Lesson / News Sharing</a>
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">15 mins</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                    <a href="#" class="fw-bold text-dark">Writing Strokes</a>
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">15 mins</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                    <a href="#" class="fw-bold text-dark">SNACK TIME</a>
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">20 mins</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                    <a href="#" class="fw-bold text-dark">Music / Poetry / Rhymes / Storytelling</a>
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">20 mins</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    <a href="#" class="fw-bold text-dark">Indoor free play / Outdoor arts and crafts</a>
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">10 mins</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    <a href="#" class="fw-bold text-dark">Nap / Rest time</a>
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">10 mins</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    <a href="#" class="fw-bold text-dark">Clean up space and materials used</a>
                  </div>
                </div><!-- End activity item-->

                 <div class="activity-item d-flex">
                  <div class="activite-label">5 mins</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                    <a href="#" class="fw-bold text-dark">Preparation for home dismissal</a>
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->


          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="card-body pb-0">
              <h5 class="card-title">Upcoming Events &amp; Programs</h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Parents - CDC Workers Meeting</a></h4>
                  <p>Description dito.....</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-2.jpg" alt="">
                  <h4><a href="#">CDC Workers - CDC President Meeting</a></h4>
                  <p>Description dito.....</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-3.jpg" alt="">
                  <h4><a href="#">Mr. and Ms. Little Daycare</a></h4>
                  <p>Description dito.....</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-4.jpg" alt="">
                  <h4><a href="#">Dance and Sing Festival</a></h4>
                  <p>Description dito.....</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-5.jpg" alt="">
                  <h4><a href="#">Awardings</a></h4>
                  <p>Description dito.....</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

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