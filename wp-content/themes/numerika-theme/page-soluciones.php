<?php get_header(); ?>

    <!-- S O L U C I O N E S -->
    <section id="app" class="archive-soluciones">

        <!-- Banner -->
        <div class="intro-soluciones">
            <div class="grid__container">
                <div class="intro-soluciones__container">
                    <?php include_once get_stylesheet_directory() . '/views/soluciones/controller.php'; ?>
                    <?php include_once get_stylesheet_directory() . '/views/soluciones/soluciones.php'; ?>



                </div>
            </div>
        </div>


        <!-- Detalles -->
        <?php include_once get_stylesheet_directory() . '/views/soluciones/solucion.php'; ?>


        <!-- Pleca trabajo -->
        <div  class="pleca">
            <div class="grid__container">
                <div class="pleca__container">
                    <h4 class="pleca__title">Continuemos la conversación</h4>

                    <div class="pleca__content">
                        <?php echo get_field("contact");?>
                    </div>

                    <div class="pleca__contact">
                        <a href="<?php echo BLOGURL ?>/contacto">Contacto</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
    jQuery(document).ready(function(){
start();
if(window.location.hash!=""){
jQuery('html, body').animate({
    scrollTop: jQuery("#soluciones-detalles").offset().top - 30
}, 1000);
}
    });


    function start() {

        const store = {
            solutions:     <?php echo json_encode($solutions); ?>,
        };

        new Vue({
            el: '#app',
            data: {
                store: store,
                solutionName: "",
                solutionText:"",
                objectives:[]

            },

            mounted() {

                var hash = window.location.hash.replace(/%20/g, ' ');
                hash = hash.replace("#","");

                var sols = this.store.solutions;
                var app=this;
                sols.forEach(function(solution){
                   console.log();
                   if (solution.title == decodeURIComponent(hash)) {

			                app.showSolution(null,solution);


                   }
                });

                /*jQuery(document).click(event => {
                    //if you click on anything except the modal itself close the modal
                    if (jQuery(event.target).hasClass('closeModal')) {
                        this.closeModal()
                    }
                });*/

                // Show event that is in hash.

            },
            watch: {

            },
            computed: {

            },
            methods: {

                showSolution(event,solution){
                    if (event) event.preventDefault();
                    this.solutionName=solution.title;
                    this.solutionText=solution.description;
                    this.objectives=solution.objectives;

                    document.getElementById('soluciones-detalles').scrollIntoView({behavior: 'smooth'});




                },


            }
        })

    }
    </script>
<?php get_footer(); ?>
