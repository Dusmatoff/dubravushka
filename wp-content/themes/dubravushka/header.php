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
$scripts_body = get_field('scripts_body', 'option');
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
echo $scripts_body;
?>
<div id="page">
    <header class="header">
        <div class="topbar-wrapper">
            <div class="container-fluid custom-padding">
                <div class="topbar">
                    <div class="topbar__content"><?php echo $head_title; ?></div>
                    <div class="topbar__search-wrapper">
                        <!-- <a href="/general" class="topbar__uk-flag pull-right"><img src="/images/flags/uk.png" alt="uk-flag"></a> -->
                        <a class="topbar__phone google__phone"
                           href="tel:<?php echo $phone; ?>"
                           onclick="clickTarget('header')">
                            <?php echo $phone; ?>
                        </a>
                        <!-- TODO WP search form -->
                        <div class="topbar__input ya-site-form ya-site-form_inited_no"
                             onclick="return {'action':'https://dubravushka.ru','arrow':false}">
                            <form id="w0" action="/" method="post">
                                <input type="hidden" name="_csrf"
                                       value="Ok_XsPbSa-V440uNXZ41dlZp5GTs4Z-vkh7yXORV2PJrKqThv7ooqi6FLekZwWc1HlGlBdSL99e_dYs7lBe6qw==">
                                <input type="hidden" id="search-searchid" name="Search[searchid]" value="2293373">
                                <input type="hidden" id="search-l10n" name="Search[l10n]" value="ru"> <input
                                        type="hidden" id="search-reqenc" name="Search[reqenc]" value="">
                                <input type="text" id="search-text" class="topbar__search" name="Search[text]"
                                       placeholder="Поиск" aria-required="true">
                                <button type="submit" class="topbar__search-btn"
                                        onclick="clickTarget(&quot;topSearch&quot;)">
                                    Поиск
                                </button>
                            </form>
                        </div>
                        <script type="text/javascript">
                            (function (w, d, c) {
                                var s = d.createElement('script'), h = d.getElementsByTagName('script')[0],
                                    e = d.documentElement;
                                if ((' ' + e.className + ' ').indexOf(' ya-page_js_yes ') === -1) {
                                    e.className += ' ya-page_js_yes';
                                }
                                s.type = 'text/javascript';
                                s.async = true;
                                s.charset = 'utf-8';
                                s.src = (d.location.protocol === 'https:' ? 'https:' : 'http:') + '//site.yandex.net/v2.0/js/all.js';
                                h.parentNode.insertBefore(s, h);
                                (w[c] || (w[c] = [])).push(function () {
                                    Ya.Site.Form.init()
                                })
                            })(window, document, 'yandex_site_callbacks');
                        </script>
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
                    <!-- TODO WP search form https://zen.yandex.ru/media/id/5adbba70dcaf8e45d4792598/vstraivaem-poisk-ot-iandeksa-v-wordpress-5b17d027d7bf219ead09dce9 -->
                    <form action="/site/search/" method="get" target="_self" class="serch-wrapper"
                          accept-charset="utf-8">
                        <input type="hidden" name="searchid" value="2293373">
                        <input type="hidden" name="l10n" value="ru">
                        <input type="hidden" name="reqenc" value="">
                        <input class="topbar__search topbar__search_in-burger" type="search" name="text"
                               placeholder="Поиск"
                               value="">
                        <button class="search-btn">Поиск</button>
                    </form>
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