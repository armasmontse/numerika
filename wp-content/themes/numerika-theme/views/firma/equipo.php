<?php

     $query_args;

    // Query post type 'expositores'
    $query_args = array(
        'post_type'         => 'Equipo',
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

?>

<?php if ($query->have_posts()) : ?>
<!-- E Q U I P O -->
<section class="equipo" id="equipo">
    <div class="grid__container">
        <div class="equipo__container">
            <!--<div class="equipo__foto">
                <img src="<?php echo THEMEURL ?>/images/firma/equipo/equipo.jpg" alt="" />
            </div>-->
            <div class="row">
                <div class="group-one">
                    <div class="equipo__title">
                        Equipo
                    </div>
                </div>
                <div class="group-two">
                    <div class="equipo__description">
                        <?php echo get_field("team")?>
                    </div>
                </div>
            </div>

            <div class="equipo__loop">
                <?php  while ($query->have_posts()) : $query->the_post(); ?>
                <div class="card wow fadeInUp">
                    <p class="card__puesto">
                        <?php echo get_field("position")?>
                    </p>
                    <p class="card__nombre">
                        <?php echo get_field("name")?>
                    </p>
                    <p class="card__profesion">
                        <?php echo get_field("title")?>
                    </p>
                    <?php if (have_rows("education")) :?>
                    <?php while (have_rows('education')) : the_row(); ?>
                    <div class="card__box">
                        <div class="especialidad">
                            <?php echo get_sub_field("education__title");?>
                        </div>
                        <div class="especialidad__lugar">
                            <?php echo get_sub_field("education__place");?>
                        </div>
                    </div>
                <?php endwhile; endif;  ?>


                    <div class="card__experiencia">
                        <h5 class="title">
                            Expertise
                        </h5>
                        <p class="description">
                        <?php echo get_field("expertise")?>
                        </p>
                    </div>

                </div>
            <?php endwhile;?>


            </div>
        </div>
    </div>
</section>
<?php endif;?>
