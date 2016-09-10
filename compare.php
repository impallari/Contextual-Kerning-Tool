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
				# Here you load the second font
				include('config-compare.php');
				?>
			</td>
		</tr>
		
		<tr>
			<td style="padding: 20px; white-space: nowrap" valign="top" align="right" width="50%">
				<?php
				echo '<p><strong>'.$font1_name.'</strong></p>';
				echo "<div>";
				foreach ($lowercase_all as $key => $first) {
					foreach ($lowercase_all as $key => $second) {
						if (in_array($first.$second, $pairs_lower_to_lower_font1)) echo $first.$second." ";
					}
					echo "<br />";
				}
				echo "</div>";
				?>
			</td>
			<td style="padding: 20px; white-space: nowrap" valign="top" width="50%">
				<?php 
				echo '<p><strong>'.$font2_name.'</strong></p>';
				echo "<div>";
				foreach ($lowercase_all as $key => $first) {
					foreach ($lowercase_all as $key => $second) {
						if (in_array($first.$second, $pairs_lower_to_lower_font2)) echo $first.$second." ";
					}
					echo "<br />";
				}
				echo "</div>";
				?>		
			</td>
		</tr>
	
		<tr><td style="padding: 0px;" colspan="2" align="center"><p><strong>Uppercase</strong></p></td></tr>
		<tr>
			<td style="padding: 20px; white-space: nowrap" valign="top" align="right" width="50%">
				<?php
				echo "<div>";
				foreach ($uppercase_all as $key => $first) {
					foreach ($uppercase_all as $key => $second) {
						if (in_array($first.$second, $pairs_upper_to_upper_font1)) echo $first.$second." ";
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
						if (in_array($first.$second, $pairs_upper_to_upper_font2)) echo $first.$second." ";
					}
					echo "<br />";
				}
				echo "</div>";
				?>		
			</td>
		</tr>
		
		<tr><td style="padding: 0px;" colspan="2" align="center"><p><strong>Capitalized</strong></p></td></tr>
		<tr>
			<td style="padding: 20px; white-space: nowrap" valign="top" align="right" width="50%">
				<?php
				echo "<div>";
				foreach ($uppercase_all as $key => $first) {
					foreach ($lowercase_all as $key => $second) {
						if (in_array($first.$second, $pairs_upper_to_lower_font1)) echo $first.$second." ";
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
						if (in_array($first.$second, $pairs_upper_to_lower_font2)) echo $first.$second." ";
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