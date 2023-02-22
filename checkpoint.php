<?php
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Dental Clinic</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Aboreto&family=DynaPuff:wght@500&family=Raleway:wght@500;700&family=Ubuntu&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <style>
      .webcam {
        padding: 10px;
        text-align: center;
      }
      canvas {
        position: absolute;
      }
    </style>
    <script defer src="face-api.min.js"></script>
    <script defer src="extraScript.js" type="text/javascript"></script>
  </head>
  <body>
    <!-- NAVBAR -->
    <!--
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">El Nagy</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php"
                >Services</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php">About</a>
            </li>
            <li class="nav-item bg-light">
              <a class="nav-link" href="#video">Request Appointment</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    -->
    <div class="webcam bg-light">
      <h4 class="text-dark">Smile to redirect you 😁</h4>
      <video id="video" width="720" height="480" autoplay muted></video>
      <pre class="text-dark">We love to see you smiling because we believe that everybody should be proud of her/his smile.
Feel free to skip, and we hope that everything goes well.
      </pre>
      <a href="./form.php"><button class="btn btn-light">skip</button></a>
    </div>
  </body>
</html>
