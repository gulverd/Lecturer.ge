<!DOCTYPE html>
<html>
<head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=792970764069610&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<title><?php bloginfo('title')?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="/favicon.ico">
 <!-- Bootstrap core CSS -->
    <link href="<?php echo get_bloginfo('template_directory');?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory');?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
	<link href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo get_bloginfo('template_directory');?>/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo get_bloginfo('template_directory');?>/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory');?>/geo.js"></script>
  </head>

  <body>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">

  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://lecturer.ge/">Lecturer.ge</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
       <?php 
     wp_nav_menu( array(
      'menu' => 'primary', 'container' => '','show_count' => 1, 'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>' 
    )); ?>  
  </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




  



      <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
<div class="container">
    <div class="row" id="row_head">
      <div class="col-md-4" >
      <font color="rgb(82, 82, 82)" font-family="bpg_nino_mtavruli_bold";>
        <span class="glyphicon glyphicon glyphicon-file"></span> განცხადებების რაოდენობა :  
            <?php
            $total = wp_count_posts()->publish;
            echo $total-7-wt_get_category_count(50)-wt_get_category_count(52)-wt_get_category_count(54)-wt_get_category_count(55);
     		?>
 
          </font>
      </div>
      
      <div class="col-md-4" id="header_stmt"><font color="rgb(82, 82, 82)" font-family="bpg_nino_mtavruli_bold"><span class="glyphicon glyphicon glyphicon-envelope"></span> ელ-ფოსტა: 
            <?php
            mysql_connect("localhost","lecturer","11Md7yF6wTgN") or
                die("Could not connect: " . mysql_error());
            mysql_select_db("lecturer_wordpress");

            $query = "SELECT option_value FROM wp_options where option_name = 'admin_email'";
            $run   = mysql_query($query);
      
            while ($row = mysql_fetch_array($run)){
              echo $row[0];
            }
          ?>
          </font>
      </div>
      
      <div class="col-md-4"><font color="rgb(82, 82, 82)" font-family="bpg_nino_mtavruli_bold";><span class="glyphicon glyphicon glyphicon-phone" color="rgb(82, 82, 82)"></span> ტელეფონი: 
          579 955 655</font>
      </div>
    </div>

    <div class="row">
      <form method="get" action="<?php bloginfo('home'); ?>/">
          <div class="input-group" id="search_wrp">
              <input type="text" class="form-control" onkeypress="return makeGeo(this,event);" placeholder="ჩაწერე საძიებო სიტყვა!" name="s" id="search" value="">
               <input checked="checked" id="geoKeys" type="checkbox" display="none">
                <span class="input-group-btn">        
                  <input type="submit" class="btn btn-default" name="submit" value="ძებნა" id="submit">
                </span>
          </div><!-- /input-group -->
      </form>
    </div><!-- /.row -->

  </div>
</div>





