<?php
$className = 'section-content custom-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$title = get_field('content_section_title');
$content = get_field('content_section_content');
$main_img = get_field('content_section_img');
$parallax_img = get_field('content_section_parallax_img');
?>

<section class="<?= $className ?>">
    <div class="container">
        <div class="section-content__img-block">
            <img src="<?= $main_img['url'] ?>" alt="<?= get_img_alt($main_img) ?>" class="section-content__main-img">
            <img src="<?= $parallax_img['url'] ?>" alt="<?= get_img_alt($parallax_img) ?>"
                 class="section-content__parallax-img"
                 data-parallax='{"y":50,"smoothness":20}'
            >
        </div>
        <div class="section-content__txt-block wow fadeIn" data-wow-offset="250">
            <?php if($title) : ?>
                <h2 class="title title--bordered title--left"><?= $title ?></h2>
            <?php endif ?>

            <?php if($content) : ?>
                <div class="sd">
                    <?= $content ?>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>
