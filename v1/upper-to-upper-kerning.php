<?php 
header("Content-type: text/html; charset=utf-8"); // UTF 8 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="author" content="Pablo Impallari www.impallari.com" />
<title>Upper to Upper Kerned - Impallari Contextual Kerning Tool</title>
</head>

<body>
<h1>Upper to Upper: Kerning</h1>
<?php 
#Edit the config.php file to select the font you want to kern and the dictionaries you want to use
include('config.php');												

# Parse Dictionary
$cleantext = preg_replace('/\s+/', ' ', strtoupper(trim($text)));
$cleantext = explode( ' ', $cleantext );
$cleantext = array_unique( $cleantext );

foreach ($cleantext as $key => $word) {
	$pair_count = 0;
	foreach ($pairs_upper_to_upper as $key => $pair) {
		#Por Cada Par
		if (strpos($word, $pair) !== false) {
    	$pair_count = $pair_count + 1;
		}
	}
	if ($pair_count >= 5) { 
		$resultado[$word] = $pair_count;
	}
	
}

arsort($resultado);

print '<p>Showing '.count($resultado).' uppercase words having 5 or more kerning pairs each</p>';

print '<div>';
foreach ($resultado as $word => $pairsum) {
	print $word.' ';
}
print '</div>';

//echo "<pre>";
//print_r($resultado);
//echo "</pre>";

?>
</body>
</html>