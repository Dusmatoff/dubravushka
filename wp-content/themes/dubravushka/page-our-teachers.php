<?php
/*
 * Template name: Наши учителя
 */
get_header();
$which_menu_display = get_field('which_menu_display');
$teachers = get_field('vybor_uchitelej_dlya_otobrazheniya');
?>

    <div class="container page">
        <div class="article article_default">
            <div class="article__sidebar">

                <div class="quick-menu quick-menu_default">
                    <?php
                    $menu = wp_nav_menu([
                        'theme_location' => 'sidebar-' . $which_menu_display,
                        'container' => false,
                    ]);
                    ?>
                </div>

            </div>

            <div class="article__content">
                <div class="article-img">
                    <div class="article-img__wrapper">
                        <img class="article-img__item" src="<?php the_post_thumbnail_url(); ?>" alt=""
                             role="presentation">
                    </div>
                    <?php the_title('<h1>', '</h1>'); ?>
                </div>

                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                }
                ?>

                <div class="superiors">
                    <div class="row">
                        <?php foreach ($teachers as $teacher): ?>
                            <div class="col-md-1-5">
                                <div class="superiors__item" style="margin-bottom: 1.5em;">
                                    <div class="superiors__itemphoto">
                                        <img alt="<?php echo $teacher->post_title; ?>"
                                             src="<?php echo get_the_post_thumbnail_url($teacher->ID); ?>"
                                        >
                                    </div>

                                    <div class="superiors__itemname">
                                        <?php echo $teacher->post_title; ?>
                                    </div>

                                    <div class="superiors__itemposition">
                                        <?php echo $teacher->post_content; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php
                get_template_part('template-parts/form-bottom');
                get_template_part('template-parts/share-block');
                ?>
            </div>
        </div>
    </div>

<?php
get_footer();
