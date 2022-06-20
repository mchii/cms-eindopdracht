<header>
    <section class="container header">
        <div class="row no-gutters">
            <div class="col-12 header">
                <!-- BEGIN NAVBAR -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="<?php echo home_url() ?>"><?php bloginfo('name'); ?>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'mijn_custom_menu',
                            'menu_class' => 'navbar-nav'
                        )
                    );
                    ?>
                </nav>
                <!-- EINDE NAVBAR -->
                <img src=<?php bloginfo('template_url'); ?>/imgs/couple-exercising2.jpg class='img-fluid img-fit' alt="Couple exercising">
                <div class="header-text">
                    <h1>Fitness in a can</h1>
                    <h3>Yes you can</h3>
                </div>
            </div>
        </div>
    </section>
</header>