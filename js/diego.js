window.addEventListener('load', init);

let menuButton
let sideMenu;
let sideMenuWrapper;
let menuOpen = false;

function init() {
    menuButton = document.getElementById('menuButton');
    sideMenu = document.getElementById('sideMenu');
    sideMenuWrapper = document.getElementById('sideMenuWrapper');
    sideMenuWrapper.addEventListener('click', closeMenu);
    menuButton.addEventListener('click', openMenu);
}

function closeMenu(e) {
    if (menuOpen === false || e.target.id === sideMenu){
        return
    }
    sideMenu.style.width = "0";
    sideMenuWrapper.style.width = "0";
    console.log('close');
    menuOpen = false;
}

function openMenu() {
    sideMenu.style.width = "250px";
    sideMenuWrapper.style.width = "100%";
    menuOpen = true;
    console.log('open');
}
