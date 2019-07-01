<?php get_header(); ?>
    <!-- C O N T A C T O -->
    <div class="contacto">
        <div class="grid__container">
            <div class="contacto__container">

                <div class="row-flex">
                    <div class="group-one">
                        <div class="contacto__title">
                            Contáctanos
                        </div>
                    </div>

                    <div class="group-two">
                        <div class="contacto__instrucciones">
                            <?php echo get_field("description")?>
                        </div>

                        <div class="row-flex-top">
                            <div class="formulario">
                            <?php echo do_shortcode('[contact-form-7 id="500" title="Contact form 1"]');?>
                            </div>

                            <div class="other">
                                <div class="other__row">
                                    <h4 class="other__title">
                                        Conoce nuestras redes sociales:
                                    </h4>
                                    <div class="redes">

                                        <a target="_blank" href="<?php echo get_field("linkedin")?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.81 30"><defs><style>.cls-1{fill:#363a36;}.cls-2{fill:#fff;fill-rule:evenodd;}</style></defs><title>linkedin</title><g id="Capa_2" data-name="Capa 2"><g id="diseño"><path id="linkedin" data-name="&lt;Trazado&gt;" class="cls-1" d="M0,2.15A2.18,2.18,0,0,1,2.2,0H27.61a2.18,2.18,0,0,1,2.2,2.15v25.7A2.18,2.18,0,0,1,27.61,30H2.2A2.18,2.18,0,0,1,0,27.85V2.15Z"/><path id="_Trazado_compuesto_" data-name="&lt;Trazado compuesto&gt;" class="cls-2" d="M9,25.11V11.57H4.53V25.11ZM6.79,9.72A2.35,2.35,0,1,0,6.81,5a2.35,2.35,0,1,0,0,4.68Z"/><path id="_Trazado_2" data-name="&lt;Trazado&gt;" class="cls-2" d="M11.53,25.11H16V17.55a3.05,3.05,0,0,1,.15-1.1,2.45,2.45,0,0,1,2.31-1.65c1.63,0,2.28,1.24,2.28,3.07v7.24h4.5V17.35c0-4.17-2.22-6.1-5.18-6.1A4.49,4.49,0,0,0,16,13.53h0v-2h-4.5c.06,1.27,0,13.54,0,13.54Z"/></g></g></svg>
                                            <!-- <img src="<?php echo THEMEURL ?>images/footer/linkedin.svg" alt=""> -->
                                        </a>
                                        <a target="_blank" href="<?php echo get_field("twitter")?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.7 24.14"><defs><style>.cls-1{fill:#363a36;}</style></defs><title>twitter</title><g id="Capa_2" data-name="Capa 2"><g id="diseño"><path id="twitter" data-name="&lt;Trazado&gt;" class="cls-1" d="M29.7,2.86a12.42,12.42,0,0,1-3.5,1A6.15,6.15,0,0,0,28.88.45,12.31,12.31,0,0,1,25,1.92,6.1,6.1,0,0,0,14.47,6.09a5.75,5.75,0,0,0,.16,1.39A17.28,17.28,0,0,1,2.07,1.12a6,6,0,0,0-.83,3.06A6.1,6.1,0,0,0,4,9.25a6.12,6.12,0,0,1-2.76-.76v.07a6.1,6.1,0,0,0,4.89,6,6.05,6.05,0,0,1-1.6.21,6.15,6.15,0,0,1-1.15-.11A6.1,6.1,0,0,0,9,18.88a12.23,12.23,0,0,1-7.57,2.6A13.94,13.94,0,0,1,0,21.4a17.25,17.25,0,0,0,9.34,2.74c11.21,0,17.34-9.29,17.34-17.34,0-.26,0-.53,0-.79a12.47,12.47,0,0,0,3-3.15"/></g></g></svg>
                                            <!-- <img src="<?php echo THEMEURL ?>images/footer/twitter.svg" alt="">								 -->
                                        </a>
                                    </div>
                                </div>

                                <div class="other__row">
                                    <h4 class="other__title">
                                        Envíanos un mail con información detallada a:
                                    </h4>
                                    <a class="mail" href="mailto:contacto@numerika.mx"><?php echo get_field("email")?></a>
                                </div>

                                <div class="other__row">
                                    <h4 class="other__title">
                                        Llámanos al teléfono:
                                    </h4>
                                    <a class="mail" href="tel:+5266298202"><?php echo get_field("telefono")?></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div id="notificacion" class="notificacion" onclick="notificacionHide()">
            Gracias, recibimos tu mensaje. A la brevedad nos comunicaremos.
        </div>
    </div>

    <script>
        // Notificación
        function notificacion(){
            document.getElementById('notificacion').style.display= 'flex';
        }

        function notificacionHide(){
            document.getElementById('notificacion').style.display= 'none';
        }
    </script>


<?php get_footer(); ?>
