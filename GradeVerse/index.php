<?php
error_reporting(0);
include('includes/config.php');
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GradeVerse (Reveal Your Brilliance)</title>
  <link rel="icon" type="image/x-icon" href="assets/images/gradeverse-bg.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">

</head>

<body>
  <?php include "header.php"; ?>
  
  <section class="main-slider">
        <div class="owl-carousel owl-theme" id="slider">
            <div class="item">
              <div class=" banner-view banner-top2 d-flex align-items-center justify-content-center text-center">
                <div class="banner-info-bg">
                  <h5>GradeVerse</h5>
                  <p class="mt-md-4 mt-3">GradeVerse is a streamlined student result management system that simplifies tracking academic performance</p>
                  <a class="btn btn-style btn-danger mt-sm-5 mt-4 mr-2" href="https://asck.kkwagh.edu.in/" target="_blank"> Learn More</a>
                </div>
              </div>
            </div>

             <div class="item">
              <div class=" banner-view banner-top2 d-flex align-items-center justify-content-center text-center">
                <div class="banner-info-bg">
                  <h6>Accredited with NAAC A Grade</h6>
                  <h5>K.K Wagh Collage, Ranwad</h5>
                  
                  <p class="mt-md-4 mt-3">To empower rural students for success in the competitive World through quality education </p>
                  <a class="btn btn-style btn-danger mt-sm-5 mt-4 mr-2" href="https://asck.kkwagh.edu.in/" target="_blank"> Learn More</a>
                </div>
              </div>
            </div>
        </div>
      </section>


  <section class="py-5 about">
  <h3 class="title-big text-center pb-5">Notice Board</h3>
    <div class="container  notice-container">
      <div class="row ">
        <div class="col-md-5   notice-box ">
        <h3 class="title">Notice</h3>
          <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();" class="mt-5">
            <ul class="">
              <?php $sql = "SELECT * from tblnotice";
              $query = $dbh->prepare($sql);
              $query->execute();
              $results = $query->fetchAll(PDO::FETCH_OBJ);
              $cnt = 1;
              if ($query->rowCount() > 0) {
                foreach ($results as $result) {   ?>
                  <li><a href="notice-details.php?nid=<?php echo htmlentities($result->id); ?>" target="_blank" class="text-dark"><?php echo htmlentities($result->noticeTitle); ?></li>
              <?php }
              } ?>

            </ul>
          </marquee>
        </div>


        <div class="col-md-6   notice-box ">
        <h3 class="title">Student Result Portal</h3>
          <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();" class="mt-5">
            <ul class="">
                <p>Access the latest examination results for all courses at K.K. Wagh Students. This user-friendly platform allows current and prospective students to easily view their academic performance and celebrate their achievements. Stay updated on your academic journey with us!</p>
            </ul>
          </marquee>
        </div>
      </div>
    </div>
  </section>


  <section class="py-5 service" id="aboutUs">
    <div class="container">
      <h3 class="title-big text-center pb-5">About Us</h3>
      <h3 class="title text-center pb-4"><b>Courses offered by Institute</b></h3>
      <div class="row ">
        <div class="col-md-4">
          <div class="grids5-info">
            <a href="#service" class="d-block zoom"><img src="assets/images/s4.jpg" alt="" class="img-fluid service-image"></a>
            <div class="blog-info">
              <span class="fa fa-desktop"></span>
              <h4><a href="#service">Bachelor of Computer Science (BCS)</a></h4>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="grids5-info">
            <a href="#service" class="d-block zoom"><img src="assets/images/abc11.jpg" alt="" class="img-fluid service-image"></a>
            <div class="blog-info">
              <span class="fa fa-cogs"></span>
              <h4><a href="#service">Bachelor of Computer Application (BCA)</a></h4>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="grids5-info">
            <a href="#service" class="d-block zoom"><img src="assets/images/abc12.jpg" alt="" class="img-fluid service-image"></a>
            <div class="blog-info">
              <span class="fa fa-line-chart"></span>
              <h4><a href="#service">Bachelor of Business Administration (BBA)</a></h4>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="py-5">
    <div class="container py-md-5 py-sm-4 py-2">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="bottom-info">
            <div class="header-section">
              <h3 class="title-big mx-0">Transform Your Academic Journey with GradeVerse!</h3>
              <p class="mt-3 pr-lg-5"><b>CGPA Calculator: Your Essential Tool in GradeVerse</b></p>
              <p class="mt-3 pr-lg-5">Easily track your academic progress with the SPPU CGPA Calculator! Calculate your CGPA, SGPA, and convert grades effortlessly to stay on top of your studies.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-5 text-lg-end">
          <a href="https://sppucalculator.netlify.app/" target="_blank" class="btn btn-style btn-outline-dark mt-lg-0 mt-md-5 mt-4 me-2">Calculate Your CGPA</a>
          <a href="contact.php" class="btn btn-style btn-danger mt-lg-0 mt-md-5 mt-4">Contact us</a>
        </div>
      </div>
    </div>
  </section>


  <section class="py-5" id="services">
    <div class="features-main py-lg-5 py-md-3">
      <div class="container">
        <div class="header-section text-center mx-auto">
          <h3 class="title-big">Training and Placement</h3>
        </div>
        <div class="row features mt-lg-4">
          <div class="col-lg-4 col-md-6 feature-grid">
            <div class="feature-body service1"><a href="#url">
                <div class="feature-img">
                  <span class="fa fa-sun" aria-hidden="true"></span>
                </div>
              </a>
              <div class="feature-info mt-4"><a href="#url">
                  <h3 class="feature-titel mb-3">Interview Skills </h3>
                  <p class="feature-text">Training and Placement Cell organized a one-day training session on interview skills for final year students.
                  </p>
                  </a><a href="#read" class="read mt-4 d-block"> Mr.Kamlesh Ugale </a>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 feature-grid">
            <div class="feature-body service2"><a href="#url">
                <div class="feature-img">
                  <span class="fa fa-wrench icon-fea" aria-hidden="true"></span>
                </div>
              </a>
              <div class="feature-info mt-4"><a href="#url">
                  <h3 class="feature-titel mb-3">Cloud Computing</h3>
                  <p class="feature-text">Training and Placement Cell organized a one-day Innovations and Trends in Cloud Compputing for final year students.
                  </p>
                  </a><a href="#read" class="read mt-4 d-block"> Prof. Poonam Patil</a>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 feature-grid">
            <div class="feature-body service3"><a href="#url">
                <div class="feature-img">
                  <span class="fa fa-flask" aria-hidden="true"></span>
                </div>
              </a>
              <div class="feature-info mt-4"><a href="#url">
                  <h3 class="feature-titel mb-3">Industrial Visit</h3>
                  <p class="feature-text">Computer Science Department Organized Industrial Visit for TYBCS Students at Profound Edutech, Nashik 
                  </p>
</a><a href="#read" class="read mt-4 d-block"> Profound Edutech</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="customers py-md-4 py-3">
    <div class="container">
    <marquee>
      <div class="owl-carousel owl-theme" id="customer">
        <div class="item"><img src="assets\images\capgemini1.png"></div>
        <div class="item"><img src="assets\images\infosys2.png"></div>
        <div class="item"><img src="assets\images\tcs.png"></div>
        <div class="item"><img src="assets\images\capgemini1.png"></div>
        <div class="item"><img src="assets\images\infosys2.png"></div>
        <div class="item"><img src="assets\images\tcs.png"></div>
      </div>
      </marquee>
    </div>
  </section>


<section>
  <div class="responsive-container-block outer-container">
  <div class="responsive-container-block inner-container">
    <h2 class="title-big text-center pb-1">
    Our Team
            </h2>
      <h4>Meet the team that created GradeVerse</h4> <br><br>
    <div class="responsive-container-block">
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
            <img class="team-img" src="./assets/images/shubham1.jpg">
          </div> <br>
          <p class="text-blk name">
            Shubham Shinde
          </p>
        </div>
      </div>


      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
            <img class="team-img" src="./assets/images/durgesh1.jpg">
          </div> <br>
          <p class="text-blk name">
            Durgesh Wagh
          </p>
        </div>
      </div>


      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
            <img class="team-img" src="./assets/images/tejas1.jpg">
          </div> <br>
          <p class="text-blk name">
            Tejas Golap
          </p>
        </div>
      </div>
    </div>

  </section>
      


  <?php include "footer.php"; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <script src="assets/js/main.js"></script>
</body>

</html>