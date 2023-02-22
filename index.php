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
  </head>
  <body>
    <!-- NAVBAR -->
    <!--
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">El Nagy</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item bg-light">
              <a class="nav-link active" aria-current="page" href="./index.php"
                >Services</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./checkpoint.php">Request Appointment</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
-->
    <div class="intro">
      <div class="container">
        <div class="row">
          <div class="col-6 my-5">
            <h1 class="mt-4">Welcome to <br />El Nagy dental care</h1>
            <a href="./checkpoint.php"><button class="btn btn-light my-5 appointment-request-btn">Request an appointment</button></a><br />
          </div>
          <div class="col-6 text-center my-5">
            <h3>Address</h3>
            <div class="my-2">13 x-road, Alexandria, Egypt</div>
            <h3>Contact Us</h3>
            <div class="my-2">
              📞 013 0001 0057<br />☎ 02 304129<br />✉ contact@elnagydental.com
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SERVICES -->
    <div class="container">
      <h1 class="my-5 text-center" id="our-services">Our Services</h1>
      
      <!--First row of 4 services-->
      <div class="row">
        <div class="col-2">
        </div>
          <div class="col-2">
            <a href="#comprehensive-care">
              <div class="text-center py-4 service-logo">
                <img src="./comprehensive-care.jpg" height= 50px" width="50px"><br>
                <h6 class="text-light mt-2">COMPREHENSIVE CARE</h6>
              </div>
            </a>
          </div>
        
        <div class="col-2">
          <a href="#porcelain-veneers">
            <div class="text-center py-4 service-logo">
              <img src="./PORCELAIN VENEERS.jpg" height="50px" width="50px"><br>
              <h6 class="text-light mt-2">PORCELAIN VENEERS</h6>
            </div>
          </a>
        </div>

        <div class="col-2">
          <a href="#inlays-onlays">
            <div class="text-center py-4 service-logo">
              <img src="./INLAYS-ONLAYS.jpeg" height="50px" width="50px"><br>
              <h6 class="text-light mt-2">INLAYS-ONLAYS</h6>
            </div>
          </a>
        </div>

        <div class="col-2">
          <a href="#oral-surgery">
            <div class="text-center py-4 service-logo">
              <img src="./ORAL SURGERY.jpg" height="50px" width="50px"><br>
              <h6 class="text-light mt-2">ORAL SURGERY</h6>
            </div>
          </a>
        </div>

        <div class="col-2">
        </div>
      </div>
      
      <!--Second row of 3 services-->
      <div class="row">
        <div class="col-3">
        </div>
        <div class="col-2">
          <a href="#crowns">
            <div class="text-center py-4 service-logo">
              <img src="./CROWNS.jpg" height= 50px" width="50px"><br>
              <h6 class="text-light mt-2">CROWNS</h6>
            </div>
          </a>
        </div>

        <div class="col-2">
          <a href="#root-canals">
            <div class="text-center py-4 service-logo">
              <img src="./ROOT CANALS.jpg" height="50px" width="50px"><br>
              <h6 class="text-light mt-2">ROOT CANALS</h6>
            </div>
          </a>
        </div>

        <div class="col-2">
          <a href="#zoom-whitening">
            <div class="text-center py-4 service-logo">
              <img src="./ZOOM WHITENING.jpg" height="50px" width="50px"><br>
              <h6 class="text-light mt-2">ZOOM WHITENING</h6>
            </div>
          </a>
        </div>

        <div class="col-3">

        </div>
      </div>
      
      <!--Services details-->
      <div class="card mb-3" id="comprehensive-care">
        <div class="row g-0">
          <div class="col-md-2">
            <img
              src="./comprehensive-care.jpg"
              class="img-fluid rounded-start"
              alt="COMPREHENSIVE CARE"
            />
          </div>
          <div class="col-md-10">
            <div class="card-body">
              <h5 class="card-title">COMPREHENSIVE CARE</h5>
              <p class="card-text">
                The accumulation of plaque and calculus around the teeth and
                under the gums can cause a cascade of dental problems like tooth
                decay, gingivitis, bone loss, halitosis (bad breath), and
                eventually, tooth loss. Routine cleanings in Williamsburg rids
                the mouth of harmful bacteria and ensures you can enjoy a
                lifetime of exceptional oral health.
              </p>
              <p class="card-text">
                <small class="text-muted">45 min – 1.5 hours</small>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" id="porcelain-veneers">
        <div class="row g-0">
          <div class="col-md-2">
            <img
              src="./PORCELAIN VENEERS.jpg"
              class="img-fluid rounded-start"
              alt="PORCELAIN VENEERS"
            />
          </div>
          <div class="col-md-10">
            <div class="card-body">
              <h5 class="card-title">PORCELAIN VENEERS</h5>
              <p class="card-text">
                Don't settle for a smile that doesn't make you feel amazing!
                Porcelain Veneers can change the color, shape and length of your
                teeth and completely transform your smile!
              </p>
              <p class="card-text">
                <small class="text-muted">2 appointments</small>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" id="inlays-onlays">
        <div class="row g-0">
          <div class="col-md-2">
            <img
              src="./INLAYS-ONLAYS.jpeg"
              class="img-fluid rounded-start"
              alt="INLAYS & ONLAYS"
            />
          </div>
          <div class="col-md-10">
            <div class="card-body">
              <h5 class="card-title">INLAYS & ONLAYS</h5>
              <p class="card-text">
                These restorations are a simple and effective treatment, and in
                some cases are an excellent alternative to a complete porcelain
                crown.
              </p>
              <p class="card-text">
                <small class="text-muted">2 appointments</small>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" id="oral-surgery">
        <div class="row g-0">
          <div class="col-md-2">
            <img
              src="./ORAL SURGERY.jpg"
              class="img-fluid rounded-start"
              alt="ORAL SURGERY"
            />
          </div>
          <div class="col-md-10">
            <div class="card-body">
              <h5 class="card-title">ORAL SURGERY</h5>
              <p class="card-text">
                Dr. Mahmoud may determine that you need a tooth extraction for
                various reasons. Some teeth are extracted because they are
                severely decayed; others may have advanced periodontal disease
                or have broken in a way that cannot be repaired.
              </p>
              <p class="card-text">
                <small class="text-muted"
                  >Making ‘goodbye’ as painless as possible.</small
                >
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" id="crowns">
        <div class="row g-0">
          <div class="col-md-2">
            <img
              src="./CROWNS.jpg"
              class="img-fluid rounded-start"
              alt="CROWNS"
            />
          </div>
          <div class="col-md-10">
            <div class="card-body">
              <h5 class="card-title">CROWNS</h5>
              <p class="card-text">
                Crowns are full-coverage restorations that are used to cover a
                tooth that is likely to break or is too damaged to be corrected
                with a traditional filling.
              </p>
              <p class="card-text">
                <small class="text-muted">2 appointments</small>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" id="root-canals">
        <div class="row g-0">
          <div class="col-md-2">
            <img
              src="./ROOT CANALS.jpg"
              class="img-fluid rounded-start"
              alt="ROOT CANALS"
            />
          </div>
          <div class="col-md-10">
            <div class="card-body">
              <h5 class="card-title">ROOT CANALS</h5>
              <p class="card-text">
                Root canal therapy can save a tooth that has become severely
                infected or decayed. When diagnosis indicates the need for a
                root canal treatment, our first priority is our patients' peace
                of mind.
              </p>
              <p class="card-text">
                <small class="text-muted">1 or 2 appointments</small>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" id="zoom-whitening">
        <div class="row g-0">
          <div class="col-md-2">
            <img
              src="./ZOOM WHITENING.jpg"
              class="img-fluid rounded-start"
              alt="ZOOM WHITENING"
            />
          </div>
          <div class="col-md-10">
            <div class="card-body">
              <h5 class="card-title">ZOOM WHITENING</h5>
              <p class="card-text">
                Let us put the sparkle back into your smile! Our whitenings are
                both easy and non-invasive, and you can remove years of stain
                and color from your teeth in a single, one-hour treatment.
              </p>
              <p class="card-text">
                <small class="text-muted">Only 1 hour treatment</small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="my-3 text-center"><h2>We are happy to see you</h2></div>

    <!-- FOOTER -->
    <div class="footer mt-4">
      <div class="container">
        <div class="row">
          <div class="col-4 text-center my-5">
            <h3>Address</h3>
            <div class="my-2">13 x-road, Alexandria, Egypt</div>
            <h3>Contact Us</h3>
            <div class="my-2">
              📞 013 0001 0057<br />☎ 02 304129<br />✉ contact@elnagydental.com
            </div>
          </div>
          <div class="col-4 my-5 text-center">
            <a href="./checkpoint.php"><button class="btn btn-light my-5 appointment-request-btn">Request an appointment</button></a>
          </div>
          <div class="col-4 text-center my-5">
            <strong>Working Hours</strong>
            <pre class="working-hours">
Sun 9:00 am - 7:00 pm
Mon 9:00 am - 7:00 pm
Tue 9:00 am - 7:00 pm
Wed 9:00 am - 7:00 pm
Thu 9:00 am - 5:00 pm
                  </pre
            >
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
