<?php 
header("Content-type: text/html; charset=utf-8"); // UTF 8 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="author" content="Pablo Impallari www.impallari.com" />
<title>Capitalized Spacing - Impallari Contextual Kerning Tool</title>
</head>

<body>
<h1>Capitalized: Spacing only</h1>
<?php 
#Edit the config.php file to select the font you want to kern and the dictionaries you want to use
include('config.php');		

# Merge special pair list containing U2L and L2L
$none_pairs = array_merge($pairs_upper_to_lower, $pairs_lower_to_lower);										

# Parse Dictionary
$cleantext = preg_replace('/\s+/', ' ', ucwords(trim($text)));
$cleantext = explode( ' ', $cleantext );
$cleantext = array_unique( $cleantext );

foreach ($cleantext as $key => $word) {
	$pair_count = 0;
	foreach ($none_pairs as $key => $pair) {
		if (strpos($word, $pair) !== false) {
    	$pair_count = $pair_count + 1;
		}
	}
	if ($pair_count == 0) { 
		$resultado[] = $word;
	}
}

sort($resultado);
print '<p>Showing '.count($resultado).' capitalized words using only spacing (no kerning pairs)</p>';

print '<div>';
foreach ($resultado as $key => $word) {
	print $word.' ';
}
print '</div>';

//echo "<pre>";
//print_r($resultado);
//echo "</pre>";

?>
</body>
</html>