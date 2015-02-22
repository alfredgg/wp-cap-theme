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


		<section id="main" class="wrapper style1">
					<?php while ( have_posts() ) : the_post(); ?>
						<header class="major">
							<h2><a href="<?php get_permalink() ?>"><?php the_title(); ?></a></h2>
						</header>
						<div class="container">
						<div class="row">
							<div class="2u">
								&nbsp;
							</div>
							<div class="8u skel-cell-important">
								<section>
								<?php the_content(); ?>
								</section>
							</div>
						</div>
					<?php endwhile; 
    					wp_reset_query(); 
					?>
		</section>



		<!-- Footer -->
				<a name="contact"></a> 
				<footer id="footer">
				<div class="container">
					<div class="row double">
						<div class="6u">
						&nbsp;
						</div>
						<div class="6u">
							<?php get_footer(); ?>
						</div>
					</div>
					<ul class="copyright">
						<li>This page was designed with love</li>
						<li>Source code on <a class="icon" href="#">GitHub <i class="fa fa-github"></i></a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>