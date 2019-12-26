$("document").ready(function() {

    let button = $("button");

    button.on("click", function(){

        $(".notempty").each(function(){

            let next = $(this).next();
            next.removeClass("d-none");

            if($(this)[0].value !== ""){
                next.toggleClass("d-none");
            }

        });

        let mdp = $("#password");
        let confmdp = $("#confirmPassword");
        let hidden = $(".hidden");
        hidden.removeClass("hidden");

        if(mdp[0].value === confmdp[0].value){
            $(".noshow").toggleClass("hidden");
        }
    });

});


