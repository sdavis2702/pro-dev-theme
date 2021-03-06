<?php
/**
 * feature box template
 */
if ( is_front_page() ) {
	if ( 1 == get_theme_mod( 'pdt_feature_box_toggle' ) ) { ?>

		<div class="info-box clear-pdt">
			<div class="info-text">
				<?php if ( get_theme_mod( 'pdt_featured_info_headline' ) ) { ?>
					<h3 class="info-box-title">
						<?php echo get_theme_mod( 'pdt_featured_info_headline' ); ?>
					</h3>
				<?php } ?>
				<?php if ( get_theme_mod( 'pdt_featured_info_description' ) ) { ?>
					<div class="info-box-description">
						<?php echo wpautop( get_theme_mod( 'pdt_featured_info_description' ) ); ?>
					</div>
				<?php } ?>
			</div>
			<div class="info-cta">
				<?php if ( get_theme_mod( 'pdt_featured_info_note' ) || get_theme_mod( 'pdt_featured_info_notes_headline' ) ) { ?>
					<span class="info-subtitle">
						<?php echo get_theme_mod( 'pdt_featured_info_notes_headline' ); ?>
					</span>
					<span class="info-note">
						<?php echo wpautop( get_theme_mod( 'pdt_featured_info_note' ) ); ?>
					</span>
				<?php } ?>
				<?php
					if ( 'green' == get_theme_mod( 'pdt_cta_button_color' ) ) {
						$cta_button = 'green';
					} elseif ( 'blue' == get_theme_mod( 'pdt_cta_button_color' ) ) {
						$cta_button = 'blue';
					} else {
						$cta_button = 'gray';
					}
				?>
				<?php if ( get_theme_mod( 'pdt_featured_info_url' ) && get_theme_mod( 'pdt_featured_info_button_text' ) ) { ?>
					<a href="<?php echo get_theme_mod( 'pdt_featured_info_url' ); ?>" class="cta-button button <?php echo $cta_button; ?>"><?php echo get_theme_mod( 'pdt_featured_info_button_text' ); ?></a>
				<?php } ?>
			</div>
		</div>
		<?php
	}
}