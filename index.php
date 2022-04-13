<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Calculating Volume of Triangular Pyramid, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Marcus Wehbi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Volume of a Triangular Pyramid in PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Volume of a Triangular Pyramid in PHP</h1>";
			echo "<h3>This program will calculate the volume of a triangular pyramid.</h3>";
		?>
		<!-- form to get the sides and height from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblBase">Side a (cm):</label>
      <input type="text" id="base1" placeholder="Enter the base (cm)" name="base1"><br><br>
      <label for=lblBase">Side b (cm):</label>
      <input type="text" id="base2" placeholder="Enter the base (cm)" name="base2"><br><br>
      <label for="lblHeight">Height (cm):</label>
      <input type="text" id="height" placeholder="Enter the height (cm)" name="height"><br><br>
      <input type="submit" value="Calculate Volume">
		</form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				The volume of the triangular pyramid is  " + $volume + cm<sup>3</sup>
	    </iframe>
	</body>
</html>