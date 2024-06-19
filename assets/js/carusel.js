let photos = document.querySelectorAll(".photo"),
    buttons = document.querySelectorAll(".button button"),
    span = document.querySelectorAll(".button button span"),
    photo_index = 0;
let interval = 3500;

function photo(index) {
    photos.forEach(photo => {
        photo.classList.remove("show");
    });
    photos[index].classList.add("show");
    span.forEach(button => {
        button.removeAttribute("style");
    });
    span[index].setAttribute("style", "background-color: #0082c6");
    photo_index = index;
}

buttons.forEach((button, index) => {
    button.addEventListener("click", function () {
        photo(index);
    });
});

function autoSwitchPhotos() {
    photo_index = (photo_index + 1) % photos.length;
    photo(photo_index);
}

setInterval(autoSwitchPhotos, interval);