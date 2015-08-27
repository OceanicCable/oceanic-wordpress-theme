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
	            'id' => $prefix . 'pay-per-view',
	            'type' => 'checkbox'
	        ),
	        array(
	            'name' => 'Banner Text',
	            'id' => $prefix . 'banner-text',
	            'type' => 'textarea'
	        ),
	        array(
	            'name' => 'Promo Video Url',
	            'id' => $prefix . 'promo_vid',
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
			array( // TV
				'name' => __( 'TV', 'cmb' ),
				'id'   => $prefix . 'tv_title',
				'type' => 'title',
			),
			array(
				'name'    => __( 'Plans', 'cmb' ),
				'id'      => $prefix . 'pgrid_tv_plans',
				'type'    => 'radio_inline',
				'options' => array(
					'Starter TV' 	=> __( 'Starter TV', 'cmb' ),
					'Standard TV' 	=> __( 'Standard TV', 'cmb' ),
					'Prefered TV'	=> __( 'Prefered TV', 'cmb' ),
					'none'	=> __( 'None', 'cmb' ),
				),
			),
			array(
				'name' => 'Channels',
				'id'   => $prefix . 'pgrid_tv_channels',
				'type' => 'text',
			),
			array(
				'name' => 'Channel Packages',
				'id'   => $prefix . 'pgrid_tv_channel_packages',
				'type' => 'text',
			),
			array(
				'name' => 'DVR Service',
				'id'   => $prefix . 'pgrid_tv_dvr_service',
				'type' => 'text',
			),
			array(
				'name' => 'Equipment',
				'id'   => $prefix . 'pgrid_tv_equipment',
				'type' => 'text',
			),
			array(
				'name' => 'TWC TV® App Access',
				'id'   => $prefix . 'pgrid_tv_twc_tv_app_access',
				'type' => 'checkbox',
			),
			array(
				'name' => 'Start Over',
				'id'   => $prefix . 'pgrid_tv_start_over',
				'type' => 'checkbox',
			),
			array(
				'name' => 'Caller ID on TV',
				'id'   => $prefix . 'pgrid_tv_caller_id_on_tv',
				'type' => 'checkbox',
			),
			array(
				'name' => 'On Demand',
				'id'   => $prefix . 'pgrid_tv_on_demand',
				'type' => 'text',
			),
			array( // Internet
				'name' => __( 'Internet', 'cmb' ),
				'id'   => $prefix . 'pgrid_net_title',
				'type' => 'title',
			),
			array(
				'name'    => __( 'Plans', 'cmb' ),
				'id'      => $prefix . 'pgrid_net_plans',
				'type'    => 'radio_inline',
				'options' => array(
					'standard' 	=> __( 'Standard', 'cmb' ),
					'turbo'   	=> __( 'Turbo', 'cmb' ),
					'extreme' 	=> __( 'Extreme', 'cmb' ),
					'none' 	=> __( 'None', 'cmb' ),
				),
			),
			array(
				'name' => 'Internet Speeds',
				'id'   => $prefix . 'pgrid_net_speeds',
				'type' => 'text',
			),
			array(
				'name' => 'Home WiFi',
				'id'   => $prefix . 'pgrid_net_home_wifi',
				'type' => 'checkbox',
			),
			array(
				'name' => 'WiFi Hotspots',
				'id'   => $prefix . 'pgrid_net_wifi_hotspots',
				'type' => 'text',
			),
			array(
				'name' => 'Internet Security & Parental Controls',
				'id'   => $prefix . 'pgrid_net_security_parental_controls',
				'type' => 'checkbox',
			),
			array( // Phone
				'name' => __( 'Phone', 'cmb' ),
				'id'   => $prefix . 'pgrid_phone_title',
				'type' => 'title',
			),
			array(
				'name'    => __( 'Plans', 'cmb' ),
				'id'      => $prefix . 'pgrid_phone_plans',
				'type'    => 'radio_inline',
				'options' => array(
					'Home Phone National' 	=> __( 'Home Phone National', 'cmb' ),					
				),
			),
			array(
				'name' => 'Included Calls',
				'id'   => $prefix . 'pgrid_phone_includedcalls',
				'type' => 'text',
			),

			array(
				'name' => 'Voicemail',
				'id'   => $prefix . 'pgrid_phone_voicemail',
				'type' => 'checkbox',
			),
			array(
				'name' => '13 Calling Features',
				'id'   => $prefix . 'pgrid_phone_13_calling_features',
				'type' => 'checkbox',
			),
			array(
				'name' => 'International Calling Plans (for an additional charge)',
				'id'   => $prefix . 'pgrid_phone_international_call',
				'type' => 'text',
			),			
		)
	);

	// Add other metaboxes as needed

	return $meta_boxes;
}
