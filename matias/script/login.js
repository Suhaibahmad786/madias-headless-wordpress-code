// alert("hello Suhaib")
document.addEventListener("click", function (e) {
  const popup = document.getElementById("login-section");
  if (!popup) return;
  if (e.target.id === "loginformbtn") {
    popup.classList.add("active");
  }
  if (e.target.id === "loginpopupclose") {
    popup.classList.remove("active");
  }
});