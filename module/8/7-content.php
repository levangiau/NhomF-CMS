<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-8">
	<section class="so5">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 lon">
					<div class="lon1">
						<div class="chuaanh">
							<img src="image/1-1.jpg">
						</div>
						<h3>Ben Sheridan </h3>
						<span class="chucvu">Founder & CEO</span>
						<span class="gach"></span>
						<p>        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo. </p>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 lon">
					<div class="lon1">
						<div class="chuaanh">
							<img src="image/1-2.jpg">
						</div>
						<h3>Sophie Lana</h3>
						<span class="chucvu">Founder & CEO</span>
						<span class="gach"></span>
						<p>        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo. </p>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 lon">
					<div class="lon1">
						<div class="chuaanh">
							<img src="image/1-3.jpg">
						</div>
						<h3>James Hoult </h3>
						<span class="chucvu">Events Manager</span>
						<span class="gach"></span>
						<p>        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo. </p>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 lon">
					<div class="lon1">
						<div class="chuaanh">
							<img src="image/1-4.jpg">
						</div>
						<h3>Oscar Helman </h3>
						<span class="chucvu">Events Manager</span>
						<span class="gach"></span>
						<p>        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo. </p>
					</div>
				</div>

			</div>
		</div>
	</section>
</div>