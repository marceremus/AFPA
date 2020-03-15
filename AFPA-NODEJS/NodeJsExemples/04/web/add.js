(function() {

    var message = "Moduł add.js dans le web";

    console.log(message);

    function add(n1, n2) {

        return n1 + n2;

    }

    window.add = add;

})();
