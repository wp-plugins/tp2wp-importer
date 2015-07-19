<?php

/**
 * Checks to see if a post already exits in the database that matches
 * a given set of parameters.  This is meant to be a replacement
 * for wordpress's `post_exists` function, which gives too many false
 * positivies for our purposes.
 *
 * @param string $name
 *   The possible `post_name` of a post 
 *
 * @return int|NULL
 *   If there seems to be an existing post, then the unique id of that post,
 *   and otherwise NULL.
 */
function tp2wp_importer_content_post_exists ($name) {

  global $wpdb;

  $args = array($name);
  $query = "
    SELECT
      ID
    FROM 
      $wpdb->posts
    WHERE
      post_name = %s
    LIMIT
      1";

  $post_id = (int) $wpdb->get_var( $wpdb->prepare($query, $args) );
  return ( $post_id === 0 ) ? NULL : $post_id;
}

