/**
 * R.L. Anino Dental Clinic - Main JavaScript
 * Handles: navbar, forms, smooth scroll, UI interactions
 * Compatible with: Bootstrap 5.3+, PHP/MySQL backend
 */

document.addEventListener('DOMContentLoaded', function () {
  initNavbar();
  initFormValidation();
  initSmoothScroll();
  initActiveNavigation();
  initUIEnhancements();
});

// ─────────────────────────────────────────
// Navbar: scroll effect + mobile dropdowns
// ─────────────────────────────────────────
function initNavbar() {
  const navbar = document.querySelector('.navbar');
  
  // Navbar shrink on scroll
  window.addEventListener('scroll', function () {
    if (window.scrollY > 50) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  });
  
  // Mobile dropdown: use Bootstrap's built-in toggle
  // (CSS handles desktop hover via :hover, JS handles mobile click)
  if (window.innerWidth < 992) {
    document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
      toggle.addEventListener('click', function (e) {
        // Let Bootstrap handle the rest via data-bs-toggle
        e.stopPropagation();
      });
    });
  }
  
  // Close mobile menu when clicking a link (not dropdown)
  document.querySelectorAll('.navbar-nav .nav-link:not(.dropdown-toggle)').forEach(link => {
    link.addEventListener('click', () => {
      const collapse = document.querySelector('.navbar-collapse');
      if (collapse?.classList.contains('show')) {
        const bsCollapse = bootstrap.Collapse.getInstance(collapse);
        bsCollapse?.hide();
      }
    });
  });
}

// ─────────────────────────────────────────
// Form Validation: Bootstrap-style feedback
// ─────────────────────────────────────────
function initFormValidation() {
  const forms = document.querySelectorAll('form');
  
  forms.forEach(form => {
    // Prevent double-submit
    let isSubmitting = false;
    
    form.addEventListener('submit', function (e) {
      if (isSubmitting) {
        e.preventDefault();
        return;
      }
      
      if (!form.checkValidity()) {
        e.preventDefault();
        e.stopPropagation();
      } else {
        isSubmitting = true;
        // Optional: show loading state
        const submitBtn = form.querySelector('button[type="submit"]');
        if (submitBtn) {
          submitBtn.disabled = true;
          submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...';
        }
      }
      
      form.classList.add('was-validated');
    });
    
    // Real-time validation feedback (optional)
    const inputs = form.querySelectorAll('.form-control, .form-select');
    inputs.forEach(input => {
      input.addEventListener('blur', function () {
        if (this.value.trim() !== '') {
          this.classList.remove('is-invalid');
          if (this.checkValidity()) {
            this.classList.add('is-valid');
          }
        }
      });
      
      input.addEventListener('input', function () {
        if (this.classList.contains('is-invalid') && this.checkValidity()) {
          this.classList.remove('is-invalid');
          this.classList.add('is-valid');
        }
      });
    });
  });
}

// ─────────────────────────────────────────
// Smooth Scroll: anchor links with navbar offset
// ─────────────────────────────────────────
function initSmoothScroll() {
  document.querySelectorAll('a[href^="#"]:not([data-bs-toggle]):not([href="#"])')
    .forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        
        // Skip cross-page anchors (browser handles these)
        if (href.includes('.html#') || href.includes('.php#')) {
          return;
        }
        
        e.preventDefault();
        const target = document.querySelector(href);
        
        if (target) {
          // Offset for fixed navbar
          const headerOffset = 75;
          const elementPosition = target.getBoundingClientRect().top;
          const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
          
          window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
          });
          
          // Update URL without jumping
          history.pushState(null, null, href);
        }
      });
    });
}

// ─────────────────────────────────────────
// Active Navigation: highlight current page
// ─────────────────────────────────────────
function initActiveNavigation() {
  const currentPath = window.location.pathname.split('/').pop() || 'index.html';
  const currentHash = window.location.hash;
  
  document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
    const linkHref = link.getAttribute('href');
    if (!linkHref) return;
    
    // Normalize paths (remove hashes/queries for comparison)
    const linkBase = linkHref.split('#')[0].split('?')[0];
    const currentBase = currentPath.split('#')[0].split('?')[0];
    
    // Match conditions:
    // 1. Exact base path match
    // 2. Hash match on same page
    // 3. Homepage special case
    const isMatch = 
      linkBase === currentBase ||
      (linkHref === currentHash && currentBase === linkBase) ||
      (linkBase === 'index.html' && currentBase === '');
    
    if (isMatch) {
      link.classList.add('active');
      
      // Also highlight parent dropdown toggle if applicable
      const dropdown = link.closest('.dropdown');
      if (dropdown) {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        if (toggle) toggle.classList.add('active');
      }
    }
  });
}

// ─────────────────────────────────────────
// UI Enhancements: animations, interactions
// ─────────────────────────────────────────
function initUIEnhancements() {
  // Lazy-load images (basic intersection observer)
  if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          if (img.dataset.src) {
            img.src = img.dataset.src;
            img.classList.add('loaded');
            imageObserver.unobserve(img);
          }
        }
      });
    });
    
    document.querySelectorAll('img[data-src]').forEach(img => {
      imageObserver.observe(img);
    });
  }
  
  // Service card hover effect enhancement
  document.querySelectorAll('.service-card').forEach(card => {
    card.addEventListener('mouseenter', function () {
      this.style.zIndex = '10';
    });
    card.addEventListener('mouseleave', function () {
      this.style.zIndex = '1';
    });
  });
  
  // Back-to-top button (optional - add HTML button with id="backToTop")
  const backToTop = document.getElementById('backToTop');
  if (backToTop) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 400) {
        backToTop.classList.add('show');
      } else {
        backToTop.classList.remove('show');
      }
    });
    
    backToTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }
}

// ─────────────────────────────────────────
// Utility: PNG transparent bounds detector (advanced)
// Usage: getVisibleBounds(img).then(bounds => { ... });
// ─────────────────────────────────────────
async function getVisibleBounds(img) {
  return new Promise((resolve) => {
    const compute = () => {
      if (img.naturalWidth === 0 || img.naturalHeight === 0) {
        resolve(null);
        return;
      }
      
      const canvas = document.createElement('canvas');
      const ctx = canvas.getContext('2d');
      canvas.width = img.naturalWidth;
      canvas.height = img.naturalHeight;
      ctx.drawImage(img, 0, 0);
      
      const data = ctx.getImageData(0, 0, canvas.width, canvas.height).data;
      let minX = canvas.width, minY = canvas.height;
      let maxX = 0, maxY = 0;
      let found = false;
      
      // Scan for non-transparent pixels (alpha channel > 0)
      for (let y = 0; y < canvas.height; y++) {
        for (let x = 0; x < canvas.width; x++) {
          const alpha = data[(y * canvas.width + x) * 4 + 3];
          if (alpha > 10) { // Threshold for "visible"
            minX = Math.min(minX, x);
            minY = Math.min(minY, y);
            maxX = Math.max(maxX, x);
            maxY = Math.max(maxY, y);
            found = true;
          }
        }
      }
      
      resolve(found ? {
        x: minX,
        y: minY,
        width: maxX - minX + 1,
        height: maxY - minY + 1
      } : null);
    };
    
    if (img.complete) {
      compute();
    } else {
      img.onload = compute;
      img.onerror = () => resolve(null);
    }
  });
}

// ─────────────────────────────────────────
// Expose utilities globally if needed for PHP integration
// ─────────────────────────────────────────
window.DentalClinic = {
  validateEmail: (email) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email),
  formatDate: (date) => new Date(date).toLocaleDateString('en-PH', {
    year: 'numeric', month: 'long', day: 'numeric'
  }),
  formatPrice: (amount) => new Intl.NumberFormat('en-PH', {
    style: 'currency', currency: 'PHP'
  }).format(amount)
};

