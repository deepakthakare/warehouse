<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package collecto
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--[if IE]><html class="ie"><![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/collecto/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/collecto/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script>
$("._2p3a").removeAttr("style").attr("style","width:auto");
//$("._2p3a").removeAttr("style");
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-22453350-1', 'auto');
  ga('send', 'pageview');
</script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'collecto' ); ?></a>
    
    <header id="masthead" class="site-header" role="banner">
    <div class="col-12 header-nlogo">
   
    <div class="primary-side theme-side col-md-6"><?php if (has_custom_logo()) {
                the_custom_logo(); }
                ?></div>
    
    </div>
    <div class="col-md-12 header-main">
       
    	<div class="site-branding col-md-3">
			<?php if (has_custom_logo()) {
                //the_custom_logo();
                ?>
            <div class="site-information">
                <?php
            };
                if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
                endif;

                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                <?php
                endif; ?>
            <?php if (has_custom_logo()) { ?>
            </div>
            <?php }; ?>
        </div>
        <div class="primary-side theme-side col-md-6">
        	<?php /*?><?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?><?php */?>
            <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
        
			<?php /*?><?php if ( is_active_sidebar('sidebar-1') ) : ?>
                <div class="sidebar-button">
                    <button class="sidebar-toggle">
                        <span class="screen-reader-text"><?php esc_html_e( 'toggle open/close sidebar', 'collecto' ); ?></span>
                        <i class="icon-sidebar"></i>
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="sidebar-hide-scroll">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>
    
            <div class="main-navigation-center clear">
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <p class="open-menu"><?php esc_html_e( 'Menu', 'collecto' ); ?></p>
                        <p class="close-menu"><i class="icon-close"></i><?php esc_html_e( 'Close', 'collecto' ); ?></p>
                    </button>
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
                </nav><!-- #site-navigation -->
            </div><?php */?>
       	
      		</div>
            <div class="site-social col-md-3">
                <a href="https://www.facebook.com/ELVIclothing/?fref=ts&ref=br_tf" target="_blank" class="social-ic">
                    <span class="fa fa-facebook"></span>
                </a>
                <a href="https://twitter.com/ELVIClothing" target="_blank" class="social-ic">
                    <span class="fa fa-twitter"></span>
                </a>
                <a href="https://plus.google.com/+ElviCoUk/posts" target="_blank" class="social-ic">
                  <!--  <span class="fa fa-google-plus"></span>-->
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/elviclothing/" target="_blank" class="social-ic">
                    <span class="fa fa-instagram"></span>
                </a>
                <a href="https://www.pinterest.com/elviuk/" target="_blank" class="social-ic">
                    <span class="fa fa-pinterest"></span>
                </a>
                <!--<i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-pinterest" aria-hidden="true"></i>
                <i class="fa fa-google-plus" aria-hidden="true"></i>-->
                <a href="https://www.youtube.com/user/ElviUK" target="_blank" class="social-ic">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
                <a href="#" class="">
                	<button class="big-search-trigger">
                	<span class="screen-reader-text"><?php esc_html_e( 'open search form', 'collecto' ); ?></span>
                  	<i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    <button class="big-search-close">
                        <span class="screen-reader-text"><?php esc_html_e( 'close search form', 'collecto' ); ?></span>
                       <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </a>
                
                    <!--<div class="search-button">
                        <button class="big-search-trigger">
                                <span class="screen-reader-text"><?php //esc_html_e( 'open search form', 'collecto' ); ?></span>
                            <i class="icon-search"></i>
                        </button>
                        <button class="big-search-close">
                            <span class="screen-reader-text"><?php //esc_html_e( 'close search form', 'collecto' ); ?></span>
                            <i class="icon-close"></i>
                        </button>
                    </div>-->
                
        	</div>
    	</div>
        
         <div class="col-xs-12 header-mob">
        	
            <div class="primary-side theme-side col-xs-3">
            	<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
      		</div>
    		<div class="site-branding col-xs-6">
				<?php if (has_custom_logo()) {
                    the_custom_logo();
                    ?>
                <div class="site-information">
                    <?php
                };
                    if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php
                    endif;
    
                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>
                        <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                    <?php
                    endif; ?>
                <?php if (has_custom_logo()) { ?>
                </div>
                <?php }; ?>
        	</div>
            <div class="site-social col-xs-3">
                <a href="#" class="">
                	<button class="big-search-trigger">
                	<span class="screen-reader-text"><?php esc_html_e( 'open search form', 'collecto' ); ?></span>
                  	<i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    <button class="big-search-close">
                        <span class="screen-reader-text"><?php esc_html_e( 'close search form', 'collecto' ); ?></span>
                       <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </a>
        	</div>
    	</div>
    
        
        
        
        
        
        
    
    </header>
    
    			<aside class="secondary-side theme-side" style="float:right;">
                	<div class="search-wrap">
                        <?php
                       /* printf( '<div class="search-instructions">%1$s</div>',
                            esc_html__( 'Enter Keyword and Press Return to Search', 'collecto' )
                        );*/
            
                        get_search_form();
                        ?>
                    </div>
               	</aside>
                <?php /*?><aside class="secondary-side theme-side" style="float:right;">
                    <div class="search-wrap">
                        <?php
                        printf( '<div class="search-instructions">%1$s</div>',
                            esc_html__( 'Enter Keyword and Press Return to Search', 'collecto' )
                        );
            
                        get_search_form();
                        ?>
                    </div>
                    <div class="search-button">
                        <button class="big-search-trigger">
                                <span class="screen-reader-text"><?php esc_html_e( 'open search form', 'collecto' ); ?></span>
                            <i class="icon-search"></i>
                        </button>
                        <button class="big-search-close">
                            <span class="screen-reader-text"><?php esc_html_e( 'close search form', 'collecto' ); ?></span>
                            <i class="icon-close"></i>
                        </button>
                    </div>
                </aside><?php */?>
         	

	<div id="content" class="site-content">
