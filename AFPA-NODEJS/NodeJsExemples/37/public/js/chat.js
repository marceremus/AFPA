(function() {

    var socket = io.connect("http://localhost:8080");

    var joinForm = $("#join-form"),
        nick = $("#nick"),
        chatForm = $("#chat-form"),
        chatWindow = $("#chat-window"),
        chatMessage = $("#message");

    joinForm.on("submit", function(e) {

        e.preventDefault();

        var nickName = $.trim( nick.val() );

        if(nickName === "") {
            nick.addClass("invalid");
        } else {
            nick.removeClass("invalid");

            console.log(nickName);

            joinForm.hide();
            chatForm.show();
        }

    });

    chatForm.on("submit", function(e) {

        e.preventDefault();

        var message = $.trim( chatMessage.val() );

        if(message !== "") {
            console.log(message);
            chatMessage.val("");
        }

    });

})();