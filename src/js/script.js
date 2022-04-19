import jquery from "../../node_modules/jquery/dist/jquery.min";

const $totalSlides = jQuery("#js-total-slides");
const $currentSlide = jQuery("#js-current-slide");
const $sliderImages = jQuery("#js-slider-images");

$totalSlides.text(`/${$sliderImages.length}`);
jQuery("#js-slider-images").slick({
  prevArrow: jQuery("#js-arrow-prev"),
  nextArrow: jQuery("#js-arrow-next"),
  centerPadding: "60px",
});

const $testimonialNext = jQuery('#js-testimonial__arrow-next');
const $testimonialPrev = jQuery('#js-testimonial__arrow-prev');
jQuery('#js-testimonials-slider').slick( {
    prevArrow: $testimonialPrev,
    nextArrow: $testimonialNext
});