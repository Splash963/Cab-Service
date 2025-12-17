function setupScrollAnimations() {
  // Fade-only
  const fadeElements = document.querySelectorAll('.fade-only');
  const fadeObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        fadeObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  fadeElements.forEach(el => fadeObserver.observe(el));

  // Slide-up
  const slideElements = document.querySelectorAll('.slide-up');
  const slideObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
        slideObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  slideElements.forEach(el => slideObserver.observe(el));
}

function setupFloatingButtonToggle() {
  const mainButton = document.getElementById('main-button');
  const extraButtons = document.getElementById('extra-buttons');
  let isVisible = false;

  mainButton.addEventListener('click', () => {
    isVisible = !isVisible;
    extraButtons.classList.toggle('show', isVisible);
  });
}

document.addEventListener('DOMContentLoaded', function () {
  setupScrollAnimations();
  setupFloatingButtonToggle();
});


