var x = document.getElementById("getLocationBtn");

$(document).ready(function() {
    x.click();
});

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function getLocationForLyft() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPositionLyft, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    var studioLocations = document.getElementsByClassName("studio-location");

    for(var i = 0; i < studioLocations.length; i++)
    {
        var location = studioLocations[i].innerText;
        location = location.replace(/\s+/g, '+');

        var mapUrl = "http://maps.googleapis.com/maps/api/geocode/json?address="+location+"&sensor=false";

        $.get(mapUrl, function(data, status){
            var lat = data.results[0].geometry.location.lat;
            var lng = data.results[0].geometry.location.lng;

            var p1 = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            var p2 = new google.maps.LatLng(lat, lng);

            var distance = Math.round(calcDistance(p1,p2) * 0.62) + " mi";

            var studioLocationDistanceEls = document.getElementsByClassName("studio-location-distance");

            for(var i = 0; i < studioLocationDistanceEls.length; i++) {
                if(studioLocationDistanceEls[i].innerText == ""){
                    studioLocationDistanceEls[i].innerText = distance;
                    break;
                }
            }

        });
    }

    //var latlon = position.coords.latitude + "," + position.coords.longitude;

    //var img_url = "http://maps.googleapis.com/maps/api/staticmap?center="
    //    +latlon+"&zoom=14&size=400x300&sensor=false";
    //document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}

function showPositionLyft(position) {
    var userLat = position.coords.latitude;
    var userLng = position.coords.longitude;

    var lyftApiUrl = "../../scripts/php/lyft_api.php?lat="+userLat+"&lng="+userLng;
    $.get(lyftApiUrl, function(data, status){
        debugger;
        alert(data);
    }

    //var studioLocations = document.getElementsByClassName("studio-location");


    //var latlon = position.coords.latitude + "," + position.coords.longitude;

    //var img_url = "http://maps.googleapis.com/maps/api/staticmap?center="
    //    +latlon+"&zoom=14&size=400x300&sensor=false";
    //document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}

//calculates distance between two points in km's
function calcDistance(p1, p2){
    return (google.maps.geometry.spherical.computeDistanceBetween(p1, p2) / 1000).toFixed(2);
}

function getLatLong(address){
    var geo = new google.maps.Geocoder;

    geo.geocode({'address':address},function(results, status){
        if (status == google.maps.GeocoderStatus.OK) {
            return results[0].geometry.location;
        } else {
            alert("Geocode was not successful for the following reason: " + status);
        }

    });

}

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    url = url.toLowerCase(); // This is just to avoid case sensitiveness
    name = name.replace(/[\[\]]/g, "\\$&").toLowerCase();// This is just to avoid case sensitiveness for query parameter name
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}