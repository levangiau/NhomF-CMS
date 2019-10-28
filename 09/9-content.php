<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-9">
  <div class="container">
   <!--SERVICES-->
   <div class="row">
    <div class="col-md-8 col-sm-12">
      <div class="contact-form">
        <div class="row">
          <div class="col-md-6">
            <div class="field-set">
              <input type="text" name="your-name" value="" size="40" class="a" aria-required="true" aria-invalid="false" placeholder="Your Name" />
            </div>
            <div class="field-set">
              <input type="text" name="your-name" value="" size="40" class="a" aria-required="true" aria-invalid="false" placeholder="Your Email" />
            </div>
            <div class="field-set">
              <input type="text" name="your-name" value="" size="40" class="a" aria-required="true" aria-invalid="false" placeholder="Your Phone" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="field-text">
              <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Your Message"></textarea>
            </div>
          </div>
          <div class="spacer-singer"></div>
          <div class="col-md-12">
            <input type="submit" value="btn-custom" id="send_message" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="wpb_text_column wpb_content_element " >
        <div class="wpb_wrapper">
          <h6 class="id-color">Address</h6>
          <h4>Collins Street West,<br/>
          Victoria 8007 Australia</h4>
          <div class="spacer-single"></div>
          <h6 class="id-color">Call Us</h6>
          <h4>(208) 333 9296</h4>
          <div class="spacer-single"></div>
          <h6 class="id-color">Email Us</h6>
          <h4>contact@lovus.com</h4>

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


