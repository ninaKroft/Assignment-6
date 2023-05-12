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
        $top = 1;
        $bottom = 1;
        $pi = 0;
        for ($x = 0; $x < $iterations + 1; $x++);
            $pi = $pi + ($top / $bottom);
            $bottom = $bottom + 2;
            $top = $top * -1;
        echo $pi;

    }

?>
</body>
</html>