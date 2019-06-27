<div class="ps-subscribe">
    <div class="ps-container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                <h3><i class="fa fa-envelope"></i>Meld aan voor de nieuwsbrief</h3>
            </div>
            <?php
            if (array_key_exists('login_user', $_SESSION) && !empty($_SESSION['login_user'])) {
                ?>
            <?php

                ?>
                <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                    <a href="user-detail_personaldata.php" class="ps-btn ps-btn--sm">Meld u nu aan</a>
                </div>
                <?php
            } else {
                ?>

                <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                    <a href="login.php" class="ps-btn ps-btn--sm">Log eerst in</a>
                </div>

                <?php
            }
            ?>
            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                <p>...en krijg een <span>€20</span> cadeaubon voor uw eerste aankoop.</p>
            </div>
        </div>
    </div>
</div>
<div class="ps-footer bg--cover" data-background="images/background/fiets_footer.jpg">
    <div class="ps-footer__content">
        <div class="ps-container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info">
                        <header><a class="ps-logo" href="index.php"><img src="images/logo_header.png" alt=""></a>
                            <h3 class="ps-widget__title">Adress Kantoor</h3>
                        </header>
                        <footer>
                            <p><strong>J.F Kennedylaan 49, 3e verdieping T316, Doetinchem</strong></p>
                            <p>Email: <a href='bk.ilhan@outlook.com'>support@chaingang.com</a></p>
                            <p>Phone: +32 32434 5334</p>
                            <p>Fax: ++32 32434 5333</p>
                        </footer>
                    </aside>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                        <header>
                            <h3 class="ps-widget__title">Vind onze winkels</h3>
                        </header>
                        <footer>
                            <ul class="ps-list--link">
                                <li><a href="#">Kortingscode Code</a></li>
                                <li><a href="#">Meld Aan Voor Email</a></li>
                                <li><a href="#">Site Feedback</a></li>
                                <li><a href="#">Banen</a></li>
                            </ul>
                        </footer>
                    </aside>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                        <header>
                            <h3 class="ps-widget__title">Hulp nodig?</h3>
                        </header>
                        <footer>
                            <ul class="ps-list--line">
                                <li><a href="login.php">Bestelling Status</a></li>
                                <li><a href="login.php">Verzending en Aflevering</a></li>
                                <li><a href="#">Terugsturen</a></li>
                                <li><a href="#">Betalingsmogelijkheden</a></li>
                                <li><a href="#">Contact ons</a></li>
                            </ul>
                        </footer>
                    </aside>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                        <header>
                            <h3 class="ps-widget__title">Fietsen</h3>
                        </header>
                        <footer>
                            <ul class="ps-list--line">
                                <li><a href="#">Mannenfietsen</a></li>
                                <li><a href="#">Vrouwenfietsen</a></li>
                                <li><a href="#">E-Bikes</a></li>
                                <li><a href="#">Overige fietsen</a></li>
                            </ul>
                        </footer>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-footer__copyright">
        <div class="ps-container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <ul class="ps-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</main>