require("jquery");
require("bootstrap");

function stickFooterToBottom() {
  document.body.style.height = "100%";

  var winHeight = window.innerHeight;
  var bodyHeight = document.body.offsetHeight;
  var footerDiv = document.getElementById("footer");

  if (winHeight > bodyHeight) {
    footerDiv.style.position = "absolute";
    footerDiv.style.bottom = "0px";
    document.body.style.height = winHeight + "px";
  } else {
    footerDiv.style.position = "static";
  }
}

stickFooterToBottom();

window.onresize = stickFooterToBottom;
