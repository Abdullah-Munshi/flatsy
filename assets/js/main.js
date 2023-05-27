
if (document.querySelector(".navbar-toggle") !== null) {
  const navbarToggle = document.querySelector(".navbar-toggle");
  navbarToggle.addEventListener("click", function (e) {
    e.preventDefault();
    document.querySelector("body").classList.toggle("extra");
  });
}


if (document.getElementById('language_switch') !== null) {
  const langSwitch = document.getElementById('language_switch');
  document.getElementById(langSwitch.dataset.value).classList.add('show');
  langSwitch.addEventListener('click', function (e) {
    e.preventDefault();
    if (this.dataset.value == 'en') {
      this.dataset.value = 'fr';
      langSwitch.querySelectorAll('button').forEach(each => each.classList.remove('show'));
      document.getElementById(langSwitch.dataset.value).classList.add('show');
    } else if (this.dataset.value == 'fr') {
      this.dataset.value = 'en'
      langSwitch.querySelectorAll('button').forEach(each => each.classList.remove('show'));
      document.getElementById(langSwitch.dataset.value).classList.add('show');
    }
  })
}
