<?php include 'news_suggest.php';?>
<div class="container" id="table_lecuter">

 <?php 
    
    
	while(have_posts()): the_post();
    $custom_fields = get_post_custom();
    $start_date  = $custom_fields['start_date'][0];
    $price  = $custom_fields['price'][0];
    $lecturer_pic = $custom_fields['lecturer_pic'][0];
    $city = $custom_fields['city'][0];
    
 ?>
<div class="panel" id="panel">
 <div class="col-md-4">
	 <div class="col-md-12">
	 	<img src="<?php echo $lecturer_pic;?>" id="lecturer_pic_inside">
	 </div>
	 <hr>
	 <div class="col-md-12" id="lecturer_inside_header">
	 	<span class="glyphicon glyphicon glyphicon-user"></span> <?php the_title();?>
	  </div>
	  <hr>
	 <div class="col-md-12" id="lecturer_inside_header">
	 	<span class="glyphicon glyphicon glyphicon-map-marker"></span> <?php echo $city;?>
	 </div>
	 <hr>
	 <div class="col-md-12" id="lecturer_inside_header">
	 	<span class="glyphicon glyphicon glyphicon-calendar"></span> <?php echo $start_date;?>
	 </div>
	  <hr>

</div>
 <div class="col-md-8">
 	 <div class="col-md-12" id="course_price">
	 	კურსის ღირებულება: <span style="color:red"><?php echo $price;?></span>
	 </div>     
	 <hr>
	 <div class="col-md-12">
	 	<div class="col-md-6" id="lecturer_middle">
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
	 	<div class="col-md-6" id="lecturer_middle">
<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
	 	</div>	
	 </div>
	 <hr>
 	 <div class="col-md-12" id="lecturer_inside_like">
 		 <?php the_content();?>
 	 </div>
 	 <br>
 	 <hr>
 	 <br>
	 <div class="col-md-12" id="recomend">
	 	გაუწიეთ რეკომენდაცია:
	 </div>
 	 <br>
 	 <hr>
 	 <br>
 	 <div class="col-md-12">
 	 	<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5" data-colorscheme="light" data-width="100%"></div>
 	 </div>
 </div>
</div>
<?php endwhile; ?>

</div>