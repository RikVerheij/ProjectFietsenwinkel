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
    <link href="favicon-bike.png" rel="icon">
    <meta name="author" content="Nghia Minh Luong">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>Chain Gang - Registreren</title>
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
    <link rel="stylesheet" href="Css/style.css">

    <?php
    include "Database/Config.php";

    session_start();


    if (!empty($_POST["first_name"]) && !empty($_POST["last_name"]) && !empty($_POST["email"]) && !empty($_POST["telephone"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $telephone = $_POST["telephone"];
        $username = $_POST["username"];
        $password = $_POST["password"];


        $sql = "  INSERT INTO customer (first_name, last_name, email, phone, username, password)
                VALUES ('$first_name','$last_name', '$email', '$telephone', '$username', '$password')";
        $result = mysqli_query($db, $sql);
        header("location: login.php");
    }
    include "header.php";
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">
        <link rel="stylesheet" href="Css/style.css">
    </head>
<body>
<h1 style="align-text: center"> Registreren</h1>
<div class="ps-login">
    <div class="ps-container">
        <div class="row">
            <div class="mx-auto">
                <form action="" method="POST">
                    <table>

                        <tr>
                            <div class="form-group">
                                <td colspan="1"><input type="text" class="form-control" name="first_name" id="Naam"
                                                       required placeholder="Voornaam"></td>
                            </div>
                            <div class="form-group">
                                <td colspan="1"><input type="text" class="form-control" name="last_name" id="Naam"
                                                       required placeholder="Achternaam"></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td colspan="2"><input type="email" class="form-control" name="email" id="Mail" required
                                                       placeholder="E-mail"></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td colspan="2"><input type="text" class="form-control" name="telephone" id="Tel"
                                                       required placeholder="Telefoonnummer"></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td colspan="2"><input type="text" class="form-control" name="username" id="Gebruiker"
                                                       required placeholder="Gebruikersnaam">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td colspan="2"><input type="password" class="form-control" name="password"
                                                       id="Wachtwoord" required placeholder="Wachtwoord">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <td><input type="submit" class="ps-btn ps-btn--sm" value=" Registeren "/></td>
                        </tr>


                    </table>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include "footer.php"
?>
</body>

</html>