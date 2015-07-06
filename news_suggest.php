<?php
	$args = array (
		'cat' => '50,52',
		'showposts' => '1',
		'taxonomy' => 'category',
		'orderby' => 'rand'		            
	);
?>
<div class="container">
	<div class="col-md-12" id="striqoni">
		<div class="col-md-2" id="news_title">
			იხილეთ:
		</div>
		<div class="col-md-10" id="news_links">
			<div data-spy="marquee" data-life="2">
				<?php 
				    
					$query = new WP_Query($args);
				      
					if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
				 ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> 
				<?php endwhile; else: ?>
			   		<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

