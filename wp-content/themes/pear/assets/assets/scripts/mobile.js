

$(function () { // wait for document ready
		// build scene

		if (!$('#iphone-trigger')[0]) {
			return;
		}

		var controller = new ScrollMagic.Controller();

		var viewVisible = 200;
		var viewTransition = 150;
		var baseOffset = 260;

		var sceneIphone = new ScrollMagic.Scene({triggerElement: "#iphone-trigger", duration: viewVisible * 6 + viewTransition * 5 , offset: baseOffset})
						.setPin("#iphone")
						.addTo(controller);

		var tween1_shot = new TimelineMax()
			.to(".shot-1", 0.1, {opacity: 0})
			.to(".shot-2", 0.1, {opacity: 1})

		var tween1_text = new TimelineMax()
			.to(".title-1", 0.1, {opacity: 0})
			.to(".title-2", 0.1, {opacity: 1});

		var tween2_shot = new TimelineMax()
			.to(".shot-2", 0.1, {opacity: 0})
			.to(".shot-3", 0.1, {opacity: 1})

		var tween2_text = new TimelineMax()
			.to(".title-2", 0.1, {opacity: 0})
			.to(".title-3", 0.1, {opacity: 1});

		var tween3_shot = new TimelineMax()
			.to(".shot-3", 0.1, {opacity: 0})
			.to(".shot-4", 0.1, {opacity: 1})

		var tween3_text = new TimelineMax()
			.to(".title-3", 0.1, {opacity: 0})
			.to(".title-4", 0.1, {opacity: 1});

		var tween4_shot = new TimelineMax()
			.to(".shot-4", 0.1, {opacity: 0})
			.to(".shot-5", 0.1, {opacity: 1})

		var tween4_text = new TimelineMax()
			.to(".title-4", 0.1, {opacity: 0})
			.to(".title-5", 0.1, {opacity: 1});

		var tween5_shot = new TimelineMax()
			.to(".shot-5", 0.1, {opacity: 0})
			.to(".shot-6", 0.1, {opacity: 1})

		var tween5_text = new TimelineMax()
			.to(".title-5", 0.1, {opacity: 0})
			.to(".title-6", 0.1, {opacity: 1});


		var shotTrans1_2 = new ScrollMagic.Scene({triggerElement: "#iphone-trigger", duration: viewTransition, offset: viewVisible * 1 + viewTransition * 0 + baseOffset })
						.setTween(tween1_shot)
						.addTo(controller);

		var textTrans1_2 = new ScrollMagic.Scene({triggerElement: "#iphone-trigger", duration: viewTransition, offset: viewVisible * 1 + viewTransition * 0 + baseOffset })
						.setTween(tween1_text)
						.addTo(controller);

		var shotTrans2_3 = new ScrollMagic.Scene({triggerElement: "#iphone-trigger", duration: viewTransition, offset: viewVisible * 2 + viewTransition * 1 + baseOffset})
						.setTween(tween2_shot)
						.addTo(controller);

		var textTrans2_3 = new ScrollMagic.Scene({triggerElement: "#iphone-trigger", duration: viewTransition, offset: viewVisible * 2 + viewTransition * 1 + baseOffset})
						.setTween(tween2_text)
						.addTo(controller);

		var shotTrans3_4 = new ScrollMagic.Scene({triggerElement: "#iphone-trigger", duration: viewTransition, offset: viewVisible * 3 + viewTransition * 2 + baseOffset})
					  .setTween(tween3_shot)
						.addTo(controller);

		var textTrans3_4 = new ScrollMagic.Scene({triggerElement: "#iphone-trigger", duration: viewTransition, offset: viewVisible * 3 + viewTransition * 2 + baseOffset})
						.setTween(tween3_text)
						.addTo(controller);

		var shotTrans4_5 = new ScrollMagic.Scene({triggerElement: "#iphone-trigger", duration: viewTransition, offset: viewVisible * 4 + viewTransition * 3 + baseOffset})
						.setTween(tween4_shot)
						.addTo(controller);

		var textTrans4_5 = new ScrollMagic.Scene({triggerElement: "#iphone-trigger", duration: viewTransition, offset: viewVisible * 4 + viewTransition * 3 + baseOffset})
						.setTween(tween4_text)
						.addTo(controller);

		var shotTrans5_6 = new ScrollMagic.Scene({triggerElement: "#iphone-trigger", duration: viewTransition, offset: viewVisible * 5 + viewTransition * 4 + baseOffset})
						.setTween(tween5_shot)
						.addTo(controller);

		var textTrans5_6 = new ScrollMagic.Scene({triggerElement: "#iphone-trigger", duration: viewTransition, offset: viewVisible * 5 + viewTransition * 4 + baseOffset})
						.setTween(tween5_text)
						.addTo(controller);


		// var sceneShot2 = new ScrollMagic.Scene({triggerElement: "#iphone-trigger", duration: 50, offset: 150})
		// 				.
		// 				.addTo(controller);


	});
