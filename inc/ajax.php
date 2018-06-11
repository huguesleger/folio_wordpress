<?php
/**
 * @package portfolio_hl
 */

add_action('wp_ajax_nopriv_portfolio_hl_save_user_contact_form','portfolio_hl_save_contact');
add_action('wp_ajax_portfolio_hl_save_user_contact_form','portfolio_hl_save_contact');

function portfolio_hl_save_contact(){
  $name = wp_strip_all_tags($_POST["name"]);
  $email = wp_strip_all_tags($_POST["email"]);
  $message = wp_strip_all_tags($_POST["message"]);

  echo $name . ',' . $email . ',' . $message;

  // wp_insert_post();

  die();
}
