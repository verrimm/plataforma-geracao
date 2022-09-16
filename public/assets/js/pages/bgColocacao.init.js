/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************************!*\
  !*** ./resources/js/pages/bgColocacao.init.js ***!
  \************************************************/
var posicao = document.querySelector(".posicaoRanking");
var bgIndicador = document.querySelector(".bgIndicador");

switch (posicao.innerText) {
  case "1º":
    bgIndicador.classList.add("bg-ouro");
    break;

  case "2º":
    bgIndicador.classList.add("bg-prata");
    break;

  case "3º":
    bgIndicador.classList.add("bg-bronze");
    break;

  default:
    bgIndicador.classList.add("bg-ranking");
    break;
}
/******/ })()
;