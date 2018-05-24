<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Usage of UTF8 strings</title>
</head>

<body>

<?php

	echo '<h1>Loaded PHP extensions:</h1>';

	$list = get_loaded_extensions(); 
	
	$list2 = array_map('strtolower',$list); 
	sort($list); 
	echo '<pre>'.print_r($list,true).'</pre>';


// tells to php that we will use utf-8 strings until the end of the script
mb_internal_encoding('UTF-8');

// tells to php that we will send utf-8 strings to the browser
mb_http_output('UTF-8');

// our test string utf-8
$string = 'Êl síla erin lû e-govaned vîn. æøå ';

// transform our string with a multibyte function
// Note how , for demonstrating purpouse, we cut the string in a non ASCII character
$string = mb_substr($string, 0, 35);
echo $string;
?>
</body>
</html>
