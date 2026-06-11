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

  <link rel="stylesheet" href="style/registor.css">
  <link rel="stylesheet" href="style/header.css">
</head>
<body>
<header id="my-header" class="my-header-wrapper flex-con">
<div class="header-wrapper flex-con">
    <div class="side-nav-wrapper flex-box ">
    <div class="side-nav">
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
    </div>
    </div>
    <div class="matias-logo flex-box">
        <a href="http://localhost/madias/"><img src="http://localhost/madias/wp-content/uploads/2026/02/matias-logo.png" alt=""></a>
    </div>
    <div class="nav flex-box">
        <nav>
            <ul>
                <a href="http://localhost/madias/"><li>Home</li></a>
                <a href="http://localhost/madias/about/"><li>About</li></a>
                <a href="http://localhost/madias/services/"><li>Services</li></a>
                <a href="http://localhost/madias/testimonials/"><li>Testimonial</li></a>
                <a href="http://localhost/madias/blogs/"><li>Blog</li></a>
                <a href="http://localhost/madias/wp-admin"><li>DashBoard</li></a>
                <a href="http://localhost/madias/contact/"><li>Contact</li></a>
                <li><a href="#" id="logoutBtn" class="nav-link" style="color:white">Logout</a></li>
            </ul>
        </nav>
    </div>
    <div class="head-login flex-con flex-box">
        <a id="loginformbtn">Login</a>
        <a id="headregbtn">Register</a>
    </div>
</div>
</div>
<div id="sidemenu">
    <div class="sidemenu-wrapper">
        <button id="menu-close">Close</button>
        <div class="inner-wrapper flex-con">
        <img src="http://localhost/madias/wp-content/uploads/2026/02/matias-logo.png" alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic aliquid mollitia sapiente. Quod labore est aspernatur culpa quasi quaerat at reiciendis itaque recusandae blanditiis ex nostrum hic non ut, aliquid nihil vel.</p>
        </div>
    </div>
</div>
<!-- Mobile Menu -->
<div id="movbilemenu">
    <div class="mobilemenu-wrapper">
        <button id="mobile-menu-close">Close</button>
        <div class="mobilemenu-inner-wrapper flex-con">
        <img src="http://localhost/madias/wp-content/uploads/2026/02/matias-logo.png" alt="">
        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic aliquid mollitia sapiente. Quod labore est aspernatur culpa quasi quaerat at reiciendis itaque recusandae blanditiis ex nostrum hic non ut, aliquid nihil vel.</p> -->
         <div class="mobile-menu">
            <ul>
                <a href="http://localhost/madias/"><li>Home</li></a>
                <a href="http://localhost/madias/about/"><li>About</li></a>
                <a href="http://localhost/madias/services/"><li>Services</li></a>
                <a href="http://localhost/madias/testimonials/"><li>Testimonial</li></a>
                <a href="http://localhost/madias/blogs/"><li>Blog</li></a>
                <!-- <a href="http://localhost/madias/wp-admin"><li>DashBoard</li></a> -->
                <a href="http://localhost/madias/contact/"><li>Contact</li></a>
            </ul>
         </div>
         <div class="mobile-login">
        <a id="loginformbtn">Login</a>
        <a id="headregbtn">Register</a>
         </div>
        </div>
    </div>
</div>
<script>
document.getElementById('logoutBtn').addEventListener('click', function(e){
    e.preventDefault();

    fetch("<?php echo admin_url('admin-ajax.php'); ?>?action=custom_logout", {
        method: 'GET',
        credentials: 'same-origin'
    })
    .then(res => res.json())
    .then(data => {
        // redirect to home 
        window.location.href = data.data;
    })
    .catch(err => console.error(err));
});
</script>
</script>
<script src="script/registor.js"></script>
<script src="script/login.js"></script>
</header>
</body>