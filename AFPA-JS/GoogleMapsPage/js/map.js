var map;
function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 50.4216003418, lng: 2.78478002548 },
        zoom: 12
    });
}