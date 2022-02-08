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
    <header>
        <h1 class="header-logo">Nakaji portfoliO</h1>
        <nav>
            <ul> 
                <li><a>HOME</a></li>
                <li><a>WORKS</a></li>
                <li><a>ABOUT</a></li>
                <li><a>SKILL</a></li>
                <li><a>SERVICE</a></li>
                <li><a>CONTACT</a></li>
            </ul>
            <?php
			// wp_nav_menu(
			// 	array(
			// 		'theme_location' => 'menu-1',
			// 		'menu_id'        => 'primary-menu',
			// 	)
			// );
			?>
        </nav>

    </header>