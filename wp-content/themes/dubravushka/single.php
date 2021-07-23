<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Dubravushka
 */

get_header();

$is_graduates_category = in_category(33);
?>
    <?php if ($is_graduates_category): ?>
        <div class="article-image" style="background-image: url('<?php the_field('graduates_header_pic', 'option'); ?>');"></div>
    <?php endif; ?>

    <div class="container <?php echo $is_graduates_category ? '' : 'news-detail'; ?>">
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
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                } ?>

                <?php
                while (have_posts()) :
                    the_post();

                    get_template_part('template-parts/content', get_post_type());

                    /*the_post_navigation(
                        array(
                            'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'dubravushka' ) . '</span> <span class="nav-title">%title</span>',
                            'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'dubravushka' ) . '</span> <span class="nav-title">%title</span>',
                        )
                    );*/

                    // If comments are open or we have at least one comment, load up the comment template.
                    /*if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;*/

                endwhile; // End of the loop.
                ?>

            </div>

        </div>
    </div><!-- #main -->

<?php
//get_sidebar();
get_footer();
