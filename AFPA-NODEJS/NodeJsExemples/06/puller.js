const Event = require('events');
const utils = require('util');

// création de la nouvelle class
function Puller(url){
    // rapel du constructeur de l'objet Event
    Event.call(this);
    this.url = url;

    // ecoute de l'evenement removeListener; si data = 0 il stop la fonction interval
    this.on("removeListener", function(){
        var number = this.listenerCount("data");
        if(number == 0){
            clearInterval(this.interval);
        }
    })
}

// ajout de la function pull au prototype
Puller.prototype.pull = function(){
    // self doit etre utiliser car le this ne dirige pas sur la valeur de l'object
    var self = this;
    // self vient du constructeur
    self.interval = setInterval(function(){
        self.emit("data", {
            data: " et téléchargées",
            url : self.url
        });
    }, 1000)
};

Puller.prototype.stop = function(cb){
    this.removeListener("data", cb)
};

// heritage en js - heritage de la class EventEmiteur (Event ici)
utils.inherits(Puller, Event);

module.exports = Puller;
