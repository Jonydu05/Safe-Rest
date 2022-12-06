$(".carousel").slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 2000,
	infinite: true,
	adaptiveHeight: true,
	responsive: [
		{
			breakpoint: 1024,
			settings: {
				infinite: true,
			},
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			},
		},
	],
});
