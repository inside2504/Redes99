$(function () {
    Map.options.scrollwheel = false; // Esto desaciva el zoom cuando se hace scroll
	Map.coords = {
		lat: 40.7091538,
		lng: -74.01432
	};
	Map.init( $$('#map'), function (map) {
		// Do something here whe your maps its loaded
	});
});