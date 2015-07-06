<?php
    $args = array (
            'cat' => '21',
            'showposts' => '50',
            'taxonomy' => 'category'
            
           );
  ?>
<div class="panel" id="panel">
	<div class="col-md-12" id="lecturer_head_title">
		რეპეტიტორები
	</div>
  <?php 
    
        $query = new WP_Query($args);
      
        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
        $custom_fields = get_post_custom();
        $start_date  = $custom_fields['start_date'][0];
        $price  = $custom_fields['price'][0];
        $lecturer_pic = $custom_fields['lecturer_pic'][0];
        $city = $custom_fields['city'][0];


  ?>

<div class="col-md-12" id="lecturer_1">
  <div class="col-md-3">
    <a href="<?php the_permalink(); ?>"><img src="<?php echo $lecturer_pic;?>" id="lecturer_pic"></a>
  </div>
  <div class="col-md-9">
        <div class="col-md-12" id="lecturer_texts">
          <span class="glyphicon glyphicon glyphicon-user"> <a href="<?php the_permalink(); ?>"><?php echo the_title();?></a>
        </div>
        <div class="col-md-12" id="lecturer_texts">
          <span class="glyphicon glyphicon glyphicon-map-marker"> <?php echo $city;?>
        </div>
        <div class="col-md-12" id="lecturer_texts">
          <span class="glyphicon glyphicon glyphicon-calendar"> <?php echo $start_date;?>
        </div>
        <div class="col-md-12" id="lecturer_texts">
        საგანი: <?php
                 $categories1 = get_the_category();
                 $separator1 = ', ';
                 $output1 = '';
                 if($categories1){
                   foreach($categories1 as $category1) {
                     $output1 .= '<a href="'.get_category_link( $category1->term_id ).'" title="' . esc_attr( sprintf( __( "იხილეთ ყველა განცხადება %s" ), $category1->name ) ) . '">'.$category1->cat_name.'</a>'.$separator1;
                   }
                 echo trim($name = substr($output1,strpos($output1, ',')), $separator1);
                 }
               ?>
        </div>
        <div class="col-md-12" id="lecturer_texts">
          <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>
          
        </div>
  </div>

</div>
  <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
  <?php endif; ?>
</div>