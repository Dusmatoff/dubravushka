<?php
/*
 * Template name: Спасибо за заявку
 */
get_header();
?>
    <div class="container page">
        <div class="article article_default">
            <div class="article__content">
                <div class="article-img">
                    <div class="article-img__wrapper">
                        <img
                            class="article-img__item"
                            src="<?php echo get_the_post_thumbnail_url(); ?>"
                            alt="Спасибо"
                            role="presentation"
                        />
                    </div>
                </div>
                
                <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                        
                    the_title('<h1>', '</h1>');
                        
                    the_content();
                    
                    get_template_part('template-parts/share-block');
                ?>
            </div>
        </div>
    </div>
<?php
get_template_part('template-parts/news-block');
get_footer();
