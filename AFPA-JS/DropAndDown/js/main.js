const fill = document.querySelector(".fill");
const empties = document.querySelectorAll('.empty');

fill.addEventListener('dragstart', dragStart);
fill.addEventListener('dragend', dragEnd );

for(const emp of empties){
    emp.addEventListener('dragover', dragOwer);
    emp.addEventListener('dragenter', dragEnter);
    emp.addEventListener('dragleave', dragLeave);
    emp.addEventListener('drop', dragDrop);
}

function dragStart() {
    //console.log("dragStart");
    this.className += " hold";
    setTimeout(() =>
        (this.className = "invisible")
    , 50)
}

function dragEnd() {
    //console.log("dragEnd");
    this.className = 'fill';
}

function dragOwer(e) {
    //console.log("dragOver");
    e.preventDefault();
}

function dragEnter(e) {
    //console.log("dragEnter");
    e.preventDefault();
    this.className += ' hovered';
}

function dragLeave() {
   // console.log("gragLeave");
    this.className = 'empty';
}

function dragDrop() {
    //console.log("gragDrop");
    this.className = 'empty';
    this.append(fill);
}



