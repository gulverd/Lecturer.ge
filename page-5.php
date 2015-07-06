<?php get_header();?>


<?php include 'news_suggest.php';?>

<div class="container">
	<div class="col-md-2" id="cate">
			<?php include 'lecturer-categories.php';?>
	</div>
	<div class="col-md-10">
	 		<?php include 'lecturer-table.php';?>
	</div>
</div>

<?php get_footer();?>

