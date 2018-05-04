

document.addEventListener('DOMContentLoaded', function () {
  
  // Bulma Nav

  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  if ($navbarBurgers.length > 0) {

    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {

        var target = $el.dataset.target;
        var $target = document.getElementById(target);

        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

  // Bulma modal

  jQuery("#showModal").click(function() {
    jQuery(".modal").addClass("is-active");
  });

  jQuery(".modal-close").click(function() {
    jQuery(".modal").removeClass("is-active");
    jQuery(".home-menu-modal").removeClass("is-active");
    jQuery(".home-cafe-modal").removeClass("is-active");
    jQuery(".home-rooms-mid-modal").removeClass("is-active");
    jQuery(".home-rooms-left-modal").removeClass("is-active");
    jQuery(".home-nest-right-modal").removeClass("is-active");
    jQuery(".home-nest-mid-modal").removeClass("is-active");
    jQuery(".restaurant-menu-modal").removeClass("is-active");
    jQuery(".restaurant-food-modal").removeClass("is-active");
    jQuery(".contact-map-modal").removeClass("is-active");
  });
  
  jQuery("#show-home-menu-modal").click(function() {
    jQuery(".home-menu-modal").addClass("is-active");
  });
  jQuery("#show-home-cafe-modal").click(function() {
    jQuery(".home-cafe-modal").addClass("is-active");
  });
  jQuery("#show-home-rooms-mid-modal").click(function() {
    jQuery(".home-rooms-mid-modal").addClass("is-active");
  });
  jQuery("#show-home-rooms-left-modal").click(function() {
    jQuery(".home-rooms-left-modal").addClass("is-active");
  });
  jQuery("#show-home-nest-right-modal").click(function() {
    jQuery(".home-nest-right-modal").addClass("is-active");
  });
  jQuery("#show-home-nest-mid-modal").click(function() {
    jQuery(".home-nest-mid-modal").addClass("is-active");
  });
  jQuery("#show-restaurant-menu-modal").click(function() {
    jQuery(".restaurant-menu-modal").addClass("is-active");
  });
  jQuery("#show-restaurant-food-modal").click(function() {
    jQuery(".restaurant-food-modal").addClass("is-active");
  });
  jQuery("#show-contact-map-modal").click(function() {
    jQuery(".contact-map-modal").addClass("is-active");
  });
  
  // Slick slider

  jQuery('.fade').slick({
    infinite: true,
    speed: 800,
    autoplaySpeed: 4000,
    fade: true,
    cssEase: 'linear',
    autoplay: true
  });

  jQuery('.carousel-content').slick({
    prevArrow:"<img class='a-left control-c prev slick-prev' src='../images/logo/clara_web.png'>",
    nextArrow:"<img class='a-right control-c next slick-next' src='../images/shoe_story/arrow-right.png'>"
  });
  
});