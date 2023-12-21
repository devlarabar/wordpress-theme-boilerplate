<?php
/* Main template file */

get_header();

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // This is a PHP shorthand
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                get_template_part('template-parts/post/content', get_post_format()); // Add files in the theme
            // Do our custom things
            endwhile;
            echo paginate_links([
                'prev_text' => esc_html__('Prev', 'practicetheme'),
                'next_text' => esc_html__('Next', 'practicetheme'),
            ]);
        else :
            get_template_part('template-parts/page/content', 'none');
        endif;
        ?>
    </main>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>