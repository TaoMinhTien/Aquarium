window.addEventListener("load", (event) => {
    console.log('loadd');
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
        // zoom: {
        //     maxRatio: 2,
        //     minRation: 1
        // },
    });
  });



/*
swiper.on("slideChangeTransitionStart", swiper.zoom.out);
swiper.on("slideChangeTransitionEnd", swiper.zoom.in);
*/