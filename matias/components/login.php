<?php
  $title = $title ?? "Madias";
  $base  = "/madias/";
  // include('matias/config/config.php');
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
  <link rel="stylesheet" href="style/login.css">
 <!-- <link rel="stylesheet" href="style/dynamic.css"> -->
</head>
<body>
    <section id="login-section">
    <div class="login-wrapper flex-con">
    <button id="loginpopupclose">Close</button>
    <h2>Login Here</h2>
    <form id="customlogin">
      <div class="login-form">
        <label for="email">Your Username</label>
        <input
          type="text"
          name="user_login"
          id="userlogin"
          placeholder="Enter UserName"
        />
        <label for="password">Password</label>
        <input
          type="password"
          name="user_pass"
          id="password"
          placeholder="Enter Your Password"
        />
        <input type="submit" value="Login" id="loginpopupbtn">
      </div>
    </form>
  </div>
</section>
<script>
 document.getElementById("customlogin").addEventListener("submit", function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch("/madias/wp-json/custom/v1/login", {
        method: "POST",
        body: formData,
        credentials: "include"
    })
    .then(async (res) => {
        const data = await res.json();

        if (!res.ok) {
            throw new Error(data.message || "Login failed");
        }

        return data;
    })
    .then(data => {
        window.location.reload();
        window.location.href = "../dashboard";
    })
    .catch(error => {
        alert(error.message);
    });
});
</script>
<script src="script/login.js"></script>
</body>