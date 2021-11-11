jQuery(function($) {
    "use strict";
    var fooday = window.fooday || {};
    fooday.map = function(){
    	var locations = [
	      ['New York', 40.712784, -74.005941, 1],
	      ['Coogee Beach', 40.735657, -74.172367, 2],
	    ];

	    if($("#map").length > 0){
	    	var map = new google.maps.Map(document.getElementById('map'), {
		      zoom: 10,
		      center: new google.maps.LatLng(40.712784, -74.005941),
		      mapTypeId: google.maps.MapTypeId.ROADMAP,
		      styles:[
					    {
					        "featureType": "water",
					        "elementType": "geometry",
					        "stylers": [
					            {
					                "color": "#e9e9e9"
					            },
					            {
					                "lightness": 17
					            }
					        ]
					    },
					    {
					        "featureType": "landscape",
					        "elementType": "geometry",
					        "stylers": [
					            {
					                "color": "#f5f5f5"
					            },
					            {
					                "lightness": 20
					            }
					        ]
					    },
					    {
					        "featureType": "road.highway",
					        "elementType": "geometry.fill",
					        "stylers": [
					            {
					                "color": "#ffffff"
					            },
					            {
					                "lightness": 17
					            }
					        ]
					    },
					    {
					        "featureType": "road.highway",
					        "elementType": "geometry.stroke",
					        "stylers": [
					            {
					                "color": "#ffffff"
					            },
					            {
					                "lightness": 29
					            },
					            {
					                "weight": 0.2
					            }
					        ]
					    },
					    {
					        "featureType": "road.arterial",
					        "elementType": "geometry",
					        "stylers": [
					            {
					                "color": "#ffffff"
					            },
					            {
					                "lightness": 18
					            }
					        ]
					    },
					    {
					        "featureType": "road.local",
					        "elementType": "geometry",
					        "stylers": [
					            {
					                "color": "#ffffff"
					            },
					            {
					                "lightness": 16
					            }
					        ]
					    },
					    {
					        "featureType": "poi",
					        "elementType": "geometry",
					        "stylers": [
					            {
					                "color": "#f5f5f5"
					            },
					            {
					                "lightness": 21
					            }
					        ]
					    },
					    {
					        "featureType": "poi.park",
					        "elementType": "geometry",
					        "stylers": [
					            {
					                "color": "#dedede"
					            },
					            {
					                "lightness": 21
					            }
					        ]
					    },
					    {
					        "elementType": "labels.text.stroke",
					        "stylers": [
					            {
					                "visibility": "on"
					            },
					            {
					                "color": "#ffffff"
					            },
					            {
					                "lightness": 16
					            }
					        ]
					    },
					    {
					        "elementType": "labels.text.fill",
					        "stylers": [
					            {
					                "saturation": 36
					            },
					            {
					                "color": "#333333"
					            },
					            {
					                "lightness": 40
					            }
					        ]
					    },
					    {
					        "elementType": "labels.icon",
					        "stylers": [
					            {
					                "visibility": "off"
					            }
					        ]
					    },
					    {
					        "featureType": "transit",
					        "elementType": "geometry",
					        "stylers": [
					            {
					                "color": "#f2f2f2"
					            },
					            {
					                "lightness": 19
					            }
					        ]
					    },
					    {
					        "featureType": "administrative",
					        "elementType": "geometry.fill",
					        "stylers": [
					            {
					                "color": "#fefefe"
					            },
					            {
					                "lightness": 20
					            }
					        ]
					    },
					    {
					        "featureType": "administrative",
					        "elementType": "geometry.stroke",
					        "stylers": [
					            {
					                "color": "#fefefe"
					            },
					            {
					                "lightness": 17
					            },
					            {
					                "weight": 1.2
					            }
					        ]
					    }
					]
		    });

			var mapOptions = {
	            scrollwheel: false,
	        };
	        map.setOptions(mapOptions);

		    var infowindow = new google.maps.InfoWindow();

		    var marker, i;

		    for (i = 0; i < locations.length; i++) {
		      marker = new google.maps.Marker({
		        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
		        map: map,
		        animation: google.maps.Animation.BOUNCE,
		        icon : "assets/images/map.png"
		      });

		      //marker.addListener('click', toggleBounce);

		      google.maps.event.addListener(marker, 'click', (function(marker, i) {
		        return function() {
		          infowindow.setContent(locations[i][0]);
		          infowindow.open(map, marker);
		        }
		      })(marker, i));
		    }

	    }
    }
 //    function toggleBounce() {
	//   if (marker.getAnimation() !== null) {
	//     marker.setAnimation(null);
	//   } else {
	//     marker.setAnimation(google.maps.Animation.BOUNCE);
	//   }
	// }
    $(document).ready(function(){
		fooday.map();
	});
})
