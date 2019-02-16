<?php
$image_id = get_post_thumbnail_id($block->ID);
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
?>
<div class="content-block">
    <h2><?=$block->title;?></h2>
    <?=$block->content;?>
    <?=wp_get_attachment_image($image_id, 'full', ['alt'=>$image_alt]);?>
</div>
