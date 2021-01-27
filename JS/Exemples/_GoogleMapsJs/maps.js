
function initMap(listener) {
   // les coordonnées de Lievin
    let lievin = {
        lat : 50.4245,
        lng: 2.7738
    };

    let content = "<h5>Ville de Liévin</h5> <p>Rue Leon Blum</p><p>62100 Lievin</p>";

    let affichePlace = document.querySelector("#maps");

    let map = new google.maps.Map( affichePlace, {
            zoom: 13,
            center: lievin
        });


    let marker = new google.maps.Marker({
        position: lievin,
        map: map
    });

    let infos = new google.maps.InfoWindow({
        content: content,
        position: lievin
    });

   /* marker.addListener("click", function () {
        infos.open(map);
    });
    */
    marker.addListener("click", () => {
        infos.open(map);
    });

}

initMap();