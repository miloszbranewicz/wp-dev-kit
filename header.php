<!doctype html>
<html lang="<?php echo get_bloginfo('language') ?>">

<head>
    <meta charset="<?php echo get_bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&family=Jost:wght@400;600&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<?php
$logo = get_field('logo', 'option');
$email = get_field('adres_email', 'option');
$facebook = get_field('link_do_facebooka', 'option');
$instagram = get_field('link_do_instagrama', 'option');
$phone = get_field('telefon_kontaktowy', 'option');
?>

<body <?php body_class();  ?>>
    <?php wp_body_open();  ?>
    <header class='header'>
        <div class="header__content">
            <div class='page-logo'>
                <a href='<?php echo get_home_url() ?>'>
                    <img class='page-logo__img' src="<?php echo $logo['url'] ?>" width='<?php echo $logo['width'] ?>' height='<?php echo $logo['height'] ?>' alt="<?php echo $logo['alt'] ?>">
                </a>
            </div>

            <?php wp_nav_menu(array('theme_location' => 'max_mega_menu_1')); ?>

            <div class='header-socials'>
                <a class='header-socials__item' href="tel:<?php echo $phone ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/telefon.svg" alt='phone-icon'>
                    <span class='header-socials__phone-number'><?php echo $phone ?></span>
                </a>
                <a class='header-socials__item' href='<?php echo $instagram ?>'>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt='instagram-icon'>
                </a>
                <a class='header-socials__item' href='<?php echo $facebook ?>'>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt='facebook-icon'>
                </a>
            </div>
        </div>
    </header>