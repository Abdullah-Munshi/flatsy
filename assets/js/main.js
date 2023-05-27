



document.addEventListener("DOMContentLoaded", function () {

  // Script for Mobile toggle button 
  if (document.querySelector(".navbar-toggle") !== null) {
    const navbarToggle = document.querySelector(".navbar-toggle");
    navbarToggle.addEventListener("click", function (e) {
      e.preventDefault();
      document.querySelector("body").classList.toggle("extra");
    });
  }



  // Script for BV select activation
  let language = new BVSelect({
    selector: "#language",
    width: "100%",
  });
});

