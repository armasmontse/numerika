
<div class="intro-soluciones__title">
    <?php  the_content();?>
</div>

<div class="intro-soluciones__loop">


     <div v-for="(solution,index) in store.solutions" class="intro-soluciones__loop--item">
         <a  v-on:click="showSolution($event,solution)"  href="" >
             <div class="card-solution "   style="background-image: url(<?php echo THEMEURL ?>images/home/solutions/card1.svg);">
                 <p class="card-solution__title" >
                     {{solution.title}}
                 </p>
             </div>
         </a>
     </div>





</div>
