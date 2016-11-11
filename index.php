<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">	
	<?php wp_head(); ?>
</head>

<body>
	<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
	<p><?php bloginfo('description'); ?></p>
	
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>

	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	<?php the_content(); ?>

	<?php endwhile; ?>
	<?php endif; ?>
</body>
</html>