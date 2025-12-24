<?php
echo "
<html>
<body>

    <h2>Operators and Expressions</h2>

    <h3>Arithmetic Operators</h3>
    <p id='arithmetic'></p>

    <h3>Assignment Operators</h3>
    <p id='assignment'></p>

    <h3>Comparison Operators</h3>
    <p id='comparison'></p>

    <script>
        // ARITHMETIC OPERATORS
        let a = 100;
        let b = 50;
        let add  = a + b;
        let sub  = a - b;
        let mul  = a * b;
        let div  = a / b;
        let mod  = a % b;

        document.getElementById('arithmetic').innerHTML =
            'Addition: ' + add + '<br>' +
            'Subtraction: ' + sub + '<br>' +
            'Multiplication: ' + mul + '<br>' +
            'Division: ' + div + '<br>' +
            'Modulus: ' + mod;

        // ASSIGNMENT OPERATORS
        let x = 10;
        x += 5;
        x -= 2;
        x *= 3;
        x /= 2;

        document.write('<p><b>Assignment (document.write): ' + x + '</b></p>');

        // COMPARISON OPERATORS
        let c = 20;
        let d = 15;

        document.getElementById('comparison').innerHTML =
            'c > d : ' + (c > d) + '<br>' +
            'c < d : ' + (c < d) + '<br>' +
            'c == d : ' + (c == d) + '<br>' +
            'c != d : ' + (c != d) + '<br>' +
            'c >= d : ' + (c >= d) + '<br>' +
            'c <= d : ' + (c <= d);

        // ALERT 
        alert('All calculations completed successfully!');
    </script>
</body>
</html>";
?>
