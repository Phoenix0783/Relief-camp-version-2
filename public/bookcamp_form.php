<?php
session_start();
require_once("includes/db_connect.php");
$curl = curl_init();

if (isset($_POST["submit"])) {
  $_SESSION["username"] = htmlentities($_POST["username"]);
  $_SESSION["age"] = htmlentities($_POST["age"]);
  $_SESSION["phoneNum"] = htmlentities($_POST["phoneNum"]);

  // selecting the entered phone num from db
  $sqlQuery = "SELECT username FROM user_info WHERE phoneNum='" . $_SESSION["phoneNum"] . "'";
  $resultSet = mysqli_query($connect, $sqlQuery) or die("database error:" . mysqli_error($connect));
  $isValidLogin = mysqli_num_rows($resultSet);

  if ($isValidLogin) {
    $errorMessage = "A User with mobile number: " . $_SESSION["phoneNum"] . " already exists";
  } else {
    $errorMessage = null;
    $num = $_SESSION["phoneNum"];
    $otp = rand(100000, 999999);
    $_SESSION['otp'] = $otp;
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=xZpVSyCHtRf18BOsrv9QIAcXlDJKYd35e42qP7unwEG6NMjWTh0MzcNTer9KY3iQoyBPJWCH6jS2A5lw&variables_values=$otp&route=otp&numbers=$num",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_SSL_VERIFYHOST => 0,
      CURLOPT_SSL_VERIFYPEER => 0,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    }
    header("Location: enter_otp.php");
  }
}
?>

<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../src/css/tailwind.css">
  <title></title>
  <style>
    #submit {
      background-color: #004e64;
      color: #FFFFFF;
    }

    #submit:hover {
      background-color: #00a5cf;
      color: #004e64;
    }

    #link {
      color: #004e64;
      cursor: pointer;
    }

    #link:hover {
      color: #00a5cf
    }
  </style>
</head>

<body>
  <!--main div-->
  <div class="min-h-screen flex flex-col">
    <!--conatainer starts-->
    <div class="container max-w-md mx-auto flex-1 flex flex-col items-center justify-center px-2">
      <h3 class="mb-5 text-3xl text-blackText text-center font-oswald">Book Camp</h3>
      <div class="px-6 py-8 rounded w-full">
        <!--form starts-->
        <form action="" method="POST" class="" onsubmit="return validate(this)">
          <!--Name feild-->
          <input type="text" class="block border font-montserrat border-gray-400 w-full p-3 rounded mb-5 outline-none focus:border-black" name="username" placeholder="Your Name" style="color: #535353;" required />
          <!--Age feild-->
          <input type="text" class="block border font-montserrat border-gray-400 w-full p-3 rounded mb-5 outline-none focus:border-black" name="age" placeholder="Your Age" style="color: #535353;" required />
          <!--phone feild-->
          <?php if (isset($_POST["submit"])) {
            if ($errorMessage != '') { ?>
              <div id="login-alert" class="text-red-600 text-sm pt-1">
                <?php if (isset($_POST["submit"])) {
                  echo $errorMessage;
                } ?>
              </div>
          <?php }
          } ?>
          <input type="text" id="phoneNum" onkeyup="phone_no()" class="block border font-montserrat border-gray-400 w-full p-3 rounded mb-2 outline-none focus:border-black" name="phoneNum" placeholder="Valid 10 digit mobile number" style="color: #535353;" required />
          <p id="phone_alert" class="mb-4 text-xs"></p>
          <button type="submit" name="submit" id="submit" class="w-full text-center font-oswald py-3 rounded text-white focus:outline-none my-1 transition duration-150 ease-in-out uppercase">Submit</button>
        </form>
      </div>
      <div class="cursor-default text-grey-dark text-sm font-montserrat mb-6" style="color: #535353;">
        Already booked a camp?
        <a id="link" class="underline cursor-pointer text-base font-montserrat transition duration-150 ease-in-out">
          See Here
        </a>.
      </div>
    </div>
  </div>
  </div>
  <footer class="lg:text-left cursor-default">
    <div class="text-center p-3 footer-bottom" style="background-color: #004e64;">
      <span class="text-white font-oswald">© 2022 Copyright:</span>
      <a class="text-white font-montserrat" href="index.html">Relief Camp</a>
    </div>
  </footer>
  <script>
    //phone validation
    var phone_val = 0;

    function phone_no() {
      var phone = document.getElementById("phoneNum");
      var phoneno = /^\d{10}$/;
      var filter = phone.value;
      if (filter.match(phoneno) && filter.length == 10) {
        document.getElementById('phone_alert').innerHTML = "phone number is valid";
        document.getElementById('phone_alert').style.color = "green";
        phone.classList.add('border-green-600');
        phone.classList.remove('border-red-600');
        phone_val = 0;
      } else if (!filter.match(phoneno)) {
        document.getElementById('phone_alert').innerHTML = "invalid phone number";
        document.getElementById('phone_alert').style.color = "red";
        phone.classList.remove('border-green-600');
        phone.classList.add('border-red-600');
        phone_val = 1;
      }
      if (filter.length == 0) {
        document.getElementById('phone_alert').innerHTML = "phone number must be 10 digits in length";
        document.getElementById('phone_alert').style.color = "red";
        phone.classList.remove('border-green-600');
        phone.classList.add('border-red-600');
        phone_val = 1;
      }
    }

    function validate(form) {
      if (phone_val == 1) {
        return false;
      } else if (phone_val == 0) {
        return true;
      }
    }
  </script>
</body>

</html>
