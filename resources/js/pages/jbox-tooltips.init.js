$(document).ready(function () {
    new jBox('Tooltip', {
        attach: '.tooltipMarcoSegundo',
        animation: {
            open: 'pulse',
            close: 'pulse'
        },
        position: {
            y: 'bottom'
        },
        width: 300,
        content: $('#conteudoMarcoSegundo'),
        footer: $('#footerMarcoSegundo'),
        closeOnMouseleave: true
    });

    new jBox('Tooltip', {
        attach: '.tooltipMarcoTerceiro',
        animation: {
            open: 'pulse',
            close: 'pulse'
        },
        position: {
            y: 'bottom'
        },
        width: 300,
        content: $('#conteudoMarcoTerceiro'),
        footer: $('#footerMarcoTerceiro'),
        closeOnMouseleave: true
    });

    new jBox('Tooltip', {
        attach: '.cardDescricaoRapida',
        animation: {
            open: 'pulse',
            close: 'pulse'
        },
        position: {
            x: 'middle',
            y: 'middle'
        },
        width: 150,
        content: $('#conteudoCardDescricaoRapida'),
        closeOnMouseleave: true
    });

});