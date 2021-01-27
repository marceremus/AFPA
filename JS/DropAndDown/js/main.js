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

// ou une autre version

/*
const list_items = document.querySelectorAll('.list-item');
const lists = document.querySelectorAll('.list');

let draggedItem = null;

for (let i = 0; i < list_items.length; i++) {
    const item = list_items[i];

    item.addEventListener('dragstart', function () {
        draggedItem = item;
        setTimeout(function () {
            item.style.display = 'none';
        }, 0)
    });

    item.addEventListener('dragend', function () {
        setTimeout(function () {
            draggedItem.style.display = 'block';
            draggedItem = null;
        }, 0);
    })

    for (let j = 0; j < lists.length; j ++) {
        const list = lists[j];

        list.addEventListener('dragover', function (e) {
            e.preventDefault();
        });

        list.addEventListener('dragenter', function (e) {
            e.preventDefault();
            this.style.backgroundColor = 'rgba(0, 0, 0, 0.2)';
        });

        list.addEventListener('dragleave', function (e) {
            this.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
        });

        list.addEventListener('drop', function (e) {
            console.log('drop');
            this.append(draggedItem);
            this.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
        });
    }
}
*/
