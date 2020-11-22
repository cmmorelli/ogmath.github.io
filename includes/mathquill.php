<!DOCTYPE html>
<html lang="en">
    <head>
<!--        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Run  Mathquill</title>


        <!-- YOU NEED  mathquill.css , jquery and mathquill.js SEARCH AND PICK IT SOMEWHERE, SEARCH ON THE WEB IF THIS DOWN  NOT RUN-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mathquill/0.10.1/mathquill.css"/> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mathquill/0.10.1/mathquill.js"></script>

        <!-- INFORM  THE LATEST AVERSION INTERFACE WITH THIS CODE   -->
        <script>
            var MQ = MathQuill.getInterface(2);
        </script>
-->

	<?php include "https://ogmath.com/header.js";?>

    </head>

    <body>

	<p>Type math here: <span id="math-field"></span></p>
	<p>LaTeX of what you typed: <span id="latex"></span></p>

	<script>
		var mathFieldSpan = document.getElementById('math-field');
		var latexSpan = document.getElementById('latex');

		var MQ = MathQuill.getInterface(2); // for backcompat
		var mathField = MQ.MathField(mathFieldSpan, {
		  spaceBehavesLikeTab: true, // configurable
			    handlers: {
				edit: function() { // useful event handlers
					      latexSpan.textContent = mathField.latex(); // simple API
						  }
				  }
		});
	</script>

	<script>
		console.log(latexSpan)
	</script>

    </body>
</html>


