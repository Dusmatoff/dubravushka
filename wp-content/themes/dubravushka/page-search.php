<?php
/*
 * Template name: Поиск по сайту
 */
get_header();
?>
    <div class="container page">
        <div class="article article_default">
            <div class="article__content">
                
                <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                ?>
                <style>
                    @media (min-width: 1200px) {
                        #ya-site-results iframe{
                            width: 1140px!important;
                        }
                    }
                    @media (min-width: 992px) {
                        #ya-site-results iframe{
                            width: 970px!important;
                        }
                    }
                </style>
                <div id="ya-site-results" style="margin-top: 60px;margin-bottom: 60px;"></div>
                <script type="text/javascript">
                    (function (w, d, c) {
                        var s = d.createElement('script'), h = d.getElementsByTagName('script')[0];
                        s.type = 'text/javascript';
                        s.async = true;
                        s.charset = 'utf-8';
                        s.src = (d.location.protocol === 'https:' ? 'https:' : 'http:') + '//site.yandex.net/v2.0/js/all.js';
                        h.parentNode.insertBefore(s, h);
                        (w[c] || (w[c] = [])).push(function () {
                            Ya.Site.Results.init();
                        })
                    })(window, document, 'yandex_site_callbacks');
                </script>
                <!--
                <div id="ya-site-results" data-bem="{&quot;tld&quot;: &quot;ru&quot;,&quot;language&quot;: &quot;ru&quot;,&quot;encoding&quot;: &quot;&quot;,&quot;htmlcss&quot;: &quot;1.x&quot;,&quot;updatehash&quot;: true}"></div><script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0];s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Results.init();})})(window,document,'yandex_site_callbacks');</script>
                -->
            </div>
        </div>
    </div>
    <script>
        clickTarget('topSearch');
    </script>
<?php
get_template_part('template-parts/news-block');
get_footer();
