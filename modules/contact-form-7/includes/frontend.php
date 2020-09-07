<div class="cyne-contact-form-7">
    <?php 
        if ( $settings->cf7_form_select ) {
            echo do_shortcode( '[contact-form-7 id='.absint( $settings->cf7_form_select ).' ajax=true]' );
        }
    ?>
</div>
