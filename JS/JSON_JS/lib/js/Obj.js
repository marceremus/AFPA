class Vehicule{
    constructor(longeur, poid, distance){
        this.longeur = longeur;
        this.poid = poid;
        this.distance = distance ? distance : 0;
    }

    toString(){
        return "This vehicule is " + this.longeur + " and his target is " + this.poid + " and his distance is " + this.distance + " m";
    }
}

class Car extends Vehicule{
    constructor(marque, couleur, longueur, poid, distance) {
        super(longueur, poid, distance);
        this.marque = marque;
        this.couleur = couleur;
    }

    rouler(vitesse, temps){
        return vitesse/60*temps;
    }
}

let veh1 = new Vehicule("40m", 40, 300);
let veh2 = new Vehicule("40m", 30);
console.log(veh1.longeur);
console.log(veh1.poid);
console.log(veh1.distance);
console.log(veh1.toString());

console.log(veh2.longeur);
console.log(veh2.poid);
console.log(veh2.distance);
console.log(veh2.toString());

let car1 = new Car("")
