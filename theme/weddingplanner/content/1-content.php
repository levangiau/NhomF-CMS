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
			<div class="bao">
				<!-- 	<div class="col-md-8"> -->
				<!-- 	<nav class="navbar navbar-default nav" role="navigation">
						<div class="container-fluid">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

						</div>
					</nav> -->
					<!-- </div> -->

					<div id="logo">
						<a href="http://localhost:82/wordpress/">
							<img src="<?php bloginfo('template_directory')?>/images/1-logo1.png" alt="" class="logo1">
						</a>
						<a href="http://localhost:82/wordpress/">
							<img src="<?php bloginfo('template_directory')?>/images/1-logo2.png" alt="" class="logo2">
						</a>
					</div>
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<?php wp_nav_menu( array(
     				'theme_location' => 'main-nav', // tên location cần hiển thị
     				'container' => 'nav', // thẻ container của menu
     				'container_class' => 'main-nav', //class của container
     				'menu_class' => 'menu clearfix' // class của menu bên trong
     				) ); ?>


     			</div>
     		</div>
     	</div>
     </header>
     <!-- nav -->
 </div>





