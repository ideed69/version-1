<?php
	
	//Array Rujukan
	$result = array (//array pertama = pelajar
	"Riyad"=> array ('KPD4015'=>80,'SEJARAH'=>80, 'DISCRETE MATH'=>90, 'KPD4024'=>85, 'P.ISLAM'=>90),
	"Fahim"=> array ('KPD4014'=>90, 'SEJARAH'=>92, 'DISCRETE MATH'=>90, 'KPD4024'=>90, 'P.ISLAM'=>90),
	"Hamsyari"=> array ('KPD4014'=>70, 'SEJARAH'=>75, 'DISCRETE MATH'=>93, 'KPD4024'=>87, 'P.ISLAM'=>92),

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


	