<?php if (!defined('FW')) die('Forbidden');

if (!is_admin()) {
	wp_deregister_style('fw-ext-forms-default-styles');
	wp_dequeue_style('fw-ext-forms-default-styles');
}