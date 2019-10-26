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
					<a href="#">Contact US</a>
				</div>
			</div>
		</div>

	</div>

			 <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"></div>
      <div class="swiper-slide"><img src="images/1.png" ></div>
       <div class="swiper-slide"><img src="images/1.png" ></div>
      <div class="swiper-slide"><img src="images/1.png" ></div>
       <div class="swiper-slide"><img src="images/1.png" ></div>
       <div class="swiper-slide"><img src="images/1.png" ></div>
        <div class="swiper-slide"><img src="images/1.png" ></div>

</div>
