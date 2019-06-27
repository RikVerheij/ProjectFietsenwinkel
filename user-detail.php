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
WHERE customer_id = '$session_id'"; //Query die uitgevoerd wordt
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

?>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <table class="table">
                <tbody>
                <tr>
                    <th colspan="2" class="user_detail_h3"><h3><a
                                    href="user-detail_personaldata.php?Id=<?php echo $row["customer_id"] ?>"><b>Persoonsgegevens
                                    <i class="fa fa-pencil" style="font-size:24px"></i></b></a></h3></th>
                </tr>
                <tr>
                    <th><b>Naam:</b></th>
                    <td><?= $row["first_name"], " ", $row["last_name"] ?></td>
                </tr>
                <tr>
                    <th><b>E-mail:</b></th>
                    <td><?= $row["email"] ?></td>
                </tr>
                <tr>
                    <th><b>Telefoon:</b></th>
                    <td><?= $row["phone"] ?></td>
                </tr>
                <tr>
                    <th><b>Gebruikersnaam:</b></th>
                    <td><?= $row["username"] ?></td>
                </tr>
                <tr>
                    <th><b>Wachtwoord:</b></th>
                    <td><?= $row["password"] ?></td>
                </tr>
                <tr>
                    <th><b>Nieuwsbrief:</b></th>
                    <td>
                        <?php if ($row["newsletter"] == 1) { ?>
                            Aangemeld
                        <?php } else { ?>
                            Nog niet aangemeld
                        <?php } ?>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-6 ">
            <table class="table">
                <tbody>
                <tr>
                    <th colspan="2" class="user_detail_h3"><h3><a
                                    href="user_change_adress.php?Id=<?php echo $row["customer_id"] ?>"><b>Adres
                                    <i class="fa fa-pencil" style="font-size:24px"></i></b></a></h3></th>
                </tr>
                <tr>
                    <th><b>Plaats:</b></th>
                    <td><?= $row["city"] ?></td>
                </tr>
                <tr>
                    <th><b>Straat:</b></th>
                    <td><?= $row["street"] ?></td>
                </tr>
                <tr>
                    <th><b>Postcode:</b></th>
                    <td><?= $row["zipcode"] ?></td>
                </tr>
                <tr>
                    <th><b>Huisnummer:</b></th>
                    <td><?= $row["house_number"] ?></td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>


<?php
include("footer.php");
?>