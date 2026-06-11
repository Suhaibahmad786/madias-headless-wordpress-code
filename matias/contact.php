<?php
  $title = $title ?? "Contact Us";
  $base  = "/madias/matias/";
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <base href="<?= $base ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= htmlspecialchars($title) ?></title>

  <!-- <link rel="stylesheet" href="style/header.css"> -->
    <!-- <link rel="stylesheet" href="style/registor.css"> -->
  <link rel="stylesheet" href="style/contact.css">
  <style>
    div#contact-msg{
    color: white !important;
    padding-top: 10px !important;
    font-size: 16px !important; 
    line-height: 24px !important;
}
  </style>
</head>
<body>
    <?php  include __DIR__ . "/components/header.php";?>
<section id="contact-hero">
    <div class="contact-wrapper">
        <h2>Let's Start Something</h2>
    </div>
</section>
<section id="contactform">
    <div class="form-wrapper flex-con">
        <div class="formcontact flex-box">
            <h3>Leave a Reply</h3>
            <p>Your email address will not be published. Required fields are marked *</p>
            <form id="contcform">
                <input type="text" name="contactname" id="contactname" placeholder="Full Name" required>
                <input type="email" name="contactemail" id="contactemail" placeholder="Email" required>
                <textarea name="conconnect" id="concoment"  placeholder="Write Comment" required></textarea>
                <input type="submit" value="Submit Comment" id="consubmit">
            </form>
              <div id="contact-msg"></div>
        </div>
        <div class="formminfo flex-box">
            <h4>Feel free to contact me anytime</h4>
            <div class="conemail condetails">
                <p>Email</p>
                <a href="mailto:info@domain.com">info@domain.com</a>
            </div>
                        <div class="conphone condetails">
                <p>Phone</p>
                <a href="tel:0300-0000000">0300-0000000</a>
            </div>
                                    <div class="conadres condetails">
                <p>Address</p>
                <span>Lahore, Pakistan</span>
            </div>
        </div>
    </div>
</section>
</body>
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