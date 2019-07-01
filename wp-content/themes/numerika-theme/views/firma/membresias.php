<!-- M E M B R E S I A S -->
<section class="membresias">
    <div class="grid__container">
        <div class="membresias__container">
            <div class="row">
                <div class="group-one">
                    <h3 class="membresias__title wow fadeInLeft">Membresías</h3>
                </div>
                <div class="group-two">
<?php if (have_rows("firm__ memberships--group")) :?>
<?php while (have_rows('firm__ memberships--group')) : the_row(); ?>
                    <div class="membresias__content">
                        <?php echo get_sub_field("memberships__content")?>
                    </div>
<?php endwhile;endif;?>
                </div>
            </div>
            <?php if (have_rows("firm__ memberships--group")) :?>
            <div class="membresias__logos">

                <ul class="membresias__logos--lista">
                    <?php while (have_rows('firm__ memberships--group')) : the_row(); ?>

                        <?php $memberships = get_sub_field("memberships__repeater");
                        foreach ($memberships as $key => $value) {
                            echo '<li><img src="'.$value['url'].'" alt="" /></li>';
                        }
                        ?>

                    </li>
                <?php endwhile;?>


                </ul>
            </div>
        <?php endif;?>
        </div>
    </div>
</section>
