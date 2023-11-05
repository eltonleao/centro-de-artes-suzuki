<?php

/**
 * Register Custom Taxonomies
 *
 * @package SuzukiPetropolis
 */

namespace SUZUKI_THEME\Inc;

use SUZUKI_THEME\Inc\Traits\Singleton;

class Register_Taxonomies
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
		add_action('init', [$this, 'create_genre_taxonomy']);
		add_action('init', [$this, 'create_year_taxonomy']);
	}

	// Register Taxonomy Genre
	public function create_genre_taxonomy()
	{

		$labels = [
			'name'              => _x('Genres', 'taxonomy general name', 'suzuki'),
			'singular_name'     => _x('Genre', 'taxonomy singular name', 'suzuki'),
			'search_items'      => __('Search Genres', 'suzuki'),
			'all_items'         => __('All Genres', 'suzuki'),
			'parent_item'       => __('Parent Genre', 'suzuki'),
			'parent_item_colon' => __('Parent Genre:', 'suzuki'),
			'edit_item'         => __('Edit Genre', 'suzuki'),
			'update_item'       => __('Update Genre', 'suzuki'),
			'add_new_item'      => __('Add New Genre', 'suzuki'),
			'new_item_name'     => __('New Genre Name', 'suzuki'),
			'menu_name'         => __('Genre', 'suzuki'),
		];
		$args   = [
			'labels'             => $labels,
			'description'        => __('Movie Genre', 'suzuki'),
			'hierarchical'       => true,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_nav_menus'  => true,
			'show_tagcloud'      => true,
			'show_in_quick_edit' => true,
			'show_admin_column'  => true,
			'show_in_rest'       => true,
		];

		register_taxonomy('genre', ['movies'], $args);
	}

	// Register Taxonomy Year
	public function create_year_taxonomy()
	{

		$labels = [
			'name'              => _x('Years', 'taxonomy general name', 'suzuki'),
			'singular_name'     => _x('Year', 'taxonomy singular name', 'suzuki'),
			'search_items'      => __('Search Years', 'suzuki'),
			'all_items'         => __('All Years', 'suzuki'),
			'parent_item'       => __('Parent Year', 'suzuki'),
			'parent_item_colon' => __('Parent Year:', 'suzuki'),
			'edit_item'         => __('Edit Year', 'suzuki'),
			'update_item'       => __('Update Year', 'suzuki'),
			'add_new_item'      => __('Add New Year', 'suzuki'),
			'new_item_name'     => __('New Year Name', 'suzuki'),
			'menu_name'         => __('Year', 'suzuki'),
		];
		$args   = [
			'labels'             => $labels,
			'description'        => __('Movie Release Year', 'suzuki'),
			'hierarchical'       => false,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_nav_menus'  => true,
			'show_tagcloud'      => true,
			'show_in_quick_edit' => true,
			'show_admin_column'  => true,
			'show_in_rest'       => true,
		];
		register_taxonomy('movie-year', ['movies'], $args);
	}
}
