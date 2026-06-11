<?php
  $title = $title ?? "Madias";
  $base  = "/madias/";
  include('matias/config/wpconfig.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <base href="<?= $base ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= htmlspecialchars($title) ?></title>
 <link rel="stylesheet" href="style/dynamic.css">
 <link rel="stylesheet" href="style/header.css">
  <link rel="stylesheet" href="style/registor.css">
 <!-- <link rel="stylesheet" href="style/dynamic.css"> -->
</head>
<body>

<section id="registor-section">
  <div class="registor-wrapper flex-box">

    <button id="popupclose">Close</button>
    <h2>Register Now</h2>

    <form id="registerForm">
      <div class="fisr-column">
        <div>
          <label>User Name</label>
          <input type="text" name="user_login" placeholder="Enter Your User Name">
        </div>

        <div>
          <label>Your Email</label>
          <input type="email" name="user_email" placeholder="Enter Your Email">
        </div>
      </div>

      <div class="fisr-column sec-colum">
        <div>
          <label>Phone Number</label>
          <input type="tel" name="telphone" placeholder="Enter Your Phone Number">
        </div>

        <div>
          <label>Password</label>
          <input type="password" name="user_pass" placeholder="Enter Your Password">
        </div>
      </div>

      <input type="submit" value="Register Now" id="registor-submit">
    </form>

  </div>
</section>
<script>
  document.getElementById("registerForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch("/madias/wp-json/custom/v1/register", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {

        if (data.status === "success") {
            alert("Registration Successful");
             window.location.reload();
            this.reset();
        } else {
            alert(data.message || "Registration Failed");
        }

    })
    .catch(error => {
        console.error("Error:", error);
        alert("Something went wrong");
    });
});

</script>
     <script src="script/registor.js"></script>
</body>