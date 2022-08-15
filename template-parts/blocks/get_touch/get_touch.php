<?php
$className = 'get-touch custom-block';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$form_title = get_field('get_touch_title');
$form_sub_title = get_field('get_touch_sub_title');
$content_title = get_field('get_touch_content_title');
$content_items = get_field('get_touch_repeater');
$bg_img = get_field('get_touch_bg_img');
?>

<div class="<?= $className ?>" style="background-image: url(<?= $bg_img['url'] ?>)">
    <div class="container">
        <div class="get-touch__form">
            <h2 class="get-touch__form-title title title--bordered title--left"><?= $form_title ?></h2>
            <span class="get-touch__sub-title"><?= $form_sub_title ?></span>
            <?= do_shortcode('[contact-form-7 id="133" title="Связаться с нами"]') ?>
        </div>
        <div class="get-touch__content">
            <h3 class="get-touch__content-title"><?= $content_title ?></h3>
            <ul class="get-touch__content-list">
                <?php foreach($content_items as $item) : ?>
                    <li class="get-touch__content-item"><?= $item['txt'] ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>
