<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dubravushka
 */

$scripts_head = get_field('scripts_head', 'option');
$head_title = get_field('head_titile', 'option');
$phone = get_field('phone', 'option');
$logo = get_field('logo', 'option');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <?php
    wp_head();
    echo $scripts_head;
    ?>
</head>

<body <?php body_class(); ?>>
<?php
wp_body_open();
?>
<div id="page">
    <header class="header">
        <div class="topbar-wrapper">
            <div class="container-fluid custom-padding">
                <div class="topbar">
                    <div class="topbar__content"><?php echo $head_title; ?></div>
                    <div class="topbar__search-wrapper">
                        <!-- <a href="/general" class="topbar__uk-flag pull-right"><img src="/images/flags/uk.png" alt="uk-flag"></a> -->
                        <a class="topbar__phone google__phone comagic"
                           href="tel:<?php echo $phone; ?>"
                           onclick="clickTarget('header')">
                            <?php echo $phone; ?>
                        </a>
                        
                        
                        
                        
                        
                        <div
    class="topbar__input ya-site-form ya-site-form_inited_no"
    onclick="return {'action':'https://dubravushka.ru/search/','arrow':false}"
>
    <form id="w0" action="https://dubravushka.ru/search/" method="get">
        <input type="hidden" name="searchid" value="2507853" />
        <input type="hidden" name="l10n" value="ru"/>
        <input type="hidden" name="reqenc" value="" />
        <input type="search" name="text" value="" class="topbar__search" placeholder="Поиск"/>
        <button
            type="submit"
            class="topbar__search-btn"
            onclick='clickTarget("topSearch")'
        >
            Поиск
        </button>
    </form>
</div>
<script type="text/javascript">
    (function (w, d, c) {
        var s = d.createElement('script'),
            h = d.getElementsByTagName('script')[0],
            e = d.documentElement;
        if ((' ' + e.className + ' ').indexOf(' ya-page_js_yes ') === -1) {
            e.className += ' ya-page_js_yes';
        }
        s.type = 'text/javascript';
        s.async = true;
        s.charset = 'utf-8';
        s.src =
            (d.location.protocol === 'https:' ? 'https:' : 'http:') +
            '//site.yandex.net/v2.0/js/all.js';
        h.parentNode.insertBefore(s, h);
        (w[c] || (w[c] = [])).push(function () {
            Ya.Site.Form.init();
        });
    })(window, document, 'yandex_site_callbacks');
</script>
                        <!--
                       <div
                            class="ya-site-form ya-site-form_inited_no"
                            data-bem='{"action":"https://dubravushka.ru/search","arrow":false,"bg":"transparent","fontsize":12,"fg":"#000000","language":"ru","logo":"rb","publicname":"Поиск по сайту","suggest":true,"target":"_self","tld":"ru","type":3,"usebigdictionary":true,"searchid":2507853,"input_fg":"#000000","input_bg":"#ffffff","input_fontStyle":"normal","input_fontWeight":"normal","input_placeholder":"Поиск","input_placeholderColor":"#000000","input_borderColor":"#7f9db9"}'
                        >
                            <form
                                action="https://yandex.ru/search/site/"
                                method="get"
                                target="_self"
                                accept-charset="utf-8"
                            >
                                <input type="hidden" name="searchid" value="2507853" /><input
                                    type="hidden"
                                    name="l10n"
                                    value="ru"
                                /><input type="hidden" name="reqenc" value="" /><input
                                    type="search"
                                    name="text"
                                    value=""
                                /><input type="submit" value="Найти" />
                            </form>
                        </div>
                        <style type="text/css">
                            .ya-page_js_yes .ya-site-form_inited_no {
                                display: none;
                            }
                            .ya-site-form {
                                max-width: 158px;
                                display: inline-block;
                            }
                            .ya-site-form__input-text {
                                padding-left: 13px;
                                padding-right: 23px;
                                width: 100%;
                                font-size: 15px;
                                color: #ccc;
                                border-radius: 15px;
                            }
                        </style>
                        <script type="text/javascript">
                            (function (w, d, c) {
                                var s = d.createElement('script'),
                                    h = d.getElementsByTagName('script')[0],
                                    e = d.documentElement;
                                if ((' ' + e.className + ' ').indexOf(' ya-page_js_yes ') === -1) {
                                    e.className += ' ya-page_js_yes';
                                }
                                s.type = 'text/javascript';
                                s.async = true;
                                s.charset = 'utf-8';
                                s.src =
                                    (d.location.protocol === 'https:' ? 'https:' : 'http:') +
                                    '//site.yandex.net/v2.0/js/all.js';
                                h.parentNode.insertBefore(s, h);
                                (w[c] || (w[c] = [])).push(function () {
                                    Ya.Site.Form.init();
                                });
                            })(window, document, 'yandex_site_callbacks');
                        </script>
                        -->
                        
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-default">
            <div class="container-fluid custom-padding padding-right-0">
                <!-- Brand and toggle get grouped for better mobile display-->
                <div class="navbar-header">
                    <!--<a href="/general" class="navbar__uk-flag"
                        <img src="<?php //echo $phone; ?>/images/flags/uk-38.png" alt="uk-flag">
                    </a>-->
                    <button class="navbar-toggle collapsed"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbar-collapse"
                            aria-expanded="false"
                    >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggle__sign">Меню</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img class="navbar-logo navbar-logo_mob-hide" src="<?php echo $logo; ?>" alt="Logo">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling-->
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'nav navbar-nav',
                        'depth' => 2,
                        'walker' => new Understrap_WP_Bootstrap_Navwalker(),
                    ]);
                    ?>
                </div>
            </div>
        </nav>
    </header>