$( function() {

    $("#anim1btn").one("click", function() {
        $("#anim1 p").toggle("slow", function(){
            $("#anim1").prepend('<img src="img/paysage1.jpeg" alt="paysage">');

            $(this).animate({
                backgroundColor: "#fff",
                color: "#000",
                marginLeft: "50%"
            }, 2000);


        })
    });

    $("#anim2btn").one("click", function(){
        $("#anim2 p").attr("class", "col-sm-8 col-md-8 col-lg-8 col-xl-8").show("slow", function(){
            $(this).before('<p  class="col-sm-4 col-md-4 col-lg-4 col-xl-4">' +
                '<img src="img/paysage1.jpeg" alt="paysage">' +
                '</p>');
        })
    })
} );
