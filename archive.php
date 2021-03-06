<?php
/**
 * the template for displaying Archive pages
 *
 * To edit the archive template, do so in a child theme by COPYING
 * and pasting the templates/content-archive.php file into your child
 * folder in the same structural location. Then, WordPress will use 
 * your child theme's content-archive.php file instead. 
 */
get_header();
	?>
	<section class="content">
		<?php get_template_part( 'templates/content', 'archive' ); ?>
	</section>
	<?php
get_sidebar();
get_footer();