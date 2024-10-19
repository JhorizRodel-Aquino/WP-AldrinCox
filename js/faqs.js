const accordions = document.querySelectorAll(".faqs__wrapper h5");

accordions.forEach((accordion) => {
  accordion.addEventListener("click", () => {
    accordion.nextElementSibling.classList.toggle("open");
    accordion.querySelector("svg").classList.toggle("open");
  });
});
