"use strict"

// JavaScript function to filter items based on search input
function filterAgenda() {
    let input = document.getElementById("search-bar").value.toLowerCase();
    let items = document.getElementsByClassName("list-item");

    for (let i = 0; i < items.length; i++) {
        let title = items[i].querySelector(".details h3").textContent.toLowerCase();
        let category = items[i].querySelector(".details p").textContent.toLowerCase();
        let description = items[i].querySelectorAll(".details p")[1].textContent.toLowerCase();

        if (title.includes(input) || category.includes(input) || description.includes(input)) {
            items[i].style.display = "block";
        } else {
            items[i].style.display = "none";
        }
    }
}
