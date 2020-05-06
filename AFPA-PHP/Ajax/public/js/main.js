$(document).ready(function(){

    let divShowProdu = $("#showProduct");

    divShowProdu.hide();

    let voirPlusBtn = $(".voirPlus button");

    voirPlusBtn.on('click', function() {
        let id = this.id;

        $.ajax({
            url: "src/views/showProduct.php",
            method: "POST",
            dataType: "json",
            data: {
                "id": id
            },
            success: function (data) {
                divShowProdu.show();
                let blocShox = $("#blocShox #detail");

                let json = data[0];

                let results = ' <div class="col-12">' +
                    '<p><b>Nom : </b>'+ json.name +'</p></div><div class="col-3"><p><b>Description : </b>'+ json.description +'</p></div><div class="col-3"><p><b>Prix : </b>'+ json.price +' euros</p></div>';

                blocShox.html(results);
            }
        })
    })
})