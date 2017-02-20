<!doctype html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>
        <?php wp_title( '«', true, 'right'); ?>
        <?php bloginfo( 'name'); ?>
    </title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="wrapper">
        <header>
            <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Whitesquare logo"></a>
        </header>
        <nav class="main-navigation">
            <?php wp_nav_menu( array(
                'menu_class'=>'menu-top',
                'theme_location'=>'top-menu'
            ) );
?>
        </nav>