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
		
		<!--Top Links-->
		
		<p>Student Resources: <a href="https://student.works.kutasoftware.com" title="Kuta Works Student Login">Kuta</a> | <a href="https://youtube.com/c/AthenianStranger" title="Athenian Stranger YouTube Tutorial Videos">YouTube</a> | <a href="https://bit.ly/desmos-test-mode-chrome-app" title="Desmos Test Mode Chrome App Extension">Desmos</a>
		</p> 

		<a href="./includes/graph.php" title="Graph Example">Graph Example</a>
		<p>
		<a href="./includes/mathquill.php" title="MathQuill Example">MathQuill Example</a>		

		<!--PHP Error/Warning Debugging Scripts
		These will only display content if there
		are warnings or errors.-->
		<?php ini_set('display_errors',1);?>
		<?php error_reporting(E_ALL);?>

		<!--PHP Includes-->
		<?php 
			include './includes/ineq.html';
			include './includes/parity.html';
			include './includes/exponents.html';
			include './includes/desmos.html';
		?>

		
		<h2>Contact Me</h2> 
			<p>
			<a href="mailto:contact@ogmath.com" title="Email">Email</a> | <a href="https://twitter.com/ogmath11" title="Twitter Profile">Twitter</a> | <a href="https://github.com/ogmath/" title="My GitHub Page">Git</a> | <a href="https://jsfiddle.net/user/ogmath/fiddles/" title="JS Fiddle Profile">JSFiddle</a> | <a href="https://www.sololearn.com/Profile/20430647" title="SoloLearn Profile">SoloLearn</a> | <a href="https://stackoverflow.com/users/14684037/michael-morelli" title="StackOverflow Profile">Stack</a>
			</p>

		<!--Little Wizard-->
		<center>
			<a href="https://ogmath.com/index.php"><br>
			<span>&#129497;&#127995;</span>OGMATH</a>
		</center>
	</body>
</html>
