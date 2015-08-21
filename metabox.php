<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'rb-';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$meta_boxes['custom_meta_box'] = array(
		'id' => 'my-meta-box', // Metabox ID
	    'title' => 'Oceanic Metabox', // Meta Box Name
	    'pages' => array( 'post', 'page', 'product' ), // Meta Box Display Area
	    'context' => 'normal',
	    'priority' => 'high',
	    'fields' => array(
	        array(
	            'name' => 'Pay Per View',
	            'id' => $meta_prefix . 'pay-per-view',
	            'type' => 'checkbox'
	        ),
	        array(
	            'name' => 'Banner Text',
	            'id' => $meta_prefix . 'banner-text',
	            'type' => 'textarea'
	        ),
	        array(
	            'name' => 'Promo Video Url',
	            'id' => $meta_prefix . 'promo_vid',
	            'type' => 'text'
	        )
	    )
	);

	/**
	 * Metabox to be displayed on a single page ID
	 */
	$meta_boxes['about_page_metabox'] = array(
		'id'         => 'pricing_grid_metabox',
		'title'      => __( 'Pricing Grid', 'cmb' ),
		'pages'      => array( 'packages', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			array(
				'name' => __( 'Price', 'cmb' ),
				'id'   => $prefix . 'pgrid_price',
				'type' => 'text_small',
			),
			array(
				'name' => __( 'Price Before', 'cmb' ),
				'id'   => $prefix . 'pgrid_price_before',
				'type' => 'text_small',
			),
			array(
				'name' => 'Special Offer',
				'id'   => $prefix . 'pgrid_esp_offer',
				'type' => 'textarea_small',
			),
			array(
				'name' => 'Remarks',
				'id'   => $prefix . 'pgrid_remarks',
				'type' => 'text',
			),
			array(
				'name'    => __( 'Inclusions', 'cmb' ),
				'id'      => $prefix . 'pgrid_inclusions',
				'type'    => 'wysiwyg',
				'options' => array( 'textarea_rows' => 5, ),
			),
		)
	);

	// Add other metaboxes as needed

	return $meta_boxes;
}
