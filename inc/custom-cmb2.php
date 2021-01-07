<?php
/**
 * Get the bootstrap!
 * (Update path to use cmb2 or CMB2, depending on the name of the folder.
 * Case-sensitive is important on some systems.)
 */
require_once __DIR__ . '/cmb2/init.php';

add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_teerpro_';

	/**
	 * Initiate the metabox
	 */

	$service_item = new_cmb2_box( array(
		'id'            => 'recent_work_metabox',
		'title'         => __( 'Recent Work Metabox', 'teerpro' ),
		'object_types'  => array( 'teerposts', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$service_item->add_field( array(
		'name'       => __( 'City (Location)', 'teerpro' ),
		'desc'       => __( 'Write here your Location', 'teerpro' ),
		'id'         => $prefix . 'recent_city',
		'type'       => 'text'
	) );
	// Regular text field
	$service_item->add_field( array(
		'name'       => __( 'F/R(4:00PM)', 'teerpro' ),
		'desc'       => __( 'Write here your number', 'teerpro' ),
		'id'         => $prefix . 'first_result',
		'type'       => 'text'
	) );
	// Regular text field
	$service_item->add_field( array(
		'name'       => __( 'S/R(5:00PM)', 'teerpro' ),
		'desc'       => __( 'Write here your number', 'teerpro' ),
		'id'         => $prefix . 'secend_result',
		'type'       => 'text'
	) );


	//common number//


	$common_number = new_cmb2_box( array(
		'id'            => 'common_number_meta',
		'title'         => __( 'Recent Work Metabox', 'teerpro' ),
		'object_types'  => array( 'commonnumbers', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$common_number->add_field( array(
		'name'       => __( 'City (Location)', 'teerpro' ),
		'desc'       => __( 'Write here your Location', 'teerpro' ),
		'id'         => $prefix . 'common_location',
		'type'       => 'text'
	) );
	// Regular text field
	$common_number->add_field( array(
		'name'       => __( 'Direct', 'teerpro' ),
		'desc'       => __( 'Write here your number', 'teerpro' ),
		'id'         => $prefix . 'direct',
		'type'       => 'text'
	) );
	// Regular text field
	$common_number->add_field( array(
		'name'       => __( 'House', 'teerpro' ),
		'desc'       => __( 'Write here your number', 'teerpro' ),
		'id'         => $prefix . 'house',
		'type'       => 'text'
	) );
	$common_number->add_field( array(
		'name'       => __( 'Ending', 'teerpro' ),
		'desc'       => __( 'Write here your number', 'teerpro' ),
		'id'         => $prefix . 'ending',
		'type'       => 'text'
	) );
}