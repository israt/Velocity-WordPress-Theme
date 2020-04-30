<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'options_check'),
		'two' => __('Two', 'options_check'),
		'three' => __('Three', 'options_check'),
		'four' => __('Four', 'options_check'),
		'five' => __('Five', 'options_check')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_check'),
		'two' => __('Pancake', 'options_check'),
		'three' => __('Omelette', 'options_check'),
		'four' => __('Crepe', 'options_check'),
		'five' => __('Waffle', 'options_check')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/image/';

	$options = array();

	

	/*$options[] = array(
		'name' => __('Input Text Mini', 'options_check'),
		'desc' => __('A mini text input field.', 'options_check'),
		'id' => 'example_text_mini',
		'std' => 'Default',
		'class' => 'mini',
		'type' => 'text');*/
    $wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);

//////////////////////////////////////////////GENERAL SETTINGS START////////////////////////////////////////////////////////////////////
	$options[] = array(
		'name' => __('General Settings', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Site Name', 'options_check'),
		'id' => 'sitename',
		'type' => 'text');
		
	$options[] = array(

		'name' => __('Upload Favicon Image', 'options_check'),

		'id' => 'fav',

		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Upload  Logo', 'options_check'),
		'id' => 'logo',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Upload Menu Logo', 'options_check'),
		'desc' => __('Upload Logo', 'options_check'),
		'id' => 'logo1',
		'type' => 'upload');
		
		$options[] = array(
		'name' => __('Footer Copyright Text', 'options_check'),
		'id' => 'copyright_ftext',
		'type' => 'editor',
		'settings' => $wp_editor_settings );

//////////////GENERAL SETTINGS START/////////////////////////
	$options[] = array(
		'name' => __('Home page CMS', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Hotspot heading', 'options_check'),
		'id' => 'hh',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Hotspot 1 Title', 'options_check'),
		'id' => 'h1',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Hotspot 2 Content', 'options_check'),
		'id' => 'hc1',
		'type' => 'editor');
		
	$options[] = array(
		'name' => __('Hotspot 2 Title', 'options_check'),
		'id' => 'h2',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Hotspot 3 Content', 'options_check'),
		'id' => 'hc2',
		'type' => 'editor');
		
	$options[] = array(
		'name' => __('Hotspot 3 Title', 'options_check'),
		'id' => 'h3',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Hotspot 1 Content', 'options_check'),
		'id' => 'hc3',
		'type' => 'editor');
		
		
	$options[] = array(
		'name' => __('Feature 1 Title', 'options_check'),
		'id' => 'ft1',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Feature 1 Content', 'options_check'),
		'id' => 'fc1',
		'type' => 'editor');
		
	$options[] = array(
		'name' => __('Feature 2 Title', 'options_check'),
		'id' => 'ft2',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Feature 2 Content', 'options_check'),
		'id' => 'fc2',
		'type' => 'editor');
		
	$options[] = array(
		'name' => __('Feature 3 Title', 'options_check'),
		'id' => 'ft3',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Feature 3 Content', 'options_check'),
		'id' => 'fc3',
		'type' => 'editor');
		
	$options[] = array(
		'name' => __('Feature 4 Title', 'options_check'),
		'id' => 'ft4',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Feature 4 Content', 'options_check'),
		'id' => 'fc4',
		'type' => 'editor');
		
	$options[] = array(
		'name' => __('Feature 5 Title', 'options_check'),
		'id' => 'ft5',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Feature 5 Content', 'options_check'),
		'id' => 'fc5',
		'type' => 'editor');
		
	$options[] = array(
		'name' => __('Feature 6 Title', 'options_check'),
		'id' => 'ft6',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Feature 6 Content', 'options_check'),
		'id' => 'fc6',
		'type' => 'editor');
		
	$options[] = array(
		'name' => __('Feature 7 Title', 'options_check'),
		'id' => 'ft7',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Feature 7 Content', 'options_check'),
		'id' => 'fc7',
		'type' => 'editor');
		
	$options[] = array(
		'name' => __('Feature 8 Title', 'options_check'),
		'id' => 'ft8',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Feature 8 Content', 'options_check'),
		'id' => 'fc8',
		'type' => 'editor');
		
//////////////PLANS SETTINGS START/////////////////////////
	$options[] = array(
		'name' => __('Plans', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Plans heading', 'options_check'),
		'id' => 'hp',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Plans briefings', 'options_check'),
		'id' => 'hpp',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Plan 1 Title', 'options_check'),
		'id' => 'ht1',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Plan 1 Price', 'options_check'),
		'id' => 'price1',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Plan 1 List', 'options_check'),
		'id' => 'list1',
		'type' => 'editor');
		
	$options[] = array(
		'name' => __('Plan 2 Title', 'options_check'),
		'id' => 'ht2',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Plan 2 Price', 'options_check'),
		'id' => 'price2',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Plan 2 List', 'options_check'),
		'id' => 'list2',
		'type' => 'editor');
		
//////////////PHONES SETTINGS START/////////////////////////
	$options[] = array(
		'name' => __('Phones', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Phones heading', 'options_check'),
		'id' => 'phone',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Phones briefings', 'options_check'),
		'id' => 'phone-c',
		'type' => 'editor');
		
//////////////VIRTUAL PHONES SETTINGS START/////////////////////////
	$options[] = array(
		'name' => __('Virtual', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Virtual heading', 'options_check'),
		'id' => 'virtual',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Virtual briefings', 'options_check'),
		'id' => 'virtual-c',
		'type' => 'editor');
		
	$options[] = array(
		'name' => __('Virtual List', 'options_check'),
		'id' => 'virtual-list',
		'type' => 'editor');
		
	$options[] = array(
		'name' => __('Price 1', 'options_check'),
		'id' => 'price-1',
		'type' => 'editor');
		
	$options[] = array(
		'name' => __('Price 2', 'options_check'),
		'id' => 'price-2',
		'type' => 'editor');
		
	$options[] = array(
		'name' => __('Price 3', 'options_check'),
		'id' => 'price-3',
		'type' => 'editor');
		
	$options[] = array(
		'name' => __('Price 4', 'options_check'),
		'id' => 'price-4',
		'type' => 'editor');
		
/////////////EFAX SETTINGS START/////////////////////////
	$options[] = array(
		'name' => __('EFax', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('EFax heading', 'options_check'),
		'id' => 'efax',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('EFax briefings', 'options_check'),
		'id' => 'efax-c',
		'type' => 'editor');
		
	$options[] = array(
		'name' => __('EFax Service 1', 'options_check'),
		'id' => 'e1',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('EFax Service 2', 'options_check'),
		'id' => 'e2',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('EFax Service 3', 'options_check'),
		'id' => 'e3',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('EFax Service 4', 'options_check'),
		'id' => 'e4',
		'type' => 'text');

		
		

		

	

	return $options;
}
?>