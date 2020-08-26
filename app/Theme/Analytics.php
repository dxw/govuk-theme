<?php

namespace Dxw\GovukTheme\Theme;

class Analytics implements \Dxw\Iguana\Registerable
{
    public function register()
    {
        add_action('wp_footer', [$this, 'wpFooter']);
    }

    public function wpFooter()
    {
        ?>
        <script>
            var TRACKING_CODE = ''; //Put the Google Analytics tracking code here
            if (!TRACKING_CODE.length) {
                console.warn('Google Analytics requires a tracking code to function correctly');
            }
            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = 'https://www.googletagmanager.com/gtag/js?id=' + TRACKING_CODE;
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments)};
            gtag('js', new Date());
            gtag('config', TRACKING_CODE);
        </script>
        <?php
    }
}
