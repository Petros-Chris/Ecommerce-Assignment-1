<?php
require('app/core/App.php');
require('app/core/Controller.php');
require('app/core/autoload.php');
//future inclusion for Model
//Hint: placing JavaScript/CSS code in the header or footer sub views will make it available in all pages.
?>

<html>
  <head>
    <link rel="stylesheet" href="../resources/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>

  <nav>
    <ul>
      <li><a href="../Main/index">Landing page</a></li>
      <li><a href="../Main/about_us">About us</a></li>
      <li><a href="../Contact/index">Contact us</a></li>
      <li><a href="../Contact/read">See the messages we get</a></li>
    </ul>
  </nav>
</html>