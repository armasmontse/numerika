<!-- L O G O S -->
<section class="logos">
    <div class="grid__container">
        <div class="logos__container">
            <ul class="logos__slider">
                <?php $images = get_field('home__logos'); ?>

                <?php if( $images ): ?>
                    <?php foreach( $images as $image ): ?>
                        <li>
                            <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>
