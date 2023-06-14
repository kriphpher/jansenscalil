<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="publisher" content="Kryzalis Sites - kryzalis.com.br" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="wp-content/themes/jansenscalil/assets/imgs/ic-main.png">
    <?php wp_head(); ?>
</head>
<body class="pg-home">
    <section id="Home" class="part1-header">
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <?php if(function_exists('the_custom_logo')){$custom_logo_id=get_theme_mod('custom_logo'); $logo_main=wp_get_attachment_image_src($custom_logo_id);}?>
                        <img src="<?php echo $logo_main[0] ?>" alt="logo-img" class="logo" height="auto">
                    </div>
                    <div class="col-4 offset-8">
                        <img src="wp-content/themes/jansenscalil/assets/imgs/ic-ph.png" alt="phone-img" class="phone"> <span class="phone2">22 3033-9492</span>
                    </div>
                </div>
                <?php wp_nav_menu(array('menu'=>'primary', 'container'=>'', 'theme_location'=>'primary', 'items_wrap'=>'<ul id="" class="nav__links text-end">%3$s</ul>')); ?>
            </div>
        </header>
    </section>