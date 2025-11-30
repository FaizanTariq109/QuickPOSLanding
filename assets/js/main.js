/**
 * QuickPOS Landing Page - Main JavaScript
 * Handles form submission and smooth scrolling
 */

document.addEventListener("DOMContentLoaded", function () {
  // ==================== SMOOTH SCROLLING ====================
  const navLinks = document.querySelectorAll(
    '.nav-link, .hero-cta a, .btn[href^="#"]'
  );

  navLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      const href = this.getAttribute("href");

      if (href.startsWith("#")) {
        e.preventDefault();
        const targetId = href.substring(1);
        const targetSection = document.getElementById(targetId);

        if (targetSection) {
          targetSection.scrollIntoView({
            behavior: "smooth",
            block: "start",
          });
        }
      }
    });
  });

  // ==================== NAVBAR SCROLL EFFECT ====================
  const navbar = document.querySelector(".navbar");
  let lastScroll = 0;

  window.addEventListener("scroll", function () {
    const currentScroll = window.pageYOffset;

    if (currentScroll > 100) {
      navbar.style.boxShadow = "0 4px 16px rgba(0, 0, 0, 0.1)";
    } else {
      navbar.style.boxShadow = "0 2px 8px rgba(0, 0, 0, 0.05)";
    }

    lastScroll = currentScroll;
  });

  // ==================== CONTACT FORM HANDLING (SPM-21, SPM-22) ====================
  const contactForm = document.getElementById("contactForm");
  const formResponse = document.getElementById("formResponse");

  if (contactForm) {
    contactForm.addEventListener("submit", async function (e) {
      e.preventDefault();

      // Get form data
      const formData = new FormData(contactForm);

      // Disable submit button
      const submitBtn = contactForm.querySelector('button[type="submit"]');
      const originalText = submitBtn.textContent;
      submitBtn.disabled = true;
      submitBtn.textContent = "Sending...";

      // Hide previous responses
      formResponse.className = "form-response";
      formResponse.style.display = "none";

      try {
        // Send form data to PHP handler
        const response = await fetch("contact-handler.php", {
          method: "POST",
          body: formData,
        });

        const data = await response.json();

        // Show response
        if (data.success) {
          formResponse.className = "form-response success";
          formResponse.textContent = data.message;
          formResponse.style.display = "block";
          contactForm.reset();
        } else {
          formResponse.className = "form-response error";
          formResponse.textContent = data.message;
          formResponse.style.display = "block";

          // Show field-specific errors if available
          if (data.errors) {
            let errorText = data.message + "\n";
            Object.values(data.errors).forEach((error) => {
              errorText += "• " + error + "\n";
            });
            formResponse.textContent = errorText;
          }
        }

        // Auto-hide success message after 5 seconds
        if (data.success) {
          setTimeout(() => {
            formResponse.style.display = "none";
          }, 5000);
        }
      } catch (error) {
        formResponse.className = "form-response error";
        formResponse.textContent =
          "An unexpected error occurred. Please try again.";
        formResponse.style.display = "block";
        console.error("Form submission error:", error);
      } finally {
        // Re-enable submit button
        submitBtn.disabled = false;
        submitBtn.textContent = originalText;
      }
    });
  }

  // ==================== ANIMATION ON SCROLL ====================
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  };

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = "1";
        entry.target.style.transform = "translateY(0)";
      }
    });
  }, observerOptions);

  // Observe elements
  const animatedElements = document.querySelectorAll(
    ".feature-card, .pricing-card"
  );
  animatedElements.forEach((el) => {
    el.style.opacity = "0";
    el.style.transform = "translateY(20px)";
    el.style.transition = "opacity 0.6s ease, transform 0.6s ease";
    observer.observe(el);
  });
});
