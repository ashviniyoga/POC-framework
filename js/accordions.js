var acc = document.getElementsByClassName("poc-accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var pocPanel = this.nextElementSibling;
        if (pocPanel.style.display === "block") {
            pocPanel.style.display = "none";
        } else {
            pocPanel.style.display = "block";
        }
    });
}

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var pocPanelAni = this.nextElementSibling;
    if (pocPanelAni.style.maxHeight){
      pocPanelAni.style.maxHeight = null;
    } else {
      pocPanelAni.style.maxHeight = pocPanelAni.scrollHeight + "px";
    }
  });
}
