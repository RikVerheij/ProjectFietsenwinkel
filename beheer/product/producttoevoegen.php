<?php


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

include '../header.php';

$user_check = $_SESSION['login_admin'];

if (!isset($_SESSION['login_admin'])) {
    header("location:login.php");
}

?>
<body>
<main class="ps-main">
    <div class="ps-container ">
        <div class="row col-lg-3">
            <?php
            if (!empty($_POST["product_name"]) && !empty($_POST["category"]) && !empty($_POST["model"]) && !empty($_POST["price"]) && !empty($_POST["photo"]) && !empty($_POST["description"]) && !empty($_POST["release_date"]) && !empty($_POST["sale"])) {
                $product_name = $_POST["product_name"];
                $category = $_POST["category"];
                $model = $_POST["model"];
                $price = $_POST["price"];
                $photo = $_POST["photo"];
                $description = $_POST["description"];
                $release_date = $_POST["release_date"];
                $sale = $_POST["sale"];


                $sql = "  INSERT INTO product (product_name, category, model, price, photo, description, release_date, sale,)
                VALUES ('$product_name','$category', '$model', '$price', '$photo', '$description', '$release_date','$sale')";
                $result = mysqli_query($db, $sql);

                print_r($result);
                header("location: ../index.php");
            }

            ?>

            <form action="" method="POST">
                <table>

                    <tr>
                        <div class="form-group">
                            <td><input type="text" class="form-control" name="product_name" id="Naam" placeholder="Product naam"></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <td><input type="text" class="form-control" name="category" id="Naam" placeholder="categorie"></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <td colspan="2"><input type="text" class="form-control" name="model" id="Mail" placeholder="model"></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <td colspan="2"><input type="text" class="form-control" name="price" id="Tel" placeholder="prijs"></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <td colspan="2"><input type="file" class="form-control" name="photo" id="foto" placeholder="foto">
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <td colspan="2"><textarea type="text" class="form-control" name="description" id="description" placeholder="beschrijving">
                                </textarea>
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <td colspan="2"><input type="date" class="form-control" name="release_date" id="datum" placeholder="datum">
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <td colspan="2"><input type="text" class="form-control" name="sale" id="street" placeholder="kortings prijs">
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <td><input type="submit" class="ps-btn ps-btn--sm" value=" Product toevoegen "/></td>
                    </tr>

                </table>
            </form>

        </div>
    </div>
</main>
</body>
</html>
