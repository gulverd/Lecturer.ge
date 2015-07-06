<?php
    $args = array (
        'cat' => '49',
        'showposts' => '4',
        'taxonomy' => 'category'   
        );
?>
<div class="col-lg-12">
    <div class="center">
        <h2>რას ფიქრობენ LECTURER.GE -ზე</h2>
    </div>
    <div class="gap"></div>
        <div class="row">
        <?php 
        
                $query = new WP_Query($args);
            
                if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                $custom_fields      = get_post_custom();
                $comm_author_work   = $custom_fields['comm_author_work'][0];
        ?>      
            <div class="col-md-6" id="comment">
                 <blockquote>
                    <?php the_content();?>
                        
                        <?php echo the_title();?> <font color="black" size="2"><?php echo ' '.'--'.' '.$comm_author_work;?></font>
                 </blockquote>
            </div>
        <?php endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>        
        </div>
</div>