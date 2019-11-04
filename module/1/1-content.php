<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1">
	<img src="image/hinhnen.jpg">
	<header class="scroll">
		<div class="container con">
			<div class="row bao">
				<div class="col-md-12 cot">
					<nav class="navbar navbar-default nav" role="navigation">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<div id="logo">
									<h1>
										<a href="#">
											<img src="../1/image/logo1.png" alt="" class="logo1">
										</a>
										<a href="#">
											<img src="../1/image/logo2.png" alt="" class="logo2">
										</a>
									</h1>
								</div>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-ex1-collapse">
								<ul class="nav navbar-nav navbar-right">
									<li class="item">
										<a href="#" class="item1">Home 
									<span class="up"><i class="fa fa-angle-up" aria-hidden="true"></i></span>
									<span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
										<!--  -->
										<ul class="aaa">
											<li class="aaa1"><a href="#" class="aaa11">Wedding Planer</a></li>
										</ul>
									</li>
									
									<li><a href="#">Abouts</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- nav -->

</div>