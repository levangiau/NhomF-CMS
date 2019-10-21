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
            <!--TITLE-->
                <div class="Text-title">
                    <div class="title">
                        <h2 class="content">
                           Services
                        </h2>
                        <div class="small-border"></div>
                    </div>
                </div>
                <!--END TITLE-->
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
                                        <a href="/" title="Child Friendly">Wedding Make Up</a>
                                    </h4>
                                    <div>
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
                                            <a href="/" title="Child Friendly">Wedding Venues</a>
                                        </h4>
                                        <div>
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
                                                <a href="/" title="Child Friendly">Wedding Decoration</a>
                                            </h4>
                                            <div>
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
                                                <a href="/" title="Child Friendly">Wedding Venues</a>
                                            </h4>
                                            <div>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <!--END SERVICES-->
                    </div>
                </div>


