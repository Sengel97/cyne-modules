<?php

$btn_text = $settings->button_text;
$btn_link = $settings->button_link;
$btn_newTab = $settings->button_new_tab;
$btn_style = $settings->button_style;
$btn_align = $settings->button_alignment;
?>

<div class="cyne-module-advanced_button <?php echo $btn_align; ?>">
    <a target="<?php echo $btn_newTab; ?>" class="btn <?php echo $btn_style; ?>" href="<?php echo $btn_link; ?>"><?php echo $btn_text; ?></a>
</div>