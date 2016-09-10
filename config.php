<?php

$font_name = "Libre Franklin v1013"; // Human readable name
include('pairs/librefranklin1013.php'); // Load pair list

# Select English dictionary
include ("dictionaries/english.php");
$text = $english;

# Select Spanish dictionary
# include ("dictionaries/spanish.php");
# $text = $spanish;

# Select Both dictionaries
# include ("dictionaries/english.php");
# include ("dictionaries/spanish.php");
# $text = $spanish.' '.$english;

# Sort Pairs
sort($pairs_lower_to_lower);
sort($pairs_upper_to_upper);
sort($pairs_upper_to_lower);	

# Merge special list containing U2L and L2L pairs (Used to detect capitalized words having spacing only)
$none_pairs = array_merge($pairs_upper_to_lower, $pairs_lower_to_lower);	

# Scope
$lowercase_all = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');						
$uppercase_all = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');	

echo '<p>Using Pair list for: <strong>'.$font_name.'</strong></p>';		
?>