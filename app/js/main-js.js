window.addEventListener('load', (event) => {
    console.log('page is fully loaded');
    // mobile nav
    function mobileNav() {
        var navBtn = document.getElementById("nav-btn");
        var mainNav = document.getElementById("main-nav");
        navBtn.addEventListener("click", function (e) {
            console.log(navBtn);
            mainNav.classList.toggle('active');
        }
        )        
    }
    mobileNav()
});