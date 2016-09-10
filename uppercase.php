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
		<td style="padding: 20px;" align="center" colspan="2">
			<h1>Contextual Kerning Tool</h1>
			<?php 
			#Edit the config.php file to select the font you want to kern and the dictionaries you want to use
			include('config.php');
			?>
			<p><a href="lowercase.php"> <?php echo count(array_unique($pairs_lower_to_lower)) ?> Lowercase pairs</a> - 
			<?php echo count(array_unique($pairs_upper_to_upper)) ?> Uppercase pairs - 
			<a href="capitalized.php"><?php echo count(array_unique($pairs_upper_to_lower)) ?> Capitalized pairs</a></p>
			
			<?php 
			if ( count(array_unique($pairs_upper_to_upper)) != count($pairs_upper_to_upper) ) {
				echo '<p>Clean your list! Duplicated pairs: ';
				$anterior = '';
				foreach ($pairs_upper_to_upper as $key => $pair) {
					if ($anterior == $pair) print '<strong>'.$pair.'</strong> ';
					$anterior = $pair;
				}
				echo '</p>';				
			}
			?>
			
		</td>
	</tr>

	<tr>
		<td style="padding: 20px; white-space: nowrap" valign="top" align="right" width="50%">
			<?php
			echo '<p><strong>Kerned:</strong></p>';
			echo "<div>";
			foreach ($uppercase_all as $key => $first) {
				foreach ($uppercase_all as $key => $second) {
					if (in_array($first.$second, $pairs_upper_to_upper)) echo $first.$second." ";
				}
				echo "<br />";
			}
			echo "</div>";
			?>
		</td>
		<td style="padding: 20px; white-space: nowrap" valign="top" width="50%">
			<?php 
			echo '<p><strong>Not Kerned:</strong></p>';
			echo "<div>";
			foreach ($uppercase_all as $key => $first) {
				foreach ($uppercase_all as $key => $second) {
					if (!in_array($first.$second, $pairs_upper_to_upper)) echo $first.$second." ";
				}
				echo "<br />";
			}
			echo "</div>";
			?>		
		</td>
	</tr>
	
	<tr>
		<td style="padding: 20px;" valign="top" align="right">
			<?php

			# Parse Dictionary
			$cleantext = preg_replace('/\s+/', ' ', strtoupper(trim($text)));
			$cleantext = explode( ' ', $cleantext );
			$cleantext = array_unique( $cleantext );
			
			foreach ($cleantext as $key => $word) {
				$pair_count = 0;
				foreach ($pairs_upper_to_upper as $key => $pair) {
					#Por Cada Par
					if (strpos($word, $pair) !== false) $pair_count = $pair_count + 1;
				}
				if ($pair_count >= 5) $resultado_kerned[$word] = $pair_count;
			}
			arsort($resultado_kerned);
			echo '<p><strong>'.count($resultado_kerned).' words having 5 or more kerning pairs:</strong></p>';
			print '<div>';
			foreach ($resultado_kerned as $word => $pairsum) {
				print $word.' ';
			}
			print '</div>';
			?>
		</td>
		<td style="padding: 20px;" valign="top">
			<?php
			foreach ($cleantext as $key => $word) {
				$pair_count = 0;
				foreach ($pairs_upper_to_upper as $key => $pair) {
					#Por Cada Par
					if (strpos($word, $pair) !== false) $pair_count = $pair_count + 1;
				}
				if ($pair_count == 0) $resultado_spacing[] = $word;
			}
			sort($resultado_spacing);
			echo '<p><strong>'.count($resultado_spacing).' words using spacing only:</strong></p>';			
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