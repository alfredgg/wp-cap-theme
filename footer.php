<?php $the_query = new WP_Query( 'pagename=contact' ); ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>