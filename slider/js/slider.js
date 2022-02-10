let currentSlide = 1;
let $slider = $(".slides");
let slideCount = $slider.children().length;
let slideTime = 2000;
let animationTime = 500;

// console.log(slideCount);

setInterval(() => {
    $slider.animate({
        marginLeft: '-900px'
    }, animationTime, function () {
        currentSlide++;
        if (currentSlide === slideCount) {
            currentSlide = 1;
            $(this).css("margin-left", "0");
        }
    });
}, slideTime);
