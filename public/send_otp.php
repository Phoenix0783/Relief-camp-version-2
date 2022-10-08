<?php
session_start();
include_once("includes/db_connect.php");
$curl = curl_init();

if (isset($_POST['submit'])) {    
    $_SESSION["username"] = htmlentities($_POST["username"]);
    $_SESSION["age"] = htmlentities($_POST["age"]);
    $_SESSION["phoneNum"] = htmlentities($_POST["phoneNum"]);
    $sqlQuery = "SELECT phoneNum FROM user_info WHERE phoneNum='".$_SESSION["phoneNum"]."'";
    $resultSet = mysqli_query($connect, $sqlQuery) or die("database error:". mysqli_error($connect));
    echo $resultSet;
    $isValidLogin = mysqli_num_rows($resultSet);	

    if ($isValidLogin) {
        $errorMessage = "A User with this mobile number already exists";
    } else {
        $num = $_SESSION["phoneNum"];
        $otp = rand(100000,999999);
        $_SESSION['otp']=$otp;
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
        // else {
        //   var_dump($response) ;
        // }
    }
}

