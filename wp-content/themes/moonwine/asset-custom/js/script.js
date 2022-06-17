window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.documentElement.scrollTop > 50) {
    document.getElementById("section-discover").className = "event-scroll";
    document.getElementById('menu').className = "menu-2";
    document.getElementById('discover').className = "discover-scroll";
    document.getElementById('logoMoonwine').style.fill = "var(--main)";
    document.getElementById('content-discover').style.color = "var(--secondary)";
    document.getElementById('discover-img').className = "discover-img-scroll";
    document.getElementById('slogan').className = "first-title-scroll";

  } else {
    document.getElementById("section-discover").className = "event-back-scroll";
    document.getElementById('menu').className = "menu-1";
    document.getElementById('logoMoonwine').style.fill = "var(--secondary)";
    document.getElementById('discover').className = "";
    document.getElementById('discover-img').className = "discover-img";
    document.getElementById('content-discover').style.color = "var(--main)";
    document.getElementById('slogan').className = "first-title";

  }
}

