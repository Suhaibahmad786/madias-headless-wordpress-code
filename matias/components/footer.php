<?php
  $title = $title ?? "Madias";
  $base  = "/madias/matias/";
//   require('/config/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <base href="<?= $base ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= htmlspecialchars($title) ?></title>
  <style>
    @media screen and (max-width:767px){
    .footer-logo{
        width: 100% !important;
        text-align: center;
    }
    .footer-form-wrapper{
        width: 100% !important;
    }
}
  </style>
 <link rel="stylesheet" href="style/footer.css">
 <!-- <link rel="stylesheet" href="style/dynamic.css"> -->
</head>
<body>
 <section id="site-footer">
    <div class="footer-newsletter flex-con">
        <div class="footer-logo flex-box">
            <a href="http://localhost/madias/"><img src="http://localhost/madias/wp-content/uploads/2026/02/matias-logo.png" alt=""></a>
        </div>
        <div class="footer-newsletter-box flex-box">
            <div class="footer-form-wrapper">
            <h3>Subscribe Now</h3>
            <form action="javascript:void(0)" id="footerForm">
                <div class="form-layout">
                <input type="email" name="footersub" id="footeremail" placeholder="Enter Your Email">
                <input type="submit" value="Subscribe Now" id="footersub-btn">
                </div>
            </form>
            </div>
            <div id="footer-msg"></div>
        </div>
    </div>
    <div class="footer-wrapper flex-con">
        <div class="copy-right flex-box">
            <p>Copyright © 2026 <a href=""><span class="color-change">Matias.</span></a> All rights reserved.</p>
        </div>
        <div class="terms-con flex-box">
            <ul>
                <a href="#"><li>Term & Condition</li></a>
                <a href="#"><li>Privacy Policy</li></a>
            </ul>
        </div>
    </div>
 </section>
</body>
<script src="script/components.js"></script>
<script src="script/footer.js"></script>