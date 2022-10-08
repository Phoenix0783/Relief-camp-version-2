<?php
require_once("../includes/db_connect.php");
session_start();
$flag;
$uploadsDir = "../images/create_camp/";
$allowedFileType = array('jpg', 'png', 'jpeg');

// Validate if files exist
if (!empty(array_filter($_FILES['fileUpload']['name']))) {
    // Loop through file items
    $images = [];
    foreach ($_FILES['fileUpload']['name'] as $id => $val) {
        // Get files upload path
        $fileName        = $_FILES['fileUpload']['name'][$id];
        $tempLocation    = $_FILES['fileUpload']['tmp_name'][$id];
        $targetFilePath  = $uploadsDir . $fileName;
        $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
        $uploadOk = 1;
        if (in_array($fileType, $allowedFileType)) {
            if (move_uploaded_file($tempLocation, $targetFilePath)) {
                $images[] = $fileName;
            } else {
                $flag = 0;
                $response = array(
                    "status" => "alert-danger",
                    "message" => "File coud not be uploaded."
                );
            }
        } else {
            $flag = 1;
            $response = array(
                "status" => "alert-danger",
                "message" => "Only .jpg, .jpeg and .png file formats allowed."
            );
        }
    }
    // Add into MySQL database
    if (!empty($images)) {
        $images = json_encode($images);
        $username = $_SESSION["campUser"];
        //$username = "user1";
        $q = "UPDATE `create_camp` SET `images` = '$images' WHERE `create_camp`.`username` = '$username'";
        $sql = mysqli_query($connect, $q);
        if ($sql) {
            $flag = 2;
            $response = array(
                "status" => "alert-success",
                "message" => "Files successfully uploaded.",
                "data" => $images
            );
            unset($_SESSION["campUser"]);
        } else {
            $flag = 3;
            $response = array(
                "status" => "alert-danger",
                "message" => "Files coudn't be uploaded due to database error."
            );
        }
    }
} 
// echo json_encode($flag);
//echo json_encode($response);