<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3">
	<div class="">
		<div class="row mg bg" style="background-size: cover;">
			<div class="col-md-4 col-sm-4 bg2">
				<div class="tieude">
					<h4>Sliver Package</h4>				
				</div>
				<div class="noidung">
					<p>Our commitment to quality and services ensure our clients happy. With years of experiences and continuing research, our team is ready to serve your interior design needs. We’re happy to make you feel more comfortable on your home.</p>
					<p><a class="btn btn-border" href="#">Read More</a></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 bg2">
				<div class="tieude">
					<h4>Gold Package</h4>				
				</div>
				<div class="noidung">
					<p>Our commitment to quality and services ensure our clients happy. With years of experiences and continuing research, our team is ready to serve your interior design needs. We’re happy to make you feel more comfortable on your home.</p>
					<p><a class="btn btn-border" href="#">Read More</a></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 bg2">
				<div class="tieude">
					<h4>Sliver Package</h4>				
				</div>
				<div class="noidung">
					<p>Our commitment to quality and services ensure our clients happy. With years of experiences and continuing research, our team is ready to serve your interior design needs. We’re happy to make you feel more comfortable on your home.</p>
					<p><a class="btn btn-border" href="#">Read More</a></p>
				</div>
			</div>
		</div>
		
	</div>
</div>
