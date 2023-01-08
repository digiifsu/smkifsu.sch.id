const toggleOpen = document.querySelector(".toggle_open")
const toggleClose = document.querySelector(".toggle_close")
const sideNav = document.querySelector(".nav_menu")
const linkNav = document.querySelectorAll(".nav_link")
const btnNav = document.getElementById("nav_btn")
const header = document.querySelector("nav")
const navbar = document.querySelector(".nav_items")
const dropdowns = navbar.getElementsByClassName("dropdown");
const fixedNav = header.offsetTop

// All Navbar Scrolling Effect
window.onscroll = function () {
  if (window.pageYOffset > fixedNav) {
    header.classList.add("header_fixed")
    btnNav.classList.add("btn_scrolled")
    toggleOpen.classList.add("text-black")
  } else {
    header.classList.remove("header_fixed")
    btnNav.classList.remove("btn_scrolled")
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

// navbar.addEventListener("click", (event) => {
//   const dropdowns = navbar.getElementsByClassName("dropdown");
//   for (let i = 0; i < dropdowns.length; i++) {
//     const openDropdown = dropdowns[i];
//     if (openDropdown.classList.contains("active")) {
//       openDropdown.classList.remove("active");
//     } else {
//       openDropdown.classList.add("active");
//     }
//   }
// });


for (let i = 0; i < dropdowns.length; i++) {
  const openDropdown = dropdowns[i];
  openDropdown.addEventListener("click", function(){
    openDropdown.classList.toggle("drop_active")
  })
}
  




