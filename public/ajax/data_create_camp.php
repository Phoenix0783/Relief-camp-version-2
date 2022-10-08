<?php
require_once("../includes/db_connect.php");
//$flag;
session_start();
$username = $_SESSION["campUser"];
$phoneNo = $_SESSION["phone1"];
//$username = "user1";
$address = $_POST["places"];
$campTitle = $_POST["camp_title"];
$campDescription = $_POST["camp_desc"];
$campCapacity = $_POST["camp_capacity"];

//map details
$access_token = $_SESSION['access_token'];
$authorization = "Authorization: Bearer $access_token";

$string = preg_replace("/[,\s]/", "%20", $address);
$url = "https://atlas.mapmyindia.com/api/places/geocode?address=$string";
    
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
    "accept: application/json",
    $authorization,
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);

$json = json_decode(utf8_decode($resp), true);
echo json_encode($json);

$latitude = $json["copResults"]["latitude"];
$longitude = $json["copResults"]["longitude"];
$district = $json["copResults"]["district"];
$city = $json["copResults"]["city"];
$state = $json["copResults"]["state"];
$pincode = $json["copResults"]["pincode"];
$status = "pending";

$sqlQuery = "UPDATE `create_camp` SET `phonenum`='$phoneNo',`camp_title`='$campTitle',`camp_address`='$address',`latitude`='$latitude',`longitude`='$longitude',`pincode`='$pincode',`district`='$district',`city`='$city',`state`='$state',`camp_description`='$campDescription',`capacity`='$campCapacity',`Status`='$status' WHERE `create_camp`.`username` = '$username'";
$result = mysqli_query($connect, $sqlQuery);
if(!$result){
    header("refresh:5");
} else {
    unset($_SESSION['access_token']);
    unset($_SESSION["phoneNo"]);

}

