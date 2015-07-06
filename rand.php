<div class="col-md-12" id="index-lecturers_title">
	<a href="http://lecturer.ge/?page_id=5">რეპეტიტორები</a>
</div>
	<div class="col-md-12" id="index_lecturer_box">
		<div class="container">
			<?php
			    $args = array (
			            'cat' => '43',
			            'showposts' => '4',
			            'taxonomy' => 'category',
			            'orderby' => 'rand'
			            
			           );
			?>
			<?php 
			    
				$query = new WP_Query($args);
			      
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
				$custom_fields = get_post_custom();
				$lecturer_pic = $custom_fields['lecturer_pic'][0];
			 ?>
			<div class="col-md-3">
				<div class="col-md-12">
			  		<a href="<?php the_permalink(); ?>"><img src="<?php echo $lecturer_pic;?>" id="index_lecturer_pic"></a>
			  	</div>
			  	<div class="col-md-12" id="index_lecturer_title_link">
			  		<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
			  	</div>
			</div>
			<?php endwhile; else: ?>
			   <p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
	</div>
</div>