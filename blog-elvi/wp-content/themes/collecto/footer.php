<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package collecto
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container-wrapper container" role="contentinfo">
    	<div class="footer-widget-holder container container-medium">
        	<!-- Desktop & Laptop footer --> 
			<div class="row col-xs-12 foot-desk">
            	<div class="footer-branding col-xs-9">
                	<?php if (has_custom_logo()) {
                		the_custom_logo();
						}
                	?>
                    <br /><br />
                    <ul class="neavigation-footer-ul">
                      <li class="nav-footer-li"><a href="https://www.elvi.com/clothing/new-in">New In</a></li>
                      <li class="nav-footer-li"><a href="https://www.elvi.com/clothing">Clothing</a></li>
                      <li class="nav-footer-li"><a href="https://www.elvi.com/trends">Trends</a></li>
                      <li class="nav-footer-li"><a href="https://www.elvi.com/blog">Blog</a></li>
                      <li class="nav-footer-li"><a href="https://www.elvi.com/outlet">Outlet</a></li>
                    </ul>
                    <br />
                    <p>Head over to <a href="https://www.elvi.com">Elvi</a> and shop like you have never shopped before</p>
            	</div>
                <div class="footer-branding foot-border col-xs-3">
                	<p class="foot-para">Follow us and keep</p>
                    <p class="foot-para">following because i have</p>
                    <p class="foot-para" style="margin-bottom:20px !important;">to add random text here.</p>
                    <a href="https://www.facebook.com/ELVIclothing/?fref=ts&ref=br_tf" target="_blank" class="social-ic-foot">
                        <span class="fa fa-facebook"></span>
                    </a>
                    <a href="https://twitter.com/ELVIClothing" target="_blank" class="social-ic-foot">
                        <span class="fa fa-twitter"></span>
                    </a>
                    <a href="https://plus.google.com/+ElviCoUk/posts" target="_blank" class="social-ic-foot">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.instagram.com/elviclothing/" target="_blank" class="social-ic-foot">
                        <span class="fa fa-instagram"></span>
                    </a>
                    <a href="https://www.pinterest.com/elviuk/" target="_blank" class="social-ic-foot">
                        <span class="fa fa-pinterest"></span>
                    </a>
                    <a href="https://www.youtube.com/user/ElviUK" target="_blank" class="social-ic-foot">
                      <i class="fa fa-youtube-play" aria-hidden="true"></i>
                    </a>
            	</div>
    		</div>
            <!-- Desktop and Laptop Footer End -->
            <!-- Mobile footer view  -->
            <div class="row foot-mobile">
            	<div class="footer-branding">
                	<?php if (has_custom_logo()) {
                		the_custom_logo();
						}
                	?>
                    <br />
                    <ul class="neavigation-footer-ul">
                    	<li class="nav-footer-li"><a href="https://www.elvi.co.uk/clothing-c1/new-arrivals-c26" class="social-ic-foot">New In</a></li>
                        <li class="nav-footer-li"><a href="https://www.elvi.co.uk/clothing-c1" class="social-ic-foot">Clothing</a></li>
                        <li class="nav-footer-li"><a href="https://www.elvi.co.uk/edits-i167" class="social-ic-foot">Campaign</a></li>
                        <li class="nav-footer-li"><a href="https://www.elvi.co.uk/blog" class="social-ic-foot">Blog</a></li>
                        <li class="nav-footer-li"><a href="https://www.elvi.co.uk/clothing-c1/summer-sale-up-to-70-off-c162" class="social-ic-foot">Sale</a></li>
                    </ul>
                    <br />
                    <p>Follow us and keep following because i have to add random text here.</p>
                    <br />
                    <div class="footer-branding">
                        <a href="https://www.facebook.com/ELVIclothing/?fref=ts&ref=br_tf" target="_blank" class="social-ic-foot">
                            <span class="fa fa-facebook"></span>
                        </a>
                        <a href="https://twitter.com/ELVIClothing" target="_blank" class="social-ic-foot">
                            <span class="fa fa-twitter"></span>
                        </a>
                        <a href="https://plus.google.com/+ElviCoUk/posts" target="_blank" class="social-ic-foot">
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/elviclothing/" target="_blank" class="social-ic-foot">
                            <span class="fa fa-instagram"></span>
                        </a>
                        <a href="https://www.pinterest.com/elviuk/" target="_blank" class="social-ic-foot">
                            <span class="fa fa-pinterest"></span>
                        </a>
                        <a href="https://www.youtube.com/user/ElviUK" target="_blank" class="social-ic-foot">
                          <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        </a>
                    </div>
                    <br />
                    <p>Head over to <a href="https://www.elvi.com/">Elvi</a> and shop like you have never shopped before</p>
            	</div>
    		</div>
            <!-- End Mobile footer view -->
            
		</div>
    
    
		<?php /*?><?php

		if ( is_active_sidebar( 'sidebar-2' ) or is_active_sidebar( 'sidebar-3' ) ) { ?>

			<div class="footer-widget-holder container container-medium">
				<div class="row">
					<?php collecto_footer_widgets(); ?>
					<div class="footer-branding col-xs-12 col-sm-12 col-md-2">
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					</div>
				</div>
			</div>

		<?php

		} ?>

		<div class="footer-bottom-line container container-medium">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'collecto' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'collecto' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'collecto' ), 'collecto', '<a href="https://themeskingdom.com" rel="designer">Themes Kingdom</a>' ); ?>
			</div><!-- .site-info -->

			<?php collecto_footer_menu() ?>
		</div><?php */?>
	</footer><!-- #colophon -->
</div><!-- #page -->
<span class="black-overlay"></span>
<?php wp_footer(); ?>
<script>
$("._2p3a").removeAttr("style").attr("style","width:auto");
//$("._2p3a").removeAttr("style");
</script>

</body>
</html>
