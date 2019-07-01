$(document).ready(function(){
    var tileOSM =L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png')
    
    var mymap= L.map('mymap',{center: [52.3289, 21.0], zoom: 10});
    mymap.addLayer(tileOSM);
    //funkcja do wyświetlania popup's
    function onEachFeature(feature, layer) {
    layer.bindPopup("<h2>Dane o obiekcie</h2>"
	+"Dane o obiekcie"+"<br/>"
	+"pole_tekstowe: "+feature.properties.pole_tekstowe+"<br/>" //sprawdzić nazwy zmiennej
	+"Współrzędne"+";<br/>"
	+"Długość:   "+feature.geometry.coordinates[0].toFixed(3)+" E<br/>"
	+"Szerokość: "+feature.geometry.coordinates[1].toFixed(3)+" N<br/>"
	+"<br/><input type='Button' value='modyfikuj' />");

}
                  

//Obsługa komunikacji z serwerem
$.ajax(
	{
	url:'query_load.php',
	success: function(response){
		//console.log(JSON.parse(response));
		a=JSON.parse(response);
		lyrTest = L.geoJSON(a, {onEachFeature:onEachFeature}).addTo(mymap);
	},
	error: function(xhr, status, error){
		console.log("error"+error);
	}}
  );
});
