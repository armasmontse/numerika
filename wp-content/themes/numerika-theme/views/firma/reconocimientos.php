<!-- R E C O N O C I M I E N T O S -->
<section class="reconocimientos" id="reconocimientos">
    <div class="grid__container">
        <div class="reconocimientos__container">
            <div class="reconocimientos__title">
                Reconocimientos y premios
            </div>
            <?php if (have_rows("firm__awards")) :?>
            <?php while (have_rows('firm__awards')) : the_row(); $image = get_sub_field('awards__logo');?>
            <div class="row">
                <div class="group-one">
                    <img src="<?php echo $image['url']?>" alt="" />
                </div>
                <div class="group-two">
                    <div class="reconocimientos__nombre">
                        <?php echo get_sub_field("awards__name")?>

                    </div>
                    <div class="reconocimientos__otorga">
                        <?php echo get_sub_field("awards__give")?>
                    </div>
                </div>
            </div>
        <?php endwhile;endif?>



        </div>
    </div>
</section>
