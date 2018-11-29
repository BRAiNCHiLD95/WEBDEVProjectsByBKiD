<?php 
    session_start();
    if (isset($_SESSION['user_name']) && $_SESSION['user_name'] != '') {
      require_once('config.php');
      $fetchCountries = "SELECT * FROM `country_data`";
      $country = mysqli_query($conn, $fetchCountries);
      $fetchPrograms = "SELECT * FROM `programs`";
      $program = mysqli_query($conn, $fetchPrograms);  
?>
<!doctype html>
  <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ArtonPanel | HomePage</title>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/admin.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <style>
          .icons {
            font-size: 40px;
          }
          html, body {
            height: 100%;
          }
        </style>
    </head>
    <body>
      <?php require('common.php'); ?>
      <div id="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>
          <!-- Icon Cards-->
          <div class="row">
            <div class="col-sm-6 col-md-4 mb-3">
              <div class="card text-white text-center" style="background:#CC9966;">
                <div class="card-body mt-3">
                  <div class="card-body-icon">
                    <i class="icons fa fa-globe"></i>
                  </div>
                  <h3 class="my-3"><?php echo mysqli_num_rows($country) ?> New Countries</h3>
                </div>
                <a class="card-footer text-white my-2" href="countries.php">
                  <span class="float-left">View Countries</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 mb-3">
              <div class="card text-white text-center" style="background:#CC9966;">
                <div class="card-body mt-3">
                  <div class="card-body-icon">
                    <i class="icons fa fa-graduation-cap"></i>
                  </div>
                  <h3 class="my-3"><?php echo mysqli_num_rows($program) ?> New Programs</h3>
                </div>
                <a class="card-footer text-white my-2" href="countries.php">
                  <span class="float-left">View Programs</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <?php require('footer.php'); ?>
        </div>
      </div>
      </div>
    </body>
  </html>
<?php }
    else {
      echo
      '<script language="javascript">
      alert("Please Login to Access AdminPanel");
      window.location.href="login.php"
      </script>';
    }
?>