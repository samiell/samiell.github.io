(function (namespace, $) {
	"use strict";

	var DemoPageMaps = function () {
		// Create reference to this instance
		var o = this;
		// Initialize app when document is ready
		$(document).ready(function () {
			o.initialize();
		});

	};
	var p = DemoPageMaps.prototype;

	// =========================================================================
	// MEMBERS
	// =========================================================================

	p.map = null;

	// =========================================================================
	// INIT
	// =========================================================================

	p.initialize = function () {
		this._initBasicMap();
		this._initMarkerMap();
		this._initPolygonMap();
		this._initNoControlMap();
	};

	// =========================================================================
	// BASIC MAP
	// =========================================================================

	p._initBasicMap = function () {
		if (typeof GMaps === 'undefined') {
			return;
		}
		if ($('#basic-map').length === 0) {
			return;
		}

		var basicMap = new GMaps({
			div: '#basic-map',
			lat: 52.376950,
			lng: 4.898365,
			zoom: 11
		});
	};

	// =========================================================================
	// MARKER MAP
	// =========================================================================

	p._initMarkerMap = function () {
		if (typeof GMaps === 'undefined') {
			return;
		}
		if ($('#marker-map').length === 0) {
			return;
		}

		var markerMap = new GMaps({
			div: '#marker-map',
			lat: 52.376950,
			lng: 4.898365,
			zoom: 11
		});

		markerMap.addMarker({
			lat: 52.37050,
			lng: 4.90454,
			title: 'Amsterdam',
			click: function (e) {
				alert('You clicked in this marker');
			}
		});
	};

		// =========================================================================
	// Route MAP
	// =========================================================================

	p._initMarkerMap = function () {
		if (typeof GMaps === 'undefined') {
			return;
		}
		if ($('#route-map').length === 0) {
			return;
		}

		var routeMap = new GMaps({
			div: '#route-map',
			lat: -12.088527520066453,
  			lng: -77.0241058385925,
			zoom: 11
		});

		var path = [
  			[-12.044012922866312, -77.02470665341184],
			[-12.05449279282314, -77.03024273281858],
			[-12.055122327623378, -77.03039293652341],
			[-12.075917129727586, -77.02764635449216],
			[-12.07635776902266, -77.02792530422971],
			[-12.076819390363665, -77.02893381481931],
			[-12.088527520066453, -77.0241058385925]
		];

		var pl = routeMap.drawPolyline({
		  path: path,
		  strokeColor: '#70df03',
		  strokeOpacity: 1,
		  strokeWeight: 10
		});

		routeMap.addMarker({
			lat: -12.044012922866312,
			lng: -77.02470665341184,
			title: 'Location',
			// click: function (e) {
			// 	alert('You clicked in this marker');
			// },
			infoWindow: {
				content:"Speed: 24m/s <br> Distance: 30km"
			}
		});
	};

	// =========================================================================
	// POLYGON MAP
	// =========================================================================

	p._initPolygonMap = function () {
		if (typeof GMaps === 'undefined') {
			return;
		}
		if ($('#polygon-map').length === 0) {
			return;
		}

		var polyMap = new GMaps({
			div: '#polygon-map',
			lat: -12.043333,
			lng: -77.028333
		});


		var path = [[-12.040397656836609, -77.03373871559225], [-12.040248585302038, -77.03993927003302], [-12.050047116528843, -77.02448169303511], [-12.044804866577001, -77.02154422636042]];

		polyMap.drawPolygon({
			paths: path, // pre-defined polygon shape
			strokeColor: '#BBD8E9',
			strokeOpacity: 1,
			strokeWeight: 3,
			fillColor: '#BBD8E9',
			fillOpacity: 0.6
		});
	};
	
	// =========================================================================
	// NO CONTROL MAP
	// =========================================================================

	p._initNoControlMap = function () {
		if (typeof GMaps === 'undefined') {
			return;
		}
		if ($('#no-control-map').length === 0) {
			return;
		}


		var noControlMap = new GMaps({
			div: '#no-control-map',
			lat: 52.376950,
			lng: 4.898365,
			zoom: 7,
			disableDefaultUI: true
		});
	};

	// =========================================================================
	namespace.DemoPageMaps = new DemoPageMaps;
}(this.materialadmin, jQuery)); // pass in (namespace, jQuery):
