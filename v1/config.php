<?php
# Select the font and the pair list you want to use
echo "<p>Using Pair list for: <strong>Libre Franklin</strong></p>";
include('pairs/librefranklin.php');

# Select the Dictionaries you want to use
include ("dictionaries/english.php");
$text = $english;

# include ("dictionaries/spanish.php");
# $text = $spanish;
# $text = $spanish.' '.$english;

# Consolidate Pairs
sort($pairs_lower_to_lower);
sort($pairs_upper_to_upper);
sort($pairs_upper_to_lower);	
?>