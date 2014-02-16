/**
 * Created by Golub on 2/10/14.
 */
$(document).ready( function(){

    embedMapOnCreate('map', 43.866218, 17.325439, 7);

});
$('#Ad_city_ptt').change(function(){
    var city_id = $(this).val();
    getCityCoordinates(city_id);
});
function getCityCoordinates(city_id){

    $.getJSON('/city/getlocation/'+city_id, callbackFuncWithData);
    function callbackFuncWithData(data){
        embedMapOnCreate('map', data[0], data[1], parseInt(data[2]));
    }
}
function configureMap(data){
    console.log(data);
}

function embedMapOnCreate(holderElementId, lattitude, longitude, zoom)
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

    google.maps.event.addListener(marker, 'dragend', function (event) {
        document.getElementById("Ad_latitude").value = this.getPosition().lat();
        document.getElementById("Ad_longitude").value = this.getPosition().lng();
    });
}