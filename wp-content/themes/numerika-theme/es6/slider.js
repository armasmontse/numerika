import {$, w} from './constants';

w.load(() => {

	console.log('Hola Mundo Slider!');

	// Logos
	$('.logos__slider').slick({
		autoplay: true,
        prevArrow: $('.galeria-prev'),
		nextArrow: $('.galeria-next'),
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 4,

		responsive: [
			{
			breakpoint: 800,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
				}
			},

			{
			breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				}
			},

		]
	});

	// Trayectoria
	$('.trayectoria__slider').slick({
		autoplay: true,
        prevArrow: $('.galeria-anterior'),
		nextArrow: $('.galeria-siguiente'),
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,

		responsive: [
			{
			breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
				}
			},

			{
			breakpoint: 930,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}
			},

			{
			breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				}
			},

			{
			breakpoint: 650,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
		]
	});
    
});