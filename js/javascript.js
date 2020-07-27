// set center position, this will be used in mapOptions
var locationWakefield = {
    lat: 53.68331,
    lng: -1.49768
}

// set map options
var mapOptions = {
    center: locationWakefield,
    zoom: 9,
    mapTypeId: "roadmap"
}

// create map
var map = new google.maps.Map(document.getElementById('googleMap'),mapOptions);

// create a DirectionsService object to use the route method and get a result for our request
var directionsService = new google.maps.DirectionsService();

// create a DirectionsRenderer object which we will use to display the route
var directionsDisplay = new google.maps.DirectionsRenderer();

// bind the DirectionsRenderer to the map
directionsDisplay.setMap(map);

// define calcRoute function
function calcRoute(){
    // create request
    var request = {
        origin: document.getElementById('from').value,
        destination: document.getElementById('to').value,
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.IMPERIAL
    }

    // pass the request to the route method
        directionsService.route(request,function (result,status) {
            // if status OK
            if(status == google.maps.DirectionsStatus.OK){

                // get distance and time
                var distance = result.routes[0].legs[0].distance.text;
                var duration = result.routes[0].legs[0].duration.text;
                var from = result.routes[0].legs[0].start_address;
                var to = result.routes[0].legs[0].end_address;

                // show this in output div
                var fullResult = "<div class='alert-warning'>From: " + from + ".<br />To: " + to + ".<br />" +
                    "Driving Distance: " + distance + ".<br />Duration: " + duration + ".</div>";
                $("#output").html(fullResult);

                // display route using DirectionsRenderer object
                directionsDisplay.setDirections(result);

            }else{ // if status not ok
                // delete route from map
                directionsDisplay.setDirections({
                    routes: []
                });

                // center map in Wakefield
                map.setCenter(locationWakefield);

                // show error message
                $("#output").html("<div class='alert-danger'>Could not retrieve driving distance.</div>");
            }
        });
}

// create autocomplete objects for all inputs
var options = {
    types: ['(cities)']
}

var input1 = document.getElementById('from');
var input2 = document.getElementById('to');

var autoComplete1 = new google.maps.places.Autocomplete(input1,options);
var autoComplete2 = new google.maps.places.Autocomplete(input2,options);