<!DOCTYPE html>
<html>
	<head>
		<?php include 'https://ogmath.com/header.js'?>
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
	</body>
</html>

