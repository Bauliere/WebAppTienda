/* Side Menu, floating button and the state of the sidebar */
const sideBar = document.querySelector('.sidebar');
const floatingButton = document.querySelector('.floating-button');
var sideBarState = 'hidden';

/* Function to toggle the sidebar menu */
function SideBarAction() {
    if (sideBar.classList.contains('sidebarShown')) {
        sideBar.classList.remove('sidebarShown');
        floatingButton.classList.remove('Move');
    } else {
        sideBar.classList.add('sidebarShown');
        floatingButton.classList.add('Move');
    }
}

/* Fucntion to hide the side menu if the user clicks outside of it */
document.addEventListener('click', function(event) {
    if(sideBar.classList.contains('sidebarShown') && !floatingButton.contains(event.target) && !sideBar.contains(event.target)){
        sideBar.classList.remove('sidebarShown');
        floatingButton.classList.remove('Move');
    }
    else{
        return;
    }
});
