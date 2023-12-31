<?php
//Disable the new user notification sent to the site admin
function supercharger_disable_new_user_notifications() {
 //Remove original use created emails
 remove_action( 'register_new_user', 'wp_send_new_user_notifications' );
 remove_action( 'edit_user_created_user', 'wp_send_new_user_notifications', 10, 2 );
 
 //Add new function to take over email creation
 add_action( 'register_new_user', 'supercharger_send_new_user_notifications' );
 add_action( 'edit_user_created_user', 'supercharger_send_new_user_notifications', 10, 2 );
}
function supercharger_send_new_user_notifications( $user_id, $notify = 'user' ) {
 if ( empty($notify) || $notify == 'admin' ) {
 return;
 }elseif( $notify == 'both' ){
 //Only send the new user their email, not the admin
 $notify = 'user';
 }
 wp_send_new_user_notifications( $user_id, $notify );
}
add_action( 'init', 'supercharger_disable_new_user_notifications' );