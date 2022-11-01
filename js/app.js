//Date in footer
const date = document.getElementById("date");
date.innerHTML = new Date().getFullYear();
//back to top button show on scroll offset
const topBtn = document.querySelector(".top-link");

//Mobile Menu Toggle

const toggleBtn = document.querySelector(".nav-toggle");
const mobileMenuContainer = document.querySelector(".mobile-menu-container");
const menu = document.querySelector(".mobile-menu");
const openBtnIcon = document.querySelector(".fa-bars");
const closeBtnIcon = document.querySelector(".fa-times");

toggleBtn.addEventListener("click", function () {
  const containerHeight = mobileMenuContainer.getBoundingClientRect().height;
  const linksHeight = menu.getBoundingClientRect().height;
  closeBtnIcon.classList.toggle("hide");
  openBtnIcon.classList.toggle("hide");

  if (containerHeight === 0) {
    mobileMenuContainer.style.height = `${linksHeight + 20}px`;
  } else {
    mobileMenuContainer.style.height = 0;
  }
});

//add value
const searchInput = document.getElementById("bbp_search");
searchInput.value = "Search";
searchInput.addEventListener("click", function () {
  searchInput.value = "";
});
searchInput.addEventListener("focusout", function () {
  searchInput.value = "Search";
});
