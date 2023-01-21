<?php
/*
Plugin Name: Rohit Pal

*/
register_activation_hook( __FILE__, 'myPluginCreateTable');
function myPluginCreateTable() {
  global $wpdb;
  $charset_collate = $wpdb->get_charset_collate();
  $table_name = $wpdb->prefix . 'customtable';
  $sql = "CREATE TABLE `$table_name` (
  `id` int(11) NOT NULL,
  `name` varchar(220) DEFAULT NULL,
  `position` varchar(220) DEFAULT NULL,
  `phone` bigint(11) DEFAULT '1',
  PRIMARY KEY(id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }
}
register_deactivation_hook(__FILE__,'myPluginDeleteTable');
function myPluginDeleteTable() {
    global $wpdb;
    $table_name = $wpdb->prefix.'customtable';
    $sql = "DROP TABLE IF EXISTS $table_name";
    $wpdb->query($sql);
    delete_option("devnote_plugin_db_version");
}

add_action('admin_menu','customtable_menu');
 function customtable_menu(){
 add_menu_page('Team Data','Team Data',8,__FILE__,'customtable_list');
 }  

 add_shortcode('customtable_list_shortcode','customtable_list');

 function customtable_list(){
 include('customtable_list.php');
  // echo "Welcome";
 }