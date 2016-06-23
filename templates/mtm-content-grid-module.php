<?php 
$url = _get_sub_field( 'mtm_list_item_link' );
$image = _get_sub_field( 'mtm_list_item_image' ); ?>

<div class="mtm-grid--single <?php echo mtm_output_row_number(); ?>">
	<div class="mtm-grid--single-content">

		<?php if ( $image ) : 
		
			$content_size = ''; 
			$thumb = $image['sizes'][ 'medium_large' ];
			$alt = $image['alt']; ?>

			<figure class="post--thumbnail">
				<?php if( $url ): ?><a href="<?php echo esc_url( $url ) ?>"><?php endif; ?>
					<img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_html( $alt ); ?>" />
				<?php if( $url ): ?></a><?php endif; ?>
			</figure>
		
		<?php endif; ?>
		
		<h4>
			<?php if( $url ): ?><a href="<?php echo esc_url( $url ) ?>"><?php endif; ?>
				<?php the_sub_field( 'mtm_list_item_heading' ); ?>
			<?php if( $url ): ?></a><?php endif; ?>
		</h4>
		<p><?php the_sub_field( 'mtm_list_item_content' ); ?></p>
	</div>
</div>