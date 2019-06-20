<?php
include("Database/Config.php");
$id = $_GET['Id'];

$sql = "SELECT * FROM product WHERE product_id='$id';";
$sth = $db->query($sql);
$resultphoto = mysqli_fetch_array($sth);
$resultname = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($resultname);

$sqlid = "SELECT * FROM product WHERE ID='$id'";
$resultid = mysqli_query($db, $sqlid);

$sqlcountreview = "SELECT count(*) FROM review WHERE product_id='$id'";
$resultcountreview = mysqli_query($db, $sqlcountreview);
$rowcountresult = mysqli_fetch_assoc($resultcountreview);

$sqlreview = "SELECT * FROM review WHERE product_id = '$id'";
$resultreview = mysqli_query($db, $sqlreview);


if (!empty($_POST["description"])) {
    $description = $_POST["description"];
    $date = date("Y-m-d");
    $sqladdreview = "  INSERT INTO review (description, date, product_id )
                VALUES ('$description', '$date', '$id')";

    $result = mysqli_query($db, $sqladdreview);
}
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
<?php include 'header.php'

?>
<main class="ps-main">
    <div class="test">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                </div>
            </div>
        </div>
    </div>
    <div class="ps-product--detail pt-60">
        <div class="ps-container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-lg-offset-1">

                    <?php if (isset($resultphoto)) { ?>
                        <div class="ps-product__thumbnail">
                            <div class="ps-product__preview">
                                <div class="ps-product__variants">
                                    <div class="item"><?php echo '<img class="image" src="data:image/jpeg;base64,' . base64_encode($resultphoto['photo']) . '" alt="" />'; ?></div>
                                </div>
                            </div>
                            <div class="ps-product__image">
                                <div class="item"><?php echo '<img class="image" src="data:image/jpeg;base64,' . base64_encode($resultphoto['photo']) . '" alt="" />'; ?></div>
                            </div>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="ps-product__thumbnail">
                            <div class="ps-product__preview">
                                <div class="ps-product__variants">
                                    <div class="item"><img class="image" src="images/fiets.png" alt=""></div>
                                </div>
                            </div>
                            <div class="ps-product__image">
                                <div class="item"><img class="image" src="images/fiets.png" alt=""></div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                    <div class="ps-product__thumbnail--mobile">
                        <div class="ps-product__main-img"><img src="images/shoe-detail/1.jpg" alt=""></div>
                        <div class="ps-product__preview owl-slider" data-owl-auto="true" data-owl-loop="true"
                             data-owl-speed="5000" data-owl-gap="20" data-owl-nav="true" data-owl-dots="false"
                             data-owl-item="3" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3"
                             data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on"><img
                                    src="images/shoe-detail/1.jpg" alt=""><img src="images/shoe-detail/2.jpg"
                                                                               alt=""><img
                                    src="images/shoe-detail/3.jpg" alt=""></div>
                    </div>
                    <div class="ps-product__info">
                        </select><a href="">lees alle <?php echo implode($rowcountresult) ?> review(s)</a>
                    </div>
                    <h1> <?= $row['product_name'], " ", $row['category'], " ", $row['model'] ?> </h1>
                    <p class="ps-product__category"><a href="#"> <?= $row['category'] ?></a>,<a
                                href="#"> <?= $row['product_name'] ?></a>
                    <h3 class="ps-product__price">

                        <?php if (isset($row['sale']) && $row['sale'] != 0) {
                            ?>
                            € <?= $row['sale'] ?>
                            <del>€<?= $row['price'] ?></del>
                            <?php
                        } else {
                            ?>
                            € <?= $row['price'];
                        }
                        ?>

                    </h3>
                    <div class="ps-product__block ps-product__quickview">
                        <h3>Beschrijving</h3>
                        <p><?= $row['description'] ?></p>
                    </div>
                    <div class="ps-product__shopping"><a class="ps-btn mb-10" href="cart.php">Add to cart<i
                                    class="ps-icon-next"></i></a>
                        <div class="ps-product__actions"><a class="mr-10" href="whishlist.php"><i
                                        class="ps-icon-share"></i></a></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="ps-product__content mt-50">
                    <h2>Reviews</h2>
                </div>
                <div>
                    <p class="mb-20"><?php echo implode($rowcountresult) ?> review(s) van
                        <strong><?= $row['product_name'], " ", $row['category'], " ", $row['model'] ?></strong></p>
                    <div class="ps-review">
                        <?php while ($rowreview = mysqli_fetch_assoc($resultreview)) { ?>
                            <div class="ps-review__content">
                                <header>
                                    <p><?php echo date('j-n-Y', strtotime($rowreview['date'])); ?></p>
                                </header>
                                <p>
                                    <?php echo $rowreview['description'] ?>
                                </p>
                            </div>
                        <?php } ?>
                    </div>
                    <?php if (session_status() == PHP_SESSION_ACTIVE) { ?>
                        <form class="ps-product__review" action="" method="post">
                            <h4>SCHRIJF EEN REVIEW</h4>
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ">
                                    <div class="form-group">
                                        <label>Uw review:</label>
                                        <textarea class="form-control" name="description" rows="6"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="ps-btn ps-btn--sm">Verzend<i class="ps-icon-next"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php } else { ?>

                        <div class="review_disabled">
                            <h4>LOG EERST IN VOOR U EEN REVIEW SCHRIJFT</h4>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php' ?>
</main>
<!-- JS Library-->
<script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
<script type="text/javascript" src="plugins/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="plugins/gmap3.min.js"></script>
<script type="text/javascript" src="plugins/imagesloaded.pkgd.js"></script>
<script type="text/javascript" src="plugins/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="plugins/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="plugins/slick/slick/slick.min.js"></script>
<script type="text/javascript" src="plugins/elevatezoom/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script>
<script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript"
        src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<!-- Custom scripts-->
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>