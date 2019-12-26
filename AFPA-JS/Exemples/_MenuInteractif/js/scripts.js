$(document).ready(function(){

    function createContextMenu(c){
        let ul = $("<ul></ul>", {
            'id': "contextmenu",
            "class": "contextmenu",
            "css": {
                "display": "none"
            },
            on: {
                click: function(e){
                    e.stopPropagation();
                }
            }
        });

        $.each(c, function(key, val){

            let li = $("<li></li>", {
                "class": "contextmenu__item"
            });

            let a = $("<a></a>", {
                "class": "contextmenu__link",
                "text": key,
                "href": val
            });

            li.append(a).appendTo(ul);

        });

        $("body").append(ul);

        return ul;
    }

    let logo = $("#logo");
    let ul = null;

    let config = {
        "Logo dans le format SVG" : "#svg",
        "Logo dans le format PNG" : "#png",
        "Logo dans le format zip" : "#zip"
    };

    logo.on("contextmenu", function(e){
        e.preventDefault();

        ul = ul || createContextMenu(config);

        ul.css({
            "display": "block",
            top: e.pageY,
            left: e.pageX
        });
    });

    $("document").on("click", function(e){
        ul.css("display", "none");
    });

    /* ------------------------------------------------------------------- */

    $(".alert-danger").on("click", function(e) {

        e.preventDefault();

        let that = $(this);
            content = $("span");

        if (content.is(":hidden")) {
            content.show("slow");
            that.text("Voir moins");
        } else {
            content.hide("slow");
            that.text("Voir plus");
        }
    });

    $("#voir").on("click", function(){

        let hidden = $(this).prev(".hidden");

        hidden.slideToggle(400);

    });


    let button = $("#btnImage"),
        img = $("#anim img");

    button.on("click", function(){
        // img.animate({
        //     //"width": "toggle",
        //     "width": "+=100",
        //     "opacity": 1
        // }, 500)

        // img.fadeOut(1000, function(){
        //     $(this).addClass("fadded");
        // });

        $("#anim img").css("position", "relative").animate({
            left: "400px",
            opacity: 1
        },1000).toggle(3000)

    })

});
