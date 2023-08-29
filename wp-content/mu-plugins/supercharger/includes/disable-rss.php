<?php
// Pulled from the Gridpane Disable RSS plugin

// Check to see if the Gridpane function exists already, if it does, then we won't do anything because this is a duplicate function.
if(!function_exists('gridpane_security_remove_wp_version_rss') || !function_exists('gridpane_security_disable_feed')) {
    add_action('do_feed_rdf', 'supercharger_disable_feed', 1);
    add_action('do_feed_rss', 'supercharger_disable_feed', 1);
    add_action('do_feed_rss2', 'supercharger_disable_feed', 1);
    add_action('do_feed_atom', 'supercharger_disable_feed', 1);
    add_action('do_feed_rss2_comments', 'supercharger_disable_feed', 1);
    add_action('do_feed_atom_comments', 'supercharger_disable_feed', 1);
    add_filter('the_generator','supercharger_remove_wp_version_rss');

    function supercharger_remove_wp_version_rss() {
        return '';
    }

    function supercharger_disable_feed() {
        wp_die( __( 'Supercharger has disabled the RSS Feed, please visit the <a href="'. esc_url( home_url( '/' ) ) .'">Homepage</a>!' ) );
    }
}