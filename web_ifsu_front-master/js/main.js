const toggleOpen = document.querySelector(".toggle_open")
const toggleClose = document.querySelector(".toggle_close")
const sideNav = document.querySelector(".nav_menu")
const linkNav = document.querySelectorAll(".nav_link")
const btnNav = document.getElementById("nav_btn")
const header = document.querySelector("nav")
const navbar = document.querySelector(".nav_items")
const dropdowns = navbar.getElementsByClassName("dropdown")
const homeNav = document.querySelector(".home_nav")
const homeLink = document.getElementsByClassName("nav_link")
const fixedNav = header.offsetTop

// All Navbar Scrolling Effect
window.onscroll = function () {
  if (window.pageYOffset > fixedNav) {
    header.classList.add("header_fixed")
    btnNav.classList.add("btn_scrolled")
    toggleOpen.classList.add("text-black")
    
    for (let i = 0; i < homeLink.length; i++) {
      const navScrolled = homeLink[i];
      navScrolled.classList.add("color_change")
    }
  } else {
    header.classList.remove("header_fixed")
    btnNav.classList.remove("btn_scrolled")
    toggleOpen.classList.remove("text-black")
    for (let i = 0; i < homeLink.length; i++) {
      const navScrolled = homeLink[i];
      navScrolled.classList.remove("color_change")
    }
  }
}
// Open Sidebar
toggleOpen.addEventListener('click', function () {
  sideNav.classList.remove("nav_hidden")
})

// Close Sidebar
toggleClose.addEventListener('click', function () {
  sideNav.classList.add("nav_hidden")
})


for (let i = 0; i < dropdowns.length; i++) {
  const openDropdown = dropdowns[i];

  openDropdown.addEventListener("click", function (e) {
    openDropdown.classList.toggle("drop_active");
    for (let i = 0; i < dropdowns.length; i++) {
      if (dropdowns[i] != openDropdown) {
        dropdowns[i].classList.remove('drop_active')
      }
    }
  })
}


window.onclick = function (event) {
  if (!event.target.matches('.nav_link') && !event.target.matches('.dropdown')) {

    const dropdowns = navbar.getElementsByClassName("dropdown")
    for (let i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('drop_active')) {
        openDropdown.classList.remove('drop_active');
      }
    }
  }
}



const observer = lozad('img', {
  rootMargin: '10px 0px', // syntax similar to that of CSS Margin
  threshold: 0.1, // ratio of element convergence
  enableAutoReload: true // it will reload the new image when validating attributes changes
});
observer.observe();



