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
                    <ul class="info list-inline pull-right hidden-xs hidden-sm hidden-md">
                        <li class="info__item"><a href="/eljur">Электронный дневник</a></li>
                        <li class="info__item"><a href="/contacts">Как добраться</a></li>
                        <li class="info__item"><a href="/job">Вакансии</a></li>
                        <li class="info__item"><a href="https://www.bus.gov.ru/pub/home">Написать отзыв</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-middlebar hidden-xs hidden-sm hidden-md">
            <div class="row full-height footer__item-container">
                <div class="col-xs-2  footer__item">
                    <div class="footer-middlebar__title">О школе</div>
                    <ul class="footer-middlebar__info list-unstyled">
                        <li><a href="/founders">Слово учредителя</a></li>
                        <li><a href="/geography">Откуда наши ученики</a></li>
                        <li><a href="/reviews">Отзывы о школе</a></li>
                        <li><a href="/location">Расположение</a></li>
                        <li><a href="/history">История</a></li>
                        <li><a href="/nashi-uchitelya">Наши учителя</a></li>
                        <li><a href="/basic_information">Сведения об образовательной организации</a></li>
                        <li><a href="/graduates">Выпускники</a></li>
                        <li><a href="/charity">Благотворительная деятельность</a></li>
                        <li><a href="/prefects">Школьное самоуправление</a></li>
                        <li><a href="/privacy">Политика конфиденцильности</a></li>
                        <li><a href="/job">Вакансии</a></li>
                        <li><a href="/prava-detey">Права несовершеннолетних</a></li>
                    </ul>
                </div>
                <div class="col-xs-2 column-bordered footer__item">
                    <div class="footer-middlebar__title">Образование</div>
                    <ul class="footer-middlebar__info list-unstyled">
                        <li><a href="/kursy-angliiskogo">Короткие курсы английского</a></li>
                        <li><a href="/concept">Концепция</a></li>
                        <li><a href="/english">Английский язык</a></li>
                        <li><a href="/exams">ЕГЭ и поступление в вуз</a></li>
                        <li><a href="/gia">ГИА</a></li>
                        <li><a href="/timetable">Расписание и распорядок дня</a></li>
                        <li><a href="/extracurriculum">Дополнительное образование</a></li>
                        <li><a href="/scienceconference">Научно-практическая конференция</a></li>
                        <li><a href="/eljur">Электронный дневник</a></li>
                    </ul>
                </div>
                <div class="col-xs-2 column-bordered footer__item">
                    <div class="footer-middlebar__title">Пансион</div>
                    <ul class="footer-middlebar__info list-unstyled">
                        <li><a href="/houses">Жилые корпуса</a></li>
                        <li><a href="/canteen">Питание</a></li>
                        <li><a href="/individual-curator">Индивидуальный куратор</a></li>
                        <li><a href="/safety">Безопасность</a></li>
                        <li><a href="/medicine">Медпункт</a></li>
                        <li><a href="/adaptation">Психологическое сопровождение</a></li>
                        <li><a href="/sections">Кружки и секции</a></li>
                        <li><a href="/sports">Спорт</a></li>
                        <li><a href="/drama">Театр</a></li>
                        <li><a href="/leisure">Праздники и досуг</a></li>
                    </ul>
                </div>
                <div class="col-xs-2 column-bordered footer__item">
                    <div class="footer-middlebar__title">Новости</div>
                    <ul class="footer-middlebar__info list-unstyled">
                        <li><a href="/news">Новости школы</a></li>
                        <li><a href="/news/interesnoye">Интересное</a></li>
                        <li><a href="/video">Видео о школе</a></li>
                        <li><a href="/smi">СМИ о школе</a></li>
                    </ul>
                </div>
                <div class="col-xs-2 column-bordered footer__item">
                    <div class="footer-middlebar__title">Поступление</div>
                    <ul class="footer-middlebar__info list-unstyled">
                        <li><a href="/for-applicants">Поступающим</a></li>
                        <li><a href="/conditions">Условия приема</a></li>
                        <li><a href="/dokumenty-dlya-postupleniya">Документы для поступления</a></li>
                        <li><a href="/fees">Стоимость обучения</a></li>
                        <li><a href="/training-courses">Подготовительные курсы</a></li>
                        <li><a href="/literatura-na-leto">Литература на лето</a></li>
                    </ul>
                </div>
                <div class="col-xs-2 column-bordered footer__item">
                    <div class="footer-middlebar__title">Контакты</div>
                    <ul class="footer-middlebar__info list-unstyled">
                        <li><a href="/contacts">Контакты школы</a></li>
                        <li><a href="http://dubravushka-camp.ru/contacts/">Контакты лагеря</a></li>
                    </ul>
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
                <a href="/privacy">Политика конфиденциальности</a>
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
