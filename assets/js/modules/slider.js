import {Swiper, Pagination, Keyboard, Navigation, EffectCube} from 'swiper';
Swiper.use([Pagination, Keyboard, Navigation, EffectCube]);
function slider() {
    let swiper1 = new Swiper('.first', {
		loop: true,
		slidesPerView: 1,
		keyboard: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		}
    });
    let swiper2 = new Swiper('.second', {
		effect: 'cube',
		loop: true,
		grabCursor: true,
		keyboard: true,
		cubeEffect: {
			shadow: true,
			slideShadows: true,
			shadowOffset: 20,
			shadowScale: 0.94,
		},
		pagination: {
			el: '.swiper-pagination',
		},
	});
	let swiper3 = new Swiper('.third', {
		loop: true,
		slidesPerView: 3,
		keyboard: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			992: {
				slidesPerView: 3,
			},
			768: {
				slidesPerView: 1,
			},
			280: {
				slidesPerView: 1
			}
		}
    });
}
export default slider;