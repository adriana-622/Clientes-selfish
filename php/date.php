
<?php
date_default_timezone_set('America/Lima');
 #echo date('d/F/Y');
/*$numero_dia = date('N');*/
$dia = date('d');
$mes = date('m');
$año = date('Y');

$nombre_mes = array('01' => 'enero', '02' => 'febrero', '03' => 'marzo', '04' => 'abril', '05' => 'mayo', '06' => 'junio', '07' => 'julio', '08' => 'agosto', '09' => 'setiembre', '10' => 'octubre', '11' => 'noviembre', '12'=>'diciembre' );

/*$dias_semana = ['', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'viernes', 'Sábado', 'Domingo'];*/
/*$dias_semana [$numero_dia]. */

echo ''.$dia.' de '.$nombre_mes[$mes].' del '.$año.'';



?>
