<?php
/*
	Template Name: Главная страница
*/

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$banner_img = get_field('banner_img');
$banner_title = get_field('banner_title');
$banner_subtitle = get_field('banner_subtitle');
$form_title = get_field('form_title');
$form_subtitle = get_field('form_subtitle');

$booking = get_field('booking');

$about = get_field('about');
$id_youtube = get_field('id_youtube');

$icons_title = get_field('icons_title');

$reviews_title = get_field('reviews_title');
$review_btn_text = get_field('review_btn_text');
$review_btn_link = get_field('review_btn_link');
$reviews_list = get_field('reviews_list');

$prof_title = get_field('prof_title');

$quote_image = get_field('quote_image');
$quote_text = get_field('quote_text');
$quote_author = get_field('quote_author');

$leisure_title = get_field('leisure_title');
$leisure_subtitle = get_field('leisure_subtitle');
?>
    <div class="index-top-content">
        <div class="content-img"
             style="background-image: url(<?php echo $banner_img; ?>);"></div>
        <div class="content-filter"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-2">&nbsp;</div>
                        <div class="col-md-8">
                            <h1><?php echo $banner_title; ?></h1>
                            <div class="content-h1">
                                <p>&nbsp;</p>
                                <?php echo $banner_subtitle; ?>
                            </div>
                        </div>
                        <div class="col-md-2">&nbsp;</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-content">
                        <div class="form-title-top"><?php echo $form_title; ?></div>
                        <div class="form-title-bottom"><?php echo $form_subtitle; ?></div>
                        <div class="form-top"><!-- TODO Добавить форму --></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php if (have_rows('feature_list')): ?>
    <div class="container global">
        <div class="class-list">
            <ul>
                <?php
                while (have_rows('feature_list')) :
                    the_row();
                    $text = get_sub_field('text');
                    ?>
                    <li><?php echo $text; ?></li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>


    <div class="container global">
        <div class="banner-text">
            <?php echo $booking; ?>
        </div>
        <!-- <div class="banner-text"><span style="font-size:24px">Мы временно работаем&nbsp; в режиме онлайн. Горячая линия по дистанционному обучению:&nbsp;+7-910-602-22-11 - Горшкова Людмила Владимировна, директор&nbsp;по учебно-воспитательной работе, график работы с 10:00 до 18:00 (с понедельника по пятницу).</span></div>--><!--
<div class="banner-text"><span style="font-size:24px">Школа-пансион &laquo;Дубравушка&raquo; создана 30 лет назад как комплексное учебное заведение, сочетающее все преимущества среднего образования, разностороннего дополнительного обучения и комфортного самостоятельного проживания.</span></div>
--></div>

    <div class="container global">
        <div class="left-text left-text-dop-style" id="zarubezhn-vuz">
            <?php echo $about; ?>
        </div>
        <div class="right-video">
            <div class="youtube" id="<?php echo $id_youtube; ?>" style="width:600px;height:360px;">&nbsp;</div>
        </div>
    </div>

<?php if (have_rows('statistic')): ?>
    <div class="container global">
        <div class="numbers">
            <?php
            while (have_rows('statistic')) :
                the_row();
                $link = get_sub_field('link');
                $number = get_sub_field('number');
                $text = get_sub_field('text');
                ?>
                <div class="col-md-4 item">
                    <div class="item-heading">
                        <a href="<?php echo $link; ?>">
                            <?php echo $number; ?>
                        </a>
                    </div>
                    <div class="hr-line">&nbsp;</div>
                    <div class="main-text"><?php echo $text; ?></div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>

    <div class="container global">
        <div class="harmonious">
            <div class="blocks-sections">
                <div class="section__container">
                    <p class="section__title">
                        <span style="font-size:24px">
                            <?php echo $icons_title; ?></br>
                        </span>
                        <!-- Мы ждем учеников из любого региона России и мира-->
                    </p>
                </div>
                <?php if (have_rows('icons_list')): ?>
                    <div class="blocks-sections-container">
                        <div class="row">
                            <?php
                            while (have_rows('icons_list')) :
                                the_row();
                                $image = get_sub_field('image');
                                $text = get_sub_field('text');
                                ?>
                                <div class="col-md-4">
                                    <div class="section-img">
                                        <img src="<?php echo $image; ?>"/>
                                    </div>
                                    <div class="section-title">
                                        <?php echo $text; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container global">
        <div class="reviews">
            <div class="section-title">
                <?php echo $reviews_title; ?>
            </div>
            <div class="section-container">
                <div class="row">
                    <div class="col-md-2">&nbsp;</div>
                    <?php foreach ($reviews_list as $item): ?>
                        <div class="col-md-4">
                            <div class="section-img">
                                <div class="youtube" id="<?php the_field('youtube_id', $item->ID) ?>"
                                     style="width:375px;height:210px;">&nbsp;
                                </div>
                            </div>
                            <div class="wrapper">
                                <div class="bottom-line">&nbsp;</div>
                                <div class="text-name">
                                    <strong>
                                        <?php echo $item->post_title; ?>
                                    </strong>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a class="look-all" href="<?php echo $review_btn_link; ?>">
                    <?php echo $review_btn_text; ?>
                </a>
            </div>
        </div>
    </div>

    <div class="container global">
        <div class="privilege" id="prof-pedagog">
            <div class="section-title">
                <?php echo $prof_title; ?>
            </div>

            <?php if (have_rows('prof_list')): ?>
                <div class="section-container">
                    <?php
                    while (have_rows('prof_list')) :
                        the_row();
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                        $index = get_row_index();
                        ?>
                        <?php if ($index === 1 || $index === 3 || $index === 5): ?>
                        <div class="row">
                    <?php endif; ?>
                        <div class="col-md-6">
                            <div class="block-left">&nbsp;</div>
                            <div class="block-right">
                                <div class="block-title">
                                    <?php echo $title; ?>
                                </div>
                                <div class="block-desc">
                                    <?php echo $text; ?>
                                </div>
                            </div>
                        </div>
                        <?php if ($index === 2 || $index === 4 || $index === 6): ?>
                        </div>
                    <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="container global">
        <div class="director">
            <div class="row">
                <div class="col-md-3">
                    <div class="director__photo">
                        <img alt="Людмила Владимировна Горшкова" src="<?php echo $quote_image; ?>"/>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="director__info">
                        <img alt="Цитата" class="director__quoteimg"
                             src="<?php echo get_stylesheet_directory_uri(); ?>/images/quote.png"/>
                        <div class="director__quote">
                            <?php echo $quote_text; ?>
                        </div>
                        <p class="director__name">
                            <?php echo $quote_author; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php if (have_rows('leisure_list')): ?>
    <div class="container global">
        <div class="nsection dopobrazovanie-wrap" id="dopobrazovanie">
            <div class="nsection__title">
                <?php echo $leisure_title; ?>
            </div>

            <p class="nsection__subtitle">
                <?php echo $leisure_subtitle; ?>
            </p>

            <div class="row">
                <?php
                while (have_rows('leisure_list')) :
                    the_row();
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    $link = get_sub_field('link');
                    ?>
                    <div class="col-md-4">
                        <div class="dopobrazovanie__item">
                            <h3 class="dopobrazovanie__title">
                                <?php echo $title; ?>
                            </h3>

                            <p class="dopobrazovanie__text">
                                <?php echo $text; ?>
                            </p>

                            <a class="dopobrazovanie__btn" href="<?php echo $link; ?>" target="_blank">
                                Подробнее
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        </div>
    </div>
<?php endif; ?>

    <div class="container global">
        <div class="nsection__title">Наша команда</div>

        <p class="nsection__subtitle">Сотрудники &laquo;Дубравушки&raquo; &ndash; это профессионалы, по-настоящему
            увлеченные своей работой.</p>

        <div class="superiors">
            <div class="superiors__row">
                <div class="row">
                    <div class="col-md-1-5">
                        <div class="superiors__item">
                            <div class="superiors__itemphoto"><img alt="Кравцова Юлия Владимировна"
                                                                   src="images/superiors/kravcova.jpg"/></div>

                            <div class="superiors__itemname">Юлия Владимировна Кравцова</div>

                            <div class="superiors__itemposition">Директор АНО &laquo;ОШИ &laquo;Дубравушка&raquo;</div>
                        </div>
                    </div>

                    <div class="col-md-1-5">
                        <div class="superiors__item">
                            <div class="superiors__itemphoto"><img alt="Михалычев Борис Иванович"
                                                                   src="images/superiors/mihalychev.jpg"/></div>

                            <div class="superiors__itemname">Борис Иванович Михалычев</div>

                            <div class="superiors__itemposition">Заместитель директора по воспитательной работе,
                                начальник пансиона
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1-5">
                        <div class="superiors__item">
                            <div class="superiors__itemphoto"><img alt="Белашова Юлия Петровна"
                                                                   src="images/superiors/belashova.jpg"/></div>

                            <div class="superiors__itemname">Юлия Петровна Белашова</div>

                            <div class="superiors__itemposition">Заместитель директора по учебно-воспитательной работе
                                5-7 кл.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1-5">
                        <div class="superiors__item">
                            <div class="superiors__itemphoto"><img alt="Акишина Татьяна Викторовна"
                                                                   src="images/superiors/akishina.jpg"/></div>

                            <div class="superiors__itemname">Татьяна Викторовна Акишина</div>

                            <div class="superiors__itemposition">Заместитель директора по изучению английского языка
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1-5">
                        <div class="superiors__item">
                            <div class="superiors__itemphoto"><img alt="Авраменко Анна Константиновна"
                                                                   src="images/superiors/avramenko.jpg"/></div>

                            <div class="superiors__itemname">Анна Константиновна Авраменко</div>

                            <div class="superiors__itemposition">Руководитель психологической службы</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="superiors__row">
                <div class="row">
                    <div class="col-md-1-5">
                        <div class="superiors__item">
                            <div class="superiors__itemphoto"><img alt="Лупачева Марина Ивановна"
                                                                   src="images/superiors/lupacheva.jpg"/></div>

                            <div class="superiors__itemname">Марина Ивановна Лупачева</div>

                            <div class="superiors__itemposition">Заместитель директора по учебно-воспитательной работе
                                8-11 кл.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1-5">
                        <div class="superiors__item">
                            <div class="superiors__itemphoto"><img alt="Карпухина Елена Валерьевна"
                                                                   src="images/superiors/karpuhina.jpg"/></div>

                            <div class="superiors__itemname">Елена Валерьевна Карпухина</div>

                            <div class="superiors__itemposition">Руководитель специальных проектов</div>
                        </div>
                    </div>

                    <div class="col-md-1-5">
                        <div class="superiors__item">
                            <div class="superiors__itemphoto"><img alt="Силаева Ирина Владимировна"
                                                                   src="images/superiors/silaeva.jpg"/></div>

                            <div class="superiors__itemname">Ирина Владимировна Силаева</div>

                            <div class="superiors__itemposition">Заместитель директора по учебной работе в начальной
                                школе
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1-5">
                        <div class="superiors__item">
                            <div class="superiors__itemphoto"><img alt="Бахолдин Василий Алексеевич"
                                                                   src="images/superiors/baholdin.jpg"/></div>

                            <div class="superiors__itemname">Василий Алексеевич Бахолдин</div>

                            <div class="superiors__itemposition">Воспитатель корпуса мальчиков</div>
                        </div>
                    </div>

                    <div class="col-md-1-5">
                        <div class="superiors__item">
                            <div class="superiors__itemphoto"><img alt="Анищенко Глеб Александрович"
                                                                   src="images/superiors/anishchenko.jpg"/></div>

                            <div class="superiors__itemname">Глеб Александрович Анищенко</div>

                            <div class="superiors__itemposition">Заведующий кафедрой&nbsp;литературы</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container global">
        <link href="css/dubravushka.css" rel="stylesheet"/>
        <div class="nsection security-wrap" id="security">
            <div class="nsection__title">В &laquo;Дубравушке&raquo; безопасность и охрана на высоком уровне</div>

            <div class="row">
                <div class="col-md-4">
                    <div class="security__icon"><img src="images/security/kisspng-gate-computer.png"/></div>

                    <h3 class="security__title">Установлено ограждение по периметру территории</h3>

                    <p class="security__text">На въезде в школу установлен шлагбаум. Въезд только по пропускам. Входная
                        калитка и ворота оснащены электрозамком.</p>
                </div>

                <div class="col-md-4">
                    <div class="security__icon"><img src="images/security/fire-alarm-system.png"/></div>

                    <h3 class="security__title">Современное противопожарное автоматическое оборудование</h3>

                    <p class="security__text">Оснащение современным противопожарным оборудованием и сигнализацией
                        оповещения о пожаре. Школа оснащена узлом радиооповещения.</p>
                </div>

                <div class="col-md-4">
                    <div class="security__icon"><img src="images/security/video-alarm-system.png"/></div>

                    <h3 class="security__title">Система видеонаблюдения на территории и в зданиях</h3>

                    <p class="security__text">Вся территория школы контролируется камерами наблюдения. Имеется
                        круглосуточная охрана. Система контроля-доступа.</p>
                </div>
            </div>

            <p class="security__bottomtext">Благодаря этому жизнь и учеба становятся более безопасными, эффективными и
                приятными.</p>
        </div>

        <div style="text-align:center;">
            <p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfR8Oj8rUyQbsbMEoNAGeODF96sIYMCHwo2T6Vq2VGO6af4bA/viewform"
                   rel="nofollow">Анкета для опроса получателей услуг о качестве условий оказания услуг организацией за
                    2021 год.</a></p>
        </div>
    </div>

    <div class="container global">
        <div class="left-text left-text-dop-style">
            <h3>Хотите узнать больше о школе? Пусть ребенок приедет к нам в летний лагерь!</h3>

            <p>Если Ваш ребенок планирует поступление к нам в школу-пансион, то&nbsp;<a
                        href="http://dubravushkacamp.ru">Международный детский лагерь &laquo;Дубравушка&raquo;</a>&nbsp;-
                прекрасная возможность познакомиться с атмосферой и условиями, в которых он будет жить весь год.&nbsp;Лагерь
                работает в летнее время на территории школы и дает возможность детям познакомиться со школой в легкой и
                приятной обстановке.<br/>
                Каждое лето более 700 детей приезжают сюда отдыхать в формате большой ролевой игры и заниматься&nbsp; с
                преподавателями Британской школы Kent School of English и студентами Кембриджа и Оксфорда.<br/>
                Ваш ребёнок сам сделает выбор!</p>
        </div>
        <div class="right-video">
            <div class="youtube" id="144tEfWTLBk" style="width:600px;height:360px;">&nbsp;</div>
        </div>
    </div>

    <div class="container global"></div>

    <div class="container">
        <div class="home-page form-bottom"></div>
        <div class="home-page">
            <div class="share-block">

                <script async src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>

                <script async src="//yastatic.net/share2/share.js"></script>

                <div class="ya-share2"
                     data-services="vkontakte,facebook,odnoklassniki,moimir,twitter,viber,whatsapp,telegram"></div>

            </div>
        </div>
    </div>

    <div class="container-fluid custom-padding bg-theme__coffee widget-news">
        <div class="container">
            <div class="news">
                <div class="row hidden-xs">
                    <div class="col-xs-3 hidden-sm hidden-md">
                        <div class="news__sidebar text-center">
                            <div class="logo-wrapper">
                                <img class="logo" src="/images/logo.png"></div>
                            <a class="go-to-news" href="news/">
                                <p class="content">Посмотреть<br>новости</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-9 col-sm-12 col-md-12 col-lg-9">
                        <div class="row">
                            <div class="col-sm-3 col-lg-3">
                                <div class="news__sidebar text-center visible-sm visible-md">
                                    <div class="logo-wrapper"><img class="logo" src="/images/logo-mobile.png"></div>
                                    <a class="go-to-news" href="news/">
                                        <p class="content">Посмотреть<br>новости</p></a>
                                </div>
                                <a class="visible-lg" href="/news/2020-2021/medalisty-dubravushki">
                                    <div class="news__item">
                                        <div class="overlay hidden-sm hidden-md">
                                            <div class="overlay-background"></div>
                                            <p class="content">Медалисты «Дубравушки»</p>
                                        </div>
                                        <img class="img-responsive" src="/uploads/news/692/60db7c223b1c3.jpg">
                                        <p class="content-tablet visible-sm visible-md">Медалисты «Дубравушки»</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <a href="/news/interesnoye/pochemu-nashi-ucheniki-dobivayut-sya-khoroshikh-rezul-tatov-i-uchat-sya-s-udovol-stviyem">
                                    <div class="news__item">
                                        <div class="overlay hidden-sm hidden-md">
                                            <div class="overlay-background"></div>
                                            <p class="content">Почему наши ученики добиваются хороших результатов и
                                                учатся с удовольствием</p>
                                        </div>
                                        <img class="img-responsive" src="/uploads/news/691/60d4bcb8dbd73.jpg">
                                        <p class="content-tablet visible-sm visible-md">Почему наши ученики добиваются
                                            хороших результатов и учатся с удовольствием</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <a href="/news/2020-2021/pozdravlyayem-vypusknikov-11-klass-s-rezul-tatami-po-yeg-e">
                                    <div class="news__item">
                                        <div class="overlay hidden-sm hidden-md">
                                            <div class="overlay-background"></div>
                                            <p class="content">Поздравляем выпускников 11 класс с результатами по
                                                ЕГЭ!</p>
                                        </div>
                                        <img class="img-responsive" src="/uploads/news/690/60d4b7074f294.jpg">
                                        <p class="content-tablet visible-sm visible-md">Поздравляем выпускников 11 класс
                                            с результатами по ЕГЭ!</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <a href="/news/interesnoye/kak-roditelyam-vybrat-shkolu-s-prozhivaniyem-dlya-svoyego-rebenka">
                                    <div class="news__item">
                                        <div class="overlay hidden-sm hidden-md">
                                            <div class="overlay-background"></div>
                                            <p class="content">Как родителям выбрать школу с проживанием для своего
                                                ребенка?</p>
                                        </div>
                                        <img class="img-responsive" src="/uploads/news/689/60d0b21633f08.jpg">
                                        <p class="content-tablet visible-sm visible-md">Как родителям выбрать школу с
                                            проживанием для своего ребенка?</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <a href="/news/interesnoye/bezopasnost-i-svoboda-mozhno-li-sovmestit-eto-v-shkole">
                                    <div class="news__item">
                                        <div class="overlay hidden-sm hidden-md">
                                            <div class="overlay-background"></div>
                                            <p class="content">Безопасность и свобода: можно ли совместить это в
                                                школе?</p>
                                        </div>
                                        <img class="img-responsive" src="/uploads/news/688/60b1412668f09.jpg">
                                        <p class="content-tablet visible-sm visible-md">Безопасность и свобода: можно ли
                                            совместить это в школе?</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <a href="/news/interesnoye/pedagogi-dubravushki-yevgeniya-aleksandrovna-kostrikova">
                                    <div class="news__item">
                                        <div class="overlay hidden-sm hidden-md">
                                            <div class="overlay-background"></div>
                                            <p class="content">Педагоги «Дубравушки»: Евгения Александровна
                                                Кострикова</p>
                                        </div>
                                        <img class="img-responsive" src="/uploads/news/687/60745f5f47a09.jpg">
                                        <p class="content-tablet visible-sm visible-md">Педагоги «Дубравушки»: Евгения
                                            Александровна Кострикова</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <a href="/news/interesnoye/nuzhno-li-rebenku-uchit-kitayskiy-yazyk">
                                    <div class="news__item">
                                        <div class="overlay hidden-sm hidden-md">
                                            <div class="overlay-background"></div>
                                            <p class="content">Нужно ли ребенку учить китайский язык?</p>
                                        </div>
                                        <img class="img-responsive" src="/uploads/news/686/606f21927256c.jpg">
                                        <p class="content-tablet visible-sm visible-md">Нужно ли ребенку учить китайский
                                            язык?</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <a href="/news/2020-2021/ucheniki-dubravushki-podgotovili-neobychnyye-proyekty-na-den-nauki">
                                    <div class="news__item">
                                        <div class="overlay hidden-sm hidden-md">
                                            <div class="overlay-background"></div>
                                            <p class="content">Ученики «Дубравушки» подготовили необычные проекты на
                                                День науки</p>
                                        </div>
                                        <img class="img-responsive" src="/uploads/news/685/606b38732b1f7.jpg">
                                        <p class="content-tablet visible-sm visible-md">Ученики «Дубравушки» подготовили
                                            необычные проекты на День науки</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news-mobile visible-xs">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="news-mobile__sidebar text-center">
                                <div class="logo-wrapper"><img class="logo" src="/images/logo-mobile.png"></div>
                                <a class="go-to-news" href="news/">
                                    <p class="content">Посмотреть<br>новости</p></a>
                            </div>
                            <div class="news-carousel owl-carousel owl-theme" id="news-carousel">
                                <div>
                                    <a href="/news/2020-2021/medalisty-dubravushki">
                                        <img src="/uploads/news/692/60db7c223b1c3.jpg">
                                        <div class="content">
                                            <h2 class="item-title">Медалисты «Дубравушки»</h2>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="/news/interesnoye/pochemu-nashi-ucheniki-dobivayut-sya-khoroshikh-rezul-tatov-i-uchat-sya-s-udovol-stviyem">
                                        <img src="/uploads/news/691/60d4bcb8dbd73.jpg">
                                        <div class="content">
                                            <h2 class="item-title">Почему наши ученики добиваются хороших результатов и
                                                учатся с удовольствием</h2>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="/news/2020-2021/pozdravlyayem-vypusknikov-11-klass-s-rezul-tatami-po-yeg-e">
                                        <img src="/uploads/news/690/60d4b7074f294.jpg">
                                        <div class="content">
                                            <h2 class="item-title">Поздравляем выпускников 11 класс с результатами по
                                                ЕГЭ!</h2>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="/news/interesnoye/kak-roditelyam-vybrat-shkolu-s-prozhivaniyem-dlya-svoyego-rebenka">
                                        <img src="/uploads/news/689/60d0b21633f08.jpg">
                                        <div class="content">
                                            <h2 class="item-title">Как родителям выбрать школу с проживанием для своего
                                                ребенка?</h2>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="/news/interesnoye/bezopasnost-i-svoboda-mozhno-li-sovmestit-eto-v-shkole">
                                        <img src="/uploads/news/688/60b1412668f09.jpg">
                                        <div class="content">
                                            <h2 class="item-title">Безопасность и свобода: можно ли совместить это в
                                                школе?</h2>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="/news/interesnoye/pedagogi-dubravushki-yevgeniya-aleksandrovna-kostrikova">
                                        <img src="/uploads/news/687/60745f5f47a09.jpg">
                                        <div class="content">
                                            <h2 class="item-title">Педагоги «Дубравушки»: Евгения Александровна
                                                Кострикова</h2>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="/news/interesnoye/nuzhno-li-rebenku-uchit-kitayskiy-yazyk">
                                        <img src="/uploads/news/686/606f21927256c.jpg">
                                        <div class="content">
                                            <h2 class="item-title">Нужно ли ребенку учить китайский язык?</h2>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="/news/2020-2021/ucheniki-dubravushki-podgotovili-neobychnyye-proyekty-na-den-nauki">
                                        <img src="/uploads/news/685/606b38732b1f7.jpg">
                                        <div class="content">
                                            <h2 class="item-title">Ученики «Дубравушки» подготовили необычные проекты на
                                                День науки</h2>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
