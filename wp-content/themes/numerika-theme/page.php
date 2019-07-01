<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<!-- P a g e   T e m p l a t e -->
		<section class="page-template">

			<div class="grid__container">
				<div class="page-template__container">
					<div class="title">
						<?php the_title(); ?>
					</div>
			
					<div class="content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>

		</section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>