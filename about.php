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
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php"
                >Services</a
              >
            </li>
            <li class="nav-item bg-light">
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
    <div class="about-intro">
      <div class="container">
        <div class="row">
          <div class="col-4 text-center">
            <h3 class="my-5 this-is-us">This is us</h3>
            <p class="my-5">
              Local dentists who love to make you smile. Join our family of
              patients for life.
            </p>
            <a href="./checkpoint.php"
              ><button class="btn btn-light px-4 appointment-request-btn">
                Request an appointment
              </button>
            </a>

            <br />
            <div class="my-4">
              <strong>Or Call<br />📞 013 0001 0057</strong>
            </div>
          </div>
        </div>
      </div>
    </div>

    <h1 class="text-center my-5" style="color: #5a3761">Our Heroes</h1>
    <div class="container mt-4">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-3">
            <img
              src="./Resized_20200608_12314226113.jpeg"
              class="img-fluid rounded-start"
              alt="dentists"
            />
          </div>
          <div class="col-md-9">
            <div class="card-body">
              <h5 class="card-title" style="color: #5a3761">
                Dr. Mas'oud El Nagy
              </h5>
              <p class="card-text">
                Dr Mas'oud El Nagy - a native New Yorker, has been in private
                practice for more than ten years, serving the greater Brooklyn
                area. He has an extensive following that includes moms and dads,
                toddlers and grandparents, New York’s revered artists,
                musicians, architects, actors, olympic athletes and more. Always
                an artist at heart, Dr. El Nagy found the perfect balance of
                medicine and design when she founded Grand Street Dental in 2016
                -he practices with a discerning eye for detail and ambition for
                patient satisfaction.
              </p>
            </div>
            <div class="card-body">
              <h5 class="card-title" style="color: #5a3761">
                Dr. Mahmoud Mareekh
              </h5>
              <p class="card-text">
                With a soft touch, engaging personality and attention to detail,
                Dr. Mareekh prides himself in establishing a natural rapport
                with her patients. He truly believes in patient-centered care in
                which he will work with you to choose the treatment that best
                suits your needs. As a native New Yorker, Dr. Mareekh received
                his Doctor of Dental Surgery from Alexandria University College
                of Dentistry and now teaches part-time at NYP-Brooklyn Methodist
                Hospital, instructing residents in general dentistry.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

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
