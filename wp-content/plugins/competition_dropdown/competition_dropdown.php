<?php
/**
 * Plugin Name: Competition dropdown
 * Description: load the relevant competitions from the competitions table into a dropdown
 */
/* 
 * sets our function to be called when the pdb-form_element_build_dropdown action 
 * is triggered by the form
 */
add_action( 'pdb-form_element_build_dropdown', 'xnau_set_competition_dropdown_options');
/**
 * sets the options for the volunteer dropdown
 *
 * @param PDb_FormElement object $field the current field
 */
function xnau_set_competition_dropdown_options ( $field )
{
  if ( $field->name === 'competitions' ) :  // check for our dropdown field
  
  global $wpdb; // grab the db helper object
  
  /*
   * define the query for getting the list of volunteer names
   * 
   * note that the $wpdb->prefix method is used to get the table 
   * prefix; this is so it will work on all WP installs
   */
  $query = '
    SELECT *
    FROM `' . $wpdb->prefix . 'competitions` 
    WHERE competition_date > curdate()
  ';
  
  // now execute the query and get the results
  $raw_names = $wpdb->get_results( $query );
  
  /*
   * now expand the result array into an array for the options property of the 
   * dropdown
   */
  $options = array();
  foreach ( $raw_names as $record ) {
    $options[] = $record->competition;
  }
  
  // now set the field object with the new options list
  $field->options = $options;
  
  endif;
}