<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<footer>
    <div class="type-06">
        <div class="logotop">
            <div class="logo">
                <a href="#"><img src="<?php bloginfo('template_directory')?>/images/6-logo.png" alt="1"></a>                        
            </div>                                    
            <div class="cop">
                <p> © Copyright 2017 - Lovus by OceanThemes</p>
            </div>
        </div>
    </div>

</footer>
