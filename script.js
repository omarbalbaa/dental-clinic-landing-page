$(function () {
  $("#datepicker").datepicker();
});

function checkNamePhone() {
  let name = document.getElementById("name");
  let nREGEX = /^[a-zA-Z\u0600-\u06FF\u0750-\u077F\s]{3,}$/;
  let nResult = nREGEX.test(name.value);

  let phone = document.getElementById("phone");
  let pREGEX = /^(01)(0|1|2|5)[0-9]{8}$/;
  let pResult = pREGEX.test(phone.value);

  let email = document.getElementById("email");

  if (name.value == "") {
    document.getElementById("nameSoftAlert").innerHTML =
      "*Please enter your name";
    name.focus();
    return false;
  } else if (nResult == false) {
    document.getElementById("nameSoftAlert").innerHTML =
      "Please enter a valid name";
    name.focus();
    name.select();
    return false;
  } else if (phone.value == "") {
    document.getElementById("phoneSoftAlert").innerHTML =
      "Please enter your phone number";
    document.getElementById("nameSoftAlert").innerHTML = "";
    phone.focus();
    return false;
  } else if (pResult == false) {
    document.getElementById("phoneSoftAlert").innerHTML =
      "Please enter a valid phone number";
    document.getElementById("nameSoftAlert").innerHTML = "";
    phone.select();
    phone.focus();
    return false;
  } else if (email.value == "") {
    document.getElementById("emailSoftAlert").innerHTML =
      "Please enter your email address";
    document.getElementById("phoneSoftAlert").innerHTML = "";
    document.getElementById("nameSoftAlert").innerHTML = "";
    email.select();
    email.focus();
    return false;
  }
  else {
    document.getElementById("nameSoftAlert").innerHTML = "";
    document.getElementById("phoneSoftAlert").innerHTML = "";
    document.getElementById("emailSoftAlert").innerHTML = "";
    //console.log("appointment date : " + document.getElementById("date").value);
    console.log("submitted succesfully");

    return true;
  }
}
document.getElementById("myForm").onsubmit = checkNamePhone;

function checkDate() {
  let fullDate = document.getElementById("date").value;
  let month = fullDate.slice(0, 2);
  let day = fullDate.slice(3, 5);
  let year = fullDate.slice(6, 10);

  const todaysDate = new Date ();
  const currentYear = todaysDate.getFullYear();
  const currentMonth = todaysDate.getMonth() + 1;
  const currentDay = todaysDate.getDate();

  console.log("appointment date : "+day + " - " + month + " - " + year);
  console.log("today's date : " + currentDay + " - " + currentMonth + " - " + currentYear )
  document.getElementById("dateSoftAlert").innerHTML = "We will confirm with you the appointment time.";

  if (currentYear > year ){
    document.getElementById("dateSoftAlert").innerHTML = "Please make sure that the appointment time you choosed is in the future in the format MM/DD/YYYY";
    return false;
  }
  else if (currentMonth > month && currentYear ){
    document.getElementById("dateSoftAlert").innerHTML = "Please make sure that the appointment time you choosed is in the future in the format MM/DD/YYYY";
    return false;
  }
  else if (currentDay > day && currentMonth == month && currentYear == year ){
    document.getElementById("dateSoftAlert").innerHTML = "Please make sure that the appointment time you choosed is in the future in the format MM/DD/YYYY";
    return false;
  }
  return true;
}
