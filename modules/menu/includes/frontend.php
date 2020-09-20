<div class="cyne-module-menu">
    <?php 
    // label = menu_select
        if ( $settings->menu_select ) {
            // echo do_shortcode( '[menu id='.absint( $settings->menu_select ).' ajax=true]' );

            wp_nav_menu( array(
                'menu' => $settings->menu_select,
            ) );
        }
    ?>
</div>
