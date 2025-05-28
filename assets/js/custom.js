document.addEventListener("DOMContentLoaded", function () {
  var wpcf7Elm = document.querySelector( '.wpcf7' );

  wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
    alert( "Cadastro efetuado com sucesso!" );
  }, false );

  if (document.getElementById("home")) {
    document.querySelector("footer #newsletter").style.display = "none";
  }
});

document.addEventListener("DOMContentLoaded", function () {
  let lastScrollTop = 0;
  const navbar = document.querySelector(".navbar");

  window.addEventListener("scroll", function () {
    const currentScroll =
      window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop) {
      // Rolando para baixo
      navbar.style.top = "-77px"; // ajustável conforme altura da navbar
    } else {
      // Rolando para cima
      navbar.style.top = "0";
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
  });
});
