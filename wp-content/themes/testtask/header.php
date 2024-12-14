<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php wp_head(); ?>
    <head>
        <title><?php bloginfo('name'); ?> <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <!-- Matomo Tag Manager -->
        <script>
        var _mtm = window._mtm = window._mtm || [];
        _mtm.push({'mtm.startTime': (new Date().getTime()), 'event': 'mtm.Start'});
        (function() {
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.async=true; g.src='http://localhost:8080/js/container_K9OLZKik.js'; s.parentNode.insertBefore(g,s);
        })();
        </script>
        <!-- End Matomo Tag Manager -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="container-fluid m-hide">
            <h1>
                <a href="https://hackmotion.com/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo.png" alt="Site Logo" height="32px">
                </a>
            </h1>
        </header>
        <main class="container-fluid">
