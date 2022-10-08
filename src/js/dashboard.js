const sideBar = document.getElementById("sidebar");
const menuBtn = document.getElementById("toggleSidebarMobile");
const hamBurgerSvg = document.getElementById("toggleSidebarMobileHamburger");
const closeSvg = document.getElementById("toggleSidebarMobileClose");
//if click outside it will close autometically
 document.onclick = function (e) {
    if (e.target.id !== 'sidebar' && e.target.id !== 'toggleSidebarMobile' && e.target.id !== 'toggleSidebarMobileHamburger') {
      sideBar.classList.add("hidden");
      hamBurgerSvg.classList.remove("hidden");
      closeSvg.classList.add("hidden");
    }
}
menuBtn.addEventListener("click", () => {
    sideBar.classList.toggle("hidden");
    hamBurgerSvg.classList.toggle("hidden");
    closeSvg.classList.toggle("hidden");
});