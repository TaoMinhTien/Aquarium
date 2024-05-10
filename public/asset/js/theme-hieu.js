window.addEventListener("load", (event) => {
    var swiper = new Swiper(".mySwiper", {
        direction: "vertical",
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 5000,
        },
    });
  });
