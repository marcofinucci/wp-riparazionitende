// Mobile menu toggle
document.addEventListener("DOMContentLoaded", () => {
  const menuBtn = document.getElementById("mobile-menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");
  const menuIcon = document.getElementById("menu-icon-open");
  const closeIcon = document.getElementById("menu-icon-close");

  if (menuBtn && mobileMenu) {
    let closeTimer = null;

    const openMenu = () => {
      if (closeTimer) {
        clearTimeout(closeTimer);
        closeTimer = null;
      }
      mobileMenu.classList.remove("hidden");
      document.body.classList.add("overflow-hidden");
      requestAnimationFrame(() => mobileMenu.classList.add("is-open"));
      menuBtn.setAttribute("aria-expanded", "true");
      menuBtn.setAttribute("aria-label", "Chiudi menu");
      menuIcon?.classList.add("hidden");
      closeIcon?.classList.remove("hidden");
    };

    const closeMenu = () => {
      mobileMenu.classList.remove("is-open");
      document.body.classList.remove("overflow-hidden");
      menuBtn.setAttribute("aria-expanded", "false");
      menuBtn.setAttribute("aria-label", "Apri menu");
      menuIcon?.classList.remove("hidden");
      closeIcon?.classList.add("hidden");
      closeTimer = setTimeout(() => mobileMenu.classList.add("hidden"), 300);
    };

    menuBtn.addEventListener("click", () => {
      mobileMenu.classList.contains("is-open") ? closeMenu() : openMenu();
    });
    mobileMenu
      .querySelectorAll("a")
      .forEach((link) => link.addEventListener("click", closeMenu));
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && mobileMenu.classList.contains("is-open")) {
        closeMenu();
      }
    });
  }

  // Sticky header shadow on scroll
  const header = document.getElementById("site-header");
  if (header) {
    window.addEventListener(
      "scroll",
      () => {
        header.classList.toggle("shadow-lg", window.scrollY > 10);
      },
      { passive: true },
    );
  }

  // FAQ accordion
  document.querySelectorAll("[data-faq-trigger]").forEach((trigger) => {
    trigger.addEventListener("click", () => {
      const item = trigger.closest("[data-faq-item]");
      const content = item?.querySelector("[data-faq-content]");
      const icon = trigger.querySelector("[data-faq-icon]");
      if (!content) return;

      const isOpen = !content.classList.contains("hidden");
      // Close all
      document
        .querySelectorAll("[data-faq-content]")
        .forEach((c) => c.classList.add("hidden"));
      document
        .querySelectorAll("[data-faq-icon]")
        .forEach((i) => (i.style.transform = "rotate(0deg)"));
      // Open clicked (if was closed)
      if (!isOpen) {
        content.classList.remove("hidden");
        if (icon) icon.style.transform = "rotate(180deg)";
      }
    });
  });

  // Scroll reveal — rivela gli elementi .reveal quando entrano nel viewport
  const revealEls = document.querySelectorAll(".reveal");
  if (revealEls.length) {
    const prefersReduced = window.matchMedia(
      "(prefers-reduced-motion: reduce)",
    ).matches;

    if (prefersReduced || !("IntersectionObserver" in window)) {
      revealEls.forEach((el) => el.classList.add("is-visible"));
    } else {
      const observer = new IntersectionObserver(
        (entries, obs) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add("is-visible");
              obs.unobserve(entry.target);
            }
          });
        },
        { rootMargin: "0px 0px -10% 0px", threshold: 0.1 },
      );
      revealEls.forEach((el) => observer.observe(el));
    }
  }

  // Services dropdown (desktop) — hover su tutto il parent (incluso il ponte pt-3 verso il submenu)
  const servicesParent = document.getElementById("services-parent");
  const servicesBtn = document.getElementById("services-btn");
  const servicesMenu = document.getElementById("services-dropdown");
  const servicesChevron = document.getElementById("services-chevron");
  if (servicesParent && servicesBtn && servicesMenu) {
    const openServices = () => {
      servicesMenu.classList.remove("hidden");
      servicesBtn.setAttribute("aria-expanded", "true");
      servicesChevron?.classList.add("rotate-180");
    };
    const closeServices = () => {
      servicesMenu.classList.add("hidden");
      servicesBtn.setAttribute("aria-expanded", "false");
      servicesChevron?.classList.remove("rotate-180");
    };
    servicesParent.addEventListener("mouseenter", openServices);
    servicesParent.addEventListener("mouseleave", closeServices);
    servicesBtn.addEventListener("click", (e) => {
      e.preventDefault();
      servicesMenu.classList.contains("hidden")
        ? openServices()
        : closeServices();
    });
  }
});
