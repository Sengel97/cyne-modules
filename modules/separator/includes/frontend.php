<?php

$width = $settings->separator_width;
$height = $settings->separator_height;
$align = $settings->separator_alignment;
$color = $settings->separator_color;

?>
<div class="cyne-module-separator" style="<?php echo 'text-align: '.$align.'; '; ?>"><span class="cyne-separator" style="<?php 

    echo 'width: '.$width.'%; ' . 'height: '.$height.'px; ' . 'text-align: '.$align.'; ' . 'background-color: '.$color.';';

?>"></span></div>