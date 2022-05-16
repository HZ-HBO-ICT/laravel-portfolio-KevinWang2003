
function toggleNav() {
    var sidenav = document.getElementById("mySidenav"),
    main = document.getElementById("main");
    sidenav.style.width = sidenav.style.width === "300px" ? '0' : '300px';
    main.style.marginLeft = main.style.marginLeft === "300px" ? '0' :  '300px';
}