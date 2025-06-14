<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BlueFashion</title>
    <link rel="shortcut icon" href="images/favicon13.png" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/shortcodes.css" />
    <link rel="stylesheet" type="text/css" href="css/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

            <!-- preloader start -->
            <div id="preloader">
            <div class="loader-blob" id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->

        <!-- header start -->
        <?php include 'header.php'; ?>
        <!-- header end -->


        <div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="ttm-page-title-row-inner">
                            <div class="page-title-heading">
                                <h2 class="title">Reach out to Us</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" style="text-decoration:none" href="index.php">Home</a>
                                </span>
                                <span>Reach out to Us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

  <div class="container py-5">
    <div class="row  justify-content-center align-items-center">
      <div class="col-md-8 col-lg-6">
        <div class="card shadow p-30">
          <div class="card-body">
            <h3 class="text-center mb-4">Reach Out to Us</h3>
            <form id="contactForm" novalidate>
              <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control rounded-corner" id="name" required>
                <div class="invalid-feedback">Please enter your name.</div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" required>
                <div class="invalid-feedback">Please enter a valid email.</div>
              </div>
              <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" required>
                <div class="invalid-feedback">Please enter a subject.</div>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Your Message</label>
                <textarea class="form-control" id="message" rows="4" required></textarea>
                <div class="invalid-feedback">Please enter a message.</div>
              </div>
              <button type="submit" class="btn btn-primary w-50" style="padding:15px 20px;font-size:18px">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
          <!--footer start-->
          <?php include 'footer.php'; ?>     
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>

  <!-- Bootstrap JS (for validation styles) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JavaScript -->
  <script>
    const form = document.getElementById('contactForm');

    form.addEventListener('submit', function (event) {
      event.preventDefault();
      event.stopPropagation();

      if (form.checkValidity()) {
        alert('Thank you for reaching out! We will get back to you soon.');
        form.reset();
        form.classList.remove('was-validated');
      } else {
        form.classList.add('was-validated');
      }
    });
  </script>
      <!-- Javascript -->

    

      <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery-migrate-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/jquery-waypoints.js"></script>
    <script src="js/jquery-validate.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/numinate.min.js"></script>
    <script src="js/imagesloaded.min.js"></script>
    <script src="js/jquery-isotope.js"></script>
    <script src="js/main.js"></script>
    <!-- Javascript end-->
</body>
</html>
