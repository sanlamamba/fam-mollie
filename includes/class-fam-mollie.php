<?php
// main wordpress plugin class file
require_once plugin_dir_path(__FILE__) . "vendor/mollie-client/vendor/autoload.php";
require_once plugin_dir_path(__FILE__) . "vendor/mollie-client/vendor/functions.php";
// require_once __DIR__ . "/functions.php";
class FAM_Mollie
{
     public $mollie;
     public function __construct()
     {
          // init mollie api
          $this->mollie = new Mollie_API_Client;
          $this->mollie->setApiKey("test_8pQ2J9y3q4Y4z9V5z7X8b6Y2");
     }
     // add pages to the menu, Home, settings and about
    
     public function add_admin_menu()
     {
          add_menu_page('FAM Mollie', 'FAM Mollie', 'manage_options', 'fam-mollie', array($this, 'menu_html'));
          add_submenu_page('fam-mollie', 'FAM Mollie', 'Home', 'manage_options', 'fam-mollie', array($this, 'menu_html'));
          add_submenu_page('fam-mollie', 'FAM Mollie', 'Settings', 'manage_options', 'fam-mollie-settings', array($this, 'settings_html'));
          add_submenu_page('fam-mollie', 'FAM Mollie', 'Connect', 'manage_options', 'fam-mollie-connect', array($this, 'connect_html'));
     }
          
     // settings init function
     public function settings_init()
     {
          register_setting('fam-mollie', 'fam_mollie_settings');
          add_settings_section('fam_mollie_fam_mollie_section', __('FAM Mollie settings', 'fam-mollie'), array($this, 'settings_section_callback'), 'fam-mollie');
          add_settings_field('fam_mollie_text_field_0', __('Text Field', 'fam-mollie'), array($this, 'text_field_0_render'), 'fam-mollie', 'fam_mollie_fam_mollie_section');
     }

     public function menu_html()
     {
          include plugin_dir_path(__FILE__) . 'partials/home-page.php';
     }

     public function settings_html()
     {
          include plugin_dir_path(__FILE__) . 'partials/settings-page.php';
     }
     
     public function connect_html()
     {
          include plugin_dir_path(__FILE__) . 'partials/connect-page.php';
     }

     

     

}