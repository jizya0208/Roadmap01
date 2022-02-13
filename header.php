<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
　  <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>

<body>
    <header class="l-header">
        <div class="l-header__wrapper">
            <h1 class="l-header__logo"><a href="/">Nakaji portfoliO</a></h1>
        </div>
        <nav class="global-nav">
            <ul> 
                <li><a href="/">HOME</a></li>
                <li><a href="/works">WORKS</a></li>
                <li><a href="/about">ABOUT</a></li>
                <li><a href="/skill">SKILL</a></li>
                <li><a href="/service">SERVICE</a></li>
                <li><a href="/contact">CONTACT</a></li>
            </ul>
        </nav>
    </header>
    