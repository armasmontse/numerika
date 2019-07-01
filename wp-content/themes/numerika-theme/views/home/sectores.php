<div class="sectores">

    <!-- P R I V A D O -->
    <?php if( have_rows('home__private--group') ): ?>
        <?php while( have_rows('home__private--group') ): the_row();  ?>
            <?php
                // vars
                $private__sub = get_sub_field('private__subtitle');
                $private__content = get_sub_field('private__content');
            ?>
            <section class="private">
                <a href="<?php echo BLOGURL ?>/soluciones">
                    <div class="grid__container">
                        <div class="sectores__container">
                            <div class="group-one">
                                <h3 class="sectores__title wow fadeInLeft">Sector privado</h3>
                            </div>
                            <div class="group-two">
                                <div class="sectores__subtitle">
                                    <?php echo $private__sub ?>
                                </div>
                                <div class="sectores__content">
                                    <?php echo $private__content ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    
    <!-- P Ú B L I C O -->
    <?php if( have_rows('home__public--group') ): ?>
        <?php while( have_rows('home__public--group') ): the_row();  ?>
            <?php
                // vars
                $public__sub = get_sub_field('public__subtitle');
                $public__content = get_sub_field('public__content');
            ?>
            <section class="public">
                <a href="<?php echo BLOGURL ?>/soluciones">
                    <div class="grid__container">
                        <div class="sectores__container">
                            <div class="group-one">
                                <h3 class="sectores__title wow fadeInLeft">Sector público</h3>
                            </div>
                            <div class="group-two">
                                <div class="sectores__subtitle">
                                    <?php echo $public__sub ?>
                                </div>
                                <div class="sectores__content">
                                    <?php echo $public__content ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

</div>