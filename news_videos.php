<?php get_header();?>
<script type="text/javascript">
$SA = {s:219693, asynch: 1};
(function() {
   var sa = document.createElement("script");
   sa.type = "text/javascript";
   sa.async = true;
   sa.src = ("https:" == document.location.protocol ? "https://" + $SA.s + ".sa" : "http://" + $SA.s + ".a") + ".siteapps.com/" + $SA.s + ".js";
   var t = document.getElementsByTagName("script")[0];
   t.parentNode.insertBefore(sa, t);
})();
</script>

<div class="container">
	<div class="col-md-12">
		<div class="col-md-9" id="sport-md-12">
			<?php 

				while(have_posts()): the_post();
				$custom_fields = get_post_custom();
					if(!empty($custom_fields['sport_pic'])){
						$youtube_url  = $custom_fields['sport_pic'][0];
						$youtube_id = get_youtube_id($youtube_url);
						$youtube_img_url = 'http://img.youtube.com/vi/'. $youtube_id .'/hqdefault.jpg';
						$youtube_video = '<iframe width="100%" height="400" src="//www.youtube.com/embed/'.$youtube_id.'" frameborder="0" allowfullscreen></iframe>';
					}else if(empty($custom_fields['youtube_url'])){
						$youtube_video = 'No video';
					}
			?>
			<div class="col-md-12" id="sport_title">		
				<a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>
			</div>
			<div class="col-md-12" id="sport_content">
				<div class="col-md-12" id="sport_inside">
					<img src="<?php echo $youtube_img_url;?>">
				</div>
				<div class="col-md-12">
					<?php echo $youtube_video;?>
				</div>
				<div class="col-md-12" id="sport_texts">
					<?php the_content();?>
				</div>
			</div>
			<div class="col-md-12" id="sport_fb">
				<div class="fb-like" data-href="<?php the_permalink(); ?>" data-width="140" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
			</div>	
			<div class="col-md-12" id="sport_fb">
			<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
			</div>
			<?php endwhile;?>
		</div>

		<?php
			$args = array (
				'cat' => '50',
				'showposts' => '80',
				'taxonomy' => 'category'
						
			);
		?>
		<div class="col-md-3">
			<div class="col-md-12" id="like_box">
				<div class="fb-like-box" data-href="https://www.facebook.com/pages/Lecturerge/1482477771990094" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>
