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
        <a href="/madias/matias/"><img src="/madias/wp-content/uploads/2026/02/matias-logo.png" alt=""></a>
    </div>
    <div class="nav flex-box">
        <nav>
            <ul>
                <a href="/madias/matias/"><li>Home</li></a>
                <a href="/madias/matias/about/"><li>About</li></a>
                <a href="/madias/matias/services/"><li>Services</li></a>
                <a href="/madias/matias/testimonials/"><li>Testimonial</li></a>
                <a href="/madias/matias/blogs/"><li>Blog</li></a>
                <a href="/madias/wp-admin"><li>DashBoard</li></a>
                <a href="/madias/matias/contact/"><li>Contact</li></a>
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
        <img src="/madias/wp-content/uploads/2026/02/matias-logo.png" alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic aliquid mollitia sapiente. Quod labore est aspernatur culpa quasi quaerat at reiciendis itaque recusandae blanditiis ex nostrum hic non ut, aliquid nihil vel.</p>
        </div>
    </div>
</div>
<!-- Mobile Menu -->
<div id="movbilemenu">
    <div class="mobilemenu-wrapper">
        <button id="mobile-menu-close">Close</button>
        <div class="mobilemenu-inner-wrapper flex-con">
        <img src="/madias/wp-content/uploads/2026/02/matias-logo.png" alt="">
         <div class="mobile-menu">
            <ul>
                <a href="/madias/matias/"><li>Home</li></a>
                <a href="/madias/matias/about/"><li>About</li></a>
                <a href="/madias/matias/services/"><li>Services</li></a>
                <a href="/madias/matias/testimonials/"><li>Testimonial</li></a>
                <a href="/madias/matias/blogs/"><li>Blog</li></a>
                <!-- <a href="/madias/wp-admin"><li>DashBoard</li></a> -->
                <a href="/madias/matias/contact/"><li>Contact</li></a>
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

    fetch("/madias/wp-admin/admin-ajax.php?action=custom_logout", {
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