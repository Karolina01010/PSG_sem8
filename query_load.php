<?php
	require_once('connect.php'); //wykorzystane zostanie połączenie o parametrach komunikacji ustalonych w pliku connect.php
	//ten skrypt ma za zadanie pobrać dane z Bazy danych i sformatować je tak żeby wyszedł nam poprawny GEOJSON, który można użyć w leaflet

	$result = pg_query("SELECT id, pole_tekstowe, ST_AsGeoJSON(geometria ,5)  as geometria FROM public.tabela_testowa ORDER BY id ASC");

$tablica= pg_fetch_all($result);
$tablica_strukturaGeoJSON =[];

foreach($tablica AS $wiersz){
	$wiersz['geometria']=json_decode($wiersz['geometria']);
	$wiersz_GeoJSON = ["type"=>"Feature", "geometry"=>$wiersz['geometria'],"properties"=>$wiersz]; 
    array_push($tablica_strukturaGeoJSON, $wiersz_GeoJSON);
};

$tablica_kolekcja_obiektow = ["type"=>"FeatureCollection", "features"=>$tablica_strukturaGeoJSON];

echo json_encode($tablica_kolekcja_obiektow);

pg_close($polaczenie);

?>
