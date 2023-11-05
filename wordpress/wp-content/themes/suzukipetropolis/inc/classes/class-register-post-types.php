<?php

/**
 * Register Post Types
 *
 * @package SuzukiPetropolis
 */

namespace SUZUKI_THEME\Inc;

use SUZUKI_THEME\Inc\Traits\Singleton;

class Register_Post_Types
{
	use Singleton;

	protected function __construct()
	{

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks()
	{

		/**
		 * Actions.
		 */
		add_action('init', [$this, 'create_movie_cpt'], 0);
	}

	// Register Custom Post Type Movie
	public function create_movie_cpt()
	{

		$labels = [
			'name'                  => _x('Movies', 'Post Type General Name', 'suzuki'),
			'singular_name'         => _x('Movie', 'Post Type Singular Name', 'suzuki'),
			'menu_name'             => _x('Movies', 'Admin Menu text', 'suzuki'),
			'name_admin_bar'        => _x('Movie', 'Add New on Toolbar', 'suzuki'),
			'archives'              => __('Movie Archives', 'suzuki'),
			'attributes'            => __('Movie Attributes', 'suzuki'),
			'parent_item_colon'     => __('Parent Movie:', 'suzuki'),
			'all_items'             => __('All Movies', 'suzuki'),
			'add_new_item'          => __('Add New Movie', 'suzuki'),
			'add_new'               => __('Add New', 'suzuki'),
			'new_item'              => __('New Movie', 'suzuki'),
			'edit_item'             => __('Edit Movie', 'suzuki'),
			'update_item'           => __('Update Movie', 'suzuki'),
			'view_item'             => __('View Movie', 'suzuki'),
			'view_items'            => __('View Movies', 'suzuki'),
			'search_items'          => __('Search Movie', 'suzuki'),
			'not_found'             => __('Not found', 'suzuki'),
			'not_found_in_trash'    => __('Not found in Trash', 'suzuki'),
			'featured_image'        => __('Featured Image', 'suzuki'),
			'set_featured_image'    => __('Set featured image', 'suzuki'),
			'remove_featured_image' => __('Remove featured image', 'suzuki'),
			'use_featured_image'    => __('Use as featured image', 'suzuki'),
			'insert_into_item'      => __('Insert into Movie', 'suzuki'),
			'uploaded_to_this_item' => __('Uploaded to this Movie', 'suzuki'),
			'items_list'            => __('Movies list', 'suzuki'),
			'items_list_navigation' => __('Movies list navigation', 'suzuki'),
			'filter_items_list'     => __('Filter Movies list', 'suzuki'),
		];
		$args   = [
			'label'               => __('Movie', 'suzuki'),
			'description'         => __('The movies', 'suzuki'),
			'labels'              => $labels,
			'menu_icon'           => 'dashicons-video-alt',
			'supports'            => [
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'revisions',
				'author',
				'comments',
				'trackbacks',
				'page-attributes',
				'custom-fields',
			],
			'taxonomies'          => [],
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'hierarchical'        => false,
			'exclude_from_search' => false,
			'show_in_rest'        => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		];

		register_post_type('movies', $args);
	}
}
