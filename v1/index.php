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

<table>
	<tr>
		<td style="padding: 20px;">
			<h1>Contextual Kerning Tool</h1>
			<?php 
			#Edit the config.php file to select the font you want to kern and the dictionaries you want to use
			include('config.php');	
			?>
		</td>
	</tr>
</table>

<hr />

<table>
	<tr>
		<td valign="top">
			<!-- Lower to Lower -->
			<?php
			echo '<table>';
				echo '<tr>';
					echo '<td colspan="2" style="padding: 20px;" valign="top">';
						echo '<p><strong>All Lowercase:</strong><br />';
						echo count($pairs_lower_to_lower).' pairs<br />';
						echo 'Words having <a href="lower-to-lower-kerning.php" target="_blank">5 or more kerning pairs</a><br />';	
						echo 'Words using <a href="lower-to-lower-spacing.php" target="_blank">spacing only</a><br />&nbsp;</p>';
					echo '</td>';
				echo '</tr>';
				echo '<tr>';
					echo '<td style="padding: 20px;" valign="top">';
						echo '<p>';
						$anterior = '';
						foreach ($pairs_lower_to_lower as $key => $pair) {
							if ($anterior == $pair) {
								print '<strong>Duplicate: '.$pair.'</strong><br>';
							} else {
								print $pair.'<br>';
							}
							$anterior = $pair;
						}
						echo '</p>';
					echo '</td>';		
					echo '<td style="padding: 20px;" valign="top">';
						echo '<p>';
						foreach ($pairs_lower_to_lower as $key => $pair) {
							print 'oo'.$pair.'oo nn'.$pair.'nn nn'.$pair.'oo oo'.$pair.'nn<br>';
						}
						echo '</p>';
					echo '</td>';				
				echo '</tr>';
			echo '</table>';	
			?>		
			<!-- End Lower to Lower -->
		</td>
				
		<td valign="top">
			<!-- Upper to Upper -->
			<?php	
			echo '<table>';
				echo '<tr>';
					echo '<td colspan="2" style="padding: 20px;" valign="top">';
						echo '<p><strong>All Uppercase:</strong><br />';
						echo count($pairs_upper_to_upper).' pairs<br />';						
						echo 'Words having <a href="upper-to-upper-kerning.php" target="_blank">5 or more kerning pairs</a><br />';	
						echo 'Words using <a href="upper-to-upper-spacing.php" target="_blank">spacing only</a><br />&nbsp;</p>';				
					echo '</td>';
				echo '</tr>';		
				echo '<tr>';
					echo '<td style="padding: 20px;" valign="top">';
						echo '<p>';
						$anterior = '';
						foreach ($pairs_upper_to_upper as $key => $pair) {
							if ($anterior == $pair) {
								print '<strong>Duplicate: '.$pair.'</strong><br>';
							} else {
								print $pair.'<br>';
							}
						$anterior = $pair;
						}
						echo '</p>';
					echo '</td>';			
					echo '<td style="padding: 20px;" valign="top">';
						echo '<p>';
						foreach ($pairs_upper_to_upper as $key => $pair) {
							print 'OO'.$pair.'OO HH'.$pair.'HH HH'.$pair.'OO OO'.$pair.'HH<br>';
						}
						echo '</p>';
					echo '</td>';						
				echo '</tr>';
			echo '</table>';	
			?>		
			<!-- End Upper to Upper -->		
		</td>
		
		<td valign="top">
			<!-- Capitalized -->
			<?php	
			echo '<table>';
				echo '<tr>';
					echo '<td colspan="2" style="padding: 20px;" valign="top">';
						echo '<p><strong>Capitalized:</strong><br />';
						echo count($pairs_upper_to_lower).' pairs<br />';						
						echo 'Words having <a href="capitalized-kerning.php" target="_blank">5 or more kerning pairs</a><br />';	
						echo 'Words having <a href="capitalized-cap-only.php" target="_blank">Cap kerned only</a><br />';	
						echo 'Words using <a href="capitalized-spacing.php" target="_blank">spacing only</a></p>';			
					echo '</td>';
				echo '</tr>';		
				echo '<tr>';
					echo '<td style="padding: 20px;" valign="top">';
						echo '<p>';
						$anterior = '';
						foreach ($pairs_upper_to_lower as $key => $pair) {
							if ($anterior == $pair) {
								print '<strong>Duplicate: '.$pair.'</strong><br>';
							} else {
								print $pair.'<br>';
							}
							$anterior = $pair;
						}
						echo '</p>';
					echo '</td>';			
					echo '<td style="padding: 20px;" valign="top">';
						echo '<p>';
						foreach ($pairs_upper_to_lower as $key => $pair) {
						print $pair.'nnon<br>';
						}
						echo '</p>';
					echo '</td>';						
				echo '</tr>';
			echo '</table>';	
			?>		
			<!-- End Capitalized -->		
		</td>
						
		<td valign="top">
			<!-- Birds Eye Summary -->
			<?php 
			$lowercase_all = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');						
			$uppercase_all = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');			
					
			# Lowercase Summary
			echo '<table>';
				echo "<tr>";
				
					echo '<td style="padding: 20px;" valign="top" align="right">';
						echo '<p><strong>Lowercase kerned:</strong><br />';
						foreach ($lowercase_all as $key => $first) {
							foreach ($lowercase_all as $key => $second) {
								if (in_array($first.$second, $pairs_lower_to_lower)) echo $first.$second." ";
							}
							echo "<br />";
						}
					echo "</td>";
					
					echo '<td style="padding: 20px;" valign="top">';
						echo '<p><strong>Lowercase not kerned:</strong><br />';
						foreach ($lowercase_all as $key => $first) {
							foreach ($lowercase_all as $key => $second) {
								if (!in_array($first.$second, $pairs_lower_to_lower)) echo $first.$second." ";
							}
							echo "<br />";
						}
					echo "</td>";
					
				echo "</tr>";	
				echo "<tr>";
				
					echo '<td style="padding: 20px;" valign="top" align="right">';			
						echo '<p><strong>Uppercase kerned:</strong><br />';
						foreach ($uppercase_all as $key => $first) {
							foreach ($uppercase_all as $key => $second) {
								if (in_array($first.$second, $pairs_upper_to_upper)) echo $first.$second." ";
							}
								echo "<br />";
						}
					echo "</td>";
					
					echo '<td style="padding: 20px;" valign="top">';
						echo "<p><strong>Uppercase not kerned:</strong><br />";
						foreach ($uppercase_all as $key => $first) {
							foreach ($uppercase_all as $key => $second) {
								if (!in_array($first.$second, $pairs_upper_to_upper)) echo $first.$second." ";
							}
							echo "<br />";
						}
					echo "</td>";
					
				echo "</tr>";	
				echo "<tr>";
				
					echo '<td style="padding: 20px;" valign="top" align="right">';				
						echo '<p><strong>Capitalized kerned:</strong><br />';
						foreach ($uppercase_all as $key => $first) {
							$count = 0;
							foreach ($lowercase_all as $key => $second) {
								if (in_array($first.$second, $pairs_upper_to_lower)) echo $first.$second." ";
							}
							echo "<br />";
						}
					echo "</td>";
					
					echo '<td style="padding: 20px;" valign="top">';
						echo "<p><strong>Capitalized not kerned:</strong><br />";
						foreach ($uppercase_all as $key => $first) {
							foreach ($lowercase_all as $key => $second) {
								if (!in_array($first.$second, $pairs_upper_to_lower)) echo $first.$second." ";
							}
							echo "<br />";
						}
						echo '</p>';
					echo "</td>";
					
				echo "</tr>";
			echo "</table>";					
			?>		
			<!-- Ends Birds Eye Summary -->		
		</td>		
	</tr>
</table>

</body>
</html>