<?php
session_start();
require_once("includes/db_connect.php");

if (isset($_POST["confirm"])) {
    # code...
    // this is user's otp that they will enter
    $user_otp = htmlentities($_POST['otp_user']);
    // this otp was generated from previous user login page
    $otp = $_SESSION['otp'];
    if ($otp == $user_otp) { 
        $name = mysqli_real_escape_string($connect, $_SESSION["username"]);
        $age = mysqli_real_escape_string($connect, $_SESSION["age"]);
        $phoneNum = mysqli_real_escape_string($connect, $_SESSION["phoneNum"]);
        $sqlQuery = "INSERT INTO `user_info`(`username`, `userAge`, `phoneNum`) VALUES ('$name','$age','$phoneNum')";
        $resultSet = mysqli_query($connect, $sqlQuery) or die("database error:" . mysqli_error($connect));
        
        // if (mysqli_query($connect, $sqlQuery)) {
            // header("Location:");
        // }
        ?>
        <script>
            alert('Login/Registration Successful');
        </script>
    <?php
    } else { ?>
        <script>
            alert('Wrong OTP');
        </script>
    <?php
    }
} ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter OTP</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        #confirm {
            background-color: #004e64;
            color: #FFFFFF;
        }

        #confirm:hover {
            background-color: #00a5cf;
            color: #004e64;
        }
    </style>
</head>

<body>
    <div class="w-full">
        <div class="max-w-lg mx-auto">
            <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="" method="POST">
                <h3 class="text-xl font-oswald text-center font-medium" style="color: #202020;">Enter OTP</h3>
                <div>
                    <input type="text" name="otp_user" id="otp_user" class="bg-gray-200 border border-gray-400 focus:border-gray-800 focus:bg-gray-50 text-sm rounded block w-full p-2.5 outline-none placeholder:text-gray-600" placeholder="Enter 6 digit code" required>
                </div>
                <div class="flex justify-center items-cente">
                    <button id="confirm" name="confirm" type="submit" class="font-medium rounded-lg text-sm w-fit px-5 py-2.5 text-center">CONFIRM</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>