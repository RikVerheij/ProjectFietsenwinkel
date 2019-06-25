<?php
include("Database/Config.php");
$sql = "SELECT * 
          FROM product"; //Query die uitgevoerd wordt
$result = mysqli_query($db, $sql);

//if (isset($_GET['sortby'])) {
//    // Capture that in a variable by that name
//    $sortby = $_GET['sortby'];
//    // Now to change the SQL query based on the sorting the user chose (price high to low, low to high, alphabetical and latest first)
//
//    if ($sortby = 'name') {
//        $sqlsortname = ( "SELECT * FROM product ORDER BY product_name ASC ");
//    }
//
//}

$sqlsortname = ("SELECT * FROM product ORDER BY product_name ASC ");

$sqlsortpricehilo = ("SELECT * FROM product ORDER BY price desc ");

session_start();
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
    <link href="favicon-bike.png" rel="icon">
    <meta name="author" content="Nghia Minh Luong">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>Chain Gang - Alle producten</title>
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
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]>
    <script src="../https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="../https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!--[if IE 7]>
<body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]>
<body class="ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]>
<body class="ie9 lt-ie10"><![endif]-->
<body class="ps-loading">
<div class="header--sidebar"></div>
<?php include 'header.php';
?>

<main class="ps-main">
    <div class="ps-products-wrap pt-80 pb-80">
        <div class="ps-products" data-mh="product-listing">
            <div class="ps-product-action">
                <div class="ps-product__filter">
                    <!--                    <button><a href="product-listing.php?sortby=name">Naam</a></button>-->
                    <!--                    <button><a href="product-listing.php?sortby=price">Prijs hoog naar Laag</a></button>-->
                    <form method="post" action="">
                        <select name="sort" class="ps-select selectpicker">
                            <option value="1">Shortby</option>

                            <option value="2">Naam

                            </option>

                            <option value="3">Price (Low to High)

                            </option>

                            <option value="3">Price (High to Low)</option>
                        </select>
                        <button type="submit">verzenden</button>
                    </form>

                </div>
            </div>
            <div class="ps-product__columns">
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="ps-product__column">
                        <a href="product-detail.php?Id=<?php echo $row["product_id"] ?>">
                            <div class="ps-shoe mb-30">
                                <div class="ps-shoe__thumbnail">
                                    <!--                            <div class="ps-badge"><span>New</span></div>-->
                                    <!--                            <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div>-->
                                    <?php echo '<img class="image" src="data:image/jpeg;base64,' . base64_encode($row['photo']) . '" alt="" />'; ?>
                                </div>
                                <div class="ps-shoe__content">
                                    <div class="ps-shoe__detail"><a class="ps-shoe__name"
                                                                    href="product-detail.php?Id=<?php echo $row["product_id"] ?>"><?= $row['product_name'], " ", $row['model'] ?></a>
                                        <p class="ps-shoe__categories"><?= $row['category'] ?></p>
                                        <span class="ps-shoe__price">

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
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
                <!--                <div class="ps-sidebar" data-mh="product-listing">-->
                <!--                    <aside class="ps-widget--sidebar ps-widget--category">-->
                <!--                        <div class="ps-widget__header">-->
                <!--                            <h3>Category</h3>-->
                <!--                        </div>-->
                <!--                        <div class="ps-widget__content">-->
                <!--                            <ul class="ps-list--checked">-->
                <!--                                <li class="current"><a href="product-listing.php">alles</a></li>-->
                <!--                                <li><a href="product-listing.php">Batavus</a></li>-->
                <!--                                <li><a href="product-listing.php">Gazelle</a></li>-->
                <!--                                <li><a href="product-listing.php">Football(105)</a></li>-->
                <!--                                <li><a href="product-listing.php">Soccer(108)</a></li>-->
                <!--                                <li><a href="product-listing.php">Trainning & game(47)</a></li>-->
                <!--                                <li><a href="product-listing.php">More</a></li>-->
                <!--                            </ul>-->
                <!--                        </div>-->
                <!--                    </aside>-->
                <!--                    <aside class="ps-widget--sidebar ps-widget--filter">-->
                <!--                        <div class="ps-widget__header">-->
                <!--                            <h3>Category</h3>-->
                <!--                        </div>-->
                <!--                        <div class="ps-widget__content">-->
                <!--                            <div class="ac-slider" data-default-min="100" data-default-max="750" data-max="1200"-->
                <!--                                 data-step="50" data-unit="$"></div>-->
                <!--                            <p class="ac-slider__meta">Price:<span class="ac-slider__value ac-slider__min"></span>-<span-->
                <!--                                        class="ac-slider__value ac-slider__max"></span></p><a-->
                <!--                                    class="ac-slider__filter ps-btn" href="#">Filter</a>-->
                <!--                        </div>-->
                <!--                    </aside>-->
                <!--                    <aside class="ps-widget--sidebar ps-widget--category">-->
                <!--                        <div class="ps-widget__header">-->
                <!--                            <h3>Merk</h3>-->
                <!--                        </div>-->
                <!--                        <div class="ps-widget__content">-->
                <!--                            <ul class="ps-list--checked">-->
                <!--                                <li class="current"><a href="product-listing.php">Nike(521)</a></li>-->
                <!--                                <li><a href="product-listing.php">Adidas(76)</a></li>-->
                <!--                                <li><a href="product-listing.php">Baseball(69)</a></li>-->
                <!--                                <li><a href="product-listing.php">Gucci(36)</a></li>-->
                <!--                                <li><a href="product-listing.php">Dior(108)</a></li>-->
                <!--                                <li><a href="product-listing.php">B&G(108)</a></li>-->
                <!--                                <li><a href="product-listing.php">Louis Vuiton(47)</a></li>-->
                <!--                            </ul>-->
                <!--                        </div>-->
                <!--                    </aside>-->
                <!--                </div>-->
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php';

//switch ($_POST['sort']) {
//    case '2':
//        $result = mysqli_query($db, $sqlsortname);
//        break;
//    case '3':
//        $result = mysqli_query($db, $sqlsortpricehilo);
//        break;
//    default:
//        $result = mysqli_query($db, $sql);
//}

if ($_POST['sort'] === '2') {
    echo "de naam werkt";
    $resultname = mysqli_query($db, $sqlsortname);

} elseif ($_POST['sort'] === '3') {
    echo "de prijs van hilo werkt";
    $resultpricehilo = mysqli_query($db, $sqlsortpricehilo);
}
?>
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