<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-5">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-7">
				<div class="content_us">
					<h4>Looking for best planner for your wedding day?</h4>
				</div>
			</div>
			<div class="col-md-5 col-sm-5">
				<div class="contact_us">
					<a href="contact">Contact US</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Swiper -->
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<a href="#"><img id="my_image"  src="<?php bloginfo('template_directory')?>/images/5-1.png" ></a>
				<span class="overlay-v">
					<a href="<?php bloginfo('template_directory')?>/images/5-1.png" rel="lightbox[roadtrip]"><i></i></a>
				</span>
			</div>
			<div class="swiper-slide">
				<a href="#"><img id="my_image"  src="<?php bloginfo('template_directory')?>/images/5-2.png" ></a>
				<span class="overlay-v">
					
					<a href="<?php bloginfo('template_directory')?>/images/5-2.png" rel="lightbox[roadtrip]"><i></i></a>
				</span>
			</div>
			<div class="swiper-slide">
				<a href="#"><img id="my_image"  src="<?php bloginfo('template_directory')?>/images/5-3.png" ></a>
				<span class="overlay-v">
					
					<a href="<?php bloginfo('template_directory')?>/images/5-3.png" rel="lightbox[roadtrip]"><i></i></a>
				</span>
			</div>
			<div class="swiper-slide">
				<a href="#"><img id="my_image"  src="<?php bloginfo('template_directory')?>/images/5-4.png" ></a>
				<span class="overlay-v">
					
					<a href="<?php bloginfo('template_directory')?>/images/5-4.png" rel="lightbox[roadtrip]"><i></i></a>
				</span>
			</div>
			<div class="swiper-slide">
				<a href="#"><img id="my_image"  src="<?php bloginfo('template_directory')?>/images/5-5.png" ></a>
				<span class="overlay-v">
					
					<a href="<?php bloginfo('template_directory')?>/images/5-5.png" rel="lightbox[roadtrip]"><i></i></a>
				</span>
			</div>
			<div class="swiper-slide">
				<a href="#"><img id="my_image"  src="<?php bloginfo('template_directory')?>/images/5-6.png" ></a>
				<span class="overlay-v">
					
					<a href="<?php bloginfo('template_directory')?>/images/5-6.png" rel="lightbox[roadtrip]"><i></i></a>
				</span>
			</div>
		</div>
	</div>
</div>
