const toggleOpen = document.querySelector(".toggle_open")
const toggleClose = document.querySelector(".toggle_close")
const sideNav = document.querySelector(".nav_menu")
const linkNav = document.querySelectorAll(".nav_link")
const header = document.querySelector("nav")
const fixedNav = header.offsetTop

// All Navbar Scrolling Effect
window.onscroll = function () {
  if (window.pageYOffset > fixedNav) {
    header.classList.add("header_fixed")
    toggleOpen.classList.add("text-black")
  } else {
    header.classList.remove("header_fixed")
    toggleOpen.classList.remove("text-black")
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



const observer = lozad('img', {
  rootMargin: '10px 0px', // syntax similar to that of CSS Margin
  threshold: 0.1, // ratio of element convergence
  enableAutoReload: true // it will reload the new image when validating attributes changes
});
observer.observe();



