window.$ = require('jquery')

require('carousel-slider/dist/carousel.js')

if($(window).width() < 768) {
    const $carousel = $('.carousel')
    $carousel.each((index, el) => {
        if(el) {
            el.stackSlides()
        }
    })
}