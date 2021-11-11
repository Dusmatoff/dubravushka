<?php
/*
	Template Name: Visit
*/

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$banner_img = get_field('banner_img');
$banner_title = get_field('banner_title');
$banner_subtitle = get_field('banner_subtitle');

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

$team_title = get_field('team_title');
$team_subtitle = get_field('team_subtitle');
$team_list = get_field('team_list');

$security_title = get_field('security_title');
$security_subtitle = get_field('security_subtitle');
$security_link = get_field('security_link');
$security_link_text = get_field('security_link_text');

$more_title = get_field('more_title');
$more_text = get_field('more_text');
$more_youtube_id = get_field('more_youtube_id');

$news = get_posts(['numberposts' => 8]);
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
                        <?php echo do_shortcode('[contact-form-7 id="349" title="Оставить заявку"]'); ?>
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
                                $index = get_row_index();
                                ?>
                                <div class="col-md-4">
                                    <?php if ($index === 2 || $index === 3 || $index === 5 || $index === 6 || $index === 8 || $index === 9): ?>
                                        <div class="right-line"></div>
                                    <?php endif; ?>
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
        <div class="nsection__title">
            <?php echo $team_title; ?>
        </div>

        <p class="nsection__subtitle">
            <?php echo $team_subtitle; ?>
        </p>

        <div class="superiors">
            <div class="superiors__row">
                <div class="row">
                    <?php foreach ($team_list as $team): ?>
                        <div class="col-md-1-5">
                            <div class="superiors__item" style="margin-bottom: 1.5em;">
                                <div class="superiors__itemphoto">
                                    <img alt="<?php echo $team->post_title; ?>"
                                         src="<?php echo get_the_post_thumbnail_url($team->ID); ?>"/>
                                </div>

                                <div class="superiors__itemname">
                                    <?php echo $team->post_title; ?>
                                </div>

                                <div class="superiors__itemposition">
                                    <?php echo $team->post_content; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container global">
        <div class="nsection security-wrap" id="security">
            <div class="nsection__title">
                <?php echo $security_title; ?>
            </div>

            <?php if (have_rows('security_icons')): ?>
                <div class="row">
                    <?php
                    while (have_rows('security_icons')) :
                        the_row();
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                        ?>
                        <div class="col-md-4">
                            <div class="security__icon">
                                <img src="<?php echo $icon; ?>"/>
                            </div>

                            <h3 class="security__title">
                                <?php echo $title; ?>
                            </h3>

                            <p class="security__text">
                                <?php echo $text; ?>
                            </p>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <p class="security__bottomtext">
                <?php echo $security_subtitle; ?>
            </p>
        </div>

        <div style="text-align:center;">
            <h3>
                <a href="<?php echo $security_link; ?>" rel="nofollow">
                    <?php echo $security_link_text; ?>
                </a>
            </h3>
        </div>
    </div>

    <div class="container global">
        <div class="left-text left-text-dop-style">
            <h3><?php echo $more_title; ?></h3>

            <?php echo $more_text; ?>
        </div>
        <div class="right-video">
            <div class="youtube" id="<?php echo $more_youtube_id; ?>" style="width:600px;height:360px;">&nbsp;</div>
        </div>
    </div>

    <div class="container global"></div>

    <div class="container">
        <div class="home-page form-bottom">
            <?php get_template_part('template-parts/form-bottom'); ?>
        </div>
        <div class="home-page">
            <?php get_template_part('template-parts/share-block'); ?>
        </div>
    </div>

    <?php get_template_part('template-parts/news-block'); ?>
<?php
get_footer();
