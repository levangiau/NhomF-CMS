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
    <div class="maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2135236372537!2d106.71920255003727!3d10.794951861766377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175290261c32643%3A0x496f4006b42b3b58!2sLandmark%2081%20skyview!5e0!3m2!1svi!2s!4v1572786436247!5m2!1svi!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
   <!--SERVICES-->
   <div class="row pd1">
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
          <div class="col-md-12 submit">
            <input type="submit" value="SUBMIT FORM" id="send_message" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="wpb_wrapper">
        <div class="content pd0">
          <h6>Address</h6>
          <p>Collins Street West,<br>Victoria 8007 Australia</p>
        </div>
        <div class="content">
          <h6>Call Us</h6>
          <p>(208) 333 9296</p>
        </div>
        <div class="content">
          <h6>Email Us</h6>
          <p>contact@lovus.com</p>
        </div>
      </div>
    </div>
  </div>
  <!--END SERVICES-->
</div>
</div>


