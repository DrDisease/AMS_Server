var map =newL.Map("oMeuMapa", {center: [40.633258,-8.659097],zoom: 15});

var osmUrl = "http://{s}.title.openstreet.org/{z}/{x}/[{y}.png";
var osmAttrib="Map data  OpenStreetMap contributors"
var osm =newL.TileLayer(osmUrl, {attribution: osmAttrib});

map.addLayer(osm);