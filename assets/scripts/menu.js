$(function() {

  var controller = new ScrollMagic.Controller();
  controller.scrollTo(function (newScrollPos) {
    $("html, body").animate({scrollTop: newScrollPos});
});

  console.log($(window).innerHeight()/2);
	// build scenes
	new ScrollMagic.Scene({triggerElement: "#menu-toggle-indicator", offset: ($(window).innerHeight())/2 - 64})
					.setClassToggle("#top-nav", "white") // add class toggle
          .addIndicators()
					.addTo(controller);

  new ScrollMagic.Scene({triggerElement: "#nav-home-trigger", duration: $(".landing-home").height()})
					.setClassToggle("#nav-home", "active") // add class toggle
          .addIndicators()
					.addTo(controller);

  new ScrollMagic.Scene({triggerElement: "#nav-about-trigger", duration: $(".landing-about").height()})
					.setClassToggle("#nav-about", "active") // add class toggle
          .addIndicators()
					.addTo(controller);

  $(document).on("click", ".nav-item", function (e) {
		var id = $(this).attr("id");
    console.log('click', id);
    var triggerId = id + "-trigger";
			// trigger scroll
		controller.scrollTo("#" + triggerId);
	});
});
