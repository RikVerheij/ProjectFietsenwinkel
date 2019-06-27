

<body class="ie7 lt-ie8 lt-ie9 lt-ie10">
<!--[if IE 8]>
<body class="ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]>
<body class="ie9 lt-ie10"><![endif]-->
<body class="ps-loading">
<div class="header--sidebar"></div>
<header class="header">
    <div class="header__top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                    <p>Gratis verzending vanaf € 749,- Bezorging dezelfde dag, 's avonds of in het weekend - Gratis
                        retourneren
                    </p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                    <?php
                    if (array_key_exists('login_user', $_SESSION) && !empty($_SESSION['login_user'])) {
                        ?>
                        <div class="header__actions"><a href="user-detail.php">Uw gegevens</a>




                        </div>
                        <div class="header__actions"><a href="logout.php">Uitloggen</a>
                        </div>
                    <?php } else { ?>
                        <div class="header__actions"><a href="login.php">Login & Registeren</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <nav class="navigation">
        <div class="container-fluid">
            <div class="navigation__column left">
                <div class="header__logo"><a class="ps-logo" href="index.php"><img src="images/logo_header.png"
                                                                                   height="75px" alt=""></a>
                </div>
            </div>
            <div class="navigation__column center">
                <ul class="main-menu menu">
                    <li class="menu-item menu-item-has-children dropdown"><a href="index.php">Home</a>

                    </li>
                    <li class="menu-item menu-item-has-children has-mega-menu"><a href="product-listing.php">Alle fietsen </a>

                    </li>

                    <li class="menu-item menu-item-has-children dropdown"><a href="contact-us.php">Contact</a>

                    </li>
                </ul>
            </div>

    </nav>
</header>
<div class="header-services">
    <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0"
         data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1"
         data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Gratis levering</strong>: Krijg gratis verzending
            met elke bestelling</p>
        <p class="ps-service"><i class="glyphicon glyphicon-eur"></i><strong>Laagste prijzen</strong>: Bij ons altijd de
            voordeligste prijzen</p>
        <p class="ps-service"><i class="glyphicon glyphicon-thumbs-up"></i><strong>Bezoek ons</strong>: Kom gerust naar
            onze winkel zodat wij u optimaal advies kunnen geven</p>
    </div>
</div>