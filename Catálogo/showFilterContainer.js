const showFilter = document.getElementById("filter_container");
const openFilter = document.getElementById("filter_menu");
const closeFilter = document.getElementById("close_btn");

openFilter.addEventListener("click", (e) => {
    showFilter.classList.add("show_filter")
});

closeFilter.addEventListener("click", (e) => {
    showFilter.classList.remove("show_filter")
});