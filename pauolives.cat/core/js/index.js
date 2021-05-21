function progressfunct() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("progressbar").style.width = scrolled + "%";

  if (scrolled > 99.94 && scrolled < 102) {
    document.getElementById("progressbar").style.width = "100%";
  }
}

function stickyfunct() {

  var navbar = document.getElementById("navbar");

  if (window.pageYOffset > sticky) {
    navbar.classList.remove("stickyout");
    navbar.classList.add("sticky")
    navbar.classList.remove("stickytop");
  } else {
      navbar.classList.remove("sticky");
      navbar.classList.add("stickyout");
      navbar.classList.add("stickytop");
  }
}

function checkedbtn() {

var decider = document.getElementById('check');
  if(decider.checked){
      document.getElementById("navbar").style.position = "fixed";
      document.getElementById("progressbar").style.display = "none";
      navbar.classList.add("sticky")
      navbar.classList.remove("stickyout");
      navbar.classList.remove("stickytop");
  } else {
      document.getElementById("navbar").style.removeProperty('position');
      document.getElementById("progressbar").style.removeProperty('display');
      navbar.classList.remove("sticky");
      navbar.classList.add("stickyout");
      navbar.classList.add("stickytop");
  }
}

function myFunction(x) {

  if (!x.matches) { // If media query matches
    document.getElementById("check").checked = false;
    document.getElementById("progressbar").style.removeProperty('display');
    document.getElementById("navbar").style.removeProperty('position');
  }
}

  

