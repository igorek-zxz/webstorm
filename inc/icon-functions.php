<?php

function webstorm_include_svg_icons() {
	$svg_icons = get_parent_theme_file_path( '/assets/images/svg-icons.svg' );
	if ( file_exists( $svg_icons ) ) {
		require_once $svg_icons;
	}
}
add_action( 'wp_footer', 'webstorm_include_svg_icons', 9999 );


function webstorm_get_svg( $args = array() ) {
	if ( empty( $args ) ) {
		return __( 'Please define default parameters in the form of an array.', 'webstorm' );
	}
	if ( false === array_key_exists( 'icon', $args ) ) {
		return __( 'Please define an SVG icon filename.', 'webstorm' );
	}
	$defaults = array(
		'icon'     => '',
		'title'    => '',
		'desc'     => '',
		'fallback' => false,
	);
	$args = wp_parse_args( $args, $defaults );
	$aria_hidden = ' aria-hidden="true"';
	$aria_labelledby = '';
	if ( $args['title'] ) {
		$aria_hidden     = '';
		$unique_id       = webstorm_unique_id();
		$aria_labelledby = ' aria-labelledby="title-' . $unique_id . '"';
		if ( $args['desc'] ) {
			$aria_labelledby = ' aria-labelledby="title-' . $unique_id . ' desc-' . $unique_id . '"';
		}
	}
	$svg = '<svg class="icon icon-' . esc_attr( $args['icon'] ) . '"' . $aria_hidden . $aria_labelledby . ' role="img">';
	if ( $args['title'] ) {
		$svg .= '<title id="title-' . $unique_id . '">' . esc_html( $args['title'] ) . '</title>';
		if ( $args['desc'] ) {
			$svg .= '<desc id="desc-' . $unique_id . '">' . esc_html( $args['desc'] ) . '</desc>';
		}
	}
	$svg .= ' <use href="#icon-' . esc_html( $args['icon'] ) . '" xlink:href="#icon-' . esc_html( $args['icon'] ) . '"></use> ';
	if ( $args['fallback'] ) {
		$svg .= '<span class="svg-fallback icon-' . esc_attr( $args['icon'] ) . '"></span>';
	}
	$svg .= '</svg>';
	return $svg;
}