<!DOCTYPE html>
<html>
    <head>
	<?php include "../header.js";?>
    </head>
    <body>
	<p>Type math here: <span id="math-field"></span></p>
	<p>LaTeX of what you typed: <span id="latex"></span></p>

	<script>
		var mathFieldSpan = document.getElementById('math-field');
		var latexSpan = document.getElementById('latex');
		
		var MQ = MathQuill.getInterface(2);
		var mathField = MQ.MathField(mathFieldSpan, {
		  spaceBehavesLikeTab: true,
			    handlers: {
				edit: function() { 
					      latexSpan.textContent = mathField.latex();
					   }
				  }
		});
	var bob;
	bob = mathField.latex();
	alert(bob);	
	</script>
    </body>
</html>


