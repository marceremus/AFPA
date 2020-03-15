
function getProducts() {

    let json = '';
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.status == 200 && xmlhttp.readyState == 4){
            json = xmlhttp.responseText;
            console.log(json);
        }
    };
    xmlhttp.open("GET","../../data.json",true);
    xmlhttp.send();
}
