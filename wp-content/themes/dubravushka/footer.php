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
                <?php echo "$address, $phone"; ?>
            </div>
        </div>
    </div>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

<script>jQuery(function ($) {
        jQuery('#w0').yiiActiveForm([{
            "id": "search-text",
            "name": "text",
            "container": ".field-search-text",
            "input": "#search-text",
            "validate": function (attribute, value, messages, deferred, $form) {
                yii.validation.string(value, messages, {
                    "message": "Значение «Text» должно быть строкой.",
                    "max": 255,
                    "tooLong": "Значение «Text» должно содержать максимум 255 символов.",
                    "skipOnEmpty": 1
                });
                yii.validation.required(value, messages, {"message": "Необходимо заполнить «Text»."});
                yii.validation.regularExpression(value, messages, {
                    "pattern": /^[a-zа-яё0-9\s\-_\(\)\+\.,?]+$/iu,
                    "not": false,
                    "message": "Значение «Text» неверно.",
                    "skipOnEmpty": 1
                });
            }
        }], []);
    })
</script>

</body>
</html>
