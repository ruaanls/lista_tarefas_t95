

let menuBtn = document.querySelector("#menu");
let menu = document.querySelector("nav");

menuBtn.addEventListener("click", function(){

    
    if(menu.style.left == null || menu.style.left != "0px")
    {
        menu.style.setProperty("left", "0");
    }

    else
    {
        menu.style.setProperty("left", "-100vw")
    }
    
})