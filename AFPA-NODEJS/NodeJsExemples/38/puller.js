const EventEmitter = require("events");
const utils = require("util");

utils.inherits(Puller, EventEmitter);

function Puller(url) {

    EventEmitter.call(this);
    this.url = url;

    this.on("removeListener", function() {

        var number = this.listenerCount("data");

        if(number === 0) {
            clearInterval(this.interval);
        }

    });

}

Puller.prototype.pull = function() {

    var self = this;

    self.interval = setInterval(function() {

        self.emit("data", {
            data: "pobrane dane",
            url: self.url
        });

    }, 1000);

};

Puller.prototype.stop = function(cb) {

    this.removeListener("data", cb);

};

module.exports = Puller;