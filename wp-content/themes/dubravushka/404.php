<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Dubravushka
 */

get_header();
?>
<div class="site-error">
    <div class="container">
        <p class="block-first">
            404
        </p>
        <p class="block-second">страница не найдена</p>
        <p class="block-desc">страница, на которую вы патыетесь попасть<br>
            не сущуствует или была удалена.<br>
            перейдите на <a href="/">главную страницу</a>.
        </p>
    </div>

</div>

<?php
get_footer();
