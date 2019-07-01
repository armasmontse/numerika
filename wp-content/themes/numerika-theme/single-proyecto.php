<?php get_header(); ?>

    <!-- S i n g l e   p r o y e c t o -->
    <section class="single-proyecto section">
        <!-- Banner -->
        <div class="banner__bg">
            <div class="grid__container">
                <div class="banner__container">
                    <div class="banner__row">
                        <div class="banner__group-one">
                            <?php $terms = wp_get_object_terms($post->ID, 'tipos');?>
                            <p class="banner__categoria"><?php foreach ($terms as $key => $value) {
                                echo ($key != count($terms)-1) ?  $value->name." | " :  $value->name;

                            }?></p>
                            <h3 class="banner__proyecto"><?php echo the_title()?></h3>
                        </div>

                        <div class="banner__group-two">
                            <a class="banner__link" id="link-planteamiento" href="#planteamiento">Planteamiento</a>
                            <a class="banner__link" id="link-solucion" href="#solucion">Solución</a>
                            <a class="banner__link" id="link-resultados" href="#resultados">Resutados</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid__container">

            <div class="single-proyecto__container">

                <!-- Planteamiento -->
                <div class="planteamiento single-proyecto__row-flex" id="planteamiento">
                    <div class="single-proyecto__group-one">
                        <div class="single-proyecto__title">
                            Planteamiento

                        </div>
                    </div>

                    <div class="single-proyecto__group-two">
                        <div class="planteamiento__content">
                            <?php echo get_field("planteamiento")?>
                        </div>
                    </div>
                </div>

                <!-- Solución -->
                <div class="solucion single-proyecto__row-flex" id="solucion">
                    <div class="single-proyecto__group-one">
                        <div class="single-proyecto__title">
                            Solución
                        </div>
                    </div>

                    <div class="single-proyecto__group-two">
                        <div class="solucion__content">
                            <?php echo get_field("solution")?>

                            <!--<p>
                                <img class="modalOpen" src="<?php echo THEMEURL ?>/images/single/single1.jpg" alt="" />
                                <div class="solucion__creditos">
                                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                                </div>
                            </p>-->



                        </div>
                    </div>
                </div>

                <!-- Resultados -->
                <div class="resultados single-proyecto__row-flex" id="resultados">
                    <div class="single-proyecto__group-one">
                        <div class="single-proyecto__title">
                            Resultado
                        </div>
                    </div>

                    <div class="single-proyecto__group-two">
                        <?php echo get_field("result")?>

                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/3uTGTz6021I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->



                    </div>
                </div>

            </div>

        </div>

        <!-- Pleca contacto -->
        <div class="pleca">
            <div class="grid__container">
                <div class="pleca__container">
                    <h4 class="pleca__title">Continuemos la conversación</h4>

                    <div class="pleca__content">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                    </div>

                    <div class="pleca__contact">
                        <a href="<?php echo BLOGURL ?>/contacto">Contacto</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="contenido-to-top" id="nav_up"></div>

    </section>


    <!-- Modal imagen -->
    <div id="modal" class="modal">
        <!-- <span class="close">&times;</span> -->
        <div class="modal-content">

            <div class="">
                <img src="<?php echo THEMEURL ?>/images/single/single1.jpg" alt="" />
                <p class="modal__creditos">
                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                </p>
            </div>

        </div>
    </div>

<?php get_footer(); ?>
