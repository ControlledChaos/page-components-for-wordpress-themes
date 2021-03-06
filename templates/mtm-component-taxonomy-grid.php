<?php // Taxonomy Grid Component

global $mtm_grid_row_class;

$orderbyvar = _get_field( 'mtm_randomize' ) ? 'rand' : 'date';
$display = _get_field( 'mtm_grid_archive_taxonomy_number' ) ? _get_field( 'mtm_grid_archive_taxonomy_number' ) : 3 ;
$grid_query = mtm_taxonomy_query( 'grid', $display, $orderbyvar );
$taxonomy = mtm_acf_taxonomy_property( 'grid', 'taxonomy' ); 
$term = mtm_acf_taxonomy_property( 'grid', 'slug' );
$view = _get_field( 'mtm_show_view_all_link' );
$mtm_grid_row_class = mtm_output_row_number();
$mtm_grid_module_class = 1 ;
?>

<h2 class="h1"><?php the_title(); ?><?php edit_post_link( '(Edit)', ' • ' ); ?></h2>
<div <?php post_class( 'mtm-component--main' ); ?>>
	<?php mtm_get_template_part( 'mtm-content', 'component-page' ); ?>
</div>

<?php if( _get_field( 'mtm_show_taxonomy_links' ) ) :
	mtm_terms_from_taxonomy_links( $taxonomy ); // output taxonomy links
endif; ?>

<?php if( $grid_query->have_posts() ) : ?>

	<div class="mtm-component--content mtm-grid--wrapper">

		<?php while( $grid_query->have_posts() ) :
			
			$grid_query->the_post();

			mtm_get_template_part( 'mtm-content', 'grid-view' );
		
		endwhile;

		wp_reset_postdata(); ?>

	</div>

<?php endif; // end grid_query

if( $view ) : // View All Link ?>

	<a class="mtm-view-all-link" href="<?php echo get_term_link( $term, $taxonomy ); ?>"><?php _e( 'View All', 'mtm' ); ?></a>

<?php endif; ?>