<?php
/*
	Template Name: Pansion
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

$text_after_icons = get_field('text_after_icons');

$reviews_title = get_field('reviews_title');
$review_btn_text = get_field('review_btn_text');
$review_btn_link = get_field('review_btn_link');
$reviews_list = get_field('reviews_list');

$steps_title = get_field('steps_title');

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
    </div>
    
    <?php if (have_rows('feature_list_2')): ?>
    <div class="container global">
        <div class="class-list">
            <ul>
                <?php
                while (have_rows('feature_list_2')) :
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
                    <div class="section__title">
                        <?php echo $icons_title; ?>
                    </div>
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
        <div class="banner-text">
            <?php echo $text_after_icons; ?>
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
    <div class="privilege">
        <div class="section-title"><?php echo $steps_title; ?></div>
        
        <?php if (have_rows('steps')): ?>
        <div class="section-container">
            <div class="row">
                <?php
                while (have_rows('steps')) :
                    the_row();
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    ?>
                <div class="col-md-6" style="min-height: 180px;">
                    <div class="block-left">&nbsp;</div>

                    <div class="block-right">
                        <div class="block-title">
                            <?php echo $title; ?>
                        </div>

                        <div class="block-desc"><?php echo $text; ?></div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
        
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
