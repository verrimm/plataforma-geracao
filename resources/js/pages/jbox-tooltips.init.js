$(document).ready(function () {
    new jBox('Tooltip', {
        getTitle: 'data-jbox-title',
        attach: '.tooltipMarcoSegundo',
        animation: {
            open: 'pulse',
            close: 'flip'
        },
        position: {
            y: 'bottom'
        },
        width: 300,
        content: $('#conteudoMarcoSegundo')
    });

    new jBox('Tooltip', {
        getTitle: 'data-jbox-title',
        attach: '.tooltipMarcoTerceiro',
        animation: {
            open: 'pulse',
            close: 'flip'
        },
        position: {
            y: 'bottom'
        },
        width: 300,
        content: $('#conteudoMarcoTerceiro')
    });
});