<!DOCTYPE html>
<html>
	<head>
		<!--The 'header.js' file included below
		contains all the CSS and MathJax scripts.-->
		<?php include 'header.js';?>
	</head>
	<title>OGMATH</title>
	<body>
		<!--Little Wizard-->
		<a href="https://ogmath.com/index.php"><br>
			<span>&#129497;&#127995;</span>OGMATH</a>
		
		<h1>Morelli Algebra 1 Notes</h1>

		<!--PHP Error/Warning Debugging Scripts
		These will only display content if there
		are warnings or errors.-->
		<?php ini_set('display_errors',1);?>
		<?php error_reporting(E_ALL);?>

		<!--PHP Includes-->
		<?php 
			include './includes/ineq.php';
			include './includes/exponents.html';
			include './includes/desmos.html';
		?>

	</body>
</html>
