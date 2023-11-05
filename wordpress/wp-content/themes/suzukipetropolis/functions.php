<?php

/**
 * Theme Functions.
 *
 * @package SuzukiPetropolis
 */


if (!defined('SUZUKI_DIR_PATH')) {
	define('SUZUKI_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('SUZUKI_DIR_URI')) {
	define('SUZUKI_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

if (!defined('SUZUKI_BUILD_URI')) {
	define('SUZUKI_BUILD_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build');
}

if (!defined('SUZUKI_BUILD_PATH')) {
	define('SUZUKI_BUILD_PATH', untrailingslashit(get_template_directory()) . '/assets/build');
}

if (!defined('SUZUKI_BUILD_JS_URI')) {
	define('SUZUKI_BUILD_JS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/js');
}

if (!defined('SUZUKI_BUILD_JS_DIR_PATH')) {
	define('SUZUKI_BUILD_JS_DIR_PATH', untrailingslashit(get_template_directory()) . '/assets/build/js');
}

if (!defined('SUZUKI_BUILD_IMG_URI')) {
	define('SUZUKI_BUILD_IMG_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/src/img');
}

if (!defined('SUZUKI_BUILD_CSS_URI')) {
	define('SUZUKI_BUILD_CSS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/css');
}

if (!defined('SUZUKI_BUILD_CSS_DIR_PATH')) {
	define('SUZUKI_BUILD_CSS_DIR_PATH', untrailingslashit(get_template_directory()) . '/assets/build/css');
}

if (!defined('SUZUKI_BUILD_LIB_URI')) {
	define('SUZUKI_BUILD_LIB_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/library');
}

if (!defined('SUZUKI_ARCHIVE_POST_PER_PAGE')) {
	define('SUZUKI_ARCHIVE_POST_PER_PAGE', 9);
}

if (!defined('SUZUKI_SEARCH_RESULTS_POST_PER_PAGE')) {
	define('SUZUKI_SEARCH_RESULTS_POST_PER_PAGE', 9);
}

require_once SUZUKI_DIR_PATH . '/inc/helpers/autoloader.php';
require_once SUZUKI_DIR_PATH . '/inc/helpers/template-tags.php';

function suzuki_get_theme_instance()
{
	\SUZUKI_THEME\Inc\SUZUKI_THEME::get_instance();
}

suzuki_get_theme_instance();
