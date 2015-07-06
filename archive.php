	<?php
		$args = array (
						'cat' => '1',
						'showposts' => '6'
						
					 );
	?>

<div class="table-responsive">
        <table class="table table-hover">
          <tr>
            <td id="vip_header">VIP განცხადებები</td>
            <td id="vip_header_logo">ლოგო</td>
            <td id="vip_header">მომწოდებელი</td>
            <td id="vip_header_date">განთავსების თარიღი</td>
            <td id="vip_header_date">დასრულების თარიღი</td>
          </tr>
	    	<?php 
		
				$query = new WP_Query($args);
			
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
				$custom_fields = get_post_custom();
				$start_date  = $custom_fields['start_date'][0];
				$end_date	 = $custom_fields['end_date'][0];

			?>	
	           <tr>
	            <td><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></td>
	            <td><a href="<?php the_permalink(); ?>"> <div><strong><?php single_cat_title('Currently browsing'); ?>
</strong>: <?php echo category_description(); ?></div></a></td>
	            <td>
	            	<?php the_category();?>
	            </td>
	            <td id="vac_date"><?php echo $start_date;?></td>
	            <td id="vac_date"><?php echo $start_date;?></td>
	          </tr>
           <?php endwhile; else: ?>
 				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
        </table>
</div>

