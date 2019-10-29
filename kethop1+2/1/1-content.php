<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1">
	<header class="scroll">
		<div class="container con">
			<div class="row bao">
				<div class="col-md-12 cot">
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
					<nav>
						<ul class="nav">
							<li class="menu so1">
								<a href="#">Home</a>
								<ul class="sub-menu">
									<li class="menu-sub"><a href="#">Wedding Planner</a></li>
									<li class="menu-sub"><a href="#">Wedding Planner</a></li>
								</ul>
							</li>
							<li class="menu"><a href="#">Abouts</a></li>
							<li class="menu"><a href="#">Services</a></li>
							<li class="menu"><a href="#">Blog</a></li>
							<li class="menu"><a href="#">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
</div>