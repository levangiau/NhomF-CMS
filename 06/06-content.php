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
        <div class="row">
            <div class="col-md-12">
                <div class="logotop">
                    <div class="logo">
                        <a href="#"><img src="../06/images/logo.png" alt="1"></a>                        
                    </div>                                    
                        <div class="cop">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                       <p> © Copyright 2017 - Lovus by OceanThemes</p>       
                                    </div>
                                </div>
                            </div>
                                              
                        </div>
                    </div>
                </div>
            </div>
    </div>
</footer>
