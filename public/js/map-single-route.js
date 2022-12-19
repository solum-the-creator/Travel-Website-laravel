var markers = [];
function initMap() {


    var map = new google.maps.Map(document.getElementById('place-map-filter'), {
        mapTypeControl: false,
        zoom: 12,
        center: {lat: 55.70646237530721, lng: 27.088417985028613},
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

    });

    setMarkers(map);
    setRoute(map);
    setSpotRoute(map);
}


var place_block = [];

routes_data.forEach( place => {

    let place_code = `<div class="places-item" id="mattone_restaurant">`+
        `<img src="/public/storage/${place.images}" alt="">`+
        '<div class="places-item__info">'+
        '<span class="places-item__category">'+place.category+'</span>' +
        '<h3>'+place.name+'</h3>' +
        '<div class="places-item__meta">' +
        '<div class="places-item__reviews">' +
        '<span class="places-item__number">' +
        '4.8<i class="la la-star"></i>' +
        '</span>'+
        '</div>'+
        '<div class="places-item__currency">от '+place.price+' BYN</div>' +
        '</div>'+
        '</div>'+
        '</div>';

    place_block.push(place_code);
});











var places_coords = [];

for (let i = 0; i < place_block.length; i++) {
    let z= i+1;
    places_coords.push([routes_data[i].id, place_block[i], parseFloat(routes_data[i].start_point.split(', ')[0]) ,parseFloat(routes_data[i].start_point.split(', ')[1]),z])

}

var places_coords_hover = [];

for (let i = 0; i < place_block.length; i++) {
    let z = i+1;
    places_coords_hover.push([routes_data[i].id, place_block[i], parseFloat(routes_data[i].start_point.split(', ')[0]) ,parseFloat(routes_data[i].start_point.split(', ')[1]),z])

}





function setRoute(map) {


    routes_data.forEach(route_data => {
        var routePlanCoordinates = [];


        let start_point_lat = parseFloat(route_data.start_point.split(', ')[0]);
        let start_point_lng = parseFloat(route_data.start_point.split(', ')[1]);
        let start_point = { lat: start_point_lat, lng: start_point_lng };
        routePlanCoordinates.push(start_point);

        let strPoints = route_data.points.split("; ");

        for (let i =0; i<strPoints.length; i++){
            let point_lat = parseFloat(strPoints[i].split(', ')[0]);
            let point_lng = parseFloat(strPoints[i].split(', ')[1]);
            let point = { lat: point_lat, lng: point_lng };
            routePlanCoordinates.push(point);
        }

        let end_point_lat = parseFloat(route_data.end_point.split(', ')[0]);
        let end_point_lng = parseFloat(route_data.end_point.split(', ')[1]);
        let end_point = { lat: end_point_lat, lng: end_point_lng };
        routePlanCoordinates.push(end_point);
        console.log(strPoints);
        console.log(routePlanCoordinates);


        let color ='';
        if (route_data.category == "Пеший маршрут")
        {
            color = '#4F35A9';
        }
        else if (route_data.category == "Велосипедный маршрут")
        {
            color = '#21AC61';
        }
        else if (route_data.category == "Водный маршрут")
        {
            color = '#3F74DC';
        }

        var routePath = new google.maps.Polyline({
            path: routePlanCoordinates,
            geodesic: true,

            strokeColor: color,
            strokeOpacity: 1.0,
            strokeWeight: 4,
        });

        routePath.setMap(map);
    });


    /*var directionsDisplay = new google.maps.DirectionsRenderer();
    var directionsService = new google.maps.DirectionsService();
    directionsDisplay.setMap(map);
    directionsDisplay.setOptions( { suppressMarkers: true, suppressInfoWindows: true } );
    var start_point = new google.maps.LatLng(55.61279829691828, 27.071587263318825);
    var end_point = new google.maps.LatLng(55.74107, 27.14853);
    var request = {
        origin: start_point,
        destination: end_point,
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC,

        optimizeWaypoints: true,
        provideRouteAlternatives: true,
        avoidHighways: true,
        avoidTolls: true
    };
    directionsService.route(request, function(result, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(result);
            var routes = result.routes;
            var leg = routes[0].legs;
            var lenght = leg[0].distance.text;
            var duration = leg[0].duration.text;
        }
    });*/

}

var spot_block = [];

spots_data.forEach( spot => {

    let spot_code = `<div class="places-item" id="mattone_restaurant">`+
        `<img src="/public/storage/${spot.image}" alt="">`+
        '<div class="places-item__info">'+
        '<span class="places-item__category">'+spot.category+'</span>' +
        '<h3>'+spot.name+'</h3>' +
        '<div class="places-item__meta">' +
        '<div class="places-item__reviews">' +
        '<span class="places-item__number">' +
        '4.8<i class="la la-star"></i>' +
        '</span>'+
        '</div>'+
        '</div>'+
        '</div>'+
        '</div>';

    spot_block.push(spot_code);
});


var spots_coords = [];

for (let i = 0; i < spot_block.length; i++) {
    let z= i+1;
    spots_coords.push([spots_data[i].id, spot_block[i], parseFloat(spots_data[i].coordinates.split(', ')[0]) ,parseFloat(spots_data[i].coordinates.split(', ')[1]),z])

}

var spots_coords_hover = [];

for (let i = 0; i < spot_block.length; i++) {
    let z = i+1;
    spots_coords_hover.push([spots_data[i].id, spot_block[i], parseFloat(spots_data[i].coordinates.split(', ')[0]) ,parseFloat(spots_data[i].coordinates.split(', ')[1]),z])

}

console.log(spots_data);

function setSpotRoute(map) {

    var spot_mapker_icon = [];
    var spot_mapker_icon_hover = [];

    spots_data.forEach( spot => {

        let spot_mapker = {
            url: '/images/icons/mapker/beauty.svg',
            scaledSize: new google.maps.Size(36, 36),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(20, 10)
        };

        let spot_mapker_hover = {
            url: '/images/icons/mapker/beauty.svg',
            // This marker is 36 pixels wide by 36 pixels high.
            scaledSize: new google.maps.Size(46, 46),
            // The origin for this image is (0, 0).
            origin: new google.maps.Point(0, 0),
            // The anchor for this image is the base of the flagpole at (0, 46).
            anchor: new google.maps.Point(20, 20)
        };

        spot_mapker_icon.push(spot_mapker);
        spot_mapker_icon_hover.push(spot_mapker_hover);

    });

    for (let i = 0; i < spots_coords.length; i++) {
        spots_coords[ i ].push( spot_mapker_icon[i] );
    }

    for (let i = 0; i < spots_coords_hover.length; i++) {
        spots_coords_hover[ i ].push( spot_mapker_icon_hover[i] );
    }

    var shape = {
        coords: [1, 1, 1, 20, 18, 20, 18, 1],
        type: 'poly'
    };

    var elements = document.querySelectorAll(".place-hover");


    var mk = '';

    for (let i = 0; i < spots_coords.length; i++) {

        var beach = spots_coords[i];
        var contentString = '<div class="places-item" data-title="Mattone Restaurant" data-lat="-33.843205" data-lng="150.831925" data-index="1">'+
            '<img src="/images/listing/01.jpg" alt="">'+
            '<div class="places-item__info">'+
            '<span class="places-item__category">Name</span>' +
            '<h3>Category</h3>' +
            '<div class="places-item__meta">' +
            '<div class="places-item__reviews">' +
            '<span class="places-item__number">' +
            '4.8<i class="la la-star"></i>' +
            '<span class="places-item__count">(9 reviews)</span>' +
            '</span>'+
            '</div>'+
            '<div class="places-item__currency">$$</div>' +
            '</div>'+
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        var marker = new google.maps.Marker({
            position: {lat: beach[2], lng: beach[3]},
            map: map,
            icon: beach[5],
            shape: shape,
            title: beach[0],
            zIndex: beach[4]
        });
        marker.data = spots_coords[i];
        marker.addListener('click', function() {
            infowindow.setContent("<div id='infowindow'>"+ this.data[1] +"</div>");
            infowindow.open(map, this);
        });

        markers[marker.title] = marker;

        mk = marker.title;

    }

    /*elements.forEach(function(element) {
        element.addEventListener("mouseenter", function() {
            for (var i = 0; i < spots_coords_hover.length; i++) {
                var bh = spots_coords_hover[i];
                if (element.dataset.maps_name == bh[0]) {
                    markers[element.dataset.maps_name].setIcon(bh[5]);
                }
            }

        });
        element.addEventListener("mouseleave", function() {
            for (var i = 0; i < spots_coords.length; i++) {
                var b = spots_coords[i];
                if (element.dataset.maps_name == b[0]) {
                    markers[element.dataset.maps_name].setIcon(b[5]);
                }
            }
            // closeLastOpenedInfoWindow();
        });
    });*/

}

function setMarkers(map) {



    var mapker_icon = [];
    var mapker_icon_hover = [];
    routes_data.forEach( place => {
        let url ='';
        if (place.category == "Пеший маршрут")
        {
            url = '/images/icons/mapker/walk.svg';
        }
        else if (place.category == "Велосипедный маршрут")
        {
            url = '/images/icons/mapker/bycicle.svg';
        }
        else if (place.category == "Водный маршрут")
        {
            url = '/images/icons/mapker/water.svg';
        }
        let place_mapker = {
            url: url,
            scaledSize: new google.maps.Size(36, 36),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(20, 10)
        };

        let place_mapker_hover = {
            url: url,
            // This marker is 36 pixels wide by 36 pixels high.
            scaledSize: new google.maps.Size(46, 46),
            // The origin for this image is (0, 0).
            origin: new google.maps.Point(0, 0),
            // The anchor for this image is the base of the flagpole at (0, 46).
            anchor: new google.maps.Point(20, 20)
        };

        mapker_icon.push(place_mapker);
        mapker_icon_hover.push(place_mapker_hover);

    });



    for (let i = 0; i < places_coords.length; i++) {
        places_coords[ i ].push( mapker_icon[i] );
    }

    for (let i = 0; i < places_coords_hover.length; i++) {
        places_coords_hover[ i ].push( mapker_icon_hover[i] );
    }

    var shape = {
        coords: [1, 1, 1, 20, 18, 20, 18, 1],
        type: 'poly'
    };

    var elements = document.querySelectorAll(".place-hover");


    var mk = '';

    for (let i = 0; i < places_coords.length; i++) {
        var beach = places_coords[i];
        var contentString = '<div class="places-item" data-title="Mattone Restaurant" data-lat="-33.843205" data-lng="150.831925" data-index="1">'+
            '<img src="/images/listing/01.jpg" alt="">'+
            '<div class="places-item__info">'+
            '<span class="places-item__category">Restaurant</span>' +
            '<h3>Mattone Restaurant</h3>' +
            '<div class="places-item__meta">' +
            '<div class="places-item__reviews">' +
            '<span class="places-item__number">' +
            '4.8<i class="la la-star"></i>' +
            '<span class="places-item__count">(9 reviews)</span>' +
            '</span>'+
            '</div>'+
            '<div class="places-item__currency">$$</div>' +
            '</div>'+
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        var marker = new google.maps.Marker({
            position: {lat: beach[2], lng: beach[3]},
            map: map,
            icon: beach[5],
            shape: shape,
            title: beach[0],
            zIndex: beach[4]
        });
        marker.data = places_coords[i];
        marker.addListener('click', function() {
            infowindow.setContent("<div id='infowindow'>"+ this.data[1] +"</div>");
            infowindow.open(map, this);
        });

        markers[marker.title] = marker;

        mk = marker.title;

    }

    elements.forEach(function(element) {
        element.addEventListener("mouseenter", function() {
            for (var i = 0; i < places_coords_hover.length; i++) {
                var bh = places_coords_hover[i];
                if (element.dataset.maps_name == bh[0]) {
                    markers[element.dataset.maps_name].setIcon(bh[5]);
                }
            }

        });
        element.addEventListener("mouseleave", function() {
            for (var i = 0; i < places_coords.length; i++) {
                var b = places_coords[i];
                if (element.dataset.maps_name == b[0]) {
                    markers[element.dataset.maps_name].setIcon(b[5]);
                }
            }
            // closeLastOpenedInfoWindow();
        });
    });
}
