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
				<p><a href="lowercase.php"><?php echo count(array_unique($pairs_lower_to_lower)) ?> Lowercase pairs</a> - 
				<a href="uppercase.php"><?php echo count(array_unique($pairs_upper_to_upper)) ?> Uppercase pairs</a> - 
				<a href="capitalized.php"><?php echo count(array_unique($pairs_upper_to_lower)) ?> Capitalized pairs</a></p>
				
				<?php 
				if ( count(array_unique($pairs_lower_to_lower)) != count($pairs_lower_to_lower) ) {
					echo '<p>Clean your list! Duplicated pairs: ';
					$anterior = '';
					foreach ($pairs_lower_to_lower as $key => $pair) {
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
				foreach ($lowercase_all as $key => $first) {
					foreach ($lowercase_all as $key => $second) {
						if (in_array($first.$second, $pairs_lower_to_lower)) echo $first.$second." ";
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
				foreach ($lowercase_all as $key => $first) {
					foreach ($lowercase_all as $key => $second) {
						if (!in_array($first.$second, $pairs_lower_to_lower)) echo $first.$second." ";
					}
					echo "<br />";
				}
				echo "</div>";
				?>		
			</td>
		</tr>
	
		<tr>
			<td style="padding: 20px; white-space: nowrap" valign="top" align="right" width="50%">
				<?php
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
			<td style="padding: 20px; white-space: nowrap" valign="top" align="right" width="50%">
				<?php
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
			<td style="padding: 20px; white-space: nowrap" valign="top" width="50%">
				<?php 
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
	
	</table>
	
</body>
</html>