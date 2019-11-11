<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2">
	<section class="so2 paralax">
		<div class="container">
			<div class="row cot">
				<div class="col-md-12 col-sm-12 khung">
					<div class="inner">
						<div class="wrapper">
							<div class="s_space"></div>
							<div class="sigle_image">
								<img src="<?php bloginfo('template_directory')?>/images/2-logo2.png">
							</div>
							<div class="s_space"></div>
							<div class="text">
								<h2 class="h2">Serena laurie</h2>
								<h4 class="h4">Wedding Planner</h4>
									
									
								<div class="s2_space"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="vien">
					<div class="col-md-4 col-sm-12 khung1">
						<div class="coliner">
							<div class="chat-box">
								<i class="fa fa-commenting-o" aria-hidden="true"></i>
								<h4>Initial Consultation</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.	 
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 khung1">
						<div class="coliner">
							<div class="chat-box">
								<i class="fa fa-map-o" aria-hidden="true"></i>
								<h4>Wedding Venues</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.	
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 khung1">
						<div class="coliner">
							<div class="chat-box">
								<i class="fa fa-calendar" aria-hidden="true"></i>
								<h4>Full Wedding Management</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.	
									
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>