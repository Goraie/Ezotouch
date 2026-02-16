document.addEventListener("DOMContentLoaded", function () {
  initCatalogSlider();

  window.addEventListener(
    "resize",
    debounce(function () {
      initCatalogSlider();
    }, 250),
  );
});

function initCatalogSlider() {
  if (window.innerWidth >= 1420) {
    const swiperEl = document.querySelector('[data-swiper="catalog"]');
    if (swiperEl && swiperEl.swiper) {
      swiperEl.swiper.destroy(true, true);
    }
    return;
  }

  const swiperEl = document.querySelector('[data-swiper="catalog"]');
  if (!swiperEl || swiperEl.swiper) return;

  const swiper = new Swiper(swiperEl, {
    loop: true,

    slidesPerView: "auto",

    centeredSlides: false,

    spaceBetween: 20,
    speed: 700,

    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    watchSlidesProgress: true,
    on: {
      init: function () {
        this.slides.forEach((slide) => {
          slide.style.width = "320px";
        });
      },
      slideChange: function () {
        this.slides.forEach((slide) => {
          slide.style.width = "320px";
        });
      },
    },

    breakpoints: {
      480: {
        spaceBetween: 20,
      },
      768: {
        spaceBetween: 24,
      },
    },
  });
}

function debounce(func, wait) {
  let timeout;
  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout);
      func(...args);
    };
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
  };
}

document.addEventListener("DOMContentLoaded", function () {
  const swiperEls = document.querySelectorAll(".swiper[data-list-cards]");

  swiperEls.forEach((swiperEl) => {
    if (!swiperEl || swiperEl.swiper) return;

    const wrap = swiperEl.closest(".list-cards__w");
    const prevBtn = wrap?.querySelector(".list-cards__arrow-prev");
    const nextBtn = wrap?.querySelector(".list-cards__arrow-next");

    if (!prevBtn || !nextBtn) return;

    const swiper = new Swiper(swiperEl, {
      loop: true,
      grabCursor: true,
      slidesPerView: 1.3,
      spaceBetween: 20,
      speed: 400,

      navigation: {
        nextEl: nextBtn,
        prevEl: prevBtn,
      },

      breakpoints: {
        480: {
          slidesPerView: 1.6,
          spaceBetween: 20,
        },
        768: {
          spaceBetween: 24,
          slidesPerView: 2,
        },
        1024: {
          spaceBetween: 24,
          slidesPerView: 3,
        },
        1420: {
          spaceBetween: 24,
          slidesPerView: 4,
        },
      },
    });
  });
});

// Space block GSAP animation (desktop only)
function initSpaceAnimation() {
  if (window.innerWidth <= 1024) {
    return null;
  }

  var heroSection = document.querySelector(".space");
  var container = document.querySelector(".space .container");
  var boxes = document.querySelectorAll(".space__card");
  var circ = document.querySelector(".space__cont-circ");

  if (!heroSection || !container || boxes.length === 0) {
    return null;
  }

  var centerX = container.offsetWidth / 2;
  var centerY = container.offsetHeight / 2;
  var diametr = container.offsetWidth;
  var radius = diametr / 2;
  var totalBoxes = boxes.length;
  var angleStep = 360 / totalBoxes;

  var baseAngles = [];

  boxes.forEach(function (box, i) {
    const angle = i * angleStep;
    baseAngles.push(angle);

    const rad = (angle * Math.PI) / 180;
    const x = centerX + radius * Math.cos(rad);
    const y = centerY + radius * Math.sin(rad);

    gsap.set(box, {
      x: x - box.offsetWidth / 2,
      y: y - box.offsetHeight / 2,
    });
  });

  var isAnimating = false;
  var rotationTimeline = null;

  function createAnimation() {
    if (rotationTimeline) {
      rotationTimeline.kill();
    }

    rotationTimeline = gsap.timeline({
      scrollTrigger: {
        trigger: heroSection,
        start: "top bottom",
        end: "bottom top",
        scrub: 1,
        toggleActions: "play none none reverse",
        onEnter: function () {
          isAnimating = true;
        },
        onLeave: function () {
          isAnimating = false;
        },
        onEnterBack: function () {
          isAnimating = true;
        },
        onLeaveBack: function () {
          isAnimating = false;
        },
      },
    });

    rotationTimeline.to(
      {},
      {
        duration: 1,
        onUpdate: function () {
          var progress = rotationTimeline.progress();

          var rotationAngle = progress * 30;

          boxes.forEach(function (box, i) {
            var currentAngle = baseAngles[i] + rotationAngle;
            var rad = (currentAngle * Math.PI) / 180;

            var x = centerX + radius * Math.cos(rad);
            var y = centerY + radius * Math.sin(rad);

            rotateCirc(currentAngle);

            gsap.set(box, {
              x: x - box.offsetWidth / 2,
              y: y - box.offsetHeight / 2,
            });
          });
        },
      },
    );
  }

  function rotateCirc(angle) {
    if (circ) {
      circ.style.transform =
        "translate(-50%, -50%) rotate(-" + angle / 2 + "deg)";
    }
  }

  createAnimation();

  return {
    destroy: function () {
      if (rotationTimeline) {
        rotationTimeline.kill();
        rotationTimeline = null;
      }
      boxes.forEach(function (box) {
        gsap.set(box, { clearProps: "x,y" });
      });
    },
  };
}

var spaceAnimationInstance = null;

function initSpaceAnimationWithDelay() {
  setTimeout(function () {
    if (spaceAnimationInstance) {
      spaceAnimationInstance.destroy();
      spaceAnimationInstance = null;
    }
    spaceAnimationInstance = initSpaceAnimation();
  }, 100);
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initSpaceAnimationWithDelay);
} else {
  initSpaceAnimationWithDelay();
}

var spaceResizeTimer;
window.addEventListener("resize", function () {
  clearTimeout(spaceResizeTimer);
  spaceResizeTimer = setTimeout(function () {
    if (spaceAnimationInstance) {
      spaceAnimationInstance.destroy();
      spaceAnimationInstance = null;
    }
    if (window.innerWidth > 1024) {
      spaceAnimationInstance = initSpaceAnimation();
    } else {
      var boxes = document.querySelectorAll(".space__card");
      boxes.forEach(function (box) {
        gsap.set(box, { clearProps: "x,y" });
      });
    }
  }, 250);
});

// Space block Swiper slider (mobile only)
function initSpaceSlider() {
  var spaceList = document.querySelector(".space__list.swiper");
  if (!spaceList) return;

  var isMobile = window.innerWidth <= 1024;
  var swiperInstance = spaceList.swiper;

  if (isMobile && !swiperInstance) {
    var boxes = document.querySelectorAll(".space__card");
    if (window.gsap) {
      boxes.forEach(function (box) {
        window.gsap.set(box, { clearProps: "x,y" });
      });
    }

    swiperInstance = new Swiper(spaceList, {
      loop: true,
      slidesPerView: "auto",
      centeredSlides: true,
      spaceBetween: 20,
      speed: 700,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      breakpoints: {
        480: {
          spaceBetween: 20,
        },
        768: {
          spaceBetween: 24,
        },
      },
    });
  } else if (!isMobile && swiperInstance) {
    swiperInstance.destroy(true, true);
    spaceList.swiper = null;
  }
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initSpaceSlider);
} else {
  initSpaceSlider();
}

var spaceSliderResizeTimer;
window.addEventListener("resize", function () {
  clearTimeout(spaceSliderResizeTimer);
  spaceSliderResizeTimer = setTimeout(function () {
    initSpaceSlider();
  }, 250);
});

function initIndividualSmoothAppear() {
  const config = {
    duration: 1,
    ease: "power2.out",
    scrollTrigger: {
      start: "top 75%",
      once: true,
      toggleActions: "play none none reverse",
    },
  };

  gsap.utils.toArray(".gsap-smooth").forEach((element) => {
    gsap.fromTo(
      element,
      {
        y: 30,
        opacity: 0,
      },
      {
        y: 0,
        opacity: 1,
        duration: config.duration,
        ease: config.ease,
        scrollTrigger: Object.assign({}, config.scrollTrigger, {
          trigger: element,
        }),
      },
    );
  });
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initIndividualSmoothAppear);
} else {
  initIndividualSmoothAppear();
}
