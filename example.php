<?php

require_once 'alphager.class.php';
$ag = new alphager();


//use default base-characters
for($x=0; $x<=100; $x++) echo $x."\t\t".$ag->int2alpha($x)."\n";



//custom base-characters
$chars = array(
	'z','a','b','c','d','e','f','g','h','i','j','k','l',
	'm','n','o','p','q','r','s','t','u','v','w','x','y'
);

$ag = new alphager($chars);
for($x=0; $x<=100; $x++) echo $x."\t\t".$ag->int2alpha($x)."\n";

?>