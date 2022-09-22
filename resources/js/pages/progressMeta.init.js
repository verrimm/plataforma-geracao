 function progressMeta(){
    
        const progress = document.querySelector(".js-completed-bar");
        if (progress) {
            progress.style.width = (progress.getAttribute("data-complete")-2) + "%";
            progress.style.opacity = 1;
        }

        const marcosMetaSegundo = document.querySelector(".marcosMetaSegundo");
        if (marcosMetaSegundo) {
            marcosMetaSegundo.style.paddingLeft = (marcosMetaSegundo.getAttribute("data-complete-meta")-2) + "%";
            marcosMetaSegundo.style.opacity = 1;
        }

        const marcosMetaTerceiro = document.querySelector(".marcosMetaTerceiro");
        if (marcosMetaTerceiro) {
            marcosMetaTerceiro.style.paddingLeft = (marcosMetaTerceiro.getAttribute("data-complete-meta")-4)+ "%";
            marcosMetaTerceiro.style.opacity = 1;
        }


}