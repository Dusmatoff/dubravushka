<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dubravushka
 */

$which_menu_display = get_field('which_menu_display');

//For page Слово основателя школы
$teacher_pic = get_field('teacher_pic');
$teacher_text = get_field('teacher_text');
$teacher_name = get_field('teacher_name');
?>

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

        <?php if ($teacher_pic && $teacher_text && $teacher_name): ?>
            <div class="sidebar-photo">
                <img class="sidebar-photo__img" src="<?php echo $teacher_pic; ?>" alt="" role="presentation">
            </div>
            <div class="quote">
                <div class="quote__text">
                    <?php echo $teacher_text; ?>
                </div>
                <div class="quote__author">
                    <?php echo $teacher_name; ?>
                </div>
            </div>
        <?php endif; ?>

    </div>

    <div class="article__content">
        <div class="article-img">
            <div class="article-img__wrapper">
                <img class="article-img__item" src="<?php the_post_thumbnail_url(); ?>" alt="" role="presentation">
            </div>
            <?php the_title('<h1>', '</h1>'); ?>
        </div>

        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>

        <?php the_content(); ?>

        <?php get_template_part('template-parts/share-block'); ?>
    </div>
</div>
