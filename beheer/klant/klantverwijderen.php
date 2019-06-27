<?php

include '../header.php';
?>
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
        <link href="../../apple-touch-icon.png" rel="apple-touch-icon">
        <link href="../../favicon-bike.png" rel="icon">
        <meta name="author" content="Nghia Minh Luong">
        <meta name="keywords" content="Default Description">
        <meta name="description" content="Default keyword">
        <title>Chain Gang - Home</title>
        <!-- Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900"
              rel="stylesheet">
        <link rel="stylesheet" href="../../plugins/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../plugins/ps-icon/style.css">
        <!-- CSS Library-->
        <link rel="stylesheet" href="../../plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../plugins/owl-carousel/assets/owl.carousel.css">
        <link rel="stylesheet" href="../../plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
        <link rel="stylesheet" href="../../plugins/slick/slick/slick.css">
        <link rel="stylesheet" href="../../plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="../../plugins/Magnific-Popup/dist/magnific-popup.css">
        <link rel="stylesheet" href="../../plugins/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="../../plugins/revolution/css/settings.css">
        <link rel="stylesheet" href="../../plugins/revolution/css/layers.css">
        <link rel="stylesheet" href="../../plugins/revolution/css/navigation.css">
        <!-- Custom-->
        <link rel="stylesheet" href="../../Css/style.css">
        <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
        <!--WARNING: Respond.js doesn't work if you view the page via file://-->
        <!--[if lt IE 9]>
        <script src="../https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="../https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    </head>
<?php
include('../../Database/Config.php');
session_start();

$user_check = $_SESSION['login_user'];

if (!isset($_SESSION['login_user'])) {
    header("location:login.php");
}

?>
    <body>
    <main class="ps-main">
        <div class="ps-container ">
            <div class="row col-lg-3">
                <?php
                if(isset($_POST['save'])){
                    $sql = "INSERT INTO customer (first_name, last_name, email, phone, username, password, city, street, zipcode,house_number)
        VALUES (".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["username"]."','".$_POST["password"]."','".$_POST["city"]."','".$_POST["street"]."','".$_POST["zipcode"]."','".$_POST["house_number"].")";
                }

                ?>

                <form method="post">
                    <label id="first"> First name:</label><br/>
                    <input type="text" name="first_name"><br/>

                    <label id="first"> last name:</label><br/>
                    <input type="text" name="last_name"><br/>

                    <label id="first">Email:</label><br/>
                    <input type="text" name="email"><br/>

                    <label id="first">Phone:</label><br/>
                    <input type="text" name="phone"><br/>

                    <label id="first">Username:</label><br/>
                    <input type="text" name="username"><br/>

                    <label id="first">Password:</label><br/>
                    <input type="password" name="password"><br/>

                    <label id="first">City:</label><br/>
                    <input type="text" name="city"><br/>

                    <label id="first">Street:</label><br/>
                    <input type="text" name="street"><br/>

                    <label id="first">Zipcode:</label><br/>
                    <input type="text" name="zipcode"><br/>

                    <label id="first">House number:</label><br/>
                    <input type="text" name="house_number"><br/>

                    <button type="submit" name="save">save</button>
                    <button type="submit" name="get">get</button>
                </form>

            </div>
        </div>
    </main>

    </body>
</html>
