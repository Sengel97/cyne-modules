<?php 

$title = $settings->cta_title;
$text = $settings->cta_editor;
$align = $settings->cta_alignment;
$button_text = $settings->cta_button_text;
$button_link = $settings->cta_button_link;

?>
<div class="cyne-module-cta" style="text-align: <?php echo $align; ?>;">
    <h2><?php echo $title; ?></h2>
    <p><?php echo $text; ?></p>
    <button class="btn btn-primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></button>
</div>