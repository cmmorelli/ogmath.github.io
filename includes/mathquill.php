<?php include "https://ogmath.com/header.js"; ?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
	<p><span id="answer">x=</span></p>

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


	<p>Solve <span id="problem">ax^2 + bx + c = 0</span>.</p>

		<script>
  			var problemSpan = document.getElementById('problem');
    			MQ.StaticMath(problemSpan);
  		</script>

	</body>
</html>

