
$(document).ready(function(){

});

/**
 * Binding default map on element with id 'map'
 */
function embedMap(holderElementId, lattitude, longitude, zoom)
{
    var map = new google.maps.Map(document.getElementById(holderElementId), {
        zoom: zoom,
        center: new google.maps.LatLng(lattitude, longitude),
            mapTypeId: google.maps.MapTypeId.ROADMAP
    });
}