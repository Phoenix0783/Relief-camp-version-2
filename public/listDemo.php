<?php
require_once("includes/db_connect.php");
$query = "select user,id,status from listDemo where status = 'no'";
$query2 = "select user,id,status from listDemo where status = 'yes'";
$result = mysqli_query($connect, $query);
$result2 = mysqli_query($connect, $query2);

if (isset($_POST["id"])) {
    $user = $_POST["id"];
    $query = "UPDATE `listdemo` SET `status`='yes' WHERE user = '$user'";
    $result = mysqli_query($connect, $query);
}
if (isset($_POST["ids"])) {
    $user = $_POST["ids"];
    $query = "DELETE FROM `listdemo` WHERE user = '$user'";
    $result = mysqli_query($connect, $query);
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Available gyms</title>
    <script src="../src/js/listDemo.js" defer></script>
    <script src="js/jquery-3.6.0.min.js"></script>
</head>
<?php while ($row = mysqli_fetch_array($result)) { ?>
    <p><?php echo $row['user'] ?> | <?php echo $row['id'] ?> | <?php echo $row['status'] ?></p>
    <button name="remove" class="remove" id="<?php echo $row['user'] ?>" onclick="getId(this.id); reject_req();">remove</button>
    <button name="accept" class="accept" id="<?php echo $row['user'] ?>" onclick="getId(this.id); accept_req();">accept</button>
<?php } ?>
<br><br><br><br><br>
<?php while ($row = mysqli_fetch_array($result2)) { ?>
    <p><?php echo $row['user'] ?> | <?php echo $row['id'] ?> | <?php echo $row['status'] ?></p>
    <button id="<?php echo $row['user'] ?>" onclick="getId(this.id); reject_req();">delete</button>
<script>
</script>
<?php }
 mysqli_close($connect); ?>
</body>

</html>