<?php // Module Content Logic

$j=1; ?>

<?php if( get_field('mtm_module_show_page_title') ) : ?>

	<h1 class="page--title"><?php the_title(); ?><?php edit_post_link( '(Edit)', ' • ' ); ?></h1>

<?php endif; ?>

<?php if( have_rows('mtm_content_modules') ) :

     // loop through the rows of data
    while ( have_rows('mtm_content_modules') ) : ?>

    	<section id="mtm-module-<?php echo $j++; ?>" class="mtm-module">

	    	<?php the_row(); ?>

			<?php // Logos
			if( "mtm_module_logo_showcase" == get_row_layout() ) : 
				$anchor = get_sub_field( 'mtm_logo_title' ) ? sanitize_title_with_dashes( get_sub_field( 'mtm_logo_title' ) ) : '' ; // title to anchor tag ?>
				
				<div class="<?php echo get_row_layout(); ?>" id="<?php echo( esc_html( $anchor ) ); ?>">

					<?php mtm_get_template_part( 'mtm-module', 'logos' ); ?>

				</div>

			<?php // Call To Action
			elseif( "mtm_module_call_to_action" == get_row_layout() ) : 
				$anchor = get_sub_field( 'mtm_cta_headline' ) ? sanitize_title_with_dashes( get_sub_field( 'mtm_cta_headline' ) ) : '' ; // title to anchor tag ?>
				
				<div class="<?php echo get_row_layout(); ?>" id="<?php echo( esc_html( $anchor ) ); ?>">

					<?php mtm_get_template_part( 'mtm-module', 'call-to-action' ); ?>

				</div>

			<?php // Feature Boxes
			elseif( "mtm_module_feature_boxes" == get_row_layout() ) : 
				$anchor = get_sub_field( 'mtm_text_area_title' ) ? sanitize_title_with_dashes( get_sub_field( 'mtm_text_area_title' ) ) : '' ; // title to anchor tag ?>
				
				<div class="<?php echo get_row_layout(); ?>" id="<?php echo( esc_html( $anchor ) ); ?>">

					<?php mtm_get_template_part( 'mtm-module', 'featured-content' ); ?>

				</div>

			<?php // Hero Image
			elseif( "mtm_module_hero_image" == get_row_layout() ) : ?>
				
				<div class="<?php echo get_row_layout(); ?>">

					<?php mtm_get_template_part( 'mtm-content', 'hero-image' ); ?>

				</div>

			<?php // Video/Media
			elseif( "mtm_module_hero_media" == get_row_layout() ) : ?>
				
				<div class="<?php echo get_row_layout(); ?>">

					<?php mtm_get_template_part( 'mtm-module', 'hero-media' ); ?>

				</div>

			<?php // Slider
			elseif( "mtm_module_slider" == get_row_layout() ) : ?>
				
				<div class="<?php echo get_row_layout(); ?>">

					<?php mtm_get_template_part( 'mtm-module', 'slider' ); ?>

				</div>

			<?php // Single Content
			elseif( "mtm_module_single_content_area" == get_row_layout() ) : 
				$anchor = get_sub_field( 'mtm_text_area_title' ) ? sanitize_title_with_dashes( get_sub_field( 'mtm_text_area_title' ) ) : '' ; // title to anchor tag ?>
				
				<div class="<?php echo get_row_layout(); ?>" id="<?php echo( esc_html( $anchor ) ); ?>">

					<?php mtm_get_template_part( 'mtm-module', 'text' ); ?>

				</div>

			<?php // Dual Content
			elseif( "mtm_module_dual_content_area" == get_row_layout() ) : 
				$anchor = get_sub_field( 'mtm_text_area_title' ) ? sanitize_title_with_dashes( get_sub_field( 'mtm_text_area_title' ) ) : '' ; // title to anchor tag ?>
				
				<div class="<?php echo get_row_layout(); ?>" id="<?php echo( esc_html( $anchor ) ); ?>">

					<?php mtm_get_template_part( 'mtm-module', 'text' ); ?>

				</div>

			<?php // Content + Callout
			elseif( "mtm_module_content_callout" == get_row_layout() ) : 
				$anchor = get_sub_field( 'mtm_text_area_title' ) ? sanitize_title_with_dashes( get_sub_field( 'mtm_text_area_title' ) ) : '' ; // title to anchor tag ?>
				
				<div class="<?php echo get_row_layout(); ?>" id="<?php echo( esc_html( $anchor ) ); ?>">

					<?php mtm_get_template_part( 'mtm-module', 'text' ); ?>

				</div>

			<?php // Widgets
			elseif( "mtm_module_widget_area" == get_row_layout() ) : 
				$anchor = get_sub_field( 'mtm_widget_area_title' ) ? sanitize_title_with_dashes( get_sub_field( 'mtm_widget_area_title' ) ) : '' ; // title to anchor tag ?>
				
				<div class="<?php echo get_row_layout(); ?>" id="<?php echo( esc_html( $anchor ) ); ?>">

					<?php mtm_get_template_part( 'mtm-module', 'widget-area' ); ?>

				</div>

			<?php // List Manual
			elseif( "mtm_module_listgrid" == get_row_layout() ) : 
				$anchor = get_sub_field( 'mtm_list_title' ) ? sanitize_title_with_dashes( get_sub_field( 'mtm_list_title' ) ) : '' ; // title to anchor tag ?>
				
				<div class="<?php echo get_row_layout(); ?>" id="<?php echo( esc_html( $anchor ) ); ?>">

					<?php mtm_get_template_part( 'mtm-module', 'list' ); ?>

				</div>

			<?php // Grid Manual
			elseif( "mtm_module_gridlist" == get_row_layout() ) : 
				$anchor = get_sub_field( 'mtm_list_title' ) ? sanitize_title_with_dashes( get_sub_field( 'mtm_list_title' ) ) : '' ; // title to anchor tag ?>
				
				<div class="<?php echo get_row_layout(); ?>" id="<?php echo( esc_html( $anchor ) ); ?>">

					<?php mtm_get_template_part( 'mtm-module', 'grid' ); ?>

				</div>

			<?php // List Posts
			elseif( "mtm_module_listgrid_posts" == get_row_layout() ) : 
				$anchor = get_sub_field( 'mtm_list_title' ) ? sanitize_title_with_dashes( get_sub_field( 'mtm_list_title' ) ) : '' ; // title to anchor tag ?>
				
				<div class="<?php echo get_row_layout(); ?>" id="<?php echo( esc_html( $anchor ) ); ?>">

					<?php mtm_get_template_part( 'mtm-module', 'list' ); ?>

				</div>

			<?php // Grid Posts
			elseif( "mtm_module_gridlist_posts" == get_row_layout() ) : 
				$anchor = get_sub_field( 'mtm_list_title' ) ? sanitize_title_with_dashes( get_sub_field( 'mtm_list_title' ) ) : '' ; // title to anchor tag ?>
				
				<div class="<?php echo get_row_layout(); ?>" id="<?php echo( esc_html( $anchor ) ); ?>">

					<?php mtm_get_template_part( 'mtm-module', 'grid' ); ?>

				</div>

			<?php // Tabs
			elseif( "mtm_module_tabs" == get_row_layout() ) : ?>
				
				<div class="<?php echo get_row_layout(); ?>">

					<?php mtm_get_template_part( 'mtm-module', 'tabs' ); ?>

				</div>

			<?php // Gallery
			elseif( "mtm_module_gallery" == get_row_layout() ) : 
			$anchor = get_sub_field( 'mtm_list_title' ) ? sanitize_title_with_dashes( get_sub_field( 'mtm_list_title' ) ) : '' ; // title to anchor tag ?>
				
				<div class="<?php echo get_row_layout(); ?>">

					<?php mtm_get_template_part( 'mtm-module', 'gallery' ); ?>

				</div>

			<?php endif; ?>

		</section>

	<?php endwhile;
endif; ?>