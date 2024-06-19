document.querySelector(".amg").addEventListener("click", function (){
    let hiden = document.querySelectorAll(".class_list_not_amg"),
    hiden_auto = document.querySelectorAll("#hiden");
    hiden.forEach(hidening=>{
        hidening.classList.add("hiden");
    });
    hiden_auto.forEach(hidening_auto=>{
        hidening_auto.classList.add("hiden");
    });
});

document.querySelector(".all").addEventListener("click", function (){
    let hiden = document.querySelectorAll(".class_list_not_amg"),
        hiden_auto = document.querySelectorAll("#hiden");
    hiden.forEach(hidening=>{
        hidening.classList.remove("hiden");
    });
    hiden_auto.forEach(hidening_auto=>{
        hidening_auto.classList.remove("hiden");
    });
});

let divs = document.querySelectorAll(".help"),
    container = document.querySelector("#container");

document.querySelectorAll("#click").forEach(button => button.addEventListener("click", function(){
    let id = this.getAttribute("data-id");
    let top = [...divs].find(div => div.getAttribute("data-id") === id);
    let rest = [...divs].filter(div => div.getAttribute("data-id") !== id);
    container.innerHTML = "";
    container.append(top);
    container.append(...rest);
}));
