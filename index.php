<?php wp_head(); ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>test</title>
</head>
<body>
	<div class="container">
		<header>
			<h1 id="header-img"><?php bloginfo('name'); ?></h1>
			<div></div>
			<h4><?php bloginfo('description'); ?></h4>
			<?php/* bloginfo('template_directory');*/?>
			<!-- <img src="http://placehold.it/1024x350"> -->
		</header>
		<main id="main">
			<div id="left">
				<?php
				if(have_posts()){
					while(have_posts()){
						the_post();
						the_title('<h2>','</h2>');
						the_content();
					}
				}
				wp_reset_query();
				?>
			</div>
			<aside>
				<p>
					<img src="<?php bloginfo('template_directory');?>/../test_resources/img/rund2.png" alt="">
				</p>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ){
					dynamic_sidebar( 'sidebar' );
				} ?>
				<p>
					<span><i class="flaticon-social122"></i></span>
					<span><i class="flaticon-social123"></i></span>
					<span><i class="flaticon-social138"></i></span>
				</p>
				
			</aside>
			
		</main>
	</div>
<?php 


wp_footer();
?>
</body>
</html>


