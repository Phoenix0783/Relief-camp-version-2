<?php
require_once("../includes/db_connect.php");
$campTitle = $_GET["campTitle"];
$lat;
$long;
$query = "SELECT `phonenum`, `camp_title`, `camp_address`, `camp_description`, `capacity`, `latitude`, `longitude`, `images` FROM `create_camp` WHERE camp_title = '$campTitle'";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_array($result)) {
    $lat = $row["latitude"];
    $long = $row["longitude"];
    // echo json_encode();
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Camp Request Detail</title>
        <link rel="stylesheet" href="../../src/css/tailwind.css">
        <link rel="stylesheet" href="../../src/css/dashboard/camp_dashboard.css">
        <link rel="stylesheet" href="../../src/css/dashboard/admin_dashboard.css">
        <script src="../js/jquery-3.6.0.min.js"></script>
        <!-- <script src="../../src/js/camp_request_detail.js"></script> -->
        <script>
            function initMap() {
                // The location of Uluru
                const city_as_centre = {
                    lat: <?php echo $lat ?>,
                    lng: <?php echo $long ?>
                };
                // The map, centered at Uluru
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 14,
                    center: city_as_centre,
                });
                // The marker, positioned at Uluru
                const marker = new google.maps.Marker({
                    position: city_as_centre,
                    map: map,
                });
            }
        </script>
    </head>

    <body>
        <div id="dashboard_div" class="">
            <div class="grid grid-cols-1 md:grid-cols-2 p-4 gap-4">
                <div class="camp-box p-3 rounded">
                    <h1 class="pb-4 font-semibold text-xl font-oswald">Camp Title: <?php echo $row["camp_title"] ?></h1>
                    <p class="camp-description font-montserrat">
                        <?php echo $row["camp_description"] ?>
                    </p>
                    <div class="flex justify-between mt-4">
                        <p class="text-gray-700 font-montserrat text-base font-semibold mb-2">Total Capacity : <f id="total-capacity" class="font-normal"><?php echo $row["capacity"] ?></f>
                        </p>
                    </div>
                </div>
                <div class="camp-box p-3 rounded">
                    <h1 class="pb-4 font-semibold text-xl font-oswald">Address</h1>
                    <p class="camp-description font-montserrat">
                        <?php echo $row["camp_address"] ?>
                    </p>
                    <p class="text-gray-700 font-montserrat text-base mt-5 font-semibold">Contact Number : <f class="font-normal"><?php echo $row["phonenum"] ?></f>
                    </p>
                </div>
            </div>
            <div class="block md:flex gap-4 p-4 ">
                <div class="bg-sectionBlue p-3 w-full h-fit md:w-2/6 rounded mb-4 md:mb-0 col-span-2">
                    <div id="map" class="camp-box h-60 md:h-72">
                    </div>
                </div>
                <div class="camp-box p-3 w-full md:w-2/3 rounded col-span-3">
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 md:gap-1">
                        <?php $images = json_decode($row["images"]);
                        foreach ($images as $key => $value) { ?>
                            <div>
                                <img alt="gallery" class="w-full object-cover object-center block rounded" src="../images/create_camp/<?php echo $value ?>">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php }
mysqli_close($connect); ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBakjCgQvZoAyCEB0PfKU1EkjcoKLITvZw&callback=initMap&v=weekly" async></script>
    </body>

    </html>