<?php /*template name: About-us*/?>
<?php get_header(); ?>
<main>
	<article class="container">
		<div class="row-fluid" style="margin:30px 0 30px;">
			<div style="display:table; width:100%;">
				<div class="col-lg-6 col-md-6 td-cell">
				<?php if(have_posts()) : while(have_posts()) : the_post();?>
				
					<?php the_content();?>
					
				<?php endwhile; endif;?>
				</div>
				
				<div class="col-lg-6 col-md-6 td-cell">
					<img src="<?php the_field('featured_image'); ?>" style="width:100%; height:auto;"/>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</article>
</main>
<?php get_footer(); ?>