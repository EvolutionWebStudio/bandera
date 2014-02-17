/**
 * Created by Golub on 2/10/14.
 */
$(document).ready( function(){


});


function embedMapOnView(holderElementId, lattitude, longitude, zoom)
{
    var map = new google.maps.Map(document.getElementById(holderElementId), {
        zoom: zoom,
        center: new google.maps.LatLng(lattitude, longitude),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var myLatlng = new google.maps.LatLng(lattitude,longitude);
    var marker = new google.maps.Marker({
        draggable: true,
        position: myLatlng,
        map: map,
        title: "Your location"
    });
}