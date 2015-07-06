<?php get_header();?>
<?php
$post = $wp_query->post;

if (in_category('lecturers')) {
	include ('lecturer.php');

} 
elseif (in_category('news_videos')) {
	include ('news_videos.php');
}elseif (in_category('news_statements')){
	include ('statements.php');
}elseif (in_category('fake_statements')){
	include ('fake_statements.php');
}elseif (in_category('fake_videos')){
	include ('fake_videos.php');
}else { ?>
	<?php include ('other.php');?>
<?php } ?>


<?php get_footer();?>