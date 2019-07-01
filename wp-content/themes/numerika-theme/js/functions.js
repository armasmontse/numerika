/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "./js/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	var _constants = __webpack_require__(1);
	
	__webpack_require__(2);
	
	__webpack_require__(3);
	
	__webpack_require__(4);
	
	__webpack_require__(5);
	
	__webpack_require__(6);
	
	// import './active-menu-section'
	// import './masonry'
	// import './scrollit'
	
	_constants.w.load(function () {});
	
	(0, _constants.$)(document).ready(function () {
	    //console.log('Hello world from El Cultivo!')
	    new WOW().init();
	    //console.log(location.hash);
	});

/***/ }),
/* 1 */
/***/ (function(module, exports) {

	"use strict";
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	var $ = exports.$ = jQuery;
	var w = exports.w = $(window);

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

	"use strict";
	
	var _constants = __webpack_require__(1);
	
	(0, _constants.$)(document).ready(function () {
	
		// - - - M e n ú   r e s p o n s i v e - - -
		var btnAbrir = (0, _constants.$)(".header__menu.open");
		var btnCerrar = (0, _constants.$)(".header__menu.responsive-close");
		var menuMobile = (0, _constants.$)(".menu--mobile");
	
		// Abrir menu lateral
		btnAbrir.click(function () {
			// console.log('abre menu');
			btnAbrir.hide();
			btnCerrar.show();
			menuMobile.addClass('show');
		});
	
		// Cerrar menu lateral
		btnCerrar.click(function () {
			// console.log('cierra menu');
			btnCerrar.hide();
			btnAbrir.show();
			menuMobile.removeClass('show');
		});
	
		var x = window.matchMedia("(max-width: 850px)");
	
		function myFunction(x) {
	
			var topMenu = (0, _constants.$)("#menu-header-menu");
			var menuItems = topMenu.find("a");
	
			if (x.matches) {
				// If media query matches
				menuItems.click(function (e) {
					// var href = $(this);
					// console.log('clic que entra en if de menor de 850px');
					menuMobile.removeClass('show');
					btnCerrar.hide();
					btnAbrir.show();
				});
				// document.body.style.backgroundColor = "yellow";
			} else {
					// document.body.style.backgroundColor = "pink";
				}
		}
	
		myFunction(x); // Call listener function at run time
		x.addListener(myFunction); // Attach listener function on state changes
	});
	
	_constants.w.scroll(function () {
	
		(0, _constants.$)(".logo__imagen").animate({
			opacity: 1
		}, 4000);
	
		var intro = (0, _constants.$)('.intro').height();
		var scroll = (0, _constants.$)(window).scrollTop();
	
		// console.log(intro);
		// console.log(scroll);
	
		if (scroll >= intro) {
			(0, _constants.$)(".header-container").addClass("header-container-fixed");
			(0, _constants.$)(".about").css("margin-top", "50px");
		} else {
			(0, _constants.$)(".header-container").removeClass("header-container-fixed");
			(0, _constants.$)(".about").css("margin-top", "0px");
		}
	});

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	var _constants = __webpack_require__(1);
	
	_constants.w.load(function () {
	
		console.log('Hola Mundo Slider!');
	
		// Logos
		(0, _constants.$)('.logos__slider').slick({
			autoplay: true,
			prevArrow: (0, _constants.$)('.galeria-prev'),
			nextArrow: (0, _constants.$)('.galeria-next'),
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 4,
	
			responsive: [{
				breakpoint: 800,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			}, {
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}]
		});
	
		// Trayectoria
		(0, _constants.$)('.trayectoria__slider').slick({
			autoplay: true,
			prevArrow: (0, _constants.$)('.galeria-anterior'),
			nextArrow: (0, _constants.$)('.galeria-siguiente'),
			infinite: true,
			slidesToShow: 5,
			slidesToScroll: 1,
	
			responsive: [{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1
				}
			}, {
				breakpoint: 930,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			}, {
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}, {
				breakpoint: 650,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}]
		});
	});

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	var _constants = __webpack_require__(1);
	
	_constants.w.load(function () {
	
	    // Botón top
	    (0, _constants.$)('#nav_up').click(function (e) {
	        (0, _constants.$)('html, body').animate({ scrollTop: '0px' }, 2000);
	    });
	});

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	var _constants = __webpack_require__(1);
	
	_constants.w.load(function () {
	
	    var modalOpen = (0, _constants.$)('.modalOpen');
	
	    modalOpen.click(function () {
	        // console.log('click modal');
	
	        var modal = (0, _constants.$)('#modal');
	        modal.css('display', 'flex');
	
	        modal.click(function () {
	            modal.css('display', 'none');
	        });
	    });
	});

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	var _constants = __webpack_require__(1);
	
	_constants.w.load(function () {
	
	    // var menu = $("#menu-header-menu");
	    // var menuItems = menu.find("a");
	    // var allItems = menuItems.map(function(){
	    //     var itemMenu = $(this).attr("href");
	    //     // console.log(itemMenu);
	    //     if (itemMenu.length) {
	    //         return itemMenu;
	    //     }
	    // });
	
	    (0, _constants.$)('#link-planteamiento').click(function () {
	        var offset = (0, _constants.$)("#planteamiento").offset().top;
	        var offset = offset - 120;
	
	        (0, _constants.$)('html, body').animate({
	            scrollTop: offset
	        }, 2000);
	    });
	
	    (0, _constants.$)('#link-solucion').click(function () {
	        var offset = (0, _constants.$)("#solucion").offset().top;
	        var offset = offset - 120;
	
	        (0, _constants.$)('html, body').animate({
	            scrollTop: offset
	        }, 2000);
	    });
	
	    (0, _constants.$)('#link-resultados').click(function () {
	        var offset = (0, _constants.$)("#resultados").offset().top;
	        var offset = offset - 120;
	
	        (0, _constants.$)('html, body').animate({
	            scrollTop: offset
	        }, 2000);
	    });
	});

/***/ })
/******/ ]);
//# sourceMappingURL=functions.js.map