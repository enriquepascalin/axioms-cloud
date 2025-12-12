import './bootstrap.js';
import './styles/app.css';

// ——— Header solidify on scroll
function headerSolidify() {
  const header = document.querySelector('[data-header]');
  if (!header) return;
  const onScroll = () => {
    if (window.scrollY > 10) header.classList.add('is-scrolled');
    else header.classList.remove('is-scrolled');
  };
  onScroll();
  document.addEventListener('scroll', onScroll, { passive: true });
}

// ——— Smooth in-page anchor scrolling
function smoothAnchors() {
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const id = a.getAttribute('href');
      if (!id || id === '#') return;
      const el = document.querySelector(id);
      if (!el) return;
      e.preventDefault();
      el.scrollIntoView({ behavior: 'smooth', block: 'start' });
      history.pushState(null, '', id);
    });
  });
}

// ——— Minimal scroll reveal using IntersectionObserver
function scrollReveal() {
  const els = document.querySelectorAll('[data-reveal]');
  if (!els.length) return;
  const io = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });
  els.forEach(el => io.observe(el));
}

import 'js/tiny-slider.min.js';
function initSlider() {
    if (!window.tns) return;
    tns({ container: '.logo-slider', items: 5, slideBy: 1, autoplay: true, controls: false, nav: false, gutter: 16, responsive: { 0:{items:2}, 576:{items:3}, 992:{items:5} } });
}

document.addEventListener('DOMContentLoaded', () => {
  headerSolidify();
  smoothAnchors();
  scrollReveal();
  console.log('AXIOMS frontend via AssetMapper ✅');
});