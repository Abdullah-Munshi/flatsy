
if (document.querySelector(".navbar-toggle") !== null) {
  const navbarToggle = document.querySelector(".navbar-toggle");
  navbarToggle.addEventListener("click", function (e) {
    e.preventDefault();
    document.querySelector("body").classList.toggle("extra");
  });
}
