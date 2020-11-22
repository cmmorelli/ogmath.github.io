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
		
		pan id="answer">x=</span></p>

<script>
  var answerSpan = document.getElementById('answer');
    var answerMathField = MQ.MathField(answerSpan, {
        handlers: {
	      edit: function() {
		              var enteredMath = answerMathField.latex(); // Get entered math in LaTeX format
			              checkAnswer(enteredMath);
			            }
	          }
	  });
  </script>


	</script>
	
			
			

    </body>
</html>


