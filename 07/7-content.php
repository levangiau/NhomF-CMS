<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-04">
    <div class="container">
     <!--SERVICES-->
     <div class="type-04_2">
        <div class="row">
            <div class="m4-services">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 content1">
                    <div class="m4-limit">
                        <div class="m4-limit-thumbnail">
                            <a href="/" class="has-border">
                                <img src="<?php echo $url_path ?>/images/anh1.jpg " alt="reponsive-img" class="size-full">  </a>
                            </div>
                            <h4 class="m4-limit-services-title">
                                <p>Wedding Make Up</p>
                            </h4>
                             <div class="service-content">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                            </div>
                        </div>
                    </div>
                </div>   
                <div class="m4-services">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 content1">
                        <div class="m4-limit">
                            <div class="m4-limit-thumbnail">
                                <a href="/"  class="has-border">
                                    <img src="<?php echo $url_path ?>/images/anh2.jpg" alt="reponsive-img" class="size-full"> </a>
                                </div>
                                <h4 class="m4-limit-services-title">
                                   <p>Wedding Venues</p>
                               </h4>
                                <div class="service-content">
                                   <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                               </div>
                           </div>
                       </div>
                   </div>   
                   <div class="m4-services">
                    <div class=" col-lg-3 col-md-4 col-sm-6 col-xs-12 content1">
                        <div class="m4-limit">
                            <div class="m4-limit-thumbnail">
                                <a href="/" Tea" class="has-border">
                                    <img src="<?php echo $url_path ?>/images/anh3.jpg" alt="reponsive-img"  class="size-full"> </a>
                                </div>
                                <h4 class="m4-limit-services-title">
                                   <p>Wedding Decoration</p>
                               </h4>
                               <div class="service-content">
                                   <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                               </div>
                           </div>
                       </div>
                   </div>   
                   <div class="m4-services">
                    <div class=" col-lg-3 col-md-4 col-sm-6 col-xs-12 content1">
                        <div class="m4-limit">
                            <div class="m4-limit-thumbnail">
                                <a href="/" Tea" class="has-border">
                                    <img src="<?php echo $url_path ?>/images/anh4.jpg" alt="reponsive-img" class="size-full">
                                </a>
                            </div>
                            <h4 class="m4-limit-services-title">
                               <p>Wedding Cars</p>
                           </h4>
                            <div class="service-content">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
    <!--END SERVICES-->
</div>
<div class="type-06">
    <div class="row">
        <div class="col-md-12">
            <div class="logotop">
                <div class="logo">
                    <a href="#"><img src="../07/images/logo.png" alt="1"></a>                        
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
</div>


