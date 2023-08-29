<?php
// Funciton pulled from the GridPane functions, if functions exist then don't run these additional funtions as they're a duplicate of the GridPane functions.
if(!function_exists('check_permalink_user_enumeration') && is_admin() ) {
	// default URL format
	if ( isset( $_SERVER['QUERY_STRING'] ) ) {
		if ( preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING'] ) ) {
			die();
		}
		add_filter('redirect_canonical', 'supercharger_check_permalink_user_enumeration', 10, 2);
	}
}

function supercharger_check_permalink_user_enumeration($redirect, $request)
{
	// permalink URL format
	if ( preg_match('/\?author=([0-9]*)(\/*)/i', $request) ) {
		die();
	}
	return $redirect;
}

function supercharger_disable_users_rest_if_not_logged_in()
{
	// If request is not from logged in user, then disable users rest endpoint
	if (! is_user_logged_in() )
	{
		add_filter('rest_endpoints', 'supercharger_disable_users_rest_endpoints');
	}
}
if(!function_exists('disable_users_rest_if_not_logged_in') ){
    add_action('init', 'supercharger_disable_users_rest_if_not_logged_in');
}

function supercharger_disable_users_rest_endpoints ( $endpoints )
{
	if ( isset( $endpoints['/wp/v2/users'] ) ) {
		unset( $endpoints['/wp/v2/users'] );
	}

	if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
		unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
	}
	return $endpoints;
}