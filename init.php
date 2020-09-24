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
      // Add modules here..
      require_once 'modules/separator.php';
      require_once 'modules/empty-space.php';
      require_once 'modules/advanced-header.php';
      require_once 'modules/contact-form-7.php';
      require_once 'modules/call-to-action.php';
      require_once 'modules/menu.php';
      require_once 'modules/posts.php';
      require_once 'modules/advanced-button-group.php';
      require_once 'modules/advanced-button.php';
   }
}
add_action( 'init', 'cyne_load_modules' );


function print_menu_shortcode($atts, $content = null) {

   extract(shortcode_atts(array( 'id' => null, 'class' => null ), $atts));
   return wp_nav_menu( array('menu_id' => $id, 'menu_class' => $class, 'echo' => false ) );

}
add_shortcode('menu', 'print_menu_shortcode');