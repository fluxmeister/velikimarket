<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $uwp_widget_args;
$the_query = isset( $uwp_widget_args['template_args']['the_query'] ) ? $uwp_widget_args['template_args']['the_query'] : '';
$title = isset( $uwp_widget_args['template_args']['title'] ) ? $uwp_widget_args['template_args']['title'] : '';
?>

<div class="container mb-1">
	<div class="row">
		<div class="col-sm p-0">
			<h3><?php echo $title; ?></h3>
		</div>
		<div class="col p-0 d-none d-sm-block">
			<div class="btn-toolbar justify-content-end" role="toolbar" aria-label="Toolbar with button groups">
				<div class="btn-group btn-group-sm uwp-list-view-select" role="group" aria-label="First group">
					<button type="button" class="btn btn-outline-primary active uwp-list-view-select-list" onclick="uwp_list_view_select(0);"><i class="fas fa-th-list"></i></button>
					<button type="button" class="btn btn-outline-primary uwp-list-view-select-grid" onclick="uwp_list_view_select(3);"><i class="fas fa-th"></i></button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="uwp-profile-cpt-loop">
	<?php
	
	// The Loop
	if ( $the_query && $the_query->have_posts() ) {

		$design_style = ! empty( $uwp_widget_args['design_style'] ) ? esc_attr( $uwp_widget_args['design_style'] ) : uwp_get_option( "design_style", 'bootstrap' );
		$template     = $design_style ? $design_style . "/posts-post.php" : "posts-post.php";

		echo '<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">';
		while ( $the_query->have_posts() ) {
			$the_query->the_post();

			uwp_get_template( $template );

		}
		echo '</div>';

		/* Restore original Post Data */
		wp_reset_postdata();
	} else {
		// no posts found
		echo aui()->alert(array(
			'type'=>'info',
			'content'=> sprintf( __( "No %s found.", 'userswp' ), $title )
		));
	}
	do_action( 'uwp_profile_pagination', $the_query->max_num_pages );
	?>
</div>