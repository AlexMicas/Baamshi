function maFonction() {
  var test = document.getElementById("contenu");

  if (test.style.display == "block")
  test.style.display = "none";

  else
  test.style.display = "block";
};

function buttonClick() {
  var menu = document.getElementById("menu");

  if (menu.style.transform == "rotate(180deg)")
  menu.style.transform = "rotate(0deg)";
  else {
    menu.style.transform = "rotate(180deg)";
  }
}


function fullScreen(test) {
      var monElement = test||document.documentElement;
      if (document.mozFullScreenEnabled) {
	if (!document.mozFullScreenElement) {
          monElement.mozRequestFullScreen();
        } else {
          document.mozCancelFullScreen();
        }
      }
      if (document.fullscreenElement) {
	if (!document.fullscreenElement) {
          monElement.requestFullscreen();
        } else {
          document.exitFullscreen();
        }
      }
      if (document.webkitFullscreenEnabled) {
	if (!document.webkitFullscreenElement) {
          monElement.webkitRequestFullscreen();
        } else {
          document.webkitExitFullscreen();
        }
      }
      if (document.msFullscreenEnabled) {
	if (!document.msFullscreenElement) {
          monElement.msRequestFullscreen();
        } else {
          document.msExitFullscreen();
        }
      }
    }
