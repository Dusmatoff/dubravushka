<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dubravushka
 */

get_header();
?>

    <div class="container news-list">
        <div class="article article_default">
            <div class="article__sidebar">
                <div class="quick-menu quick-menu_default">
                    <?php
                    $menu = wp_nav_menu([
                        'theme_location' => 'sidebar-news-category',
                        'container' => false,
                    ]);
                    ?>
                </div>
            </div>

            <div class="article__content">
                <h1>Новости</h1>

                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                }

                the_archive_title('<h4 class="article-title">', '</h1>');
                //the_archive_description('<div class="archive-description">', '</div>');
                ?>

                <ul id="news-list" class="news-list">
                    <div class="row">
                        <?php if (have_posts()) : ?>

                        <?php
                        /* Start the Loop */
                        while (have_posts()) :
                            the_post();

                            /*
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                             */
                            get_template_part('template-parts/content', get_post_type());

                        endwhile; ?>
                    </div>
                    <hr class="divider">
                    <?php
                    $url = home_url('post');

                    dubravushka_pagination([
                        //'base' => $url . '/%_%',
                        //'add_args' => get_query_var('paginationArgs')
                    ]);
                    //the_posts_navigation();
                    else :
                        get_template_part('template-parts/content', 'none');
                    endif;
                    ?>
                </ul>

            </div>
        </div>
    </div><!-- #main -->

<?php
//get_sidebar();
get_footer();
