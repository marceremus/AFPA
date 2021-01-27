class Category {
    tab = [];
    constructor(nomCat) {
        this.nomCat = nomCat;
    }

    addCategory(nomCat) {
        return {name: nomCat};
    }

    showAllCat(){
        let t = [];
        for(let i = 0; i < this.tab.length; i++){
            t.push(this.tab[i].name);
        }
        return t;
    }

    supCat(item){
        for( let i = this.tab.length; i--;){
            if ( this.tab[i].name === item){
                this.tab.splice(i, 1);
            }
        }
        return this.tab;
    }

    intoTab(nomCat){
        return this.tab.push(this.addCategory(nomCat));
    }

}

var t = new Category();
t.intoTab("toto0");
t.intoTab("toto1");
t.intoTab("toto11");
t.intoTab("toto22");


console.log(t.showAllCat());
t.supCat('toto1');
console.log(t.showAllCat());





