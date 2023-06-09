<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
    <title>Results page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-orange.min.css" />
    <link rel="stylesheet" href="stylesheet.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png" />
    <link rel="manifest" href="./images/site.webmanifest" />
</head>
<body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<!-- Uses a header that contracts as the page scrolls down. -->
<style>
.demo-layout-waterfall .mdl-layout__header-row .mdl-navigation__link:last-of-type  {
  padding-right: 0;
}
</style>

<div class="demo-layout-waterfall mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--waterfall">
    <!-- Top row, always visible -->
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Pi Calculator - Results</span>
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
        <label class="mdl-button mdl-js-button mdl-button--icon"
               for="waterfall-exp">
          <i class="material-icons">search</i>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="waterfall-exp">
        </div>
      </div>
    </div>
    <!-- Bottom row, not visible on scroll -->
    <div class="mdl-layout__header-row">
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="./index.html">Return to main page</a>
        <a class="mdl-navigation__link" href=""></a>
        <a class="mdl-navigation__link" href=""></a>
        <a class="mdl-navigation__link" href=""></a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Results</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="./index.html">Return to main page</a>
      <a class="mdl-navigation__link" href=""></a>
      <a class="mdl-navigation__link" href=""></a>
      <a class="mdl-navigation__link" href=""></a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here -->
    <br>
    <br>
    <center><h1 class="title" style="text-shadow:0px 0px 2px rgb(173, 216, 230);">Here are your results</h1></center>
    <br>
    <br>
    <br>
    <center><p>-------------------------------------------------------------------------------------------------------</p></center>
<?php
    if (isset ($_POST['iterations'])){
        $iterations = $_POST['iterations'];

        function calculations($iterations) {
        $top = 1;
        $bottom = 1;
        $pi = 0;
        $iterations = round($iterations, 0);
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
            echo "<center>" . "<p class='subtitle'>" . "You entered text. Please return to the main page and enter a positive integer." . "</p>" . "</center>";
            exit();
        }

        if (checkNegative($iterations) == True){
            echo "<center>" . "<p class='subtitle'>" . "You entered a negative number. Please return to the main page and enter a positive integer." . "</p>" . "</center>";
            exit();
        }

    echo "<center>" . "<p class='subtitle'>" . "The value of pi after " . round($iterations) . " iterations is " . calculations($iterations) . "</p>" . "</center>";

    }

?>
<br>
<br>
<center><a href="index.html">Click here to return to the main page</a></center>
<center><p>-------------------------------------------------------------------------------------------------------</p></center>
<br>
<center><img src="./images/lotsofpinumbers.png" alt="numbers of pi" width="500px" height="350px"></center>
<br>
<br>
<br>
<br>
<br>
<footer class="mdl-mini-footer">
  <div class="mdl-mini-footer__left-section">
    <div class="mdl-logo">Pi Calculator</div>
    <ul class="mdl-mini-footer__link-list">
      <li><a href="#">By Nina</a></li>
      <li><a href="#">ICS2O</a></li>
    </ul>
  </div>
</footer>
    </div>
  </main>
</div>
</body>
</html>