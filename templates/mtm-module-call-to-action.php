<?php // Module: Call To Action ?>

<section class="mtm-module--cta">
	<?php if( get_sub_field( 'mtm_cta_headline' ) ) : ?>

		<h2 class="mtm-module--cta-heading mtm-module-title">
			<?php the_sub_field( 'mtm_cta_headline' ) ?>
		</h2>

	<?php endif;

	if( get_sub_field( 'mtm_cta_subheading' ) ) : ?>

		<div class="mtm-module--cta-subheading">
			<?php the_sub_field( 'mtm_cta_subheading' ) ?>
		</div>

	<?php endif; 

	if( get_sub_field( 'mtm_cta_button_repeater' ) ) : 

		if( have_rows( 'mtm_cta_button_repeater' ) ): 

			$j=1; ?>

			<div class="mtm-module--cta-buttons">

				<?php while( have_rows( 'mtm_cta_button_repeater' ) ): the_row(); // Loop through each item ?>

					<a class="button mtm-button cta-button cta-<?php echo $j++; ?>" href="<?php echo esc_url( mtm_output_url_override_sub( 'mtm_cta_button_link' ) ); ?>"><?php the_sub_field( 'mtm_cta_button_label' ); // sub field value goes here ?></a>
				
				<?php endwhile; ?>

			</div>

		<?php endif; // End ACF Repeater Field 

	endif; ?>
</section>

