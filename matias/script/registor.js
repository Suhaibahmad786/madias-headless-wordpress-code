document.addEventListener("click", function (e) {
  const popup = document.getElementById("registor-section");
  if (!popup) return;
  if (e.target.id === "headregbtn") {
    popup.classList.add("active");
  }
  if (e.target.id === "popupclose") {
    popup.classList.remove("active");
  }
});