const bannerImgs = document.querySelectorAll(".homeBanner__slider img");
const bannerTxt = document.querySelector(".homeBanner__wrapper");

if (bannerImgs.length > 0 && bannerTxt) {
  // only change this value for each slide duration
  // use a value greater than 2000
  let duration = 7000;
  // --------------------
  let resetDuration = Math.round(duration / 2);
  let n = bannerImgs.length; // number of img slides
  let curr_i = 0;
  let prev_i = n - 1;

  setTimeout(() => {
    bannerImgs[curr_i].classList.add("moveIn");
    setTimeout(() => {
      bannerTxt.classList.remove("fadeIn");
    }, resetDuration);

    bannerTxt.classList.add("fadeIn");
  }, duration);

  setTimeout(() => {
    setInterval(() => {
      animateText();
      animateSlides();

      curr_i++;

      if (curr_i >= n) {
        curr_i = 0;
      }

      prev_i = curr_i - 1;

      if (prev_i < 0) {
        prev_i = n - 1;
      }

      if (curr_i == 0) {
        bannerImgs[n - 1].classList.add("opacity-0");
      } else {
        bannerImgs[n - 1].classList.remove("opacity-0");
      }
    }, duration);
  }, duration);

  function removeAllAnimations() {
    bannerImgs.forEach((img) => {
      img.classList.remove("moveIn");
    });
  }

  function animateText() {
    setTimeout(() => {
      bannerTxt.classList.remove("fadeIn");
    }, resetDuration);

    setTimeout(() => {
      bannerTxt.classList.add("fadeIn");
    }, 0);
  }

  function animateSlides() {
    setTimeout(() => {
      bannerImgs[prev_i].classList.remove("moveIn");
      bannerImgs[prev_i].classList.add("opacity-0");
    }, resetDuration);

    setTimeout(() => {
      bannerImgs[curr_i].classList.add("moveIn");
      bannerImgs[curr_i].classList.remove("opacity-0");
    }, 0);
  }
}
