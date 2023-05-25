const showMenu = document.getElementById("menu");
const openClick = document.getElementById("dropdown_menu");
const closeClick = document.getElementById("close_button");

openClick.addEventListener("click", (e) => {
    showMenu.classList.add("show_menu")
});

closeClick.addEventListener("click", (e) => {
    showMenu.classList.remove("show_menu")
});