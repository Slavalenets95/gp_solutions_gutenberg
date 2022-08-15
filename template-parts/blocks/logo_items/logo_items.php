<?php
$className = 'logo-section custom-block';

if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$items = get_field('logo_items_repeater');
$wow_delay = 0.5;
$idx = 1;
?>

<?php if($items) : ?>
    <div class="<?= $className ?>">
        <div class="container">
            <div class="logo-items">
                <?php foreach($items as $item) : $item = $item['img']; ?>
                    <div class="logo-item wow bounceInLeft" data-wow-delay="<?= ($idx * 0.5) / 2 ?>s">
                        <img src="<?= $item['url'] ?>"
                             alt="<?= get_img_alt($item) ?>"
                             class="logo-item__img"
                             loading="lazy">
                    </div>
                    <?php $idx++; endforeach ?>
            </div>
        </div>
    </div>
<?php endif ?>
