<div class="index_top">
  <?php
    $args = array (
            'cat' => '37',
            'showposts' => '1',
            'taxonomy' => 'category'
            
           );
  ?>

<?php 
			
       		$query = new WP_Query($args);
        	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
			$custom_fields = get_post_custom();
			$index_pic = $custom_fields['Index_pic'][0];
?>
			<div class="col-md-3">
				<img src="<?php echo $index_pic;?>">
			</div>
			<div class="col-md-9" id="index_text">
				<div class="col-md-12">
				 <p>
				   <?php the_content();?> 
				 </p>
				</div>
				<div class="col-md-12" id="index_contact">
					<a href="http://lecturer.ge/?page_id=7">საკონტაქტო ინფორმაცია</a>
				</div>
			</div>
	<?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</div>