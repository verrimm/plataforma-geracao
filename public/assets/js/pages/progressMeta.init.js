/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************************!*\
  !*** ./resources/js/pages/progressMeta.init.js ***!
  \*************************************************/
var progress = document.querySelector(".js-completed-bar");

if (progress) {
  progress.style.width = progress.getAttribute("data-complete") + "%";
  progress.style.opacity = 1;
}
/******/ })()
;