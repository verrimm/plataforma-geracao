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

var marcosMetaSegundo = document.querySelector(".marcosMetaSegundo");

if (marcosMetaSegundo) {
  marcosMetaSegundo.style.paddingLeft = marcosMetaSegundo.getAttribute("data-complete-meta") + "%";
  marcosMetaSegundo.style.opacity = 1;
}

var marcosMetaTerceiro = document.querySelector(".marcosMetaTerceiro");

if (marcosMetaTerceiro) {
  marcosMetaTerceiro.style.paddingLeft = marcosMetaTerceiro.getAttribute("data-complete-meta") + "%";
  marcosMetaTerceiro.style.opacity = 1;
}
/******/ })()
;