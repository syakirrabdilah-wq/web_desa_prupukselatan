document.addEventListener("DOMContentLoaded", () => {
  const slidesWrapper = document.querySelector(".slides-wrapper");
  const slides = document.querySelectorAll(".slide");
  const dots = document.querySelectorAll(".dot");
  const prevBtn = document.querySelector(".prev-btn");
  const nextBtn = document.querySelector(".next-btn");

  if (slides.length > 0) {
    let currentSlide = 0;
    let slideInterval;

    function initSlider() {
      updateSliderPosition();
      if (dots.length > 0) dots[currentSlide].classList.add("active");
      startSlideTimer();
    }

    function updateSliderPosition() {
      if (slidesWrapper) {
        slidesWrapper.style.transform = `translateX(-${currentSlide * 100}%)`;
      }
    }

    function goToSlide(n) {
      if (dots.length > 0) dots[currentSlide].classList.remove("active");
      currentSlide = (n + slides.length) % slides.length;
      updateSliderPosition();
      if (dots.length > 0) dots[currentSlide].classList.add("active");
    }

    function nextSlide() {
      goToSlide(currentSlide + 1);
    }

    function prevSlide() {
      goToSlide(currentSlide - 1);
    }

    function startSlideTimer() {
      slideInterval = setInterval(nextSlide, 3000);
    }

    function resetSlideTimer() {
      clearInterval(slideInterval);
      startSlideTimer();
    }

    if (nextBtn) {
      nextBtn.addEventListener("click", () => {
        nextSlide();
        resetSlideTimer();
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener("click", () => {
        prevSlide();
        resetSlideTimer();
      });
    }

    dots.forEach((dot, index) => {
      dot.addEventListener("click", () => {
        goToSlide(index);
        resetSlideTimer();
      });
    });

    initSlider();
  }

  const navbar = document.querySelector(".navbar");
  if (navbar) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    });
  }
});
