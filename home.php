<?php get_header();?>
<main>
<article>
	<div class="row-fluid">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<?php
				
					/*
					if(have_posts()):
						$slides = 0;
						while(have_posts()) : the_post();
							if($slides==0){$active='active';}
							echo '<li data-target="#myCarousel" data-slide-to="'.$slides.'" class="'.$active.'"></li>';
							$slides++;
							
						endwhile;
					endif;
					wp_reset_query();
				*/
				
				for($i=0; $i<2;$i++)
				{
					if($i==0){$active='active';}
					echo '<li data-target="#myCarouel" data-slide-to="'.$i.'" class=""> </li>';
					
					$active='';
				}
				?>
			<li data-target="#myCarouse" data-slide-to="0" class="active"></li>
			<li data-target="#myCarouse" data-slide-to="1" class></li>
			</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<?php 
					
						if(have_posts()):
							$slides = 0;
							while(have_posts()) : the_post();
								if($slides==0){$active='active';}
								echo '<div class="item '.$active.'">';
									the_post_thumbnail();
									$slides++;
								echo '</div>';
								$active='';
							endwhile;
						endif;
						wp_reset_query();
					?>
				</div>
		</div>
	</div>
	
	
	<h3 style="text-align:center;">
			SO NOW YOU KNOW
		</h3>
		<div class="row-fluid">
			<div class="col-lg-4 col-md-4 col-xs-12">
				<div>
					<img src="img/aa.jpg" width="100%"/>
					<p>
						The First Step To An Eye For Excellence:
						In 1950, De Los Reyes Optical opened its
						very first branch in 31 P. Gullas St., Cebu
						City.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-xs-12">
				<div>
					<img src="img/aa.jpg" width="100%"/>
					<p>
						The First Step To An Eye For Excellence:
						In 1950, De Los Reyes Optical opened its
						very first branch in 31 P. Gullas St., Cebu
						City.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-xs-12">
				<div>
					<img src="img/aa.jpg" width="100%"/>
					<p>
						The First Step To An Eye For Excellence:
						In 1950, De Los Reyes Optical opened its
						very first branch in 31 P. Gullas St., Cebu
						City.
					</p>
				</div>
			</div>
			
			<div class="clearfix"></div>
		</div>
</article>
</main>
<?php get_footer();?>