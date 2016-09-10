<?php 
header("Content-type: text/html; charset=utf-8"); // UTF 8 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="author" content="Pablo Impallari www.impallari.com" />
<title>Impallari Contextual Kerning Tool</title>
</head>

<body>

<table width="100%">
	<tr>
		<td style="padding: 20px;" align="center" colspan="6">
			<h1>Contextual Kerning Tool</h1>
			<?php 
			#Edit the config.php file to select the font you want to kern and the dictionaries you want to use
			include('config.php');
			?>
			<p><a href="lowercase.php"><?php echo count(array_unique($pairs_lower_to_lower)) ?> Lowercase pairs</a> - 
			<a href="uppercase.php"><?php echo count(array_unique($pairs_upper_to_upper)) ?> Uppercase pairs</a> - 
			<?php echo count(array_unique($pairs_upper_to_lower)) ?> Capitalized pairs</p>

			<?php 
			if ( count(array_unique($pairs_upper_to_lower)) != count($pairs_upper_to_lower) ) {
				echo '<p>Clean your list! Duplicated pairs: ';
				$anterior = '';
				foreach ($pairs_upper_to_lower as $key => $pair) {
					if ($anterior == $pair) print '<strong>'.$pair.'</strong> ';
					$anterior = $pair;
				}
				echo '</p>';				
			}
			?>
		</td>
	</tr>
	
	<tr>
		<td style="padding: 20px; white-space: nowrap" valign="top" align="right" width="50%" colspan="3">
			<?php
			echo '<p><strong>Kerned:</strong></p>';
			echo "<div>";
			foreach ($uppercase_all as $key => $first) {
				foreach ($lowercase_all as $key => $second) {
					if (in_array($first.$second, $pairs_upper_to_lower)) echo $first.$second." ";
				}
				echo "<br />";
			}
			echo "</div>";
			?>
		</td>
		<td style="padding: 20px; white-space: nowrap" valign="top" width="50%" colspan="3">
			<?php 
			echo '<p><strong>Not Kerned:</strong></p>';
			echo "<div>";
			foreach ($uppercase_all as $key => $first) {
				foreach ($lowercase_all as $key => $second) {
					if (!in_array($first.$second, $pairs_upper_to_lower)) echo $first.$second." ";
				}
				echo "<br />";
			}
			echo "</div>";
			?>		
		</td>
	</tr>
	
	<tr>
		<td style="padding: 20px;" valign="top" align="right" colspan="2" width="33%">
			<?php
			# Parse Dictionary
			$cleantext = preg_replace('/\s+/', ' ', ucwords(trim($text)));
			$cleantext = explode( ' ', $cleantext );
			$cleantext = array_unique( $cleantext );

			function array_orderby() {
				$args = func_get_args();
				$data = array_shift($args);
				foreach ($args as $n => $field) {
					if (is_string($field)) {
						$tmp = array();
						foreach ($data as $key => $row) $tmp[$key] = $row[$field];
						$args[$n] = $tmp;
					}
				}
				$args[] = &$data;
				call_user_func_array('array_multisort', $args);
				return array_pop($args);
			}
						
			foreach ($cleantext as $key => $word) {
				$pair_count = 0;
				foreach ($pairs_upper_to_lower as $key => $upperpair) {
					if (strpos($word, $upperpair) !== false) {
			    	$pair_count = $pair_count + 1;
			    	foreach ($pairs_lower_to_lower as $key => $lowepair) {
			    		if (strpos($word, $lowepair) !== false) $pair_count = $pair_count + 1;
			    	}
						if ($pair_count >= 5) $resultado_full_kerning[] = array('par' => $upperpair, 'palabra' => $word, 'kerns' => $pair_count);
					}	
				}
			}	
			$resultado_full_kerning = array_orderby($resultado_full_kerning, 'par', SORT_ASC, 'kerns', SORT_DESC, 'palabra', SORT_ASC);
			print '<p><strong>'.count($resultado_full_kerning).' words having 5 or more kerning pairs:</strong></p>';
			print '<div>';
			foreach ($resultado_full_kerning as $details) {
					print $details['palabra'].' ';
			}
			print '</div>';
			?>
		</td>
		<td style="padding: 20px;" valign="top" colspan="2" width="34%" align="center">
			<?php
			foreach ($cleantext as $key => $word) {
				$pair_count = 0;
				foreach ($pairs_upper_to_lower as $key => $upperpair) {
					if (strpos($word, $upperpair) !== false) {
			    	$pair_count = $pair_count + 1;
			    	foreach ($pairs_lower_to_lower as $key => $lowepair) {
			    		if (strpos($word, $lowepair) !== false) $pair_count = $pair_count + 1;
			    	}
						if ($pair_count == 1) $resultado_cap_only[] = array('par' => $upperpair, 'palabra' => $word, 'kerns' => $pair_count);
					}	
				}
			}
			$resultado_cap_only = array_orderby($resultado_cap_only, 'par', SORT_ASC, 'kerns', SORT_DESC, 'palabra', SORT_ASC);
			print '<p><strong>'.count($resultado_cap_only).' words having kerning in the first pair only:</strong></p>';
			
			print '<div>';
			foreach ($resultado_cap_only as $details) {
					print $details['palabra'].' ';
			}
			print '</div>';
			?>		
		</td>
		<td style="padding: 20px;" valign="top" colspan="2" width="33%">
			<?php 
			foreach ($cleantext as $key => $word) {
				$pair_count = 0;
				foreach ($none_pairs as $key => $pair) {
					if (strpos($word, $pair) !== false) $pair_count = $pair_count + 1;
				}
				if ($pair_count == 0) $resultado_spacing[] = $word;
			}
			sort($resultado_spacing);
			print '<p><strong>'.count($resultado_spacing).' words using spacing only:</strong></p>';
			print '<div>';
			foreach ($resultado_spacing as $key => $word) {
				print $word.' ';
			}
			print '</div>';
			?>	
		</td>		
	</tr>
</table>

</body>
</html>