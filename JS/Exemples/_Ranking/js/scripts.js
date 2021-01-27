$(document).ready(function(){

    let stars = $("#rating .rating__star"),
        radios = $(":radio[name='rating']");

    // la fonction fn1 s'execute lorsque je me mets sur l'élément et la fonction fn2 lorsque je quitte l'élément
    //stars.hover(fn1, fn2)
    stars.hover(

        function(){

            let that = $(this);

            // addBack() pour la version JQ 3 avant il faut utiliser andSelf()
            that.prevAll().addBack().addClass("rating__star--hovered")

        },
        function(){
            let that = $(this);

            // addBack() pour la version JQ 3 avant il faut utiliser andSelf()
            that.prevAll().addBack().removeClass("rating__star--hovered")
        }
    )

    stars.on("click", function(){
        let that = $(this),
            index = that.index();

        // tous les éléments voisins
        that.siblings().removeClass("rating__star--selected");
        that.prevAll().addBack().addClass("rating__star--selected");

        radios.eq(index).prop("checked", true);

    })
});
