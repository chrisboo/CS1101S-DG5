<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CS1101S</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/code.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/navbar.css">
    
    <!-- Mathjax -->
    <script type="text/javascript" async
      src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-MML-AM_CHTML">
    </script>
  </head>
  <body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/cs1101s/index.php">CS1101S</a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Discussions</a>
            <div class="dropdown-menu">
              <?php
                $dir = $_SERVER['DOCUMENT_ROOT'] . "/cs1101s/dg";
                $scanned_directory = array_diff(scandir($dir), array('..', '.'));
                sort($scanned_directory);
                foreach ($scanned_directory as $key => $filename) {
                  $index = $key + 2;
                  echo "<a class='dropdown-item' href='/cs1101s/dg/$filename'>Week $index</a>";
                }
              ?>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
        </ul>      
        <span class="navbar-text">
          DG5
        </span>
      </div>
    </nav>