<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dubravushka
 */

$annotation = get_field('annotation', get_the_ID());
?>

<?php if (is_singular()) : ?>
    <h1><?php the_title(); ?></h1>
    <?php get_template_part('template-parts/share-block'); ?>

    <img class="article-img__item" src="<?php the_post_thumbnail_url(); ?>" alt="" role="presentation">

    <div class="preview_text">
        <?php echo $annotation; ?>
    </div>

    <?php the_content(); ?>
<?php else: ?>
    <div class="row news-list-view">
        <div class="col-md-4 col-sm-4">
            <img class="box-item__image img-responsive" src="<?php the_post_thumbnail_url(); ?>"
                 alt="<?php the_title(); ?>">
        </div>
        <div class="col-md-8 col-sm-8">
            <div class="box-item__sub-title">
                <?php the_date(); ?>
            </div>
            <a class="box-item-wrapper" href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
            <div class="preview-text">
                <p dir="ltr"><?php echo $annotation; ?></p>
            </div>
        </div>
    </div>
<?php endif; ?>