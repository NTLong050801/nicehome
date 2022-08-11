/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./Resources/assets/js/index.js":
/*!**************************************!*\
  !*** ./Resources/assets/js/index.js ***!
  \**************************************/
/***/ (() => {

$('input').click(function () {
  $('.list_search').css("display", "block");
});
$("body").click(function (e) {
  if (e.target.className !== "txt-search") {
    $('.list_search').css("display", "none");
  }
});
$(window).scroll(function () {
  if ($(this).scrollTop() < 10) {
    $('.upTop').hide();
  } else {
    $('.upTop').show();
  }
});
$('.tab3').click(function () {
  statusNav = 1;
  $('.second_header').css('width', '0px');
  checkWidth = $('.second_header').css('width');

  if (checkWidth == '0px') {
    $('.second_header').animate({
      width: "250px"
    }, 50);
    $('.second_header,.close-menu-bar').css("display", "block");
  }
});
$('.second_header nav ul li').click(function () {
  if ($(window).width() <= 768) {
    dropdown = $(this).children('.dropdown-content');
    checkDisblay = dropdown.css("display");

    if (checkDisblay == "none") {
      dropdown.css({
        "display": "block"
      }); // $('.second_header nav').css('overflow' ,'auto')
    } else {
      dropdown.css({
        "display": "none"
      });
    }
  } // $(this).children('.dropdown-content').css("display","block")

});
$('.close-menu-bar').click(function () {
  $('.second_header').animate({
    width: "100%"
  }, 500);
  $('.second_header ,.close-menu-bar').css("display", "none");
});
display_share = 0; // $(document).on('click','body',function(){
//   if(display_share == 1){
//     $('.display_share').css('display', "none")
//     display_share = 0;
//     console.log('123')
//   }
// })

$('.share_right').click(function () {
  $('.display_share').css('display', "flex");
}); // $("body").click(function (e) {
//   nameDiv = e.target.className;
// });

$(document).click(function (e) {
  // Đối tượng container chứa popup
  var container = $(".display_share"); // Nếu click bên ngoài đối tượng container thì ẩn nó đi

  if (!container.is(e.target) && container.has(e.target).length === 0) {
    container.hide();
  }

  if (container.is(e.target)) {
    $('.display_share').css('display', "flex");
  }
});

/***/ }),

/***/ "./Resources/assets/sass/style.scss":
/*!******************************************!*\
  !*** ./Resources/assets/sass/style.scss ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./Resources/assets/sass/design.scss":
/*!*******************************************!*\
  !*** ./Resources/assets/sass/design.scss ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./Resources/assets/sass/detail.scss":
/*!*******************************************!*\
  !*** ./Resources/assets/sass/detail.scss ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/index": 0,
/******/ 			"css/detail": 0,
/******/ 			"css/design": 0,
/******/ 			"css/style": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/detail","css/design","css/style"], () => (__webpack_require__("./Resources/assets/js/index.js")))
/******/ 	__webpack_require__.O(undefined, ["css/detail","css/design","css/style"], () => (__webpack_require__("./Resources/assets/sass/style.scss")))
/******/ 	__webpack_require__.O(undefined, ["css/detail","css/design","css/style"], () => (__webpack_require__("./Resources/assets/sass/design.scss")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/detail","css/design","css/style"], () => (__webpack_require__("./Resources/assets/sass/detail.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;