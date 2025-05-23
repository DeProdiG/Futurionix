<?php
$client_id = $attributes['blockClientId'];
$block_id  = 'cozyBlock_' . str_replace( '-', '_', sanitize_key( $client_id ) );

$bg_img      = isset( $attributes['style']['background']['backgroundImage']['url'] ) ? $attributes['style']['background']['backgroundImage']['url'] : '';
$focal_point = array(
	'x' => isset( $attributes['focalPoint']['x'] ) ? number_format( floatval( $attributes['focalPoint']['x'] ) * 100, 1 ) : '',
	'y' => isset( $attributes['focalPoint']['y'] ) ? number_format( floatval( $attributes['focalPoint']['y'] ) * 100, 1 ) : '',
);

$block_styles = "
#$block_id {
    background-image: url({$bg_img});
    background-repeat: no-repeat;
    background-size: cover;
    background-position: {$focal_point['x']}% {$focal_point['y']}%;
}
";

add_action(
	'wp_enqueue_scripts',
	function () use ( $block_styles ) {
		wp_add_inline_style( 'cozy-block--slide--style', esc_html( $block_styles ) );
	}
);

$output = '';

$output .= '<div class="swiper-slide" id="' . esc_attr( $block_id ) . '">';
$output .= $content;
$output .= '</div>';

echo $output;
