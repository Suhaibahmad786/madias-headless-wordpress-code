<?php
  $title = $title ?? "SERVICES_JSON_IN_OBJ";
  $base  = "/madias/matias/";
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <base href="<?= $base ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= htmlspecialchars($title) ?></title>

  <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/registor.css">
  <link rel="stylesheet" href="style/services.css">
</head>
<body>
    <?php  include __DIR__ . "/components/header.php";?>
<!-- Start You Page Design HTML -->
 <section id="services">
    <div class="service-wrapper flex-con">
        <h2>Our Services</h2>
    </div>
 </section>
 <section class="ser">
<h3>Here All Our Services</h3>
<div id="ourservice"></div>
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