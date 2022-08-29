var posicao = document.querySelectorAll(".iconePosicaoRanking")

for (var i = 0; i < posicao.length; i++) {
    switch (posicao[i].textContent) {
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