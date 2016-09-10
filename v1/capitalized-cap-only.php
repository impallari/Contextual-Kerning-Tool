<?php 
header("Content-type: text/html; charset=utf-8"); // UTF 8 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="author" content="Pablo Impallari www.impallari.com" />
<title>Capitalized only 1st pair kerned - Impallari Contextual Kerning Tool</title>
</head>

<body>
<h1>Capitalized: only 1st pair kerned</h1>
<?php 
#Edit the config.php file to select the font you want to kern and the dictionaries you want to use
include('config.php');												

# Parse Dictionary
$cleantext = preg_replace('/\s+/', ' ', ucwords(trim($text)));
$cleantext = explode( ' ', $cleantext );
$cleantext = array_unique( $cleantext );

foreach ($cleantext as $key => $word) {
	$pair_count = 0;
	foreach ($pairs_upper_to_lower as $key => $upperpair) {
		if (strpos($word, $upperpair) !== false) {
    	$pair_count = $pair_count + 1;
    	foreach ($pairs_lower_to_lower as $key => $lowepair) {
    		if (strpos($word, $lowepair) !== false) {
    			$pair_count = $pair_count + 1;
    		}
    	}
			if ($pair_count == 1) { 
				$resultado[] = array('par' => $upperpair, 'palabra' => $word, 'kerns' => $pair_count);
			}	
		}	
	}
}

function array_orderby() {
    $args = func_get_args();
    $data = array_shift($args);
    foreach ($args as $n => $field) {
        if (is_string($field)) {
            $tmp = array();
            foreach ($data as $key => $row)
                $tmp[$key] = $row[$field];
            $args[$n] = $tmp;
            }
    }
    $args[] = &$data;
    call_user_func_array('array_multisort', $args);
    return array_pop($args);
}

$resultado = array_orderby($resultado, 'par', SORT_ASC, 'kerns', SORT_DESC, 'palabra', SORT_ASC);
print '<p>Showing '.count($resultado).' capitalized words having kerning only in the first pair, the rest of the word uses spacing only.</p>';

print '<div>';
foreach ($resultado as $details) {
		print $details['palabra'].' ';
}
print '</div>';

//echo "<pre>";
//print_r($resultado);
//echo "</pre>";

?>
</body>
</html>