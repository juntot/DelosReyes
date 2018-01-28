<?php
/*
Template Name: Contact-us 
*/
?>
<?php get_header(); ?>
<main>
<article>
		<div class="container"><br>
			<?php echo do_shortcode('[contact-form-7 id="27" title="Contact form 1" html_class="use-floating-validation-tip"]');?>
			<div class="col-lg-6 col-md-6 col-xs-12">
				<div id="map" style="width:100%;height:500px; border-radius: 25px; background: #73AD21; padding: 20px;"></div>

				<script>
				function myMap() {
				  var mapCanvas = document.getElementById("map");
				  var myCenter = new google.maps.LatLng(10.318427, 123.903918); 
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