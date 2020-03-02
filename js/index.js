var icomenu = document.querySelector('.icomenu');
var menumobile = document.querySelector('.menumobile');

function transformMENU() {
    /*ANIMATION ICONE*/
    icomenu.src = "images/play.svg";
    icomenu.style.transform = "rotate(90deg)";
    /*APPARITION MENU*/
    menumobile.classList.add('menumobileACTIVER');
    document.querySelector('html').style.overflowY = "hidden";
}

function desactiver() {
    menumobile.classList.remove('menumobileACTIVER');
    document.querySelector('html').style.overflowY = "visible";
    icomenu.src = "images/menu.svg"
    icomenu.style.transform = "initial";
}