// Navbar

const menu = document.getElementById("menu");
const close = document.getElementById("close");
const sidebar = document.getElementById("sidebar");

menu.addEventListener("click", () => {
  menu.classList.add("hidden");
  menu.classList.remove("block");

  close.classList.remove("hidden");
  close.classList.add("block");

  sidebar.style.right = "0px";
});

close.addEventListener("click", () => {
  close.classList.add("hidden");
  close.classList.remove("block");

  menu.classList.remove("hidden");
  menu.classList.add("block");

  sidebar.style.right = "-350px";
});
