<?php

/**
 * @file
 * This file is the main entry point for the tp2wp importer "sub-plugin"
 * that handles importing attachments from loaded content.
 *
 * This file is broken out from the main tp2wp importer plugin's script
 * for organizational purposes only.  This file is included by the plugin
 * on every load.
 */

define( 'TP2WP_IMPORTER_ATTACHMENTS_SETTINGS_PAGE', 'tp2wp_importer_attachments_options_settings_page' );
define( 'TP2WP_IMPORTER_ATTACHMENTS_SETTINGS_OPTIONS_GROUP', 'tp2wp_importer_attachments_options_group' );
define( 'TP2WP_IMPORTER_ATTACHMENTS_SETTINGS_META_TAG', 'tp2wp_importer_attachments_imported_date' );
define( 'TP2WP_IMPORTER_ATTACHMENTS_NONCE', 'tp2wp_importer_attachments_admin_page' );

if ( is_admin() ) {
    include dirname( __FILE__ ) . '/ajax.php';
    include dirname( __FILE__ ) . '/page.php';
}

// ===================================
// ! Plugin Install / Uninstall Hooks
// ===================================

/**
 * When the plugin is deactivated, clean up the state we've stored in
 * the options table to keep things nice and tidy.
 */
function tp2wp_importer_attachments_deactivated () {
    // Maintained by the settings / options API
    delete_option( TP2WP_IMPORTER_ATTACHMENTS_SETTINGS_OPTIONS_GROUP );
}
register_deactivation_hook( __FILE__, 'tp2wp_importer_attachments_deactivated' );
