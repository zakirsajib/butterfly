<?php if (!defined('FW')) die('Forbidden');

if (!is_admin()) {
    wp_deregister_style('fw-ext-builder-frontend-grid');
    wp_deregister_style('fw-shortcode-section-background-video');
    wp_deregister_style('fw-shortcode-section');
}