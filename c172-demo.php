<?php
/**
 * Plugin Name: P24 Aerospace — Cessna 172S Public Demo
 * Description: Public-facing Cessna 172S interactive cockpit trainer. No private Creative Studio files included.
 * Version: 1.0.1
 * Requires PHP: 7.4
 * License: Proprietary
 */
if (!defined('ABSPATH')) { exit; }
function c172_public_demo_shortcode($atts = array()) {
    $atts = shortcode_atts(array('height' => '850'), $atts, 'c172_demo');
    $height = max(420, min(1600, intval($atts['height'])));
    $src = plugins_url('demo/index.html', __FILE__);
    return '<iframe class="c172-demo" src="' . esc_url($src) . '" title="P24 Aerospace Cessna 172S Interactive Cockpit Trainer" loading="lazy" allow="autoplay; fullscreen" allowfullscreen style="display:block;width:100%;height:' . esc_attr($height) . 'px;border:0;border-radius:12px;"></iframe>';
}
add_shortcode('c172_demo', 'c172_public_demo_shortcode');
