let menu = document.querySelector("#menu-bar");
let navbar = document.querySelector(".navbar");

menu.onclick = () => {
  menu.classList.toggle("fa-time");
  navbar.classList.toggle("active");
};

window.onscroll = () => {
  menu.classList.remove("fa-time");
  navbar.classList.remove("active");
};
