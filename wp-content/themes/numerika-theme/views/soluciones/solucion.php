<div  class="detalles" id="soluciones-detalles">

    <div class="grid__container">
        <div v-show="solutionName!=''" class="detalles__container">

            <div  class="row">
                <div class="group-one">
                    <div v-html="solutionName" class="detalles__title">

                    </div>
                </div>

                <div class="group-two">
                    <div v-html="solutionText" class="detalles__content wow fadeInRight">

                    </div>
                </div>
            </div>

            <div  class="row reverse">
                <div class="group-one">
                    <h4 class="proyectos__title">Conoce nuestro trabajo:</h4>

                    <ul class="proyectos__lista">
                        <li class="proyectos__item">
                            <a href="">
                                Michoacán: Análisis gráfico de las elecciones locales en 2007 y 2011
                            </a>
                        </li>
                        <li class="proyectos__item">
                            <a href="">
                                Flujo de distritos electorales por partido para la lxii Legislatura
                            </a>
                        </li>
                    </ul>

                </div>

                <div class="group-two">
                    <ul class="caracteristicas">

                        <li v-for="objective in objectives">
                            {{objective}}
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="contenido-to-top" id="nav_up"></div>

</div>
