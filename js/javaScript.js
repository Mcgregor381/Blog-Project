

$(document).ready(function() {
    // SideNav Button Initialization
    $(".button-collapse").sideNav();
    // SideNav Scrollbar Initialization
    let sideNavScrollbar = document.querySelector('.custom-scrollbar');
    let ps = new PerfectScrollbar(sideNavScrollbar);
});