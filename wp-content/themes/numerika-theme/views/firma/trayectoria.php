<?php

     $query_args;

    // Query post type 'expositores'
    $query_args = array(
        'post_type'         => 'Trayectoria',
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
<!-- T R A Y E C T O R I A -->
<section class="trayectoria" id="trayectoria">
    <div class="trayectoria__banner">
        <div class="trayectoria__banner--container">
            Trayectoria
        </div>
    </div>
    <div class="grid__container">
        <div class="trayectoria__container">
            <ul class="trayectoria__slider">

            <?php while ($query->have_posts()) : $query->the_post();  ?>
                <li>

                    <div class="year">
                        <?php echo get_field("year")?>
                    </div>

                    <div class="vertical-line"></div>

                    <div class="flex-row">
                        <?php if(have_rows("trayectory__events")): while(have_rows("trayectory__events")):the_row();?>
                        <div class="card">
                            <div class="card__logo">
                                <img src="<?php echo get_sub_field("trayectory__logo")['url']?>" alt="" />
                            </div>
                            <div class="card__name">
                                <?php echo get_sub_field("trayectory__job")?>
                            </div>
                        </div>
                    <?php endwhile; endif;?>

                    </div>

                </li>
            <?php endwhile;?>

            </ul>

            <div class="galeria-anterior"></div>
            <div class="galeria-siguiente"></div>

        </div>
    </div>
</section>
<?php endif;?>
