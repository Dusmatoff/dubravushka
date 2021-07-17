<?php
$news = get_posts(['numberposts' => 8]);
?>

<div class="container-fluid custom-padding bg-theme__coffee widget-news">
    <div class="container">
        <div class="news">
            <div class="row hidden-xs">
                <div class="col-xs-3 hidden-sm hidden-md">
                    <div class="news__sidebar text-center">
                        <div class="logo-wrapper">
                            <img class="logo"
                                 src="<?php echo get_stylesheet_directory_uri() . '/images/logo.png'; ?>"></div>
                        <a class="go-to-news" href="/news/">
                            <p class="content">Посмотреть<br>новости</p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-9 col-sm-12 col-md-12 col-lg-9">
                    <div class="row">
                        <div class="news__sidebar text-center visible-sm visible-md">
                            <div class="logo-wrapper">
                                <img class="logo"
                                     src="<?php echo get_stylesheet_directory_uri() . '/images/logo-mobile.png'; ?>">
                            </div>
                            <a class="go-to-news" href="/news/">
                                <p class="content">Посмотреть<br>новости</p></a>
                        </div>
                        <?php foreach ($news as $post): setup_postdata($post); ?>
                            <div class="col-sm-3 col-lg-3">
                                <a class="visible-lg" href="<?php the_permalink(); ?>">
                                    <div class="news__item">
                                        <div class="overlay hidden-sm hidden-md">
                                            <div class="overlay-background"></div>
                                            <p class="content">
                                                <?php the_title(); ?>
                                            </p>
                                        </div>
                                        <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>">
                                        <p class="content-tablet visible-sm visible-md">
                                            <?php the_title(); ?>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
            <div class="news-mobile visible-xs">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="news-mobile__sidebar text-center">
                            <div class="logo-wrapper">
                                <img class="logo"
                                     src="<?php echo get_stylesheet_directory_uri() . '/images/logo-mobile.png'; ?>">
                            </div>
                            <a class="go-to-news" href="/news/">
                                <p class="content">Посмотреть<br>новости</p></a>
                        </div>
                        <div class="news-carousel owl-carousel owl-theme" id="news-carousel">
                            <?php foreach ($news as $post): setup_postdata($post); ?>
                                <div>
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php the_post_thumbnail_url(); ?>">
                                        <div class="content">
                                            <h2 class="item-title">
                                                <?php the_title(); ?>
                                            </h2>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach;
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>