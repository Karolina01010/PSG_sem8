<?php

    include("connect.php");
    $zmienna_1=$_POST['pole_formularz_1'];
    $zmienna_3=$_POST['pole_formularz_3'];
    $zmienna_4=$_POST['pole_formularz_4'];

    $zapytanie = pg_query("INSERT INTO public.tabela_testowa(
	pole_tekstowe, geometria)
	VALUES ('$zmienna_1', ST_GeomFromEWKT('SRID=4326; POINT($zmienna_3 $zmienna_4)'));");

    
    pg_close($polaczenie);

?>