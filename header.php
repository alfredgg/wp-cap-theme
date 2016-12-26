			<header id="header" class="skel-layers-fixed">
				<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="#contact">Contact</a></li>

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
				</nav>

				<div class="languages">
				<?php pll_the_languages( array( 'hide_if_empty' => 1) ); ?>
				</div>
			</header>