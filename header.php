<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
　  <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta charset="UTF-8">
    <meta name="description" content="nakajiのポートフォリオサイトです" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/src/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
          <!-- OGPタグ/twitterカード -->
    <meta property="og:url" content="http://nk-portfolio.xyz/" />
    <meta property="og:title" content="なかじーのぽーとふぉりお" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="なかじーのポートフォリオサイトです" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/src/images/og-img.png" />
    <meta name="twitter:card" content="Summary Card" />
    <meta property="og:site_name" content="合人社グループ採用サイト" />
    <meta property="og:locale" content="ja_JP" />
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
                <li><a href="/#service">SERVICE</a></li>
                <li><a href="/contact">CONTACT</a></li>
            </ul>
        </nav>
    </header>
    