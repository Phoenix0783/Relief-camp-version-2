<?php
require_once("../includes/db_connect.php");
session_start();

if (isset($_POST["user_name"])) {
    $username = mysqli_real_escape_string($connect, $_POST["user_name"]);
    $sqlQueryUsername = "SELECT * FROM camp_register WHERE username='" . $username . "'";
    $result = mysqli_query($connect, $sqlQueryUsername);
    $userCount = mysqli_num_rows($result);
    echo $userCount;
    die;
}

if (isset($_POST["phone_num"])) {
    // selecting the entered phone num from database
    $phoneNum = mysqli_real_escape_string($connect, $_POST["phone_num"]);
    $sqlQueryPhoneNum = "SELECT * FROM camp_register WHERE phoneNum='" . $phoneNum . "'";
    $result = mysqli_query($connect, $sqlQueryPhoneNum);
    $phoneCount = mysqli_num_rows($result);
    echo $phoneCount;
    die;
}

if (isset($_POST["phone"]) && isset($_POST["username"])) {
    $_SESSION["campUser"] = $_POST["username"];
    $_SESSION["phone1"] = $_POST["phone"];
    $_SESSION["password1"] = $_POST["password"];
    $phoneNum = mysqli_real_escape_string($connect, $_POST["phone"]);
    $sqlQueryPhoneNum = "SELECT * FROM camp_register WHERE phoneNum='" . $phoneNum . "'";
    $result1 = mysqli_query($connect, $sqlQueryPhoneNum);
    $phoneCount = mysqli_num_rows($result1);
    $username = mysqli_real_escape_string($connect, $_POST["username"]);
    $sqlQueryUsername = "SELECT * FROM camp_register WHERE username='" . $username . "'";
    $result2 = mysqli_query($connect, $sqlQueryUsername);
    $userCount = mysqli_num_rows($result2);
    if ($phoneCount == 0 && $userCount == 0) {
        $curl = curl_init();
        $num = $_POST["phone"];
        $otp = rand(100000, 999999);
        $_SESSION["sentOtp"] = $otp;
        echo json_encode("OTP: " . $_SESSION["sentOtp"]);

        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=SHCLbYrR8okiOsf93F5QqlvKZ2dnexAGc4a6mDw0WyhV7EtXJg2IwROMPrCYxkLigjnpSTEcvl8HoXGQ&variables_values=$otp&route=otp&numbers=$num",
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 30,
        //     CURLOPT_SSL_VERIFYHOST => 0,
        //     CURLOPT_SSL_VERIFYPEER => 0,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "GET",
        //     CURLOPT_HTTPHEADER => array(
        //         "cache-control: no-cache"
        //     ),
        // ));

        // $response = curl_exec($curl);
        // $err = curl_error($curl);
        // curl_close($curl);

        // if ($err) {
        //     echo json_encode(
        //         array(
        //             'status' => false,
        //             'message' => "OTP has Issue To Send Data"
        //         )
        //     );
        // } else {
        //     echo json_encode(
        //         array(
        //             'status' => true,
        //             'message' => "OTP Sent To User Number"
        //         )
        //     );
        // }
    }
}

if (isset($_POST["otp"])) {
    $flag = 0;
    // comparing user's otp and generated otp
    if ($_SESSION["sentOtp"] != $_POST["otp"]) {
        $flag = 1;
    } else {
        $username = $_SESSION["campUser"];
        $phoneNum = $_SESSION["phone1"];
        $password = $_SESSION["password1"];
        $sqlQuery = "INSERT INTO `camp_register`(`username`, `phoneNum`, `password`) VALUES ('$username','$phoneNum','$password')";
        $result = mysqli_query($connect, $sqlQuery);
        if ($result) {
            $userQuery = "INSERT INTO `create_camp`(`username`) VALUES ('$username')";
            $userResult = mysqli_query($connect, $userQuery); 
            $flag = 0;
            unset($_SESSION["password1"]);
            unset($_SESSION["sentOtp"]);
        } else {
            $flag = 1;
        }
    }
    echo $flag;
}
mysqli_close($connect);
?>
