<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dubravushka
 */

$annotation = get_field('annotation', get_the_ID());
$is_graduates_category = in_category(33);
?>
<?php if (is_singular()) : ?>
    <h1><?php the_title(); ?></h1>
    <?php get_template_part('template-parts/share-block'); ?>

    <img class="article-img__item" src="<?php the_post_thumbnail_url(); ?>" alt="" role="presentation">

    <div class="preview_text">
        <?php echo $annotation; ?>
    </div>

    <?php
    the_content();

    if ($is_graduates_category):
        $teacher_pic = get_field('teacher_pic');
        $teacher_name = get_field('imya_uchitelya');
        $graduates = get_field('graduates');
        ?>
        <div class="row" style="display: flex; flex-wrap: wrap;">
            <?php if ($teacher_pic && $teacher_name): ?>
                <div class="col-xs-12 col-sm-4">
                    <div class="box-item">
                        <img class="box-item__image img-responsive" src="<?php echo $teacher_pic; ?>"
                             alt="<?php echo $teacher_name; ?>">
                        <div class="box-item__title"><?php echo $teacher_name; ?></div>
                        <div class="box-item__sub-title">Кл. руководитель</div>
                    </div>
                </div>
            <?php endif; ?>
            <?php while (have_rows('graduates')):
                the_row();
                $pic = get_sub_field('pic');
                $name = get_sub_field('name');
                $medalist = get_sub_field('medalist');
                ?>
                <div class="col-xs-12 col-sm-4">
                    <div class="box-item">
                        <?php if($pic): ?>
                            <img src="<?php echo $pic; ?>"
                                alt="<?php echo $name; ?>"
                                class="box-item__image img-responsive"
                                >
                        <?php endif; ?>
                        <div class="box-item__title"><?php echo $name; ?></div>
                        <?php if ($medalist): ?>
                            <div class="box-item__sub-title achivement">Медалист</div>
                            <div class="icon-sprite icon-achivement"></div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function (evt) {
                $('.sub-menu').attr('id', 'graduates');
            });
        </script>
    <?php
    endif;
    get_template_part('template-parts/form-bottom');
    ?>
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