<?php
  $title = $title ?? "Testimonials";
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
  <link rel="stylesheet" href="style/testimonial.css">
</head>
<body>
    <?php  include __DIR__ . "/components/header.php";?>
<!-- Start You Page Design HTML -->

<section id="testimonials-hero">
    <div class="testi-hero-wrapper">
        <h2>Read Our Testimonials</h2>
    </div>
</section>

<section id="our-reviews">
    <div class="reviews-wrapper">
        <h2>Here Read Our Reviews</h2>
        <div id="ourtesti"></div>
        <div class="addform">
          <button id="formadd">Add Form</button>
        </div>
        <div class="form" id="formwraper">
       
          <form id="testimonialForm">
            <div class="cros-wrapper">
              <a id="closetestiform">Close</a>
              <!-- <p id="closetestiform">Close</p> -->
            </div>

<input type="text" name="name" placeholder="Client Name" required>

<input type="text" name="position" placeholder="Position" required> 
<textarea name="testides" placeholder="Testimonial" id="testitextdata" required></textarea>
<button type="submit" id="submittesti">Submit</button>

</form>

        </div>
    </div>
</section>
</body>
<?php
include __DIR__ . "/components/login.php";
include __DIR__ . "/components/registor.php";
  include __DIR__ . "/components/footer.php";
?>
<script>
document.getElementById("testimonialForm").addEventListener("submit", function(e){
e.preventDefault();
const form = e.target;
fetch("/madias/wp-json/wp/v2/testimonials?_embed", {
method: "POST",
headers: {
"Content-Type": "application/json",
"Authorization": "Basic " + btoa("sohaib:UWbU o9vj g7gu Zp5S KVOW 6l6S")
},
body: JSON.stringify({
title: form.name.value,
status: "publish",
acf: {
name: form.name.value,
position: form.position.value,
testides: form.testides.value,
}
})
})
.then(res => res.json())
.then(res => {
console.log(res);
if(res.id){
alert("Testimonial Added Successfully");
window.location.reload();
}else{
alert("Error: " + res.message);
}
});
});
</script>
<script src="script/custom.js"></script>
<script src="script/registor.js"></script>
<script src="script/header.js"></script>
<script src="script/login.js"></script>
</body>
</html>