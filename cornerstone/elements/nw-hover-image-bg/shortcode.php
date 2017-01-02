<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 1/1/2017
 * Time: 9:22 PM
 */

?>

<div <?= cs_atts( array( 'id' => $id, 'class' => $class . ' hib-container', 'style' => $style ) ); ?> data-bg-image="<?= $image; ?>">
    <a <?= cs_atts( [ 'href' => $link_href, 'class' => 'hib-link', 'title' => $link_title ] ); ?>
		<?php if ( isset( $new_window ) && $new_window ): ?>
            target="_blank"
		<?php endif; ?>
    >
        <img class="hib-image-thumb" <?= cs_atts( [ 'src' => $image_thumb, 'alt' => $image_alt . ' thumbnail' ] ); ?> />
        <span <?= cs_att( 'class', $link_class . ' hib-heading' ); ?>><?= $heading; ?></span>
    </a>
</div>
