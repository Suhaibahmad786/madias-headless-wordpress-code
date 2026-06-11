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
  <link rel="stylesheet" href="style/dynamic.css">
    <link rel="stylesheet" href="style/registor.css">
  <link rel="stylesheet" href="style/blogs.css">
</head>
<body>
    <?php  include __DIR__ . "/components/header.php";?>
<!-- Start You Page Design HTML -->
 <section id="blogs-section">
    <div class="blogs-hero-wrapper flex-con">
        <h2>Read Our Blogs</h2>
    </div>
 </section>
 <!-- <section id="search-blogs">
    <h2>Search Blogs Whenever You Want To Read</h2>
    <div class="search-form">
<form action="">
   <input type="search" name="searchblogs" id="searchblogs" placeholder="Search Blogs">
</form>
    </div>
 </section>
</body> -->
<div class="" id="posts"></div>

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