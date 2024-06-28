<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TinyTrack Parent-Side</title>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <!-- Template Main CSS File -->
  <link href="assets/css/payment.css" rel="stylesheet">

</head>

<body>

    <?php 
    include 'headerNav.php';
    ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Payments</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Payments</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section payment-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="payment-details">
                        <h2>PAYMENT</h2>
                        <div class="bill-payment-container">
                            <div class="bill-details">
                                <h3>BILLS</h3>
                                <div class="bill-item">
                                    <span>Registration Fee</span>
                                    <span>₱50.00</span>
                                </div>
                                <div class="bill-item">
                                    <span>Materials for Activity Fee</span>
                                    <span>₱50.00</span>
                                </div>
                                <br>
                                <div class="total">
                                    <span>Total</span>
                                    <span>₱100.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="payment-method">
                        <h2>PAYMENT METHOD</h2>
                        <div class="payment-method-options">
                            <label>
                                <input type="radio" name="payment-method" value="cash">
                                Cash
                            </label>
                            <label>
                                <input type="radio" name="payment-method" value="gcash">
                                Gcash
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="notification"></div>
                    <div class="gcash-form">
                        <div class="gcash-qr-code">
                            <img src="assets/img/qrcode.JPG" alt="GCash QR Code">
                        </div>
                        <form id="gcashForm">
                            <label for="gcash-name">GCash Name:</label>
                            <input type="text" id="gcash-name" name="gcash-name"><br>
                            <label for="gcash-mobile">Mobile Number:</label>
                            <input type="text" id="gcash-mobile" name="gcash-mobile"><br>
                            <label for="gcash-proof">Proof Image:</label>
                            <input type="file" id="gcash-proof" name="gcash-proof"><br>
                            <button type="submit" class="btn-submit">Submit</button>
                        </form>
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

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('input[type="radio"][name="payment-method"]').change(function () {
                var selectedMethod = $(this).val();
                if (selectedMethod === "cash") {
                    // Show notification for cash payment
                    $('.gcash-form').hide();
                    $('.gcash-qr-code').hide();
                    $('.notification').text('Please proceed to the Center to pay.').show();
                } else if (selectedMethod === "gcash") {
                    // Show GCash form
                    $('.notification').hide();
                    $('.gcash-form').show();
                    $('.gcash-qr-code').show();
                }
            });

            // Example form submission for GCash
            $('#gcashForm').submit(function (event) {
                event.preventDefault();
                var gcashName = $('#gcash-name').val();
                var mobileNumber = $('#gcash-mobile').val();
                var proofImage = $('#gcash-proof')[0].files[0]; // Assuming file input with id gcash-proof

                // Example validation
                if (gcashName && mobileNumber && proofImage) {
                    // Perform further actions like AJAX submission or QR code generation
                    console.log('GCash Name:', gcashName);
                    console.log('Mobile Number:', mobileNumber);
                    console.log('Proof Image:', proofImage);
                    alert('GCash form submitted successfully!');
                } else {
                    alert('Please fill out all GCash details and upload proof.');
                }
            });
        });
    </script>

</body>

</html>