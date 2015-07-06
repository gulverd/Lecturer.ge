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
					if(!empty($custom_fields['news_pic'])){
						$news_pic  = $custom_fields['news_pic'][0];
				}
			?>
			<div class="col-md-12" id="sport_title">		
				<a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
			</div>
			<div class="col-md-12" id="sport_content">
				<div class="col-md-12" id="sport_texts">
					<img src="<?php echo $news_pic;?>">
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
		<div class="col-md-3">
			<div class="col-md-12" id="like_box">
				<div class="fb-like-box" data-href="https://www.facebook.com/pages/Lecturerge/1482477771990094" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>
