<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="home">

        <?php get_template_part('views/home/intro'); ?>

        <?php get_template_part('views/home/sectores'); ?>        

        <?php get_template_part('views/home/soluciones'); ?>

        <?php get_template_part('views/home/logos'); ?>       

    </div>

<?php endwhile; endif; ?>

<?php get_footer();
