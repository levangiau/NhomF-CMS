<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-8">
	<section class="so2 paralax">
		<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>About</h2>
						<div class="gach"></div>
						<div class="s-space"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="so3">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-6 col-xm-12 col-xs-12 class1">
					<div class="iner">
						<div class="ten"></div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-xm-12 col-xs-12 class2">
					<div class="iner">
						<div class="tx-wraper">
							<div class="col">
								<div class="noidung">
									<h2 class="h2">Who We Are</h2>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
									<button>View Packages</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="so4">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-6 col-xm-12 col-xs-12 class2">
					<div class="iner">
						<div class="tx-wraper">
							<div class="col">
								<div class="noidung">
									<h2 class="h2">Our Venues</h2>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
									<button>Discover More</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-xm-12 col-xs-12 class1">
					<div class="iner">
						<div class="ten"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
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