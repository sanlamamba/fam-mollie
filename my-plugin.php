<?php
/**
 * Plugin Name: FAM Mollie
 * Plugin URI: https://fam-digitale.com/
 * Description: FAM Mollie
 * Version: 1.0.0
 * Author: FAM
 *   
 */

defined( 'ABSPATH' ) or die( 'Permission Denied !' );

require_once plugin_dir_path( __FILE__ ) . 'includes/class-fam-mollie.php';

$fam_mollie = new FAM_Mollie();

add_action('admin_menu', array($fam_mollie, 'add_admin_menu'), 20);

add_action('admin_init', array($fam_mollie, 'settings_init'));

function fam_mollie_activate() {
       global $wpdb;
    $table_name = $wpdb->prefix . 'fam_mollie';
    $charset_collate = $wpdb->get_charset_collate();
     $sql = "CREATE TABLE $table_name (
          id mediumint(9) NOT NULL AUTO_INCREMENT,
          name tinytext NOT NULL,
          email varchar(50) DEFAULT '' NOT NULL,
          token varchar(50) DEFAULT '' NOT NULL,
          transaction_id varchar(50) DEFAULT '' NOT NULL,
          created_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
          updated_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
          UNIQUE KEY id (id)
     ) $charset_collate;";
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );

     $table_name = $wpdb->prefix . 'mollie_config';
     $sql = "CREATE TABLE $table_name (
          id mediumint(9) NOT NULL AUTO_INCREMENT,
          api_key varchar(50) DEFAULT '' NOT NULL,
          client_token varchar(50) DEFAULT '' NOT NULL,
          created_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
          updated_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
          UNIQUE KEY id (id)
     ) $charset_collate;";
     require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
     dbDelta( $sql );

     $sql = "";
          // header("Location: ".admin_url('admin.php?page=fam-mollie-settings'));
     return 1;
     
}
register_activation_hook( __FILE__, 'fam_mollie_activate' );

function fam_mollie_deactivate() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'fam_mollie';
    $sql = "DROP TABLE IF EXISTS $table_name;";
    $wpdb->query($sql);
}
register_deactivation_hook( __FILE__, 'fam_mollie_deactivate' );