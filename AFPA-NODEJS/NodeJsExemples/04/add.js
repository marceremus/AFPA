

    var message = "Moduł add.js dans le 04";

    console.log(message);

    function add(n1, n2) {
        return n1 + n2;
    }


    function multi(n1, n2) {
        return n1 * n2;
    }


    function division(n1, n2) {
        return n1 / n2;
    }

module.exports = {
        add: add,
        multi: multi,
        division: division
};
