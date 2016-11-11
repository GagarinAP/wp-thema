<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>">	
	<title><?php bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">	
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">	
</head>

<body>
	<div class="container">
		<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		<p><?php bloginfo('description'); ?></p>
		
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>

		<div class="post">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php the_content(); ?>
		</div>	

		<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js""></script>
</body>
</html>