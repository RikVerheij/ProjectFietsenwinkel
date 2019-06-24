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

$f_naam = $row["first_name"];
$l_naam = $row["last_name"];
$email = $row["email"];
$phone = $row["phone"];
$username = $row["username"];
$password = $row["password"];
$newsletter = $row["newsletter"];

if (!empty($f_naam) && !empty($l_naam) && !empty($email) && !empty($phone) && !empty($username) && !empty($password) && !empty($newsletter)) {

    $f_naam = $_POST["first_name"];
    $l_naam = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $newsletter = "0"/*-$_POST["newsletter"]-*/;

    $updatesql = "UPDATE customer
        SET first_name='$f_naam', last_name='$l_naam', email='$email', phone='$phone', 
        username='$username', password='$password', newsletter='$newsletter'
        WHERE customer_id='$session_id'";
    $updateresult = mysqli_query($db, $updatesql);

} else {
    echo "De gegevens zijn niet bijgewerkt";
}
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <form action="" method="post">
                <table class="table">
                    <tbody>
                    <tr>
                        <th colspan="3" class="user_detail_h3"><h3><b>Wijzigen</b></h3></th>
                    </tr>
                    <tr>
                        <th><b>Naam:</b></th>
                        <td><input type="text" name="f_name" class="form-control"
                                   placeholder="<?= $row["first_name"] ?>"/>
                        </td>
                        <td><input type="text" name="l_name" class="form-control"
                                   placeholder="<?= $row["last_name"] ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <th><b>E-mail:</b></th>
                        <td colspan="2"><input type="email" class="form-control" name="email"
                                               placeholder="<?= $row["email"] ?>"/></td>
                    </tr>
                    <tr>
                        <th><b>Telefoon:</b></th>
                        <td colspan="2"><input type="tel" class="form-control" name="phone"
                                               placeholder="<?= $row["phone"] ?>"/></td>
                    </tr>
                    <tr>
                        <th><b>Gebruikersnaam:</b></th>
                        <td colspan="2"><input type="text" class="form-control" name="username"
                                               placeholder="<?= $row["username"] ?>"/></td>
                    </tr>
                    <tr>
                        <th><label>Wachtwoord:</label></th>
                        <td colspan="2"><input type="text" class="form-control" name="password"
                                               placeholder="<?= $row["password"] ?>"/></td>
                    </tr>
                    <!--                    <tr>-->
                    <!--                        <th><b>Nieuwsbrief:</b></th>-->
                    <!--                        <td colspan="2">-->
                    <!--                            <input type="checkbox" name="newsletter" -->
                    <?php //if ($row["newsletter"]){ ?><!-- checked --><?php //} ?><!---->
                    <!--                        </td>-->
                    <!--                    </tr>-->
                    <tr>
                        <td colspan="3"><input type="submit" class="ps-btn ps-btn--sm" value="Wijzigen"/></td>
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