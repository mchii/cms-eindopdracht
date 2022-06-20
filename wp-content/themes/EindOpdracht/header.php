<head>
    <title>Wildvecht</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>

<body>

    <div id="container">
        <div id="header_logo">
            <img src="<?php bloginfo('template_url'); ?>/imgs/logo.png" id="logo" />
        </div>

        <div id="header_image">
            <img src="<?php bloginfo('template_url'); ?>/imgs/header_img.jpg" />
        </div>

        <div id="menu">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'mijn_custom_menu',
                    'menu_class' => 'navbar-nav'
                )
            );
            ?>
        </div>