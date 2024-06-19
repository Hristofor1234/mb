let button  = document.querySelector(".icon");

button.addEventListener("click", function (){
    let header_popup = document.querySelector(".popup");
    if (header_popup.classList.contains("open")) {
        close_popup();
    }else {
        header_popup.classList.add("open");
        button.querySelector("img").src = "assets/img/icon2.png"
    }
});

function close_popup() {
    let header_popup = document.querySelector(".popup");
    header_popup.classList.remove("open");
    button.querySelector("img").src = "assets/img/icon1.png";
}

document.querySelector(".popup").addEventListener("click", close_popup, false);

document.querySelector(".popup").addEventListener("click", function (event) {
    event.stopPropagation();
});

document.querySelector("#button-top").addEventListener("click", function (event){
   event.preventDefault();
   window.scrollTo({top:0, behavior: "smooth"});
});