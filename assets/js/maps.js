var $$ = function (e) { return document.querySelector(e); }
var extended = function (obj, functions) {
	obj = obj || this;
	for (var x in functions) obj[x] = functions[x];
	return obj;
};

var Map = {
	coords: {
		lat: 19.5297168,
		lng: -96.8978049,
	},
	options: {
		zoom: 14,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		streetViewControl: false,
		mapTypeControl: false,
	},
	map: null,
	init: function (domobj, callback) {
		var $this = this;
		$this.options.center = $this.coords;
		$this.map = new google.maps.Map(domobj, $this.options);
		callback($this);
	},
	refresh: function () {
		google.maps.event.trigger(maps.map, 'resize');
	},
	center: function (coords) {
		var $this = this;
		if (coords != null) {
			$this.map.panTo(coords);
		} else {
			$this.map.panTo(maps.coords);
		}
	},
	marker: {
		add: function (coords, opt) {
			var options = {
				position: coords,
				map: Map.map
			};
			options = extended(options, opt);
			var marker = new google.maps.Marker(options);
			return marker;
		}
	},
	geometry: {
		add: {
			circle: function (coords, radius, opt) {
				var options = {
					map: Map.map,
					center: coords,
					radius: radius,
					clickable: false,
					fillColor: '#00BFFF',
					fillOpacity: 0.15,
					strokeWeight: 0
				};
				options = extended(options, opt);
				var circle = new google.maps.Circle(options);
				return circle;
			}
		}
	}
};
