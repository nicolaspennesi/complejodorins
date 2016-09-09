// CONTACT MAP

var PageContact = function() {

	var _init = function() {

		var mapbg = new GMaps({
			div: '#gmapbg',
			lat: -36.7215569,
			lng: -56.6778291,
			scrollwheel: false
		});


		mapbg.addMarker({
			lat: -36.7215569,
			lng: -56.6778291,
			title: 'Complejo Dorin\'s',
			infoWindow: {
				content: '<h3>Complejo Dorin\'s</h3><p>Av. Libertador San Martín 162, Mar de Ajó, Buenos Aires, Argentina</p>'
			}
		});
	}

    return {
        //main function to initiate the module
        init: function() {

            _init();

        }

    };
}();

$(document).ready(function() {
    PageContact.init();
});
