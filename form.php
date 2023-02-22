<?php

session_start();

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$name = $_POST['name'];
		$phone = $_POST['phone'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $user_case = $_POST['user_case'];

		if(!empty($name) && !empty($phone) && !is_numeric($name))
		{
			//save to database
			$user_id = generate_id(10);
      $_SESSION['user_id'] = $user_id;
			$query = "insert into users (user_id,name,phone,date,email,user_case) values ('$user_id','$name','$phone','$date','$email','$user_case')";
			mysqli_query($con, $query);
			header("Location: index.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Dental Clinic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
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
    
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">El Nagy</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"
                >Services</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php">About</a>
            </li>
            <li class="nav-item bg-light">
              <a class="nav-link" href="./form.php">Request Appointment</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="row">
      <div class="col-6 text-center" style="background-color: #ffeed5">
        <div class="container pe-5">
          <h1 class="my-5">Request appointment</h1>
          <img
            src="./10-excellent-dentists-in-cairo.jpg"
            style="max-width: 100%"
            class="m-4"
            alt="request-appointment"
          />
        </div>
      </div>

      <!--FORM-->
      <div class="col-6">
        <div class="container my-4">
          <p>
            Questions? In pain? We’ll get to the root of the problem. Call 013
            0001 0057 or kindly leave your contact information.
          </p>
          <form id = "myForm" method="POST">
            <div class="mb-1">
              <label for="exampleFormControlInput1" class="form-label"
                >Name *</label
              >
              <input
                type="text"
                class="form-control"
                placeholder=""
                id="name"
                name="name"
              />
              <p class="text-danger" id="nameSoftAlert"></p>
            </div>
            <div class="mb-1">
              <label for="exampleFormControlInput1" class="form-label"
                >Phone *</label
              >
              <input
                type="text"
                class="form-control"
                placeholder="01x xxxx xxxx"
                id="phone"
                name="phone"
              />
              <p class="text-danger" id="phoneSoftAlert"></p>
            </div>
            <div class="mb-1">
              <label for="exampleFormControlInput1" class="form-label"
                >Email address *</label
              >
              <input
                type="email"
                class="form-control"
                placeholder="name@example.com"
                id="email"
                name="email"
              />
              <p class="text-danger" id="emailSoftAlert"></p>
            </div>
            <label for="date" class="form-label">Date</label>
                    <div class="input-group date" id="datepicker">
                        <input type="text" class="form-control" id="date" name="date" onblur="checkDate()">
                        <span class="input-group-append">
                            <span class="input-group-text bg-white">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                    </div>
                    <p id="dateSoftAlert"></p>
            <div class="mb-2">
              <label for="exampleFormControlTextarea1" class="form-label"
                >What can we help you with?</label
              >
              <textarea
                class="form-control"
                id="textarea"
                rows="3"
                name="user_case"
              ></textarea>
            </div>
            <p>Feilds followed by * are required.</p>
            <input type="submit" class="btn btn-dark" value="Submit" />
          </form>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
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
            <a href="#"
              ><button class="btn btn-light my-5 appointment-request-btn">
                Request an appointment
              </button></a
            >
          </div>
          <div class="col-4 text-center my-5">
            <strong>Working Hours</strong>
            <pre class="working-hours text-light">
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
    <script src="script.js" type="text/javascript"></script>
  </body>
</html>