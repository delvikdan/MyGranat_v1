<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package granat
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer">
		<div class="site-info">
			<div class="f_social">
				<ul>
					<li><a target="blank" href="#"><img alt="Google Plus" src="<?php bloginfo("template_url"); ?>/img/social_gp.png"></a></li>
					<li><a target="blank" href="#"><img alt="Facebook" src="<?php bloginfo("template_url"); ?>/img/social_fb.png"></a></li>
					<li><a target="blank" href="#"><img alt="VK" src="<?php bloginfo("template_url"); ?>/img/social_vk.png"></a></li>
					<li><a target="blank" href="#"><img alt="Twitter" src="<?php bloginfo("template_url"); ?>/img/social_t.png"></a></li>
					<li><a target="blank" href="#"><img alt="LinkedIn" src="<?php bloginfo("template_url"); ?>/img/social_li.png"></a></li>
					<li><a target="blank" href="#"><img alt="Youtube" src="<?php bloginfo("template_url"); ?>/img/social_yt.png"></a></li>
					<li><a target="blank" href="#"><img alt="Instagram" src="<?php bloginfo("template_url"); ?>/img/social_in.png"></a></li>
				</ul>
			</div>		
			<div class="f_copyright">
			<p>© 2015 Веб студия <img src="<?php bloginfo("template_url"); ?>/img/granat_logo.png" title="" alt="Granat"></p>
			</div>
			
			<div class="f_contact">
			<a href="#"><img alt="Связаться с нами" src="<?php bloginfo("template_url"); ?>/img/contactus.png"> </a>
			</div>
		
		
		
		</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/custom.js'></script>


<?php if (is_page(9)) : ?>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/form.js'></script>
<?php endif;  ?>	
		
</body>
</html>
