<?php
/*
 * Template name: Выпускники
 */
get_header();
$which_menu_display = get_field('which_menu_display');
$banner = get_field('banner');

$graduates = get_posts([
    'numberposts' => -1,
    'category' => 33,
    'orderby' => 'date',
    'order' => 'DESC',
]);
?>

    <div class="article-image" style="background-image: url('<?php echo $banner; ?>');"></div>
    <div class="container">
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
                <div class="graduates-page custom-padding-bottom">
                    <?php
                    the_title('<h1>', '</h1>');
                    the_content();
                    ?>

                    <div class="row">
                        <?php
                        foreach ($graduates as $post):
                            //setup_postdata($post);
                            while (have_rows('graduates', $post->ID)):
                                the_row();
                                $medalist = get_sub_field('medalist');
                                if ($medalist):
                                    $pic = get_sub_field('pic');
                                    $name = get_sub_field('name');
                                    ?>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="box-item">
                                            <img class="box-item__image img-responsive"
                                                 src="<?php echo $pic; ?>" alt="<?php echo $name; ?>">
                                            <div class="box-item__title">
                                                <?php echo $name; ?>
                                            </div>
                                            <div class="box-item__sub-title">
                                                Выпуск <?php echo get_field('graduate', $post->ID); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endif;
                            endwhile;
                        endforeach;
                        ?>
                    </div>

                    <?php
                    get_template_part('template-parts/form-bottom');
                    get_template_part('template-parts/share-block');
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function (evt) {
            $('.sub-menu').attr('id', 'graduates');
        });
    </script>
<?php
get_footer();
