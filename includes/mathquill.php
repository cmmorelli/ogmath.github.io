<!DOCTYPE html>
<html>
    <head>
	<?php include "../header.js";?>
    </head>
    <body>
	<p>Type math here: <span id="math-field"></span></p>
	<p>LaTeX of what you typed: <span id="latex"></span></p>
	<button onclick = "gfg_Run()">Click here</button>
	<p id = "GFG_DOWN" style =  
            "color:green; font-size: 20px; font-weight: bold;"> 
        </p> 


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
		var span = document.getElementById("latex"); 
	            var el_down = document.getElementById("GFG_DOWN"); 
	              
	            function gfg_Run() { 
		                    el_down.innerHTML = span.textContent; 
				    }
	</script>
    </body>
</html>


