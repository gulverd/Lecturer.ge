
<div class="table-responsive">
	<table class="table table-hover">
		<tr id="single_tr">
		<?php 

			while(have_posts()): the_post();
	        $custom_fields = get_post_custom();
	        $start_date  = $custom_fields['start_date'][0];
	        $end_date  = $custom_fields['end_date'][0];
      	?>  
		 	<td id="single_td">დასახელება:</td>
		 	<td><?php the_title();?></td>
		</tr>
		<tr id="single_tr">
			<td id="single_td">განთავსების თარიღი:</td>
			<td><?php echo $start_date;?></td>
		</tr>
		<tr id="single_tr">
			<td id="single_td">დასრულების თარიღი:</td>
			<td><?php echo $end_date;?></td>
		</tr>
		<tr id="single_tr">
			<td id="single_td">კომპანიის დასახელება:</td>
			<td>
				
			<?php
                $categories1 = get_the_category();
                $separator1 = ',';
                $output1 = '';
                if($categories1){
                  foreach($categories1 as $category1) {
                    $output1 .= '<a href="'.get_category_link( $category1->term_id ).'" title="' . esc_attr( sprintf( __( "იხილეთ ყველა განცხადება %s" ), $category1->name ) ) . '">'.$category1->cat_name.'</a>'.$separator1;
                  }
                echo trim($name = substr($output1,strpos($output1, ',')), $separator1);
                }
            ?>

			</td>
		</tr>

</table>
</div>
<div class="news_bt">
	<p>

			    	<?php the_content();?>
	</p>
	<p>
		<div class="fb-like" data-href="<?php the_permalink(); ?>" data-width="140" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
	</p>
</div>
   	<?php endwhile; ?>