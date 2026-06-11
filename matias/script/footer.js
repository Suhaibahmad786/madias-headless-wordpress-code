document.addEventListener("submit", function (e) {
  if (!e.target.matches("#footerForm")) return;

  e.preventDefault();

  const msgBox = document.getElementById("footer-msg");
  if (!msgBox) return;   // safety

  const formData = new FormData(e.target);

  fetch("action/footerform.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    msgBox.innerText = data.msg;
  });
});