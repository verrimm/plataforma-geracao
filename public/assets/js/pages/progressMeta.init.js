/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************************!*\
  !*** ./resources/js/pages/progressMeta.init.js ***!
  \*************************************************/
function progressMeta() {
  var progress = document.querySelector(".js-completed-bar");

  if (progress) {
    progress.style.width = progress.getAttribute("data-complete") - 2 + "%";
    progress.style.opacity = 1;
  }

  var marcosMetaSegundo = document.querySelector(".marcosMetaSegundo");

  if (marcosMetaSegundo) {
    marcosMetaSegundo.style.paddingLeft = marcosMetaSegundo.getAttribute("data-complete-meta") - 2 + "%";
    marcosMetaSegundo.style.opacity = 1;
  }

  var marcosMetaTerceiro = document.querySelector(".marcosMetaTerceiro");

  if (marcosMetaTerceiro) {
    marcosMetaTerceiro.style.paddingLeft = marcosMetaTerceiro.getAttribute("data-complete-meta") - 4 + "%";
    marcosMetaTerceiro.style.opacity = 1;
  } //  const progressIndicador = document.querySelector(".progressIndicador");
  //  if (progressIndicador) {
  //      progressIndicador.style.width = progressIndicador.getAttribute("data-complete") + "%";
  //      progressIndicador.style.opacity = 1;
  //  }
  //  META INDICADOR

}
/******/ })()
;