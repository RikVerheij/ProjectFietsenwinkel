<?php
include("Database/Session.php");
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
    <title>Chain Gang - Home</title>
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
include 'header.php';
include 'Functions/functions.php';

?>
<main class="ps-main">
    <div class="ps-banner">
        <div class="rev_slider fullscreenbanner" id="home-banner">
            <ul>
                <li class="ps-banner" data-index="rs-2972" data-transition="random" data-slotamount="default"
                    data-hideafterloop="0" data-hideslideonmobile="off" data-rotate="0"><img class="rev-slidebg"
                                                                                             src="images/slider/fiets_slide_1.jpg"
                                                                                             alt=""
                                                                                             data-bgposition="center center"
                                                                                             data-bgfit="cover"
                                                                                             data-bgrepeat="no-repeat"
                                                                                             data-bgparallax="5"
                                                                                             data-no-retina>
                    <div class="tp-caption ps-banner__header" id="layer-1" data-x="left"
                         data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']"
                         data-voffset="['-150','-120','-150','-170']" data-width="['none','none','none','400']"
                         data-type="text" data-responsive_offset="on"
                         data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">

                    </div>
                    <div class="tp-caption ps-banner__title" id="layer21" data-x="['left','left','left','left']"
                         data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']"
                         data-voffset="['-60','-40','-50','-70']" data-type="text" data-responsive_offset="on"
                         data-textAlign="['center','center','center','center']"
                         data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <p class="text-uppercase">CHAIN GANG</p>
                    </div>
                    <div class="tp-caption ps-banner__description" id="layer211" data-x="['left','left','left','left']"
                         data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']"
                         data-voffset="['30','50','50','50']" data-type="text" data-responsive_offset="on"
                         data-textAlign="['center','center','center','center']"
                         data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <p>Hoe kies je dan de perfecte fiets? En wie zorgt ervoor dat je lekker door kunt blijven trappen, wat er ook gebeurt?
                            <br> Bij Chaingang.nl regelen wij het! Want wij hebben maar 1 missie: heel Nederland op de fiets krijgen.</p>
                    </div>
                    <a class="tp-caption ps-btn" id="layer31" href="#" data-x="['left','left','left','left']"
                       data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']"
                       data-voffset="['120','140','200','200']" data-type="text" data-responsive_offset="on"
                       data-textAlign="['center','center','center','center']"
                       data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">Bestel Nu
                        <i class="ps-icon-next"></i></a
                </li>
            </ul>
    </div>


        <div class="ps-section--offer">
        <div class="ps-column"><a class="ps-offer" href="product-listing.php"><img src="images/banner/e_fietsen.jpg"
                                                                                   alt=""></a></div>
        <div class="ps-column"><a class="ps-offer" href="product-listing.php"><img src="images/banner/vrouwen_fietsen.jpg"
                                                                                   alt=""></a></div>
    </div>
        <div class="ps-section--offer">
            <div class="ps-column"><a class="ps-offer" href="product-listing.php"><img src="images/banner/mannen_fietsen.jpg"
                                                                                       alt=""></a></div>
            <div class="ps-column"><a class="ps-offer" href="product-listing.php"><img src="images/banner/alle_fietsen.jpg"
                                                                                       alt=""></a></div>

        </div>

        <!--Google Maps-->
        <?php  googlemaps() ?>



    <div class="ps-section ps-home-blog pt-80 pb-80">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <h2 class="ps-section__title" data-mask="Reviews">- Recente reviews</h2>

            </div>
            <div class="ps-section__content">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ps-post">
                            <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.php"></a><img
                                        src="images/blog/bike_1.jpg" alt=""></div>
                            <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.php">Gazelle Herenfiets 1</a>
                                <p class="ps-post__meta"><span>Door:<a class="mr-5"
                                                                     href="#">Peter Sanders</a></span> -<span
                                            class="ml-5">Jun 10, 2019</span></p>
                                <p>Hele fijne fiets die ook sportief oogt. Snelle levering en verwerking, buiten dat ook een goede klantenservice die altijd bereikbaar is.</p><a class="ps-morelink" href="blog-detail.php">Lees meer<i
                                            class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ps-post">
                            <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.php"></a><img
                                        src="images/blog/2.jpg" alt=""></div>
                            <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.php">Unpacking the
                                    Breaking2 Race Strategy</a>
                                <p class="ps-post__meta"><span>By:<a class="mr-5"
                                                                     href="blog.html">Alena Studio</a></span> -<span
                                            class="ml-5">Jun 10, 2017</span></p>
                                <p>Leverage agile frameworks to provide a robust synopsis for high level overviews.
                                    Iterative approaches to corporate strategy foster collaborative thinking to
                                    further…</p><a class="ps-morelink" href="blog-detail.php">Read more<i
                                            class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ps-post">
                            <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.php"></a><img
                                        src="images/blog/3.jpg" alt=""></div>
                            <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.php">Nike’s Latest
                                    Football Cleat Breaks the Mold</a>
                                <p class="ps-post__meta"><span>By:<a class="mr-5"
                                                                     href="blog.html">Alena Studio</a></span> -<span
                                            class="ml-5">Jun 10, 2017</span></p>
                                <p>Leverage agile frameworks to provide a robust synopsis for high level overviews.
                                    Iterative approaches to corporate strategy foster collaborative thinking to
                                    further…</p><a class="ps-morelink" href="blog-detail.php">Read more<i
                                            class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <?php

        // footer
        include 'footer.php';


        ?>


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