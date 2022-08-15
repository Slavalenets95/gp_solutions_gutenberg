<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gp_solutions
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
          rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="main-wrapper">
    <header class="header">
        <div class="container">
            <div class="header-logo header__logo">
                <a href="<?= get_home_url() ?>" class="header-logo__link">
                    <svg width="75" height="21" viewBox="0 0 75 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.706665 20V0.363681H4.8583V16.5771H13.2766V20H0.706665Z" fill="white"/>
                        <path d="M33.3061 10.1819C33.3061 12.3232 32.9002 14.1449 32.0884 15.6471C31.283 17.1492 30.1836 18.2966 28.7901 19.0892C27.403 19.8754 25.8434 20.2685 24.1111 20.2685C22.3661 20.2685 20.8001 19.8722 19.413 19.0796C18.0259 18.287 16.9297 17.1396 16.1243 15.6375C15.3189 14.1353 14.9162 12.3168 14.9162 10.1819C14.9162 8.04053 15.3189 6.2188 16.1243 4.71666C16.9297 3.21453 18.0259 2.07036 19.413 1.28414C20.8001 0.491522 22.3661 0.0952148 24.1111 0.0952148C25.8434 0.0952148 27.403 0.491522 28.7901 1.28414C30.1836 2.07036 31.283 3.21453 32.0884 4.71666C32.9002 6.2188 33.3061 8.04053 33.3061 10.1819ZM29.0969 10.1819C29.0969 8.79479 28.8892 7.62504 28.4737 6.67263C28.0646 5.72022 27.4861 4.99791 26.7383 4.50573C25.9904 4.01354 25.1147 3.76745 24.1111 3.76745C23.1076 3.76745 22.2319 4.01354 21.484 4.50573C20.7361 4.99791 20.1545 5.72022 19.739 6.67263C19.3299 7.62504 19.1253 8.79479 19.1253 10.1819C19.1253 11.5689 19.3299 12.7387 19.739 13.6911C20.1545 14.6435 20.7361 15.3658 21.484 15.858C22.2319 16.3502 23.1076 16.5963 24.1111 16.5963C25.1147 16.5963 25.9904 16.3502 26.7383 15.858C27.4861 15.3658 28.0646 14.6435 28.4737 13.6911C28.8892 12.7387 29.0969 11.5689 29.0969 10.1819Z"
                              fill="white"/>
                        <path d="M49.4021 6.71098C49.2678 6.24436 49.0793 5.83208 48.8364 5.47412C48.5935 5.10978 48.2962 4.80296 47.9447 4.55367C47.5995 4.29799 47.2032 4.10303 46.7558 3.9688C46.3147 3.83456 45.8257 3.76745 45.2888 3.76745C44.2852 3.76745 43.4031 4.01674 42.6425 4.51531C41.8882 5.01389 41.3001 5.73939 40.8783 6.69181C40.4564 7.63783 40.2455 8.79479 40.2455 10.1627C40.2455 11.5306 40.4532 12.6939 40.8687 13.6527C41.2842 14.6116 41.8722 15.3434 42.6329 15.8484C43.3935 16.347 44.2916 16.5963 45.3271 16.5963C46.2668 16.5963 47.069 16.4301 47.7337 16.0977C48.4049 15.7589 48.9163 15.2827 49.2678 14.6691C49.6258 14.0554 49.8048 13.3299 49.8048 12.4926L50.6485 12.6172H45.586V9.49152H53.803V11.9652C53.803 13.6911 53.4386 15.1741 52.7099 16.4141C51.9813 17.6478 50.9777 18.6002 49.6993 19.2714C48.4209 19.9361 46.9571 20.2685 45.308 20.2685C43.4671 20.2685 41.8499 19.8626 40.4564 19.0508C39.0629 18.2326 37.9763 17.0725 37.1965 15.5704C36.423 14.0618 36.0363 12.2721 36.0363 10.201C36.0363 8.60942 36.2664 7.19039 36.7266 5.94394C37.1933 4.6911 37.8452 3.63002 38.6826 2.7607C39.52 1.89138 40.4948 1.2298 41.607 0.775968C42.7192 0.322132 43.9241 0.0952148 45.2217 0.0952148C46.3339 0.0952148 47.3694 0.258212 48.3282 0.584207C49.287 0.903809 50.1371 1.35764 50.8786 1.94571C51.6265 2.53378 52.2369 3.23371 52.7099 4.0455C53.183 4.8509 53.4866 5.73939 53.6208 6.71098H49.4021Z"
                              fill="white"/>
                        <path d="M74.9663 10.1819C74.9663 12.3232 74.5604 14.1449 73.7486 15.6471C72.9432 17.1492 71.8437 18.2966 70.4503 19.0892C69.0632 19.8754 67.5035 20.2685 65.7713 20.2685C64.0263 20.2685 62.4602 19.8722 61.0731 19.0796C59.6861 18.287 58.5898 17.1396 57.7844 15.6375C56.979 14.1353 56.5763 12.3168 56.5763 10.1819C56.5763 8.04053 56.979 6.2188 57.7844 4.71666C58.5898 3.21453 59.6861 2.07036 61.0731 1.28414C62.4602 0.491522 64.0263 0.0952148 65.7713 0.0952148C67.5035 0.0952148 69.0632 0.491522 70.4503 1.28414C71.8437 2.07036 72.9432 3.21453 73.7486 4.71666C74.5604 6.2188 74.9663 8.04053 74.9663 10.1819ZM70.7571 10.1819C70.7571 8.79479 70.5494 7.62504 70.1339 6.67263C69.7248 5.72022 69.1463 4.99791 68.3984 4.50573C67.6506 4.01354 66.7748 3.76745 65.7713 3.76745C64.7678 3.76745 63.892 4.01354 63.1442 4.50573C62.3963 4.99791 61.8146 5.72022 61.3991 6.67263C60.99 7.62504 60.7855 8.79479 60.7855 10.1819C60.7855 11.5689 60.99 12.7387 61.3991 13.6911C61.8146 14.6435 62.3963 15.3658 63.1442 15.858C63.892 16.3502 64.7678 16.5963 65.7713 16.5963C66.7748 16.5963 67.6506 16.3502 68.3984 15.858C69.1463 15.3658 69.7248 14.6435 70.1339 13.6911C70.5494 12.7387 70.7571 11.5689 70.7571 10.1819Z"
                              fill="white"/>
                    </svg>
                </a>
            </div>
            <nav class="header-nav">
                <?php
                wp_nav_menu([
                    'theme_location' => 'header_menu',
                    'menu' => 'Header Menu',
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => 'header-nav__menu',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => '',
                ]);
                ?>
            </nav>
            <?php
            $header_ui_items = get_field('header_ui_repeater', 'options');
            ?>
            <?php if($header_ui_items) : ?>
                <div class="header-ui">
                    <ul class="header-ui__list">
                        <?php foreach($header_ui_items as $item) :
                            $link = $item['link'];
                            $style = $item['style'];
                            ?>
                            <li class="header-ui__list-item">
                                <a href="<?= $link['url'] ?>"
                                   class="header-ui__list-link <?= $style == 'btn' ? $style : 'btn ' . $style ?>"
                                >
                                    <?= $link['title'] ?>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>
            <button class="header__menu-btn" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/></svg>
            </button>
        </div>
    </header><!-- #masthead -->
    <div class="header-mobile">
        <div class="header-mobile__top">
            <span>Menu</span>
            <button class="header-mobile__close-btn" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="121.31px" height="122.876px" viewBox="0 0 121.31 122.876" enable-background="new 0 0 121.31 122.876" xml:space="preserve"><g><path fill-rule="evenodd" clip-rule="evenodd" d="M90.914,5.296c6.927-7.034,18.188-7.065,25.154-0.068 c6.961,6.995,6.991,18.369,0.068,25.397L85.743,61.452l30.425,30.855c6.866,6.978,6.773,18.28-0.208,25.247 c-6.983,6.964-18.21,6.946-25.074-0.031L60.669,86.881L30.395,117.58c-6.927,7.034-18.188,7.065-25.154,0.068 c-6.961-6.995-6.992-18.369-0.068-25.397l30.393-30.827L5.142,30.568c-6.867-6.978-6.773-18.28,0.208-25.247 c6.983-6.963,18.21-6.946,25.074,0.031l30.217,30.643L90.914,5.296L90.914,5.296z"></path></g></svg>
            </button>
        </div>
        <div class="header-mobile__body">
            <nav class="header-mobile__nav">
                <?php
                wp_nav_menu([
                    'theme_location' => 'header-mobile_menu',
                    'menu' => 'Header Menu',
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => 'header-mobile__menu',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => '',
                ]);
                ?>
            </nav>
        </div>
        <div class="header-mobile__footer">
            <ul class="header-mobile__list">
                <?php foreach($header_ui_items as $item) :
                    $link = $item['link'];
                    $style = $item['style'];
                    ?>
                    <li class="header-mobile__list-item">
                        <a href="<?= $link['url'] ?>"
                           class="header-mobile__list-link <?= $style == 'btn' ? $style : 'btn ' . $style ?>"
                        >
                            <?= $link['title'] ?>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>