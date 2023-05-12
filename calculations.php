<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
    <title>Results page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-orange.min.css" />
    <link rel="mystylesheet" href="stylesheet.css" />
</head>
<body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<?php
    if (isset ($_POST['iterations'])){
        $iterations = $_POST['iterations'];

        function calculations($iterations) {
        $top = 1;
        $bottom = 1;
        $pi = 0;
        $iterations = round($iterations, 0);
        echo $iterations;
        for ($x = 0; $x < $iterations; $x++){
            $pi = $pi + ($top / $bottom);
            $bottom = $bottom + 2;
            $top = $top * -1;
        }
        return $pi * 4;
        }

        function checkNumber($iterations){
            return is_numeric($iterations);
        }

        function checkNegative($iterations){
            return $iterations < 0;
        }

        if (checkNumber($iterations) == False){
            echo "You entered text. Please return to the main page and enter a positive integer.";
            exit();
        }

        if (checkNegative($iterations) == True){
            echo "You entered a negative number. Please return to the main page and enter a positive integer.";
            exit();
        }

        
    echo calculations($iterations);

    }

?>
</body>
</html>