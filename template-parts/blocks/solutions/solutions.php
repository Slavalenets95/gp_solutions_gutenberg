<?php
$className = 'solutions wow bounceInRight custom-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$title = get_field('solutions_title');
$items = get_field('solutions_repeater');
?>

<section class="<?= $className ?>" data-wow-offset="250">
    <div class="container">
        <h2 class="solutions__title title title--bordered center"><?= $title ?></h2>
        <?php if($items) : ?>
            <div class="solutions-items">
                <?php foreach($items as $post) : $post = $post['post']; ?>
                    <div class="solutions-item">
                        <div class="solutions-item__header">
                            <img src="<?= get_the_post_thumbnail_url($post) ?>"
                                 loading="lazy"
                                 alt="<?= get_thumbnail_alt($post->ID) ?>"
                                 class="solutions-item__thumbnail">
                        </div>
                        <div class="solutions-item__body">
                            <h3 class="solutions-item__title"><?= $post->post_title ?></h3>
                            <p class="solutions-item__description"><?= $post->post_excerpt ?></p>
                        </div>
                        <div class="solutions-item__footer">
                            <a href="<?= get_post_permalink() ?>" class="solutions-item__link btn btn--darked">Learn more</a>
                        </div>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        <?php endif ?>
    </div>
</section>
