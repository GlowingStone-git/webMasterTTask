"use strict"
let modal = document.querySelector("#modal"),
    modalOverlay = document.querySelector("#modal-overlay");

let closeButton = document.querySelector("#close-button").addEventListener("click", function () {
    modal.classList.toggle("closed");
    modalOverlay.classList.toggle("closed");
})

let openButton = document.querySelectorAll("#open-button");

openButton.forEach.call(openButton, function (el) {
    el.addEventListener('click', function () {
        modal.classList.toggle("closed");
        modalOverlay.classList.toggle("closed");
    })
});
