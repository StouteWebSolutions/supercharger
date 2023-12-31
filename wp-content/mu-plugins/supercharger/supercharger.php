<?php
/**
 * Plugin Name: Supercharger
 * Version: 1.0
 * Author: Paul Stoute
 * Author URI: https://stoutewebsolutions.com/
 */

// Add options page
if ( !class_exists( 'RationalOptionPages' ) ) {
	require_once( __DIR__ . '/third-party/RationalOptionPages.php' );
}
$pages = array(
    'supercharger_performance'    => array(
        'parent_slug'    => 'options-general.php',
        'page_title'    => __( 'Performance', 'supercharger' ),
        'sections'      => array(
            'performance-block'   => array(
                'title'    => __( 'Performance Settings', 'supercharger' ),
                'text'      => '<p>' . __( 'The items in this section are options that should increase the overall performance of your WordPress website.', 'supercharger' ) . '</p>',
                'fields'    => array(
                    'enable_html_minification' => array(
                        'title'    => __( 'Enable HTML Minification', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Enable minification of HTML', 'supercharger' ),
                    ),
                )
            )
        )
    ),
	'supercharger_security'	=> array(
        'parent_slug'    => 'options-general.php',
		'page_title'	=> __( 'Security', 'supercharger' ),
        'sections'      => array(
            'security-block'   => array(
                'title'     => __( 'Security Settings', 'supercharger' ),
                'text'      => '<p>' . __( 'The items in this section are mostly security related but are easily abused and create additional load on the site when active, so we enable all of these by default.', 'supercharger' ) . '</p>',
                'fields'    => array(
                    'disable_emojis' => array(
                        'title'     => __( 'Disable Emojis', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable emojis across the admin area as well as the frontend of the site.', 'supercharger' ),
                    ),
                    'disable_rss' => array(
                        'title'     => __( 'Disable RSS', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the RSS feeds on your WordPress site.', 'supercharger' ),
                    ),
                    'disable_username_enumeration' => array(
                        'title'     => __( 'Disable Username Enumeration', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable username enumeration on your WordPress site.', 'supercharger' ),
                    ),
                    'block_wp_scan_agent' => array(
                        'title'     => __( 'Block wp-scan agent', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Block the WP-Scan user agent from crawling your site.', 'supercharger' ),
                    ),
                    'block_wp_version' => array(
                        'title'     => __( 'Block wp-version', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Block the WP-Version from displaying the actual version of your WordPress site.', 'supercharger' ),
                    ),
                    'disable_comment_url'   => array(
                        'title'     => __( 'Disable Comment URL', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the URL field in the comment form on your WordPress site.', 'supercharger' ),
                    ),
                    'disable_wp_login_notices'  => array(
                        'title'     => __( 'Disable WP Login Notices', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the notices on the WordPress login page.', 'supercharger' ),
                    ),
                    'disable_file_editor'   => array(
                        'title'     => __( 'Disable File Editor', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the plugin and theme editor in the WordPress admin area.', 'supercharger' ),
                    ),
                    'disable_email_notices' => array(
                        'title'     => __( 'Disable Email Notices', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the update email notices that are sent out from WordPress.', 'supercharger' ),
                    ),
                    'disable_xml_rpc' => array(
                        'title'     => __( 'Disable XML-RPC', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the XML-RPC functionality on your WordPress site.', 'supercharger' ),
                    ),
                    'disable_jquery_migrate'    => array(
                        'title'     => __( 'Disable jQuery Migrate', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the jQuery Migrate script on your WordPress site.', 'supercharger' ),
                    ),
                )
            )
        )
    ),
    'supercharger_notifications' => array(
        'parent_slug'   => 'options-general.php',
        'page_title'    => __( 'Email Notifications', 'supercharger' ),
        'sections'      => array(
            'general-block'     => array(
                'title'    => __( 'General Notifications', 'supercharger' ),
                'text'      => '<p>' . __( 'The items in this section are general notifications that are sent out from WordPress.', 'supercharger' ) . '</p>',
                'fields'    => array(
                    'disable_password_reset_notifications' => array(
                        'title'     => __( 'Disable Password Reset Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the password reset notifications that are sent out from WordPress to the admin users.', 'supercharger' ),
                    ),
                    'disable_new_user_registration_notifications'   => array(
                        'title'     => __( 'Disable New User Registration Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the new user registration notifications that are sent out from WordPress to the admin users.', 'supercharger' ),
                    )
                )
            ),
            'woocommerce-block' => array(
                'tilte'     => __( 'WooCommerce Notifications', 'supercharger' ),
                'text'      => '<p>' . __( 'The items in this section are WooCommerce specific notifications that are sent out from WordPress.', 'supercharger' ) . '</p>',
                'fields'    => array(
                    'disable_low_stock_notifications'    => array(
                        'title'     => __( 'Disable Low Stock Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the low stock notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                    'disable_no_stock_notifications'    => array(
                        'title'     => __( 'Disable No Stock Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the no stock notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                    'disable_backorder_notifications'    => array(
                        'title'     => __( 'Disable Backorder Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the backorder notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                    'disable_new_order_pending_to_processing_notifications'    => array(
                        'title'     => __( 'Disable New Order Pending to Processing Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the new order pending to processing notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                    'disable_new_order_pending_to_on_hold_notifications'    => array(
                        'title'     => __( 'Disable New Order Pending to On Hold Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the new order pending to on hold notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                    'disable_new_order_pending_to_completed_notifications'    => array(
                        'title'     => __( 'Disable New Order Pending to Completed Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the new order pending to completed notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                    'disable_new_order_pending_to_cancelled_notifications'    => array(
                        'title'     => __( 'Disable New Order Pending to Cancelled Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the new order pending to cancelled notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                    'disable_new_order_pending_to_refunded_notifications'    => array(
                        'title'     => __( 'Disable New Order Pending to Refunded Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the new order pending to refunded notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                    'disable_new_order_pending_to_failed_notifications'    => array(
                        'title'     => __( 'Disable New Order Pending to Failed Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the new order pending to failed notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                    'disable_new_order_processing_to_on_hold_notifications'    => array(
                        'title'     => __( 'Disable New Order Processing to On Hold Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the new order processing to on hold notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                    'disable_new_order_processing_to_completed_notifications'    => array(
                        'title'     => __( 'Disable New Order Processing to Completed Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the new order processing to completed notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                    'disable_new_order_processing_to_cancelled_notifications'    => array(
                        'title'     => __( 'Disable New Order Processing to Cancelled Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the new order processing to cancelled notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                    'disable_new_order_processing_to_refunded_notifications'    => array(
                        'title'     => __( 'Disable New Order Processing to Refunded Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the new order processing to refunded notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                    'disable_new_order_processing_to_failed_notifications'    => array(
                        'title'     => __( 'Disable New Order Processing to Failed Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable the new order processing to failed notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                    'disable_new_order_on_hold_to_completed_notifications'    => array(
                        'title'     => __( 'Disable New Order On Hold to Completed Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable new order on hold to completed notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                    'disable_new_order_on_hold_to_cancelled_notifications'    => array(
                        'title'     => __( 'Disable New Order On Hold to Cancelled Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable new order on hold to cancelled notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                    'disable_new_order_on_hold_to_refunded_notifications'    => array(
                        'title'     => __( 'Disable New Order On Hold to Refunded Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable new order on hold to refunded notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                    'disable_new_order_on_hold_to_failed_notifications'    => array(
                        'title'     => __( 'Disable New Order On Hold to Failed Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable new order on hold to failed notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                    'disable_new_order_completed_to_cancelled_notifications'    => array(
                        'title'     => __( 'Disable New Order Completed to Cancelled Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable new order completed to cancelled notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                    'disable_new_customer_note_notifications'    => array(
                        'title'     => __( 'Disable New Customer Note Notifications', 'supercharger' ),
                        'type'      => 'checkbox',
                        'checked'   => true,
                        'text'      => __( 'Disable new customer note notifications that are sent out from WooCommerce.', 'supercharger' ),
                    ),
                )
            ),
        )
    )

);
$option_page = new RationalOptionPages( $pages );

// Security Modules

/* Grab Security settings */
$security_options = get_option( 'supercharger_security', array() );

/* Disable All Emojis */
if( $security_options['disable_emojis'] ) {
    require_once( __DIR__ . '/includes/disable-emojis.php' );
}

/* Disable RSS */
if( $security_options['disable_rss'] ) {
    require_once( __DIR__ . '/includes/disable-rss.php' );
}

/* Disable Username Enumeration */
if( $security_options['disable_username_enumeration'] ) {
    require_once( __DIR__ . '/includes/disable-username-enumeration.php' );
}

/* Disable wp-scan agent */
if( $security_options['block_wp_scan_agent'] ) {
    require_once( __DIR__ . '/includes/block-wpscan-agent.php' );
}

/* Disable wp-version */
if( $security_options['block_wp_version'] ) {
    require_once( __DIR__ . '/includes/block-wpversion.php' );
}

/* Disable the comment URL field */
if( $security_options['disable_comment_url'] ) {
    require_once( __DIR__ . '/includes/disable-comment-url.php' );
}

/* Disable wp-login.php notices */
if( $security_options['disable_wp_login_notices'] ) {
    require_once( __DIR__ . '/includes/disable-wp-login-notices.php' );
}

/* Disable the Plugin and Theme Editor */
if( $security_options['disable_file_editor'] ) {
    require_once( __DIR__ . '/includes/disable-file-editor.php' );
}

/* Disable email notices */
if( $security_options['disable_email_notices'] ) {
    require_once( __DIR__ . '/includes/disable-email-notices.php' );
}

/* Disable XML-RPC */
if( $security_options['disable_xml_rpc'] ) {
    require_once( __DIR__ . '/includes/disable-xmlrpc.php' );
}

/* Disable jQuery Migrate */
if( $security_options['disable_jquery_migrate'] ) {
    require_once( __DIR__ . '/includes/disable-jquery-migrate.php' );
}


// Performance Settings
/* Grab Security settings */
$performance_options = get_option( 'supercharger_performance', array() );
/* Minification */
if( $performance_options['enable_html_minification'] ) {
    require_once( __DIR__ . '/includes/enable-html-minification.php' );
}


// Email Notifications
/* Grab Notifications settings */
$notifications_options = get_option( 'supercharger_notifications', array() );

/* Disable Password Reset Notifications */
if( $notifications_options['disable_password_reset_notifications'] ) {
    require_once( __DIR__ . '/includes/disable-password-reset-notifications.php' );
}

/* Disable New User Registration Notifications */
if( $notifications_options['disable_new_user_registration_notifications'] ) {
    require_once( __DIR__ . '/includes/disable-new-user-registration-notifications.php' );
}

// Add customizations
/* Set the post revisions unless already set */
if (!defined('WP_POST_REVISIONS')) define('WP_POST_REVISIONS', 5);
if (!defined('WP_POST_REVISIONS')) define('WP_POST_REVISIONS', false);

/* Change the WordPress Admin Footer text */
function supercharger_footer_admin () { 
    echo 'Powered by <a href="https://wordpress.org/" target="_BLANK">WordPress</a> | Supercharged by <a href="https://stoutewebsolutions.com/" target="_blank">Stoute Web Solutions</a>';
} 
add_filter('admin_footer_text', 'supercharger_footer_admin'); 

/* Add the frontend HTML comment */
function supercharger_add_comment_to_pages() {
    echo '<!-- Supercharger is active. Supercharger is a performance and security plugin included on all sites hosted by StouteWebSolutions.com -->
';
}
if ( !is_admin() ) {
    add_action('init', 'supercharger_add_comment_to_pages');
}

/* Add the Admin Area Widget for support */
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
 
function my_custom_dashboard_widgets() {
    global $wp_meta_boxes;
    wp_add_dashboard_widget('supercharger_support_widget', 'Website Support', 'supercharger_dashboard_help');
}
 
function supercharger_dashboard_help() {
    echo '<p>Welcome to your website admin area. If you ever need support for your website, please create a support ticket with our support team by using our <a href="https://my.stoute.co/">support portal</a> or by emailing <a href="mailto:support@stoute.co" target="_BLANK">support@stoute.co</a></p>';
    echo '<p>It is extremely helpful if you are able to provide a video of your issue using a free tool called Loom. <a href="https://loom.com">Learn more about Loom</a>.</p>';
}