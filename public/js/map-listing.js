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

	    }



        var place_block = [];

        places_data.forEach( place => {

            let place_code = `<div class="places-item" id="mattone_restaurant">`+
                `<img src="/public/storage/${place.images}" alt="">`+
                '<div class="places-item__info">'+
                '<span class="places-item__category">'+place.category+'</span>' +
                '<h3>'+place.name+'</h3>' +
                '<div class="places-item__meta">' +
                '<div class="places-item__reviews">' +
                '<span class="places-item__number">' +
                 place.rating+ '<i class="la la-star"></i>' +
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
            places_coords.push([places_data[i].id, place_block[i], parseFloat(places_data[i].coordinates.split(', ')[0]) ,parseFloat(places_data[i].coordinates.split(', ')[1]),z])

        }

	    var places_coords_hover = [];

        for (let i = 0; i < place_block.length; i++) {
        let z = i+1;
            places_coords_hover.push([places_data[i].id, place_block[i], parseFloat(places_data[i].coordinates.split(', ')[0]) ,parseFloat(places_data[i].coordinates.split(', ')[1]),z])

        }

	    function setRoute(map) {
            var directionsDisplay = new google.maps.DirectionsRenderer();
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
            });

        }

	    function setMarkers(map) {

            console.log(places_data);


            var mapker_icon = [];
            var mapker_icon_hover = [];
            places_data.forEach( place => {

                let place_mapker = {
                    url: '/images/icons/mapker/house.svg',
                    scaledSize: new google.maps.Size(36, 36),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(20, 10)
                };

                let place_mapker_hover = {
                    url: '/images/icons/mapker/house.svg',
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
	        console.log(elements);

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
