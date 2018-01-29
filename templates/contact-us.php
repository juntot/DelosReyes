<?php
/*
Template Name: Contact-us 
*/
?>
<?php get_header(); ?>
<main>
<article class="container">
		<div class="wpcf7-form"><br>
			<div class="col-lg-12 col-md-12 col-xs-12">
			
				<?php if(have_posts()): while(have_posts()) : the_post();?>
				
					<?php the_content();?>
					
				<?php endwhile; endif;?>
				
			</div>
			<div class="col-lg-6 col-md-6 col-xs-12">
				<p>
					<p>
					<label>
						<span class="glyphicon glyphicon-envelope"></span> EMAIL:
					</label> <br>
						<span class="info"><?php the_field('email'); ?></span><br>
					</p>
					
					
					<label>
						<span class="glyphicon glyphicon-earphone"></span> PHONE: 
					</label><br>
						<span class="info"><?php the_field('phone_numbers');?></span><br>
				</p>
						<?php echo do_shortcode('[contact-form-7 id="27" title="Contact form 1" html_class="use-floating-validation-tip"]');?>
					
				
			</div>
			<div class="col-lg-6 col-md-6 col-xs-12">
			<p></p>
				<div id="map" style="width:100%;height:530px; border-radius: 25px; background: #73AD21; padding: 20px;"></div>
				
				<script>
				
				function myMap() {
				  var coor = "<?php echo trim(the_field('coordinates')); ?>";
				  var x = coor.substr(0,coor.indexOf(','));
				  var y = coor.substr(coor.indexOf(',')+1);
				  
				  var mapCanvas = document.getElementById("map");
				  var myCenter = new google.maps.LatLng(x, y); 
				  var mapOptions = {center: myCenter, zoom: 16};
				  var map = new google.maps.Map(mapCanvas,mapOptions);
				  var marker = new google.maps.Marker({
					position: myCenter,
					//icon: "pinkball.png",
					animation: google.maps.Animation.BOUNCE
					
				  });
				  marker.setMap(map);
				}
				</script>

				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA8RIc3Kbys_07EaozXaQRK_24nyEJV3w&callback=myMap"></script>
			</div>
			<div class="clearfix"></div>
		</div>

	</article>
</main>


<?php get_footer(); ?>