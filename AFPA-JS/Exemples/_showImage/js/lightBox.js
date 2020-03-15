//$(document).ready(function () {
(function($, window, document, undefinde){
    let win = $(window),
        doc = $(document);

    function createLightBox(){

        let lightbox = $("#lightbox");

        if(!lightbox.length){
            lightbox = $("<div></div>", {
                "id": "lightbox",
                "class": "lightbox"
            }).appendTo("body");

            let close = $("<span></span>", {
                "class": "lightbox__close",
                "on": {
                    "click": function(){
                        closeOverlay();
                        //closeLightBox();
                    }
                }
            });
            lightbox.append(close);
        }
        return lightbox;
    }

    function  closeOverlay(){
        let lightbox = $("#lightbox");
        let lightboxOverlay = $("#lightbox-overlay");
        lightboxOverlay.css({
            "display": "none"
        });
        lightbox.fadeOut(500);
    }

    function closeLightBox(){

        var lightbox = $("#lightbox");

        lightbox.fadeOut(500);
    }

    function resizeLightbox(){
        let overlay = createOverlay(),
            lightbox = createLightBox();

        overlay.css({
            "width": doc.width(),
            "height": doc.height()
        });

        let width = lightbox.outerWidth(),
            height = lightbox.outerHeight();

        lightbox.css({
            "width": width,
            "height": height,
            "top": (win.height() / 2) - (height / 2) + win.scrollTop(),
            "left": (win.width() / 2) - (width / 2) + win.scrollLeft()
        })
    }


    function createOverlay() {

        let overlay = $("#lightbox-overlay");

        if(!overlay.length){
            overlay = $("<div></div>", {
                "id": "lightbox-overlay",
                "class": "lightbox-overlay",
                "on": {
                    "click": function(){
                        closeOverlay();
                        closeLightBox();
                    }
                }
            }).appendTo("body");
        }

        return overlay;
    }

    function showOverlay(){

        let overlay = createOverlay();

        overlay.css({
            width: doc.width(),
            height: doc.height()
        });

        overlay.fadeIn(500);
    }

    function showLightBox(imgUrl){

        showOverlay();

        let lightbox = createLightBox();

        lightbox.css({
            "width": 500,
            "height": 400,
            "top": (win.height() / 2) + doc.scrollTop() - 200,
            "left": (win.width() / 2) + doc.scrollLeft() - 250
        });

        let img = $("<img>", {
            "class": "lightbox__img"
        });

        img.on("load", function(){

            lightbox.find("img").remove().end().append(img.hide());

            let width = img.width(),
                height= img.height();

            lightbox.animate({
                "width": width,
                "height": height,
                "top": (win.height() / 2) + doc.scrollTop() - (height/3),
                "left": (win.width() / 2) + doc.scrollLeft() - (width/2)
            }, 500, function(){
                img.fadeIn(500);
            });
        });

        img.attr("src", imgUrl);

        lightbox.fadeIn(500);
    }

    win.on("resize", resizeLightbox);

    doc.on("keyup", function(e){

        if(e.which === 27){ // 27 correspond au clavier ESC
            closeOverlay();
            closeLightbox();
        }
    });

    $.fn.lightBox = function(){
        return this.each(function(){

            let that = $(this),
                imgUrl = that.attr("href");

            that.on("click", function(e){
                e.preventDefault();
                showLightBox(imgUrl);
            })
        });
    }

})(jQuery, window, document);




















