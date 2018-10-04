<?php

//Array Jujukan
$result = array ( // array pertama = pelajar
	"Waqi" => array ('BM'=>80, 'BI'=>80, 'MATH'=>90, 'KPD4014'=>85, 'KPD4033'=>90),
	"Iqmal" => array ('BM'=>70, 'BI'=>75, 'MATH'=>92, 'KPD4014'=>87, 'KPD4033'=>91),
	"Anis" => array ('BM'=>90, 'BI'=>92, 'MATH'=>73, 'KPD4014'=>89, 'KPD4033'=>78),
	"Farhan" => array ('BM'=>60, 'BI'=>72, 'MATH'=>83, 'KPD4014'=>79, 'KPD4033'=>75),
	"Ellysa" => array ('BM'=>96, 'BI'=>92, 'MATH'=>93, 'KPD4014'=>82, 'KPD4033'=>76)
	);
foreach ($result as $pelajar => $value) {
{
	echo "Pelajar : ".$pelajar;
	echo "<br>";
} foreach ($value as $subjek => $rst)
{
	echo "Subjek : ".$subjek."Result : ".$rst;
	echo "<br>";

}	echo "-------------------------------------------------------------";
	echo "<br>";	
}
?>
	