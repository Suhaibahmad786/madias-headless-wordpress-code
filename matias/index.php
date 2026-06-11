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

  <link rel="stylesheet" href="style/home.css">
  <link rel="stylesheet" href="style/registor.css">
  <link rel="stylesheet" href="style/header.css">
</head>
<body>
    <?php  include __DIR__ . "/components/header.php";?>

    <!-- Start Home Page -->
     <!-- Start Hero Section -->
<section id="hero-section">
    <div class="hero-wrapper flex-con">
<div class="hero-left-container flex-box">
    <h1>Creative Visual <span class="her-head-color" data-text="Designer">Designer</span></h1>
    <div class="video-container">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADcAAABECAYAAAAlba0pAAADuElEQVRogd2a8XHaMBTGX7n+X2eCOhvABHUnKJ2g7gSlE5BOEDKByQSQCSATwAbQCcwG6unuKX15Z9mSebJkvjtdDDi2fn7yk/RJH5RS0FM5AFywJKmJR6UyAFgAwA4AagA44d8KQdOTjlxHyZRSS6VUrf7roJRa4G8u14hSum5aKKVOBEofz1MGoqXtx6V6r1XqkXKFo2A1RnA0UG1wS9YM8zGC6cK7ggKzIWCKnwHAOdVU3yXaFWSY1o1+jxkMGNwv0l+tsYxaplnm2BwN3P3YowYkcgWL2ujBgMD9IN+9RKqLuEyzpCnzLuXBsI8m2CSNzrcCBgiXkc838a4ZcbibEp/PpTkv6ykOd1NR1HBH8lnDfY5YH1FNGpLI95EzvWmCqZ8CfotcJzGZd46OSopbSSwGbsu+LyPURVx0snoAgCkeX3BmMOrRCu0KnsixzpqPEeojKm4znNj79hUA9sL3zLDkmMjCDfmYqVIwO+8kZOfp6z4yD5Rqp5Qqh3C/VuzGmytukCGUq0TdNttCCE0uWis0jHzErQvAJvhCRkVT7Ff5OTORZGahzhua0NIzYvT/6w4bfsHWIh5CNUtTpuyGPoC0Kbo2tZK9g0HhbIC7jsrm7HwfK95Eux4CzgZ4aql0Rc6rPCtUk+sPAmcAm9J4xaJ4TdToGsV2SDiwJBnzlBd4Tsm+7wPm+1BE4Ex5aAA0MBTe5ekX+A5TrSTA+sK1RZFqh5XnI5wcI8yhtNZSYNfAmVI6QLpKLGJScKbMLZFw0S7Uyu01+1CaxGcVNplh2DbArONNH4WvdyZwTzgm5ePGwTbmSMP9Jcefgs/XOuSzg8hF1AO9GwrCppBwX4Sv7a2QcNHda2m4C8t+P4Wv7yVpOK1Xchy1aUr3c4Cp/0Q+h3DQnBQicmcGswxwDyeFgNP6Q46LWPZ8iGZptCObCaLsIwsVOWBWoO4WNkOv3IaEOzLAac/1hwr/r3A4971CTDVYWbNpz8HTVd6w2b72bZymSEPANQH62OY2c6pG0NK2njEUHFi8F+6e2Ure8IC4zGJKHgMOGna706YmBanQ8Q7aFbSpxJ2CPEkccQDwit3Gkf2eY8YtcfNrm2ax4Ghl57jS458N7dIP5j42HFWG3UWBA+5pj37xQuyNS0pwTSocO/89Gk5r6s9IeyiSmmPnbQMzUdpbZx0DZ8uukuG6Q5vR6+xzphS5KTbBJt+zsdl1KZV3Lsd1eNoEu5tdh1KJXIVgF3ShnyVm76lETnfKxlyScaMB4B9LQLHGWQdpggAAAABJRU5ErkJggg==" alt="">
        <div class="play-btn">
            <svg fill="#ffffff" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>play</title> <path d="M5.92 24.096q0 1.088 0.928 1.728 0.512 0.288 1.088 0.288 0.448 0 0.896-0.224l16.16-8.064q0.48-0.256 0.8-0.736t0.288-1.088-0.288-1.056-0.8-0.736l-16.16-8.064q-0.448-0.224-0.896-0.224-0.544 0-1.088 0.288-0.928 0.608-0.928 1.728v16.16z"></path> </g></svg>
        </div>
        <p>Work Process</p>
    </div>
</div>
<div class="hero-right-container flex-box">
</div>
    </div>
</section>
    <!-- End Hero Section -->
         <!-- Start Marqee Section -->
<section id="marqee">
  <div class="marqee-container">
    <div class="marqee-track">
      <span>Web Development</span>
      <span>Mobile App Development</span>
      <span>App Store Optimization</span>
      <span>Search Engine Optimization</span>
      <span>Wordpress Development</span>
      <span>Digital Marketing</span>
      <span>Web Development</span>
      <span>Mobile App Development</span>
      <span>App Store Optimization</span>
      <span>Search Engine Optimization</span>
      <span>Wordpress Development</span>
      <span>Digital Marketing</span>
    </div>
  </div>
</section>
   <!-- End Marqee Section -->

      <!-- Start Info Section -->
       <section id="info-section">
        <div class="info-wrapper flex-con">
            <img src="data:image/png;base64,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" alt="">
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis quis non aspernatur assumenda expedita et, tempore culpa beatae qui</h5>
            <div class="tabs-wrapper" id="infotabs">
                <div class="tab active" id="tab1">
<h3>About</h3>
                </div>
                <div class="tab" id="tab2">
                    <h3>Experience</h3>
                </div>
                <div class="tab" id="tab3">
                    <h3>Education</h3>
                </div>
                <div class="tab" id="tab4">
                    <h3>Skills</h3>
                </div>
            </div>
        </div>
       </section>
<!-- Start about tab -->
<div id="tababout" class="tabcontent active">
    <div class="abouttab-wrapper flex-con">
        <div class="about-image flex-box">
            <img src="https://matias-react-js.netlify.app/assets/personal-infothumb-2653662e.png" alt="">
        </div>
        <div class="about-content flex-box">
            <h3>Personal Info</h3>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit consectetur, aliquam quaerats voluptatem. Ut enim ad minima veniam, exercitationem laboriosam, nisi ut aliquid ex ea autem velit esse quam nihil</p>
            <div class="about-info-wrapper flex-con">
                <div class="info-box flex-box">
                    <p>Email</p>
                    <a href="mailto:info@yourdomain.com"><h4>info@yourdomain.com</h4></a>
                </div>
                         <div class="info-box flex-box">
                    <p>Phone</p>
                    <a href="tel:0300-0000000"><h4>0300-0000000</h4></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End about tab -->
 <!-- Start experience tab -->
<div id="tabexperience" class="tabcontent">
    <div class="abouttab-wrapper flex-con">
        <div class="about-image flex-box">
            <img src="https://matias-react-js.netlify.app/assets/personal-infothumb-2653662e.png" alt="">
        </div>
        <div class="about-content flex-box">
            <h3>My Experience</h3>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit consectetur, aliquam quaerats voluptatem. Ut enim ad minima veniam, exercitationem laboriosam, nisi ut aliquid ex ea autem velit esse quam nihil</p>
                        <div class="about-info-wrapper flex-con">
                <div class="info-box flex-box">
                    <p>In 2023</p>
                    <h4>UI Designer</h4>
                </div>
                         <div class="info-box flex-box">
                 <p>In 2024</p>
                    <h4>Wordpress Developer</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End experience tab -->
  <!-- Start education tab -->
<div id="tabeducation" class="tabcontent">
    <div class="abouttab-wrapper flex-con">
        <div class="about-image flex-box">
            <img src="https://matias-react-js.netlify.app/assets/personal-infothumb-2653662e.png" alt="">
        </div>
        <div class="about-content flex-box">
            <h3>My Education</h3>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit consectetur, aliquam quaerats voluptatem. Ut enim ad minima veniam, exercitationem laboriosam, nisi ut aliquid ex ea autem velit esse quam nihil</p>
        </div>
    </div>
</div>
<!-- End education tab -->
   <!-- Start skills tab -->
<div id="tabskils" class="tabcontent">
    <div class="abouttab-wrapper flex-con">
        <div class="about-image flex-box">
            <img src="https://matias-react-js.netlify.app/assets/personal-infothumb-2653662e.png" alt="">
        </div>
        <div class="about-content flex-box">
            <h3>Personal Info</h3>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit consectetur, aliquam quaerats voluptatem. Ut enim ad minima veniam, exercitationem laboriosam, nisi ut aliquid ex ea autem velit esse quam nihil</p>
        </div>
    </div>
</div>
<!-- End skills tab -->
      <!-- End Info Section -->
                <!-- Start Marqee Section -->
<section id="marqee" class="secondmarqee">
  <div class="marqee-container">
    <div class="marqee-track">
      <span>Web Development</span>
      <span>Mobile App Development</span>
      <span>App Store Optimization</span>
      <span>Search Engine Optimization</span>
      <span>Wordpress Development</span>
      <span>Digital Marketing</span>
      <span>Web Development</span>
      <span>Mobile App Development</span>
      <span>App Store Optimization</span>
      <span>Search Engine Optimization</span>
      <span>Wordpress Development</span>
      <span>Digital Marketing</span>
    </div>
  </div>
</section>
   <!-- End Marqee Section -->
        <!-- Start Projects Section -->
 <section id="our-projects">
    <div class="project-main-wrapper">
        <h2>My Projects</h2>
        <h3>Please Review My Projects</h3>
        <div id="projects"></div>
    </div>
 </section>
<!-- End Projects Section -->
        <div id="mainfooter"></div>
        <!-- <div id="projects"></div> -->
    <!-- End Home Page -->
     <section id="wrapper">
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    </section>
<?php
include __DIR__ . "/components/login.php";
include __DIR__ . "/components/registor.php";
  include __DIR__ . "/components/footer.php";
?>
<script>
  let tabs = document.querySelectorAll('.tab');
let contents = document.querySelectorAll('.tabcontent');

tabs.forEach((tab, index) => {
    tab.addEventListener('click', function(){
        contents.forEach(content => {
            content.classList.remove('active');
        });
        tabs.forEach(t => {
            t.classList.remove('active');
        });
        this.classList.add('active');
        contents[index].classList.add('active');
    });
});


// ACF Projects REST API
fetch('/madias/wp-json/wp/v2/projects?_embed')
.then(res => res.json())
.then(data => {

    data.forEach(post => {

        let title = post.title.rendered;

        let acfData = post.acf ? post.acf.project_image : '';

        let imageURL = '';
        if(post._embedded && post._embedded['wp:featuredmedia']){
            imageURL = post._embedded['wp:featuredmedia'][0].source_url;
        }
        let categoryNames = '';
        if(post._embedded && post._embedded['wp:term']){
    
            post._embedded['wp:term'][0].forEach(cat => {
                categoryNames += cat.name + ' ';
            });
        }

        let postURL = post.link;
        console.log("Title:", title);
        console.log("ACF:", acfData);
        console.log("Image:", imageURL);
        console.log("Categories:", categoryNames);
        let html = `
            <div class="project-card">
                <div class="pro-info-wrapper"> 
                <div class="pro-info">
                <h3>${title}</h3>
                <p>Category: ${categoryNames}</p>
                </div>
                <div class="pro-infourl">
                <a href="${postURL}">Learn More</a>
                </div>
                </div>
                <img src="${imageURL}" alt="">
            </div>
        `;

        document.getElementById("projects").innerHTML += html;

    });

})
.catch(error => {
    console.log("Error:", error);
});
</script>
<script src="script/custom.js"></script>
<script src="script/registor.js"></script>
<script src="script/header.js"></script>
<script src="script/login.js"></script>
</body>