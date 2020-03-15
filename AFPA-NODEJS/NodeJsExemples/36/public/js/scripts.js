(function() {

    var form = document.querySelector("#form"),
        message = form.querySelector("input[type='text']");

    form.onsubmit = function(e) {

        e.preventDefault();

        if(message.value) {

            console.log(message.value);
            message.value = "";

        }

    };

})();