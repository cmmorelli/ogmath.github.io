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

		var MQ = MathQuill.getInterface(2); // for backcompat
		var mathField = MQ.MathField(mathFieldSpan, {
		  spaceBehavesLikeTab: true, // configurable
			    handlers: {
				edit: function() { // useful event handlers
					      latexSpan.textContent = mathField.latex(); // simple API
						  }
				  }
		});


		function init() {
			key_count_global = 0; // Global variable
			document.getElementById("latex").onkeypress = function() {
					key_count_global++;
						setTimeout("lookup("+key_count_global+")", 1000);//Function will be called 1 second after user types anything. Feel free to change this value.
					}
		}
		window.onload = init; //or $(document).ready(init); - for jQuery

		function lookup(key_count) {
			if(key_count == key_count_global) { // The control will reach this point 1 second after user stops typing.
					// Do the ajax lookup here.
				// 		document.getElementById("status_stop").innerHTML = " ... lookup result ...";
				// 			}
				// 			}	
		var answer = document.getElementById('latex').value;

		if (answer == '1') 
		{
		document.write("<b>Good morning</b>");
		}
		else
		{
		document.write("ERROR");
		}
	</script>

    </body>
</html>


