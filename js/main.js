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

    mobileMenuBtn.addEventListener("click", function (e) {
      e.stopPropagation();
      toggleMenu();
    });

    const allLinks = document.querySelectorAll(".nav-links a");
    allLinks.forEach((link) => {
      link.addEventListener("click", function () {
        if (navLinks.classList.contains("active")) {
          toggleMenu();
        }
      });
    });

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
      { threshold: 0.1 }
    );
    videos.forEach((video) => videoObserver.observe(video));
  }

  // ==================== CARROSSEL FADE DE CLIENTES ====================
  function initClientesCarousel() {
    const cards = document.querySelectorAll(".cliente-card");
    const dotsContainer = document.getElementById("clientesDots");

    if (!cards.length || !dotsContainer) return;

    let currentIndex = 0;
    let autoPlayInterval;

    function createDots() {
      dotsContainer.innerHTML = "";
      cards.forEach((_, index) => {
        const dot = document.createElement("div");
        dot.classList.add("clientes-dot");
        if (index === currentIndex) dot.classList.add("active");
        dot.addEventListener("click", () => {
          showCard(index);
          resetAutoPlay();
        });
        dotsContainer.appendChild(dot);
      });
    }

    function showCard(index) {
      cards.forEach((card) => card.classList.remove("active"));
      cards[index].classList.add("active");
      currentIndex = index;

      const dots = document.querySelectorAll(".clientes-dot");
      dots.forEach((dot, i) => {
        dot.classList.toggle("active", i === currentIndex);
      });
    }

    function nextCard() {
      let nextIndex = currentIndex + 1;
      if (nextIndex >= cards.length) nextIndex = 0;
      showCard(nextIndex);
    }

    function startAutoPlay() {
      if (autoPlayInterval) clearInterval(autoPlayInterval);
      autoPlayInterval = setInterval(nextCard, 4000);
    }

    function resetAutoPlay() {
      clearInterval(autoPlayInterval);
      startAutoPlay();
    }

    createDots();
    showCard(0);
    startAutoPlay();
  }

  initClientesCarousel();
  // ==================== FIM DO CARROSSEL DE CLIENTES ====================
});

// ===== CARROSSEL INFINITO DE CLIENTES =====
function initCarrosselInfinito() {
  const track = document.querySelector(".carrossel-track");
  const carrossel = document.querySelector(".clientes-carrossel-infinito");

  if (!track || !carrossel) return;

  function ajustarVelocidade() {
    const largura = window.innerWidth;
    let velocidade = 30;
    if (largura <= 480) velocidade = 20;
    else if (largura <= 768) velocidade = 25;
    track.style.animationDuration = `${velocidade}s`;
  }

  ajustarVelocidade();
  window.addEventListener("resize", ajustarVelocidade);

  document.addEventListener("visibilitychange", function () {
    if (document.hidden) {
      track.style.animationPlayState = "paused";
    } else {
      track.style.animationPlayState = "running";
    }
  });
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initCarrosselInfinito);
} else {
  initCarrosselInfinito();
}

// ============================================
// MÍDIA KIT - ABRIR/FECHAR MODAL (ÚNICO BLOCO)
// ============================================
(function () {
  const btnMidiaKit = document.getElementById("btnMidiaKit");
  const modal = document.getElementById("midiaKitDropdown");
  const fecharBtn = document.getElementById("fecharMidiaKit");

  if (btnMidiaKit && modal) {
    btnMidiaKit.addEventListener("click", function (e) {
      e.preventDefault();
      modal.style.display = "flex";
    });

    if (fecharBtn) {
      fecharBtn.addEventListener("click", function () {
        modal.style.display = "none";
      });
    }

    modal.addEventListener("click", function (e) {
      if (e.target === modal) {
        modal.style.display = "none";
      }
    });

    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && modal.style.display === "flex") {
        modal.style.display = "none";
      }
    });
  }
})();

// CONSOLE WELCOME
console.log(
  "%c🚀 Capt Leads - Sua marca em movimento. Leads em tempo real!",
  "color: #10b981; font-size: 16px; font-weight: bold;"
);

// Dropdown dos botões de ação
(function() {
    const dropdown = document.querySelector('.nav-dropdown');
    const btn = document.getElementById('actionMenuBtn');

    if (dropdown && btn) {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            dropdown.classList.toggle('active');
        });

        // Fechar ao clicar fora
        document.addEventListener('click', function(e) {
            if (!dropdown.contains(e.target)) {
                dropdown.classList.remove('active');
            }
        });

        // Fechar ao pressionar ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && dropdown.classList.contains('active')) {
                dropdown.classList.remove('active');
            }
        });
    }
})();

// Clique na logo volta para o topo
const logo = document.querySelector('.logo');
if (logo) {
    logo.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}