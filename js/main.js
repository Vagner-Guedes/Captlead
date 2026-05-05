// Aguarda o DOM estar totalmente carregado
document.addEventListener("DOMContentLoaded", function () {
  // PRELOADER
  const preloader = document.querySelector(".preloader");
  if (preloader) {
    setTimeout(() => {
      preloader.style.opacity = "0";
      setTimeout(() => {
        preloader.style.display = "none";
      }, 300);
    }, 500);
  }

  // HEADER SCROLL EFFECT
  const header = document.querySelector(".header");
  if (header) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 50) {
        header.classList.add("scrolled");
      } else {
        header.classList.remove("scrolled");
      }
    });
  }

  // ==================== MENU MOBILE CORRIGIDO ====================
  const mobileMenuBtn = document.querySelector(".mobile-menu");
  const navLinks = document.querySelector(".nav-links");

  if (mobileMenuBtn && navLinks) {
    // Função para abrir/fechar menu
    function toggleMenu() {
      navLinks.classList.toggle("active");
      const icon = mobileMenuBtn.querySelector("i");
      if (icon) {
        if (navLinks.classList.contains("active")) {
          icon.classList.remove("fa-bars");
          icon.classList.add("fa-times");
          document.body.style.overflow = "hidden";
        } else {
          icon.classList.remove("fa-times");
          icon.classList.add("fa-bars");
          document.body.style.overflow = "";
        }
      }
    }

    // Evento de clique no botão hambúrguer
    mobileMenuBtn.addEventListener("click", function (e) {
      e.stopPropagation();
      toggleMenu();
    });

    // Fechar menu ao clicar em qualquer link
    const allLinks = document.querySelectorAll(".nav-links a");
    allLinks.forEach((link) => {
      link.addEventListener("click", function () {
        if (navLinks.classList.contains("active")) {
          toggleMenu();
        }
      });
    });

    // Fechar menu ao clicar fora (apenas em mobile)
    document.addEventListener("click", function (e) {
      if (window.innerWidth <= 968) {
        if (
          navLinks.classList.contains("active") &&
          !navLinks.contains(e.target) &&
          !mobileMenuBtn.contains(e.target)
        ) {
          toggleMenu();
        }
      }
    });

    // Garantir que o menu feche ao redimensionar a tela para desktop
    window.addEventListener("resize", function () {
      if (window.innerWidth > 968 && navLinks.classList.contains("active")) {
        toggleMenu();
      }
    });
  }
  // ==================== FIM DO MENU MOBILE ====================

  // SMOOTH SCROLL
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    const href = anchor.getAttribute("href");
    if (href === "#" || href === "#contato") return;

    const target = document.querySelector(href);
    if (target) {
      anchor.addEventListener("click", function (e) {
        e.preventDefault();
        target.scrollIntoView({ behavior: "smooth", block: "start" });
      });
    }
  });

  // AOS INIT
  if (typeof AOS !== "undefined") {
    AOS.init({
      duration: 600,
      once: true,
      offset: 80,
      disable: false,
    });
  }

  // LAZY LOADING para vídeos
  const videos = document.querySelectorAll('video[loading="lazy"]');
  if (videos.length > 0 && window.IntersectionObserver) {
    const videoObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const video = entry.target;
            const source = video.querySelector("source");
            if (source && !video.src) {
              video.load();
            }
            videoObserver.unobserve(video);
          }
        });
      },
      { threshold: 0.1 },
    );
    videos.forEach((video) => videoObserver.observe(video));
  }
});

// CONSOLE WELCOME
console.log(
  "%c🚀 Capt Leads - Sua marca em movimento. Leads em tempo real!",
  "color: #10b981; font-size: 16px; font-weight: bold;",
);
