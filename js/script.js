
// Bulma Nav

document.addEventListener('DOMContentLoaded', function () {

  // Get all "navbar-burger" elements
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {

        // Get the target from the "data-target" attribute
        var target = $el.dataset.target;
        var $target = document.getElementById(target);

        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
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

});