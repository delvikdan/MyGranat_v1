<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
		<div class="slide_container">
			<div class="slide slide1 active">
				<div id="slideText1" class="slideText">
					<p>Далеко-далеко за словесными горами </p>
					<img alt="GRANAT" src="<?php bloginfo("template_url"); ?>/img/sl_text.png">
					<a id="watchVideo"><img alt="Watch the video" src="<?php bloginfo("template_url"); ?>/img/play.png">Подробнее</a>
				</div>
				<video id="homeVideo1" class="homeVideo" poster="<?php bloginfo("template_url"); ?>/img/loading.jpg" controls="" style="width:100%;">
					<source src="<?php bloginfo("template_url"); ?>/video/NycTrafficH264.mp4"></source>	
				</video>
			</div>
			
			<div class="slide slide2">
				<div id="slideText2" class="slideText">
					<p>Материальный дизайн Google</p>
					<img alt="GRANAT" src="<?php bloginfo("template_url"); ?>/img/sl_text.png">
					<a id="watchVideo2"><img alt="Watch the video" src="<?php bloginfo("template_url"); ?>/img/play.png">Посмотреть видео</a>
				</div>

				<video id="homeVideo2" class="homeVideo" poster="<?php bloginfo("template_url"); ?>/img/loading.jpg" controls="" style="width:100%;">
					<source src="<?php bloginfo("template_url"); ?>/video/material_design.mp4"></source>	
				</video>

			</div>

			<div class="navDotContainer">
				<div data-id="1" id="navDot1" class="navDot active"></div>
				<div data-id="2" id="navDot2" class="navDot"></div>
			</div>
			
					<div class="closeButtonMobile">
			<div class="closeButton"><img alt="close" src="<?php bloginfo("template_url"); ?>/img/icon-close.png" /></div>
			<div class="closeButton2"><img alt="close" src="<?php bloginfo("template_url"); ?>/img/icon-close.png" /></div>
		</div>
		</div>
		

			
		
		<article class="MPdescription">
		
			<div class="MPdescription_inner">
				<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>
			
			<?php endwhile; // end of the loop. ?>
				<a class="MPmore" href="#"><img src="<?php bloginfo("template_url"); ?>/img/play.png" alt="Watch the video"> Узнать подробнее</a>
			</div>
			
		</article>
		<section class="MPservices">
			<div class="MPservices_inner">
				<ul>
					<li>
						<a href="#" class="MPicon siteIcon">
							<img alt="Сайты" src="<?php bloginfo("template_url"); ?>/img/mp_site.png"/>
						</a>
						<h3><a href="#">Сайты</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
					</li>
					<li>
						<a href="#" class="MPicon designIcon">
							<img alt="Дизайн" src="<?php bloginfo("template_url"); ?>/img/mp_design.png">
						</a>
						<h3><a href="#">Дизайн</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
					</li>
					<li>
						<a href="#" class="MPicon developIcon">
							<img alt="Разработка" src="<?php bloginfo("template_url"); ?>/img/mp_develop.png"/>
						</a>
						<h3><a href="#">Разработка</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
					</li>
					<li>
						<a href="#" class="MPicon supportIcon">
							<img alt="Поддержка" src="<?php bloginfo("template_url"); ?>/img/mp_support.png" />
						</a>
						<h3><a href="#">Поддержка</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
					</li>
					<li>
						<a href="#" class="MPicon mediaIcon">
							<img alt="Медиа" src="<?php bloginfo("template_url"); ?>/img/mp_media.png">
						</a>
						<h3><a href="#">Медиа</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
					</li>
					<li>
						<a href="#" class="MPicon contentIcon">
							<img alt="Контент" src="<?php bloginfo("template_url"); ?>/img/mp_content.png">
						</a>
						<h3><a href="#">Контент</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
					</li>
					<li>
						<a href="#" class="MPicon auditIcon">
							<img alt="Аудит" src="<?php bloginfo("template_url"); ?>/img/mp_audit.png">
						</a>
						<h3><a href="#">Аудит</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
					</li>
					<li>
						<a href="#" class="MPicon otherIcon">
							<img alt="Другое" src="<?php bloginfo("template_url"); ?>/img/mp_other.png">
						</a>
						<h3><a href="#">Другое</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
					</li>
																																							
					
				</ul>
			</div>
		</section>
		
	</div><!-- #primary -->

<?php // get_sidebar(); ?>



<?php get_footer(); ?>
