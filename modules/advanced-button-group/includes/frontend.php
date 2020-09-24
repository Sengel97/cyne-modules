<?php

// Button Alignment
$btn_align = $settings->button_alignment;

// Button #1
$btn1_text = $settings->button_1_text;
$btn1_link = $settings->button_1_link;
$btn1_newTab = $settings->button_1_new_tab;
$btn1_style = $settings->button_1_style;

// Button #2
$btn2_text = $settings->button_2_text;
$btn2_link = $settings->button_2_link;
$btn2_newTab = $settings->button_2_new_tab;
$btn2_style = $settings->button_2_style;

?>

<div class="cyne-module-abg <?php echo $btn_align; ?>">
    <a target="<?php echo $btn1_newTab; ?>" class="btn <?php echo $btn1_style; ?>" href="<?php echo $btn1_link; ?>"><?php echo $btn1_text; ?></a>
    <a target="<?php echo $btn2_newTab; ?>" class="btn <?php echo $btn2_style; ?>" href="<?php echo $btn2_link; ?>"><?php echo $btn2_text; ?></a>
</div>