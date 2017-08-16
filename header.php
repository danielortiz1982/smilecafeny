<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="wrapper">
            <header class="site-header">
                <div class="contentBox">
                    <div class="row">
                        <div class="col-md-6">
                            <figure class="header_logo"><div class="logo"><a href="/Smile_Cafe/website/"><img src="<?php echo get_template_directory_uri(); ?>/images/BV_Boilerplate_Logo.png"></a></div></figure>
                        </div>

                        <div class="col-md-6">
                            <div class="header-contact">
                                <p>45 PARK AVE UNIT 1</p>
                                <p>NEW YORK, NY 10016</p>
                                <p>(212) 779-3494</p>
                                <p><a href="mailto:">info@smilecafeny.com</a></p>
                                <p>
                                    <a href="http://www.zocdoc.com/practice/smile-cafe-4500" id="zocdoc_schedule" target="_blank">
                                    <img src="http://offsiteSchedule.zocdoc.com/images/remote/book-orange.png" style="border:0; width: 23%;"></a> 
                                    <script type="text/javascript" src="http://offsiteSchedule.zocdoc.com/remote/Schedule2.js.aspx?providerid=4500&amp;prefix=zocdoc_&amp;bookBtn=http://offsiteSchedule.zocdoc.com/images/remote/book-orange.png&amp;locationId="></script>
                                </p>

                            </div>
                            <!--header-contact-->
                        </div>
                    </div>
                </div>
            </header>
            <div class="navigation-box"><nav><?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'header-menu' ) ); ?></nav></div>
