<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
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


    </head>

    <body>

          <!--EXAMPLE COMMON TEXT TRANSFORMED WITH MATHQUILL  -->
         <p>Solve <span id="problem">f(x) = ax^2 + bx + c + = 0</span>.</p>
            <script>
                  var problemSpan = document.getElementById('problem');
                 MQ.StaticMath(problemSpan);
            </script> 




        <!-- EXAMPLE TO  CREATE AN EDITABLE MATH FIELD  -->
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


