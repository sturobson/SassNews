<?php snippet('header') ?>

<main class="main" role="main">

  <h1><?php echo $page->title()->html() ?></h1>

  <!-- Begin MailChimp Signup Form -->
  <div class="signup">
    <form action="//sassnews.us7.list-manage.com/subscribe/post?u=b4a4054cce715a3b0ae5e7d35&amp;id=f7c505323d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      <div id="signup_scroll">
        <div class="mc-field-group">
          <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
          </label>
          <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
        </div>
        <div class="mc-field-group">
          <label for="mce-FNAME">First Name </label>
          <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
        </div>
        <div class="mc-field-group">
          <label for="mce-LNAME">Last Name </label>
          <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
        </div>
        <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;"><input type="text" name="b_b4a4054cce715a3b0ae5e7d35_f7c505323d" tabindex="-1" value=""></div>
        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
      </div>
    </form>
  </div>
  <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
  <!--End mc_embed_signup-->

</main>

<?php snippet('footer') ?>
