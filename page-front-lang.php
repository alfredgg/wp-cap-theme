<?php /* Template Name: Template for fronts */ ?>


<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
        <title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php wp_head(); ?>

    </head>

	<body id="top">

	<!-- Header -->
	<?php get_header(); ?>

	<?php if (is_front_page()):  ?>
	<!-- Banner -->
	<section id="banner">
			<img src="<?php header_image(); ?>" alt="" />
	</section>
	<?php endif; ?>

		<!-- One -->
			<section id="one" class="wrapper style1">

				<header class="major">
					<?php if (is_front_page()):  ?>
					<h3><?php bloginfo('description'); ?></h3>
					<?php endif; ?>
					<p>
					<?php
						while ( have_posts() ) : the_post(); 
							the_content();
					    endwhile; 
    					wp_reset_query(); 
					?></p>
				</header>

				<div class="container">
					<?php
					$args = array(
		              'post_status' => 'any',
		              'posts_per_page' => -1
		            );
			        $my_query = new WP_Query($args); 
			        $i = 0;
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<?php if ($i % 3 == 0): ?>
					<div class="row">
					<?php endif; ?>
						<div class="4u" onclick="location.href='<?php the_permalink(); ?>';" style="cursor: pointer;">
							<section class="special box">
								<?php if ( has_post_thumbnail() ): ?>
									<?php $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' ); ?>
									<span class="image fit"><img src="<?php echo $image_src[0] ?>" alt="" /></span>
								<?php endif; ?>
								<h3><?php the_title(); ?></h3>
							</section>
						</div>
					<?php $i++; ?>
					<?php if ($i % 3 == 0): ?>
					</div>
					<?php endif; ?>
			        <?php endwhile; //resetting the post loop ?>
					<?php if ($i % 3 != 0): ?>
					</div>
					<?php endif; ?>
				</div>

			</section>

		<!-- Footer -->
				<a name="contact"></a> 
				<footer id="footer">
				<div class="container">
					<div class="row double">
						<div class="6u">
							<h2>Site map</h2>
							<ul class="alt">
								<?php $args = array(
									'child_of'     => get_option('page_on_front'),
									'post_type'    => 'page',
									'post_status'  => 'publish',
									'title_li'     => '', 
								); ?>
								<?php $children = wp_list_pages( $args ); ?>
								<?php if ($children) : ?>
								<ul>
								<?php echo   $children; ?>
								</ul>
								<?php endif; ?>

							</ul>
						</div>
						<div class="6u">
							<?php get_footer(); ?>
						</div>
					</div>
					<ul class="copyright">
						<li>This page was designed with love</li>
						<li>Source code on <a class="icon" href="http://github.com/alfredgg/wp-cap-theme">GitHub <i class="fa fa-github"></i></a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>