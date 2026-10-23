<?php
/**
 * Plugin Name: N796SP C172 Public Demo
 * Description: Public-facing Cessna 172S Preflight Interior training demonstration. No Creator Studio included.
 * Version: 1.0.0
 * Requires PHP: 7.4
 * License: Proprietary
 */
if (!defined('ABSPATH')) { exit; }
function n796sp_c172_public_demo_shortcode($atts = array()) {
    $atts = shortcode_atts(array('height' => '850'), $atts, 'n796sp_c172_demo');
    $height = max(420, min(1600, intval($atts['height'])));
    $src = plugins_url('demo/index.html', __FILE__);
    return '<iframe class="n796sp-c172-demo" src="' . esc_url($src) . '" title="N796SP Cessna 172S Preflight Interior Interactive Demo" loading="lazy" allow="autoplay; fullscreen" allowfullscreen style="display:block;width:100%;height:' . esc_attr($height) . 'px;border:0;border-radius:12px;"></iframe>';
}
add_shortcode('n796sp_c172_demo', 'n796sp_c172_public_demo_shortcode');
