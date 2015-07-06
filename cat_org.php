
<div class="table-responsive">
        <table class="table table-hover">
          <tr>
            <td id="vac_header">დასახელება</td>
            <td id="vac_header_logo">ლოგო</td>
            <td id="vac_header">მომწოდებელი</td>
            <td id="vac_header_date">განთავსების თარიღი</td>
            <td id="vac_header_date">დასრულების თარიღი</td>
            <td>
          </tr>
<?php 
         while(have_posts()): the_post();
      
        $custom_fields = get_post_custom();
        $start_date  = $custom_fields['start_date'][0];
        $end_date  = $custom_fields['end_date'][0];

      ?>  
           <tr>
            <td id="td"><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></td>
            <td>
              <a href="<?php the_permalink(); ?>">
          <?php
            $categories = get_the_category();
            $separator = ',';
            $output = '';
              if($categories){
                foreach($categories as $category) {
                  $output .= 
                 esc_attr(  $category->description).$separator;
                }
              echo '<img src="' .trim($description = substr($output,strpos($output, ',')), $separator) .'"'.'width="110" height="40"'. '>';
            }
          ?>  
            </a>
            </td>
            <td id="td">
              <?php
                $categories1 = get_the_category();
                $separator1 = ',';
                $output1 = '';
                if($categories1){
                  foreach($categories1 as $category1) {
                    $output1 .= '<a href="'.get_category_link( $category1->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category1->name ) ) . '">'.$category1->cat_name.'</a>'.$separator1;
                  }
                echo trim($name = substr($output1,strpos($output1, ',')), $separator1);
                }
            ?>
            </td>
            <td id="vac_date"><?php echo $start_date;?></td>
            <td id="vac_date"><?php echo $end_date;?></td>
          </tr>
           <?php endwhile; ?>
        </table>
</div>