/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************************!*\
  !*** ./resources/js/pages/iconColocacao.init.js ***!
  \**************************************************/
function iconColocacao() {
  // <!-- define cor da posição  -->
  var posicao = document.querySelectorAll(".iconePosicaoRanking");

  for (var i = 0; i < posicao.length; i++) {
    switch (posicao[i].innerText) {
      case "1º":
        posicao[i].classList.add("bg-success");
        break;

      case "2º":
        posicao[i].classList.add("bg-success");
        break;

      case "3º":
        posicao[i].classList.add("bg-success");
        break;

      case "4º":
        posicao[i].classList.add("bg-warning");
        break;

      case "5º":
        posicao[i].classList.add("bg-warning");
        break;

      case "6º":
        posicao[i].classList.add("bg-warning");
        break;

      default:
        posicao[i].classList.add("bg-danger");
        break;
    }
  }
}
/******/ })()
;