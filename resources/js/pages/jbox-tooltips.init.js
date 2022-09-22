$(document).ready(function () {
    // TOOLTIP PODIO META - INDEX
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
    //==========================//

    // TOOLTIP PODIO META - INDEX
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
    //==========================//
});