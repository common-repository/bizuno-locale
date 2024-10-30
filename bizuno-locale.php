<?php
/**
 * Plugin Name: Bizuno Locale
 * Plugin URI: https://www.phreesoft.com/products/wordpress-bizuno-locale
 * Description: Language packs and tools to support non English deployment for the Bizuno Accounting plugin
 * Version: 1.1.0
 * Author: PhreeSoft, Inc.
 * Author URI: http://www.PhreeSoft.com
 * Text Domain: bizuno
 * License: GPL3
 * License URI: https://www.gnu.org/licenses/gpl.html
 * Domain Path: /locale
 */

if (!defined( 'ABSPATH' )) { die( 'No script kiddies please!' ); }

/**
 * Things to do upon plugin activation
 */
register_activation_hook( __FILE__ , 'bizuno_locale_activate' );
function bizuno_locale_activate() {
    add_option('bizuno_locale_active',   true);
    require_once ( plugin_dir_path( __FILE__ ) . "../bizuno-accounting/controllers/portal/controller.php" );
    $ctl = new \bizuno\portalCtl();
    $_GET['bizRt'] = 'bizuno/portal/installPlugin';
    $_GET['plugin']= 'too';
    $ctl->compose();
}

/**
 * Things to do upon plugin deactivation
 */
register_deactivation_hook(__FILE__ , 'bizuno_locale_deactivate' );
function bizuno_locale_deactivate() {
    delete_option('bizuno_locale_active');
}

/**
 * This removes all information related to this plugin
 */
register_uninstall_hook(__FILE__, 'bizuno_locale_remove');
function bizuno_locale_remove() {
    require_once ( plugin_dir_path( __FILE__ ) . "../bizuno-accounting/controllers/portal/controller.php" );
    $ctl = new \bizuno\portalCtl();
    $_GET['bizRt'] = 'bizuno/portal/deletePlugin';
    $_GET['plugin']= 'too';
    $ctl->compose();
}
