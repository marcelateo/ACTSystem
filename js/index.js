var sidebar = document.querySelector("#sidebar > ul");
var menu = sidebar.querySelectorAll("li");
for (var i = 0; i < menu.length; i++) {
    menu[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace("active", "");
    this.className += " active";
  });
}