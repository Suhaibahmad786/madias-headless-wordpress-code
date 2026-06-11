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

  <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/registor.css">
  <link rel="stylesheet" href="style/contact.css">
</head>
<body>
    <?php  include __DIR__ . "/components/header.php";?>
<!-- Start You Page Design HTML -->
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