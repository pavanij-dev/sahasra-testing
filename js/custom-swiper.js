var swiper;

function initSwiper() {
  var screenWidth = window.innerWidth || document.documentElement.clientWidth;
  var direction = screenWidth <= 768 ? "horizontal" : "vertical";
  var slidesPerView = screenWidth <= 768 ? 3 : 4;
  
  swiper = new Swiper(".swiper-container", {
    direction: direction,
    slidesPerView: slidesPerView,
    spaceBetween: 10,
    mousewheel: true,
    speed: 10000, // Set the desired speed in milliseconds
    autoplay: {
      delay: 10000, // Autoplay delay in milliseconds
    },
    loop: false,
    cssMode: false,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    grabCursor: {
      cursor: "grab",
      grabbingCursor: "grabbing",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
}

// Initialize Swiper
initSwiper();

// Re-initialize Swiper on window resize
window.addEventListener("resize", function () {
//   swiper.destroy();

if (swiper && typeof swiper.destroy === 'function') {
  swiper.destroy(true, true); 
}
  initSwiper();
});

  
  
    // Auto change tabs every 3 seconds
    let balconyVeiwInterval = setInterval(function() {
      const activeTab = document.querySelector('.swiper-slide.active');
      const nextTab = activeTab.nextElementSibling || document.querySelector('.swiper-slide:first-child');
      const tabTrigger = new bootstrap.Tab(nextTab);
      tabTrigger.show();
  
      // Check if the next tab is the first tab
      if (nextTab === document.querySelector('.swiper-slide:first-child')) {
        // Wait for the tab transition to complete before resetting the slider position
        setTimeout(function() {
          swiper.slideTo(0, 0);
        }, 4000);
      }
    }, 8050);
  
      // Auto change tabs every 3 seconds
      setInterval(function() {
      const activeTab = document.querySelector('.balcony-gallery.active');
      const nextTab = activeTab.nextElementSibling || document.querySelector('.balcony-gallery:first-child');
      const tabTrigger = new bootstrap.Tab(nextTab);
      tabTrigger.show();
  
      // Check if the next tab is the first tab
      if (nextTab === document.querySelector('.balcony-gallery:first-child')) {
        // Wait for the tab transition to complete before resetting the slider position
        setTimeout(function() {
          swiper.slideTo(0, 0);
        }, 4000);
      }
    }, 8050);
    
        // Auto change tabs every 3 seconds
        setInterval(function() {
      const activeTab = document.querySelector('.club-house-gallery.active');
      const nextTab = activeTab.nextElementSibling || document.querySelector('.club-house-gallery:first-child');
      const tabTrigger = new bootstrap.Tab(nextTab);
      tabTrigger.show();
  
      // Check if the next tab is the first tab
      if (nextTab === document.querySelector('.club-house-gallery:first-child')) {
        // Wait for the tab transition to complete before resetting the slider position
        setTimeout(function() {
          swiper.slideTo(0, 0);
        }, 4000);
      }
    }, 8050);
     
        // Auto change tabs every 3 seconds
        setInterval(function() {
      const activeTab = document.querySelector('.exterior-gallery.active');
      const nextTab = activeTab.nextElementSibling || document.querySelector('.exterior-gallery:first-child');
      const tabTrigger = new bootstrap.Tab(nextTab);
      tabTrigger.show();
  
      // Check if the next tab is the first tab
      if (nextTab === document.querySelector('.exterior-gallery:first-child')) {
        // Wait for the tab transition to complete before resetting the slider position
        setTimeout(function() {
          swiper.slideTo(0, 0);
        }, 4000);
      }
    }, 8050);
    
          // Auto change tabs every 3 seconds
          setInterval(function() {
      const activeTab = document.querySelector('.landscape-gallery.active');
      const nextTab = activeTab.nextElementSibling || document.querySelector('.landscape-gallery:first-child');
      const tabTrigger = new bootstrap.Tab(nextTab);
      tabTrigger.show();
  
      // Check if the next tab is the first tab
      if (nextTab === document.querySelector('.landscape-gallery:first-child')) {
        // Wait for the tab transition to complete before resetting the slider position
        setTimeout(function() {
          swiper.slideTo(0, 0);
        }, 4000);
      }
    }, 6050);