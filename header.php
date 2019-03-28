<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Encodage de la page -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    
    <!-- Titre de la page -->
    <title><?php wp_title(); ?></title>

    <!-- Affichage mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Chargement de l'entete WP | OBLIGATOIRE -->
    <!-- Permet a Wordpress de placer les fichiers styles, scripts dans l'en-tete de mon theme -->
    <?php wp_head(); ?>
</head>
<body class="bg-light" <?php body_class(); ?>>

    <div class="container">
        <!-- tagline -->
        <p class="tagline mt-4 font-weignt-bold border-bottom pb-4">
            <em style="color: rgb(1, 50, 82); font-size:15px;">
                <?php bloginfo('name'); ?> : <?php bloginfo('description'); ?>
            </em>
        </p>

        <!-- topheader -->
        <div class="topheader">
            <p class="text-right py-2 mt-4">Espace Clients: &nbsp; 
                <button href="<?= wp_login_url(); ?>" class="btn mr-3">Sign In</button> 
                <button href="<?= wp_registration_url(); ?>" class="btn mr-4">Sign Up</button>
            </p>
        </div>

        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <span class="navbar-brand">
                    <?php 
                        if (has_custom_logo()) {
                            echo the_custom_logo(); 
                        } else { ?>
                            <img src="<?= get_template_directory_uri(); ?>/assets/image/logo.png" alt="Logo">
                    <?php } ?>  
                </span>

                <button class="navbar-toggler justify-content-end" type="button" data-toggle="collapse"
                    data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-uppercase justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
                    </div><!-- navbar-nav -->
                </div><!-- navbar-collapse -->
            </nav>
        </header>
    </div><!-- container -->

    <!-- projector -->
    <div class="container-fluid p-0">
        <?php if ( has_header_image() ) { ?>
            <img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>">

        <?php } else { ?>

            <img class="my-3 projector" src="<?= get_template_directory_uri(); ?>/assets/image/computer-1343393_1280.jpg" alt="<?php bloginfo('name'); ?>">

        <?php } ?>
    </div><!-- container-fluid -->

    