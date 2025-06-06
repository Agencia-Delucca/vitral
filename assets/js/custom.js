document.addEventListener('contextmenu', function(e) {
  e.preventDefault();

  const desktop = window.innerWidth >= 992;

  const toast = document.querySelector('.toast__alert');
  if (toast && desktop) {
    toast.classList.add('active');
    setTimeout(() => {
      toast.classList.remove('active');
    }, 5000);
  }
});

document.addEventListener("DOMContentLoaded", function () {
  let lastScrollTop = 0;
  const navbar = document.querySelector(".navbar");

  window.addEventListener("scroll", function () {
    const home = document.querySelector("#home");
    const currentScroll =
      window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop && !home) {
      navbar.style.top = "-77px";
    }
    else if (currentScroll > lastScrollTop && home) {
      navbar.style.top = "-108px";
    }
    else {
      navbar.style.top = "0";
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
  });
});

Fancybox.bind("[data-fancybox]", {
  animated: true,
  zoom: true,
  Image: {
    zoom: true,
  }
});