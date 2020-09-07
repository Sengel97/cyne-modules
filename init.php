<?php /**
 * Plugin Name: Cyne Modules
 * Plugin URI: https://cyne.enformatic.de/
 * Description: Custom modules for the Beaver Builder Plugin tailored for the Cyne Theme.
 * Author: Enformatic
 * Author URI: https://enformatic.de/
 */
define( 'CYNE_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'CYNE_MODULES_URL', plugins_url( '/', __FILE__ ) );

function cyne_load_modules() {
   if ( class_exists( 'FLBuilder' ) ) {
      require_once 'modules/advanced-header.php';
   }
}
add_action( 'init', 'cyne_load_modules' );