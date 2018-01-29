<?php
/* template name: Store */
?>

<?php get_header();?>
<main>
	<article class="container">
		<div class="row-fluid" style="margin:30px 0 30px;">
			<img src="<?php the_field('featured_image'); ?>" style="width:100%; height: auto;">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<?php the_post_thumbnail();?>
			
			<?php endwhile; endif;?>
			
			<?php
				//echo $field = get_field_object('featured_image')['label'] ;
				
			?>
			<h4><label>BRANCHES IN CEBU</label></h4>
			<p><span class="glyphicon glyphicon-map-marker"></span> 31 P. Gullas St.</p>
			<p><span class="glyphicon glyphicon-map-marker"></span> SM City (Lower Ground Floor)</p>
			<p><span class="glyphicon glyphicon-map-marker"></span> Mactan Branch--Pajo, Lapu-Lapu City (Across Gaisano Mactan)</p>
		
			
			
		</div>
	</article>
</main>
<?php get_footer();?>