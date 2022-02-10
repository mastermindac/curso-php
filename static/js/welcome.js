const navbar = document.querySelector(".navbar");
const welcome = document.querySelector(".welcome");
const navbarToggle = document.querySelector("#navbarNav");

const resizeBakgroundImg = () => {
  const height = window.innerHeight - navbar.clientHeight;
  welcome.style.height = `${height}px`;
};


navbarToggle.ontransitionend = resizeBakgroundImg;
navbarToggle.ontransitionstart = resizeBakgroundImg;
window.onresize = resizeBakgroundImg;
window.onload = resizeBakgroundImg;
