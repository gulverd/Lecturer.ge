<hr>
<div class="jumbotron">
<div class="container">
  <div class="row">
  	<?php
		$args = array (
		    'cat' => '45',
		    'showposts' => '4',
		    'taxonomy' => 'category'
		);
  	?>
	<?php 
       		$query = new WP_Query($args);
        	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
			$custom_fields = get_post_custom();
			$ads_link     = $custom_fields['ads_link'][0];
			$ads_img_url  = $custom_fields['ads_img_url'][0];
	?>
    <div class="col-xs-6 col-md-3">
		<?php
			$txt = sprintf('<a href="%s" class="thumbnail"><img src="%s" alt="..."></a>',$ads_link,$ads_img_url);
			echo $txt;
		?>  
    </div>
<?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
  </div>
</div>
</div>
<hr>
