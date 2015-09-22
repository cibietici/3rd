<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php

	echo '<h1>Loaded PHP extensions:</h1>';

	$list = get_loaded_extensions(); 
	
	$list2 = array_map('strtolower',$list); 
	sort($list); 
	echo '<pre>'.print_r($list,true).'</pre>';


// Comunica a PHP che useremo stringhe UTF-8 fino alla fine dello script
mb_internal_encoding('UTF-8');

// Comunica a PHP che invieremo stringhe UTF-8 al browser
mb_http_output('UTF-8');

// La nostra stringa UTF-8 di test
$string = 'Êl síla erin lû e-govaned vîn. æøå ';

// Trasforma la stringa in qualche modo con una funzione multibyte
// Nota come, a scopo dimostrativo, tagliamo la stringa a un carattere non ASCII
$string = mb_substr($string, 0, 35);
echo $string;
?>
</body>
</html>
