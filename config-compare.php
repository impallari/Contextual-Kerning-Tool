<?php

# Load pair list for Font 1
include('pairs/librefranklin1013.php');
$font1_name = $font_name;
$pairs_lower_to_lower_font1 = $pairs_lower_to_lower;
$pairs_upper_to_upper_font1 = $pairs_upper_to_upper;
$pairs_upper_to_lower_font1 = $pairs_upper_to_lower;
sort($pairs_lower_to_lower_font1);
sort($pairs_upper_to_upper_font1);
sort($pairs_upper_to_lower_font1);
$none_pairs_font1 = array_merge($pairs_upper_to_lower_font1, $pairs_lower_to_lower_font1);	
unset($pairs_lower_to_lower);
unset($pairs_upper_to_upper);
unset($pairs_upper_to_lower);


# Load pair list for Font 2
include('pairs/others/retina.php');
$font2_name = $font_name;
$pairs_lower_to_lower_font2 = $pairs_lower_to_lower;
$pairs_upper_to_upper_font2 = $pairs_upper_to_upper;
$pairs_upper_to_lower_font2 = $pairs_upper_to_lower;
sort($pairs_lower_to_lower_font2);
sort($pairs_upper_to_upper_font2);
sort($pairs_upper_to_lower_font2);
$none_pairs_font1 = array_merge($pairs_upper_to_lower_font2, $pairs_lower_to_lower_font2);	
unset($pairs_lower_to_lower);
unset($pairs_upper_to_upper);
unset($pairs_upper_to_lower);

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

# Scope
$lowercase_all = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');						
$uppercase_all = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');		

echo '<p>Comparing Kerning Pais</p>';		
?>