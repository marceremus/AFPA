$(document).ready(function(){

    let divShowProdu = $("#showProduct");

    divShowProdu.hide();

    let voirPlusBtn = $(".voirPlus button");

    voirPlusBtn.on('click', function() {
        let id = this.id;

        $.ajax({
            url: "src/views/showProduct.php",
            //type: "POST",
            method: "POST",
            //dataType: "html",
            data: {
                "id": id
            },
            success: function (data, status) {
                divShowProdu.show();
                let blocShox = $("#blocShox");

                var result = $.getJSON(data.responseText); // c'est ici que ça plante. Uncaught SyntaxError: Unexpected token s in J
                if (result.success) {
                    console.log(data.responseText);
                                    let json = $.getJSON(data.responseText);
                                    console.log(json);
                }
                else {
                    console.log("erreur")
                }


                /*
                                let results = ' <div class="col-3">' +
                                    '<p>Nom : '+ data.name +'</p>' +
                                    '</div>' +
                                    '<div class="col-3">' +
                                    '<p>Description : '+ data.description +'</p>' +
                                    '</div>' +
                                    '<div class="col-3">' +
                                    '<p>Prix : '+ data.price +'</p>' +
                                    '</div>';
                                blocShox.html = results;
                */
            },
            error: function(){
                console.log("erreur")
            }
        })
    })
})