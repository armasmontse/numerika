<?php get_header(); ?>
    <?php include_once get_stylesheet_directory() . '/views/proyectos/controller.php'; ?>
    <!-- P r o y e c t o s -->
    <section id="app" class="proyectos">
    <?php include_once get_stylesheet_directory() . '/views/proyectos/proyectos.php'; ?>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
    start();
    function start() {



        const store = {
            projects:     <?php echo json_encode($projects); ?>,
            categories: <?php echo json_encode($categories);?>
        };

        new Vue({
            el: '#app',
            data: {
                store: store,
                selectedCategory: 0

            },
            mounted() {

            },
            watch: {

            },
            computed: {
                projectList(){

                    if(this.selectedCategory==0){
                        return this.store.projects;
                    }else{
                        return this.filterProjects();
                    }

                }
            },
            methods: {

                filterProjects(){
                    var filtered = [];
                    var app = this;
                    this.store.projects.forEach(function(project){
                        if(project.terms_id.indexOf(app.selectedCategory)!=-1){
                            filtered.push(project);
                        }
                    });
                    return filtered;
                },


            }
        })

    }
    </script>

<?php get_footer(); ?>
