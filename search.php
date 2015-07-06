<?php get_header();?>
<?php
$post = $wp_query->post;

if (in_category('lecturers')) {
  include ('cat_lecturer.php');

} else { ?>
  <?php include ('cat_org.php');?>
<?php } ?>


<?php get_footer();?>