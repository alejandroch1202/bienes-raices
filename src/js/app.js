document.addEventListener("DOMContentLoaded", function () {
  event_listeners();
  dark_mode();
});

function dark_mode() {
  // Setting user preference
  const default_dark_mode = window.matchMedia("(prefers-color-scheme: dark)");
  // console.log(default_dark_mode.matches);
  if (default_dark_mode.matches) {
    document.body.classList.add("dark-mode");
  } else {
    document.body.classList.remove("dark-mode");
  }

  default_dark_mode.addEventListener("change", function () {
    if (default_dark_mode.matches) {
      document.body.classList.add("dark-mode");
    } else {
      document.body.classList.remove("dark-mode");
    }
  });

  const dark_mode_button = document.querySelector(".dark-mode-button");
  dark_mode_button.addEventListener("click", function () {
    document.body.classList.toggle("dark-mode");
  });
}

function event_listeners() {
  const mobile_menu = document.querySelector(".mobile-menu");
  mobile_menu.addEventListener("click", responsive_nav);
}

function responsive_nav() {
  const nav = document.querySelector(".navegacion");

  // Advanced level
  nav.classList.toggle("show");

  // Begginer level
  //   if (nav.classList.contains("show")) {
  //     nav.classList.remove("show");
  //   } else {
  //     nav.classList.add("show");
  //   }
}
