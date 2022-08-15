<?php

$className = 'intro custom-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$items = get_field('intro_repeater');
?>

<section class="<?= $className ?>" >
    <?php if ($items) : ?>
        <div class="intro-slider custom-dots">
            <?php foreach ($items as $item) :
                $content = $item['content'];
                $bg_img = $item['background_img'];
                $link = $item['link'];
            ?>
                <div class="intro-slider__item">
                    <?php if($bg_img) : ?>
                        <img data-lazy="<?= $bg_img['url'] ?>" alt="<?= get_img_alt($bg_img) ?>" class="intro-slider__item-img">
                    <?php endif ?>

                    <div class="container">
                        <div class="intro-slider__item-content">
                            <?php if ($content) : ?>
                                <div class="sd wow fadeIn" data-wow-delay=".5s">
                                    <?= $content ?>
                                </div>
                            <?php endif ?>
                            <?php if ($link) : ?>
                                <a href="<?= $link['url'] ?>" class="intro-slider__item-link btn btn--lg wow fadeIn" data-wow-delay="1s">
                                    <?= $link['title'] ?>
                                </a>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    <?php endif ?>
    <div class="mouse-icon">
        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_3_135)">
                <path d="M15.5 5.8125C15.7569 5.8125 16.0033 5.91456 16.185 6.09624C16.3667 6.27792 16.4688 6.52432 16.4688 6.78125V10.6562C16.4688 10.9132 16.3667 11.1596 16.185 11.3413C16.0033 11.5229 15.7569 11.625 15.5 11.625C15.2431 11.625 14.9967 11.5229 14.815 11.3413C14.6333 11.1596 14.5312 10.9132 14.5312 10.6562V6.78125C14.5312 6.52432 14.6333 6.27792 14.815 6.09624C14.9967 5.91456 15.2431 5.8125 15.5 5.8125ZM23.25 21.3125C23.25 23.3679 22.4335 25.3392 20.9801 26.7926C19.5267 28.246 17.5554 29.0625 15.5 29.0625C13.4446 29.0625 11.4733 28.246 10.0199 26.7926C8.56652 25.3392 7.75 23.3679 7.75 21.3125V9.6875C7.75 7.63207 8.56652 5.66083 10.0199 4.20742C11.4733 2.75402 13.4446 1.9375 15.5 1.9375C17.5554 1.9375 19.5267 2.75402 20.9801 4.20742C22.4335 5.66083 23.25 7.63207 23.25 9.6875V21.3125ZM15.5 0C12.9307 0 10.4667 1.02064 8.6499 2.8374C6.83314 4.65416 5.8125 7.11822 5.8125 9.6875V21.3125C5.8125 23.8818 6.83314 26.3458 8.6499 28.1626C10.4667 29.9794 12.9307 31 15.5 31C18.0693 31 20.5333 29.9794 22.3501 28.1626C24.1669 26.3458 25.1875 23.8818 25.1875 21.3125V9.6875C25.1875 7.11822 24.1669 4.65416 22.3501 2.8374C20.5333 1.02064 18.0693 0 15.5 0V0Z" fill="white"/>
            </g>
            <defs>
                <clipPath id="clip0_3_135">
                    <rect width="31" height="31" fill="white"/>
                </clipPath>
            </defs>
        </svg>
    </div>
</section>