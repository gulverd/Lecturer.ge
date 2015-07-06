<?php get_header();?>
<?php
		$args = array (
			'cat' => '50',
			'showposts' => '5',
			'taxonomy' => 'category'
						
		);
?>
<div class="container">
	<div class="col-md-12">
		<div class="col-md-9" id="sport-md-12">
			<?php 			
				$query = new WP_Query($args);
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
				$custom_fields = get_post_custom();
					if(!empty($custom_fields['sport_pic'])){
						$youtube_url = $custom_fields['sport_pic'][0];
						$youtube_id = get_youtube_id($youtube_url);
						$youtube_img_url = 'http://img.youtube.com/vi/'. $youtube_id .'/hqdefault.jpg';
					}else if(empty($custom_fields['youtube_url'])){
						$youtube_img_url = 'http://img.youtube.com/vi/'. 'vIu85WQTPRc'.'/hqdefault.jpg';
					}
			?>
			<div class="col-md-12" id="sport_title">		
				<a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>
			</div>
		    <div class="col-md-12" id="sport_content">
				<a href="<?php the_permalink();?>"><img src="<?php echo $youtube_img_url;?>" align="center" id="sportpic"></a>
			</div>			
			<?php endwhile; else: ?>
		 		<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>

		<?php
			$args = array (
				'cat' => '50',
				'showposts' => '80',
				'taxonomy' => 'category'
						
			);
		?>
		<div class="col-md-3">
			<div class="col-md-12" id="sport-md-12">
					<div class="col-md-12" id="sport_title">
						<h5>ბოლოს დამატებულები</h5>
					</div>
					<?php 
						$query = new WP_Query($args);
						if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
					?>
					<div class="col-md-12" id="sport_title_links">
						<a href="<?php the_permalink();?>"> <h6><?php the_title();?></h6></a>
					</div>
					<?php endwhile; else: ?>
						<p>Sorry, no posts matched your criteria.</p>
					<?php endif; ?>
			</div>
			<div class="col-md-12" id="like_box">
				<div class="fb-like-box" data-href="https://www.facebook.com/pages/Lecturerge/1482477771990094" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
			</div>
			<div class="col-md-12">

			</div>
		</div>
	</div>
</div>
<?php get_footer();?>
