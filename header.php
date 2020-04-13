<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <meta name="keywords" content="DC LAB, DC LABS">

    <meta name='robots' content='noindex,nofollow' />

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicons/favicon.png">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-180x180.png">

    <!--<script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-000000000-1']);
        _gaq.push(['_trackPageview']);
        _gaq.push(['_trackPageLoadTime']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header">
    <div class="header-top">
        <div class="container">
            <p>HEADER TOP</p>
        </div>
    </div>
       
    <div class="header-bottom">
        <div class="container">
            <div class="logo">
                <a href="<?php echo home_url(); ?>" title="<?php _e( 'Accueil', 'montheme' ); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/images/logo/logo.svg" alt="Digital-Campus" title="DC-LAB" class="header-logo" />
                </a>
            </div>

            <div class="header-menu">
            <?php $argsDesktopMenu = array(
                'theme_location' => "primary",
                'container' => 'div',
                'container'       => false,
                'container_id' => '',
                'container_class' => '', 
                'items_wrap' => '<ul class="navbar-menu">%3$s</ul>',
                );
                wp_nav_menu($argsDesktopMenu);
            ?>
            </div>
        </div>
    </div>
    
    </header>