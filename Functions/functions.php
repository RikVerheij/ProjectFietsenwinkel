<?php

function googlemaps()
{
    echo "<div id=\"map-container-google-2\" class=\"z-depth-1-half map-container\" style=\"height: 500px\">
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2458.1673769615386!2d6.296373015952593!3d51.967373284787804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c784c716ae2ee7%3A0xe3665d8a07166e2a!2sGraafschap+College!5e0!3m2!1snl!2snl!4v1559820941041!5m2!1snl!2snl\" frameborder=\"0\"
                    style=\"border:0\" allowfullscreen></iframe>
        </div>";
}

function nieuwsbrief()
{
    echo "<div class=\"ps-subscribe\">
        <div class=\"ps-container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-12 col-sm-12 col-xs-12 \">
                    <h3><i class=\"fa fa-envelope\"></i>Meld je aan voor de nieuwsbrief</h3>
                </div>
                <div class=\"col-lg-5 col-md-7 col-sm-12 col-xs-12 \">
                    <form class=\"ps-subscribe__form\" action=\"do_action\" method=\"post\">
                        <input class=\"form-control\" type=\"text\" placeholder=\"\">
                        <button>Meld je aan</button>
                    </form>
                </div>
                <div class=\"col-lg-4 col-md-5 col-sm-12 col-xs-12 \">
                    <p>...en ontvang een <span>€ 20 </span> kortingscode voor uw eerste bestelling.</p>
                </div>
            </div>
        </div>
    </div>";
}