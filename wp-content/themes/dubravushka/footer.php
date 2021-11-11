<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dubravushka
 */

$copyright = get_field('copyright', 'option');
$vkontakte = get_field('vkontakte', 'option');
$facebook = get_field('facebook', 'option');
$instagram = get_field('instagram', 'option');
$phone = get_field('phone', 'option');
$address = get_field('address', 'option');

$scripts_body = get_field('scripts_body', 'option');
?>

<div class="container-fluid custom-padding padding-mobile-0 padding-tablet-0 bg-theme__autumn">
    <div class="footer">
        <div class="footer-topbar">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 col-lg-offset-0 col-lg-5">
                    <div class="footer-topbar__copyright pull-left"><?php echo $copyright; ?></div>
                </div>
                <div class="col-xs-7">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'footer-copyright',
                        'container' => false,
                        'menu_class' => 'info list-inline pull-right hidden-xs hidden-sm hidden-md',
                        'add_li_class' => 'info__item'
                    ]);
                    ?>
                </div>
            </div>
        </div>

        <div class="footer-middlebar hidden-xs hidden-sm hidden-md">
            <div class="row full-height footer__item-container">
                <div class="col-xs-2  footer__item">
                    <div class="footer-middlebar__title">О школе</div>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'footer-school',
                        'container' => false,
                        'menu_class' => 'footer-middlebar__info list-unstyled',
                    ]);
                    ?>
                </div>
                <div class="col-xs-2 column-bordered footer__item">
                    <div class="footer-middlebar__title">Образование</div>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'footer-education',
                        'container' => false,
                        'menu_class' => 'footer-middlebar__info list-unstyled',
                    ]);
                    ?>
                </div>
                <div class="col-xs-2 column-bordered footer__item">
                    <div class="footer-middlebar__title">Пансион</div>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'footer-house',
                        'container' => false,
                        'menu_class' => 'footer-middlebar__info list-unstyled',
                    ]);
                    ?>
                </div>
                <div class="col-xs-2 column-bordered footer__item">
                    <div class="footer-middlebar__title">Новости</div>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'footer-news',
                        'container' => false,
                        'menu_class' => 'footer-middlebar__info list-unstyled',
                    ]);
                    ?>
                </div>
                <div class="col-xs-2 column-bordered footer__item">
                    <div class="footer-middlebar__title">Поступление</div>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'footer-admission',
                        'container' => false,
                        'menu_class' => 'footer-middlebar__info list-unstyled',
                    ]);
                    ?>
                </div>
                <div class="col-xs-2 column-bordered footer__item">
                    <div class="footer-middlebar__title">Контакты</div>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'footer-contacts',
                        'container' => false,
                        'menu_class' => 'footer-middlebar__info list-unstyled',
                    ]);
                    ?>
                </div>
            </div>
        </div>

        <div class="footer-bottombar">
            <ul class="footer-bottombar__social list-inline pull-left">
                <li>
                    <a href="<?php echo $vkontakte; ?>" target="_blank">
                        <div class="icon-sprite icon-vk"></div>
                    </a
                </li>
                <li>
                    <a href="<?php echo $facebook; ?>" target="_blank">
                        <div class="icon-sprite icon-facebook"></div>
                    </a
                </li>
                <li>
                    <a href="<?php echo $instagram; ?>" target="_blank">
                        <div class="icon-sprite icon-instagram"></div>
                    </a>
                </li>
            </ul>
            <div class="footer-bottombar__privacy visible-xs visible-sm visible-md text-center">
                <a href="/privacy/">Политика конфиденциальности</a>
            </div>
            <hr class="divider bg-theme__autumn visible-xs visible-sm visible-md"/>
            <div class="footer-bottombar__copyright pull-right">
                <?php echo $address; ?> <span class="comagic"><?php echo $phone; ?></span>
            </div>
        </div>
    </div>
</div>
</div><!-- #page -->

<?php
    wp_footer();
    echo $scripts_body;
?>

<script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        if ( '349' == event.detail.contactFormId ) {
            clickTarget('formOnTop');
        }
        
        if ( '810' == event.detail.contactFormId ) {
            clickTarget('formOnBottom');
        }
        
        location = 'https://dubravushka.ru/thank-you';
    }, false );
    
    function loadYaShare() {
        console.log('loadYaShare');
        const es5shims = document.createElement('script');
        es5shims.src = '//yastatic.net/es5-shims/0.0.2/es5-shims.min.js';
        document.getElementsByTagName('head')[0].appendChild(es5shims);
        
        const share = document.createElement('script');
        share.src = '//yastatic.net/share2/share.js';
        document.getElementsByTagName('head')[0].appendChild(share);
    }
    
    window.addEventListener('load', (event) => {
        console.log('page is fully loaded');//DOMContentLoaded
        
        setTimeout(loadYaShare, 3000);
    });
</script>

</body>
</html>
