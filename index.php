<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fibonacci</title>
</head>
<body>

    <?php
    function fibonacci($n) {
        if ($n == 0) {
            return 0;
        } elseif ($n == 1) {
            return 1;
        } else {
            return fibonacci($n - 1) + fibonacci($n - 2);
        }
    }
    
    // Número de termos na sequência de Fibonacci
    $num_terms = 15;
    
    echo "Sequência de Fibonacci com $num_terms termos:<br>";
    
    for ($i = 0; $i < $num_terms; $i++) {
        echo fibonacci($i) . ", ";
    }
    ?>
    
    
</body>
</html>