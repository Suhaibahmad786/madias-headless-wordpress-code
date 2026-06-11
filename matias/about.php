<?php
  $title = $title ?? "Madias";
  $base  = "/madias/matias/";
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <base href="<?= $base ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($title) ?></title>
<link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/registor.css">
    <link rel="stylesheet" href="style/about.css">
</head>
<body>
    <?php  include __DIR__ . "/components/header.php";?>
<section id="aboutme">
  <div class="about-wrapper flex-con">
    <h2>About Me</h2>
  </div>
</section>
<section id="about">
  <div class="aboutme">
            <img src="data:image/png;base64,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" alt="">
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis quis non aspernatur assumenda expedita et, tempore culpa beatae qui</h5>
<div class="about-box">
  <div class="personal-info flex-con">
    <div class="info-image flex-box">
      <img src="https://matias-react-js.netlify.app/assets/personal-infothumb-2653662e.png" alt="">
    </div>
    <div class="info-content content flex-box">
      <h3>Personal Info</h3>
      <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit consectetur, aliquam quaerats voluptatem. Ut enim ad minima veniam, exercitationem laboriosam, nisi ut aliquid ex ea autem velit esse quam nihil</p>
      <div class="details">
<div class="details-wrapper">
  <div class="detail">
  <p>Email</p>
  <a href="mailto:info@domain.com">info@domain.com</a>
  </div>
    <div class="detail">
  <p>Phone</p>
  <a href="tel:0300-0000000">0300-0000000</a>
  </div>
</div>
<div class="details-wrapper">  
  <div class="detail">
  <p>Address</p>
  <p class="address">Lahore,Pakistan</p>
  </div>
    <div class="detail">
  <p>Follow</p>
  <div class="social">
 <i class="fa-brands fa-facebook"></i>
 <i class="fa-brands fa-instagram"></i>
 <i class="fa-brands fa-linkedin"></i>
 </div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
<hr>
<!-- Start Experience -->
 <div class="about-box experience">
  <div class="personal-info flex-con experince-info">
    <div class="info-image flex-box">
      <img src="https://matias-react-js.netlify.app/assets/personal-infothumb-2653662e.png" alt="">
    </div>
    <div class="info-content exper-content flex-box">
      <h3>My Experience</h3>
      <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit consectetur, aliquam quaerats voluptatem. Ut enim ad minima veniam, exercitationem laboriosam, nisi ut aliquid ex ea autem velit esse quam nihil</p>
      <div class="details">
<div class="details-wrapper">
  <div class="detail">
  <p>In 2011</p>
   <p class="address">Software Engineer</p>
  </div>
    <div class="detail">
  <p>In 2016</p>
   <p class="address">Product Designer</p>
  </div>
</div>
<div class="details-wrapper">  
  <div class="detail">
  <p>In 2023</p>
   <p class="address">Senior UI Designer</p>
  </div>
    <div class="detail">
  <p>In 2024</p>
<p class="address">Senior Software Engineer</p>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
<!-- End Experience -->
<hr>
<!-- Start Education -->
 <div class="about-box experience">
  <div class="personal-info flex-con education-info">
    <div class="info-image flex-box">
      <img src="https://matias-react-js.netlify.app/assets/personal-infothumb-2653662e.png" alt="">
    </div>
    <div class="info-content exper-content flex-box">
      <h3>My Education</h3>
      <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit consectetur, aliquam quaerats voluptatem. Ut enim ad minima veniam, exercitationem laboriosam, nisi ut aliquid ex ea autem velit esse quam nihil</p>
      <div class="details">
<div class="details-wrapper">
  <div class="detail">
  <p>2011-2013</p>
   <p class="address">Programming Course</p>
  </div>
    <div class="detail">
  <p>2013-2016</p>
   <p class="address">University of Design</p>
  </div>
</div>
<div class="details-wrapper">  
  <div class="detail">
  <p>2016-2018</p>
   <p class="address">Web Design Course</p>
  </div>
    <div class="detail">
  <p>2019-2020</p>
<p class="address">Data Science</p>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
<!-- End Education -->
 <hr>
  </div>
</section>
<?php
include __DIR__ . "/components/login.php";
include __DIR__ . "/components/registor.php";
include __DIR__ . "/components/footer.php";
?>
<script src="script/custom.js"></script>
<script src="script/registor.js"></script>
<script src="script/header.js"></script>
<script src="script/login.js"></script>
</body>
</html>