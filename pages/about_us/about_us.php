<?php
$ROUTE = '../../';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <style>
    .about-us-protion-p {
      text-align: justify;
    }

    .vision_pic {
      height: 40vw;
      width: 40vw;
      border-radius: 5px;
    }

    @media (max-width: 600px) {
      .vision_pic {
        margin-top: 5px;
        height: 40vh;
        width: 40vh;
      }
    }

    .Strategies_pic {
      height: 35vw;
      width: 35vw;
      border-radius: 5px;
    }

    @media (max-width: 600px) {
      .Strategies_pic {
        margin-top: 5px;
        height: 40vh;
        width: 40vh;
      }
    }

    .section-bg {
      background-color: #1a68bc;
      color: #ffffff;
    }

    .row.heading h2 {
      color: #fff;
      font-size: 52.52px;
      line-height: 95px;
      font-weight: 400;
      text-align: center;
      margin: 0 0 40px;
      padding-bottom: 20px;
      text-transform: uppercase;
    }

    ul {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .heading.heading-icon {
      display: block;
    }

    .padding-lg {
      display: block;
      padding-top: 60px;
      padding-bottom: 60px;
    }

    .practice-area.padding-lg {
      padding-bottom: 55px;
      padding-top: 55px;
    }

    .practice-area .inner {
      border: 1px solid #999999;
      text-align: center;
      margin-bottom: 28px;
      padding: 40px 25px;
    }

    .our-webcoderskull .cnt-block:hover {
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
      border: 0;
    }

    .practice-area .inner h3 {
      color: #3c3c3c;
      font-size: 24px;
      font-weight: 500;
      font-family: 'Poppins', sans-serif;
      padding: 10px 0;
    }

    .practice-area .inner p {
      font-size: 14px;
      line-height: 22px;
      font-weight: 400;
    }

    .practice-area .inner img {
      display: inline-block;
    }


    .our-webcoderskull {
      background: url("../../assets/img/right-sider-banner.png") no-repeat center top / cover;

    }

    .our-webcoderskull .cnt-block {
      float: left;
      width: 95%;
      background: #fff;
      padding: 30px 20px;
      text-align: center;
      border: 2px solid #d5d5d5;
      margin: 0 0 28px;
    }

    .our-webcoderskull .cnt-block figure {
      width: 148px;
      height: 148px;
      border-radius: 100%;
      display: inline-block;
      margin-bottom: 15px;
    }

    .our-webcoderskull .cnt-block img {
      width: 148px;
      height: 148px;
      border-radius: 100%;
    }

    .our-webcoderskull .cnt-block h3 {
      color: #2a2a2a;
      font-size: 20px;
      font-weight: 500;
      padding: 6px 0;
      text-transform: uppercase;
    }

    .our-webcoderskull .cnt-block h3 a {
      text-decoration: none;
      color: #2a2a2a;
    }

    .our-webcoderskull .cnt-block h3 a:hover {
      color: #337ab7;
    }

    .our-webcoderskull .cnt-block p {
      color: #2a2a2a;
      font-size: 13px;
      line-height: 20px;
      font-weight: 400;
    }

    .our-webcoderskull .cnt-block  {
      margin: 20px 0 0;
    }

    .our-webcoderskull .cnt-block .follow-us li {
      display: inline-block;
      width: auto;
      margin: 0 5px;
    }

    .our-webcoderskull .cnt-block .follow-us li .fa {
      font-size: 24px;
      color: #767676;
    }

    .our-webcoderskull .cnt-block  li .fa:hover {
      color: #025a8e;
    }

    @media (max-width: 576px) {
      .team-card{
        margin-left: 100px;
      }
    }
    .vision-p{
      text-align: justify;
    }
    .about_bg_pic{
      background-image: url("../../assets/img/team.jpg");
    }
  </style>
</head>
<?php include("../../includes/header/header.php") ?>
<body>

  <!--  -->
  <!-- About Us Portion Started -->
  <!--  -->
  <div class="container-fluid p-4">
    <div class="row justify-content-center px-3"> 
      <div class="col-md-5 p-2 ">
        <span class="text-muted">Our Story</span>
        <h2 class="display-5 fw-bold">About Us</h2>
        <p class="lead">"We are committed to delivering exceptional quality and innovative solutions that exceed expectations."</p>
        <a class="btn btn-primary mt-2 mb-2" href="../../pages/Contact_us/contact_us.php">Contact</a>
      </div>
      <div class="col-md-6 offset-md-1 p-2">
        <p class="lead about-us-protion-p">ZAM Developers is a premier technology solutions provider, committed to
          empowering startups and enterprises to achieve their full potential through
          innovative software development, cutting-edge product design, robust quality
          assurance, and expert consultancy services.
        </p>
        <p class="lead about-us-protion-p">We have consistently delivered high-quality, custom services
          tailored to meet the unique needs of our clients. Our loyal customers,
          partners, employees, and industry thought leaders reflect our dedication
          to excellence and innovation. At ZAM Developers, we take pride in our
          ability to help businesses not only grow but also revolutionize their
          industries, ensuring they stay ahead in an ever-evolving technological landscape.</p>
      </div>
    </div>
  </div>
  <!--  -->
  <!-- About Us intro ended -->
  <!--  -->

  <!--  -->
  <!-- Our Vision Portion Started -->
  <!--  -->
  <div class="container-fluid section-bg p-4">
    <div class="row p-4">
      <div class="col-md-5">
        <h2 class="display-5 fw-bold">Our Vision</h2>
        <p class="lead vision-p">At ZAM Developers, our vision is to lead digital transformation by
          providing cost-effective, scalable, and secure software solutions. We empower SMEs
          to manage efficiently with innovative, robust solutions. Understanding the
          complexities of modern technology adoption, our expert team ensures seamless transitions.</p>
        <p class="lead vision-p">Our vision extends beyond the ordinary as we aim to transform
          IT solutions into smart, agile, and AI-enhanced digital assets.
          By driving innovation and maintaining unmatched quality,
          we strive to meet the demands of an ever-evolving digital era,
          providing globally agile services that shape the future of IT.</p>
      </div>
      <div class="col-md-6  offset-md-1 ">
        <img src="../../assets/img/vision.jpg" class="vision_pic" alt="img.jpg">
      </div>
    </div>
  </div>
  <!--  -->
  <!--Our Vision Portion ended  -->
  <!--  -->


  <!--  -->
  <!-- what Difference Portion started -->
  <!--  -->
  <div class="container-fluid px-4 py-5">
    <h2 class="pb-2 border-bottom">What's Difference About?</h2>
    <div class="row g-4 py-5 ">
      <div class="col-lg-4 p-3">
        <h4>Engineering with passion</h4>
        <p class="about-us-protion-p">Tackling problems with creativity and enthusiasm. It's about
          embracing challenges to drive innovation and excellence, ensuring
          every project is infused with energy, dedication, and purpose to make a lasting impact.</p>
      </div>
      <div class="col-lg-4 p-3">
        <h4>Performance focus</h4>
        <p class="about-us-protion-p">Prioritizing efficiency and effectiveness in every task. It's about setting high standards,
          optimizing processes, and consistently striving for excellence to achieve outstanding results.
          This approach ensures that every effort is purposeful, driven by a commitment to
          quality and measurable success.</p>
      </div>
      <div class=" col-lg-4 p-3">
        <h4>Dedication to success</h4>
        <p class="about-us-protion-p">committing wholeheartedly to achieving goals. It's about maintaining unwavering focus, putting in the necessary effort,
          and persevering through challenges. This approach ensures that every action is
          aligned with the ultimate aim of reaching and surpassing objectives.</p>
      </div>
    </div>
  </div>
  <!--  -->
  <!-- what Difference Portion ended -->
  <!--  -->

  <!--  -->
  <!-- Team portion started -->
  <!--  -->
  <section class="our-webcoderskull padding-lg">
    <div class="container">
      <div class="row heading heading-icon">
        <h2>Our Team</h2>
      </div>
      <ul class="row m-0 p-0 ">
        <li class="col-sm-11 col-md-6 col-lg-3 m-0 p-0 team-card">
          <div class="cnt-block equal-hight " style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">Mubeen</a></h3>
            <p>Senior Software Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa-brands fa-facebook fa-xl"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-twitter fa-xl"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-linkedin fa-xl"></i></a></li>
            </ul>
          </div>
        </li>
        <li class="col-sm-11 col-md-6 col-lg-3 m-0 p-0">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Aqib </a></h3>
            <p>Digital Marketing/SEO</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa-brands fa-facebook fa-xl"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-twitter fa-xl"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-linkedin fa-xl"></i></a></li>
            </ul>
          </div>
        </li>
        <li class="col-sm-11 col-md-6 col-lg-3 m-0 p-0">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">Zain</a></h3>
            <p>Junior Software Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa-brands fa-facebook fa-xl"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-twitter fa-xl"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-linkedin fa-xl"></i></a></li>
            </ul>
          </div>
        </li>
        <li class="col-sm-11 col-md-6 col-lg-3 m-0 p-0">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team2.png" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">Ayesha</a></h3>
            <p>Graphacies Designing</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa-brands fa-facebook fa-xl"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-twitter fa-xl"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-linkedin fa-xl"></i></a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!--  -->
  <!-- Team portion ended -->
  <!--  -->

  <!--  -->
  <!--  Strategies portion ended -->
  <!--  -->
  <div class="container-fluid py-5 section-bg">
    <div class="row justify-content-center">
      <div class="col-md-5 text-center py-5">
        <img src="../../assets/img/Strategies.png" alt="Strategies.png" class="Strategies_pic">
      </div>
      <div class="col-md-6 p-4 m-3">
        <h4 class="display-5 fw-bold">Our Strategies</h4>
        <p class="lead">Pioneering innovative solutions
          to drive sustainable growth and success.</p>
        <div class="detail-box">
          <h5>
            Innovative Solutions
          </h5>
          <p class="lead">
            Innovative solutions involve creative and forward-thinking approaches to
            solving problems and addressing needs.
          </p>
        </div>
        <div class="detail-box">
          <h5>
            Customer-Centric Approach
          </h5>
          <p class="lead">
            A customer-centric approach prioritizes the needs and satisfaction of
            customers, ensuring their experiences and feedback drive business
            decisions.
          </p>
        </div>
        <div class="detail-box">
          <h5>
            Continuous Improvement
          </h5>
          <p class="lead">
            Continuous improvement focuses on constantly enhancing processes,
            products, and services through incremental changes and innovations.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!--  -->
  <!-- Strategies  portion ended -->
  <!--  -->
</body>
<?php include("../../includes/footer/footer.php"); ?>
</html>

