<?php

     $query_args;

    // Query post type 'expositores'
    $query_args = array(
        'post_type'         => 'Soluciones',
        'post_status'       => 'publish',
        'order' => 'ASC'

    );

    $query = new WP_Query($query_args);

    // echo '<pre>';
    // var_dump($query);
    // echo '</pre>';

    // Vars
    //$link = get_field('link_web_expositor');
    //$empresa = get_field('empresa_expositor');
    $desc = get_field("solutions");
?>

<?php if ($query->have_posts()) : ?>
<!-- S O L U C I O N E S -->
<section class="soluciones">
    <div class="grid__container">
        <div class="soluciones__container">
            <div class="soluciones__title">
                <?php echo $desc?>
            </div>
            <div class="soluciones__loop">
               <?php $i=0;  while ($query->have_posts()) : $query->the_post(); $i++; ?>
                <div class="soluciones__loop--item">
                    <a href="<?php echo BLOGURL ?>/soluciones#<?php the_title();?>">
                        <div class="card-solution" style="background-image: url(<?php echo THEMEURL ?>images/home/solutions/card<?php echo $i; ?>.svg);">
                            <p class="card-solution__title">
                                <?php the_title(); ?>
                            </p>
                        </div>
                    </a>
                </div>


             <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php wp_reset_query(); ?>
