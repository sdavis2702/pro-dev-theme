<?php
/**
 * the template part for archive pages
 */

if ( have_posts() ) : ?>
	<header class="page-header">
		<h1 class="page-title">
		
			<?php
				// display taxonomy information before post feed
				if ( is_category() ) :
					single_cat_title();

				elseif ( is_tag() ) :
					single_tag_title();

				elseif ( is_author() ) :
				
					/* Queue the first post, that way we know
					 * what author we're dealing with (if that is the case).
					 */
					the_post();
					printf( __( 'Author: %s', 'sdm' ), '<span class="vcard">' . get_the_author() . '</span>' );
					
					/* Since we called the_post() above, we need to
					 * rewind the loop back to the beginning that way
					 * we can run the loop properly, in full.
					 */
					rewind_posts();

				elseif ( is_day() ) :
					printf( __( 'Day: %s', 'sdm' ), '<span>' . get_the_date() . '</span>' );

				elseif ( is_month() ) :
					printf( __( 'Month: %s', 'sdm' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

				elseif ( is_year() ) :
					printf( __( 'Year: %s', 'sdm' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

				else :
					_e( 'Archives', 'sdm' );

				endif; // end taxonomy-specific title output
			?>
			
		</h1>
		
		<?php
			// show optional description
			$term_description = term_description();
			
			if ( ! empty( $term_description ) ) :
				printf( '<div class="taxonomy-description">%s</div>', $term_description );
			endif;
		?>
		
	</header>

	<?php 
		// start the Loop
		while ( have_posts() ) : the_post();
		
			// get main template HTML from template file
			get_template_part( 'templates/content', get_post_format() );

		endwhile; // end the loop

		sdm_content_nav( 'nav-below' );

else :
	
	get_template_part( 'no-results', 'archive' );
		
endif; // end check for posts