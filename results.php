<?php
	// get the sides and height from the text fields
	$base = $_POST['base1'];
  $base2 = $_POST['base2'];
	$height = $_POST['height'];

	// calculate the volume
	$volume = (1/6) * $base * $base2 * $height 
?>
<h3>Results:</h3>
The volume of the triangular pyramid is <?php echo number_format($volume, 2) ?>cm<sup>3</sup>.