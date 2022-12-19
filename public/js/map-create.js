var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map-route'), {
        center: new google.maps.LatLng(55.74107, 27.14853), // Milltown
        zoom: 11,
        scrollwheel: false,
        draggable: true,
        navigationControl: false,
        streetViewControl: false,
        styles: [
            {
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#444444"
                    }
                ]
            },
            {
                "featureType": "administrative.country",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative.country",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "administrative.country",
                "elementType": "labels",
                "stylers": [
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "administrative.country",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#f2f2f2"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 45
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#99b8ce"
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "visibility": "on"
                    }
                ]
            }
        ],
        // only show roadmap type of map, and disable ability to switch to other type
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false
    });

    map.data.setControls(['Polygon']);
    map.data.setStyle({
        editable: true,
        draggable: true
    });
    bindDataLayerListeners(map.data);

    //load saved data




    google.maps.event.addDomListener(savebutton, 'click', function() {
        document.getElementById("points").value = "";
        var data = JSON.parse(polygon_data.get('geoData'));
        var points_data = data.features[0].geometry.coordinates[0];


        for (var i = 0; i < points_data.length; i++) {
            var latCoord = points_data[i][0];
            var lngCoord = points_data[i][1];
            if(i==0){
                document.getElementById("start_point").value = "";
                document.getElementById("start_point").value += lngCoord;
                document.getElementById("start_point").value += ", " + latCoord;
            }
            document.getElementById("points").value += lngCoord;
            document.getElementById("points").value += ", " + latCoord + "; ";

            if(i== points_data.length-1){
                document.getElementById("end_point").value = "";
                document.getElementById("end_point").value += lngCoord;
                document.getElementById("end_point").value += ", " + latCoord;
            }

        }
    });

}

let polygon_data = new Map();

// Apply listeners to refresh the GeoJson display on a given data layer.
function bindDataLayerListeners(dataLayer) {
    dataLayer.addListener('addfeature', savePolygon);
    dataLayer.addListener('removefeature', savePolygon);
    dataLayer.addListener('setgeometry', savePolygon);
}

function loadPolygons(map) {
    var data = JSON.parse(polygon_data.get('geoData'));

    map.data.forEach(function (f) {
        map.data.remove(f);
    });
    map.data.addGeoJson(data)
}



function savePolygon() {
    map.data.toGeoJson(function (json) {
        polygon_data.set('geoData', JSON.stringify(json));
    });
}



