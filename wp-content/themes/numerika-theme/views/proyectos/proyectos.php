
<div class="grid__container">
    <div class="proyectos__container">

        <!-- Filtros -->
        <div class="filtros">
            <span class="filtros__label">Filtro por tipo de solución:</span>
            <span>
                <select v-model="selectedCategory" name="" id="">
                    <option value="0" >Todas</option>
                    <option v-for="category in store.categories" :key="category.term_id" :value="category.term_id" v-text="category.name"></option>

                    <!--<option value="">Metodología de encuestas</option>
                    <option value="">Ciencia de datos</option>
                    <option value="">Evaluación de programas</option>
                    <option value="">Investigación de mercados</option>
                    <option value="">Investigación de medios</option>
                    <option value="">Estudios cuantitativos</option>-->
                </select>
            </span>
        </div>

        <!-- Loop -->
        <div class="loop">

            <div class="loop__lista">

                    <a v-for="project in projectList" :href="project.link">
                        <div class="loop__row">
                            <div class="group-one">
                                <div class="loop__box">
                                    <img :src="project.image" alt="" />
                                </div>
                            </div>

                            <div class="group-two">

                                <p  class="loop__categorias">{{project.terms}}</p>
                                <h3 class="loop__proyecto">{{project.title}}</h3>
                                <div v-html="project.description" class="loop__extracto">

                                </div>

                                <p class="loop__link">Leer reporte</p>
                            </div>
                        </div>
                    </a>


            </div>

        </div>

    </div>
</div>

<div class="contenido-to-top" id="nav_up"></div>
