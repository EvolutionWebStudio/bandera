
$(document).ready(function(){
    bindDefaultMap();

});

/**
 * Binding default map on element with id 'map'
 */
function bindDefaultMap()
{
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 7,
        center: new google.maps.LatLng(43.866218,17.325439),
            mapTypeId: google.maps.MapTypeId.ROADMAP
    });
}