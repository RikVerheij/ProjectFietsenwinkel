<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7"><![endif]-->
<!--[if IE 8]>
<html class="ie ie8"><![endif]-->
<!--[if IE 9]>
<html class="ie ie9"><![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="Nghia Minh Luong">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>Sky - Product Detail</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900"
          rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="plugins/revolution/css/navigation.css">
    <!-- Custom-->
    <link rel="stylesheet" href="css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>

<?php

include('Database/Config.php');
session_start();

$user_check = $_SESSION['login_user'];

if (!isset($_SESSION['login_user'])) {
    header("location:login.php");
}

include("header.php");

$session_id = $_SESSION['login_user'];

$sql = "
SELECT * 
FROM customer
WHERE customer_id = '$session_id'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

$city = $row["city"];
$street = $row["street"];
$zipcode = $row["zipcode"];
$hnumber = $row["house_number"];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($city) && isset($street) && isset($zipcode) && isset($hnumber)) {

        if (($_POST["city"] !== "")) {
            $city = $_POST["city"];
        } else {
            $city = $row["city"];
        }

        if (($_POST["street"] !== "")) {
            $street = $_POST["street"];
        } else {
            $street = $row["street"];
        }

        if (($_POST["zipcode"] !== "")) {
            $zipcode = $_POST["zipcode"];
        } else {
            $zipcode = $row["zipcode"];
        }

        if (($_POST["hnumber"] !== "")) {
            $hnumber = $_POST["hnumber"];
        } else {
            $hnumber = $row["house_number"];
        }

        $updatesql = "UPDATE customer
        SET city='$city', street='$street', zipcode='$zipcode', house_number='$hnumber'
        WHERE customer_id='$session_id'";
        $updateresult = mysqli_query($db, $updatesql);

        ?>
        <script type="text/javascript">location.href = 'user-detail.php';</script>
        <?php
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 change-adress">
            <form action="" method="post">
                <table class="table">
                    <tbody>
                    <tr>
                        <th colspan="6" class="user_detail_h3"><h3><b>Wijzigen</b></h3></th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <th><b>Stad:</b></th>
                        <td colspan="2"><input type="text" class="form-control" name="city"
                                               placeholder="<?= $row["city"] ?>"/></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <th><label>Straat:</label></th>
                        <td colspan="2"><input type="text" class="form-control" name="street"
                                               placeholder="<?= $row["street"] ?>"/></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <th><b>Postcode:</b></th>
                        <td colspan="2"><input type="text" class="form-control" name="zipcode"
                                               placeholder="<?= $row["zipcode"] ?>"/></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <th><label>Huisnummer:</label></th>
                        <td colspan="2"><input type="text" class="form-control" name="hnumber"
                                               placeholder="<?= $row["house_number"] ?>"/></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td colspan="2"><input type="submit" class="ps-btn ps-btn--sm" value="Wijzigen"/></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>


<?php
include("footer.php");
?>